<?php

namespace App\Http\Controllers;

use Cookie;
use App\Models\Menu;
use App\Models\Pesanan;
use App\Models\Waiters;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\DetailPesanan;
use App\Models\StatusWaiters;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use App\Models\Masterdata\DaftarMeja;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;

class PesananController extends Controller
{
    public function addPesananToChart(Request $request, $id_menu){
        $id_menu = Crypt::decrypt($id_menu);
        $id_meja = $request->cookie('table_session');
        if($id_meja == null){
            return response()->json(["status" => 'warning', 'data'=>"Silahkan scan QR code yang ada pada meja anda terlebih dahulu"], 400);
        }
        session()->push('table_order_'.$id_meja,$id_menu);
        return response()->json(["status" => 'success', 'data'=>count(session()->get('table_order_'.$id_meja))]);
    }
    public function modifyPesanan(Request $request, $id_menu){
        $id_menu = Crypt::decrypt($id_menu);
        $action = $request->action;
        $no_meja = $request->cookie('table_session');
        $orderList = session()->get('table_order_'.$no_meja) ?? [];
        switch ($action) {
            case 'tambah':
                array_push($orderList, $id_menu);
            break;
            case 'kurang':
                $index = array_search($id_menu, $orderList);
                if($index !== false){
                    unset($orderList[$index]);
                    $orderList = array_values($orderList);
                }
            break;
            case 'hapus':
                foreach ($orderList as $key=>$value) {
                    if($value == $id_menu){
                        unset($orderList[$key]);
                    }
                }
                $orderList = array_values($orderList);
            break;
        }
        session()->put('table_order_'.$no_meja, $orderList);
        $data = array_count_values($orderList);
        $pesanan = [];
        foreach($data as $key=>$item){
            array_push($pesanan, ["id_menu" => $key, "jumlah"=>$item]);
        }
        $list_id_menu = array_column($pesanan, 'id_menu');
        $data_keranjang = Menu::whereIn('id', $list_id_menu)->get();
        foreach ($data_keranjang as $value) {
            $value->crypted_id = Crypt::encrypt($value->id);
            $value->foto_menu = Storage::url($value->foto_menu);
            foreach ($pesanan as $itemPesanan) {
                if($value->id == $itemPesanan['id_menu']){
                    $value->jumlah_order = $itemPesanan['jumlah'];
                }
            }
        }
        return response()->json(["status"=>"success", "data" => $data_keranjang]);
    }
    public function checkoutPesanan(Request $request){
        $id_meja = $request->cookie('table_session');
        $pesanan = null;
        DB::beginTransaction();
        try{
            if($id_meja){
                $no_meja = DaftarMeja::findOrFail($id_meja)->no_meja;
                $kode = $no_meja . '/' . $request->nama_pemesan . '/' . Str::random(5);
                $pesanan = new Pesanan;
                $pesanan->meja_id = $id_meja;
                $pesanan->nama_pemesan = $request->nama_pemesan;
                $pesanan->status = 'Diorder';
                $pesanan->total_pembayaran = $request->total_pembayaran;
                $pesanan->jenis_pembayaran_id = $request->id_pembayaran;
                if($request->no_telp){
                    $pesanan->no_telp = $request->no_telp;
                }
                $pesanan->kode_pesanan = $kode; 
                $pesanan->save();
                $detail_pesanan = array_count_values(session()->get('table_order_'.$id_meja) ?? []);
                foreach ($detail_pesanan as $key => $item) {
                    $detailPesanan = new DetailPesanan;
                    $detailPesanan->pesanan_id = $pesanan->id;
                    $detailPesanan->menu_id = $key;
                    $detailPesanan->qty = $item;
                    $detailPesanan->total_harga = Menu::find($key)->harga * $item;
                    $detailPesanan->save();
                }
            }else{
                return redirect()->back()->with('error', "Silahkan scan QR code yang ada pada meja anda terlebih dahulu");
            }
            DB::commit();
            $request->session()->forget('table_order_'.$id_meja);
            $request->session()->push('my_order_'.$id_meja, @$pesanan->id);
            return redirect()->back()->with('success', 'Pesanan berhasil dibuat, ini kode pemesanan anda '.$kode);
        }catch(\Exception $e){
            DB::rollback();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    public function listPesananMasuk(Request $request){
        $data = Pesanan::select("pesanan.id", "nama_pemesan", "m_meja.no_meja", "m_jenis_pembayaran.jenis_pembayaran", "pesanan.status", "kode_pesanan","total_pembayaran")
        ->join('masterdata_daftar_meja as m_meja', 'm_meja.id', 'pesanan.meja_id')
        ->join('masterdata_jenis_pembayaran as m_jenis_pembayaran', 'm_jenis_pembayaran.id', 'pesanan.jenis_pembayaran_id')
        ->whereNotIn('pesanan.status', ['Selesai'])
        ->orderBy('id', 'asc');
        return datatables()->of($data)->addIndexColumn()
        ->addColumn('aksi', function($row){
            $btn = '<button class="btn btn-sm btn-info text-white" onclick=detailPesanan('.$row->id.')>Detail</button>';
            return $btn;
        })->rawColumns(['aksi'])
        ->toJson();
    }

    public function detailPesanan($id_pesanan){
        $data = Pesanan::select("pesanan.id", "nama_pemesan", "m_meja.no_meja", "m_jenis_pembayaran.jenis_pembayaran", "pesanan.status", "kode_pesanan","total_pembayaran")
        ->join('masterdata_daftar_meja as m_meja', 'm_meja.id', 'pesanan.meja_id')
        ->join('masterdata_jenis_pembayaran as m_jenis_pembayaran', 'm_jenis_pembayaran.id', 'pesanan.jenis_pembayaran_id')
        ->where('pesanan.id', $id_pesanan)->first();
        $data->detail = DetailPesanan::select('masterdata_jenis_menu.jenis_menu','menu.nama_menu', 'detail_pesanan.qty', 'menu.harga as harga_satuan')
            ->join('menu', 'detail_pesanan.menu_id', 'menu.id')
            ->join('masterdata_jenis_menu', 'menu.jenis_menu_id', 'masterdata_jenis_menu.id')
            ->where('pesanan_id', $id_pesanan)->get();
        return response()->json($data);
    }

    public function listRekapPesanan(Request $request){
        $data = Pesanan::select("pesanan.id", "nama_pemesan", "m_meja.no_meja", "m_jenis_pembayaran.jenis_pembayaran", "pesanan.status", "kode_pesanan","total_pembayaran")
        ->join('masterdata_daftar_meja as m_meja', 'm_meja.id', 'pesanan.meja_id')
        ->join('masterdata_jenis_pembayaran as m_jenis_pembayaran', 'm_jenis_pembayaran.id', 'pesanan.jenis_pembayaran_id');
        
        if($request->status){
            $data->where('pesanan.status', $request->status);
        }
        // $data->where('pesanan.status' , '=','Selesai');

        return datatables()->of($data)->addIndexColumn()
        ->addColumn('aksi', function($row){
            $detail = DetailPesanan::select('masterdata_jenis_menu.jenis_menu','menu.nama_menu', 'menu.foto_menu', 'detail_pesanan.qty', 'menu.harga as harga_satuan')
            ->join('menu', 'detail_pesanan.menu_id', 'menu.id')
            ->join('masterdata_jenis_menu', 'menu.jenis_menu_id', 'masterdata_jenis_menu.id')
            ->where('pesanan_id', $row->id)->get();
            $row->detail = $detail;
            $btn = '<button class="btn btn-sm btn-info text-white" onclick=detailPesanan('.$row->id.')>Detail</button>';
            return $btn;
        })->rawColumns(['aksi'])
        ->toJson();
    }

    public function updateStatusPesanan(Request $request){
        DB::beginTransaction();
        try{
            $data = Pesanan::findOrFail($request->id_pesanan);
            $data->status = $request->status;
            $data->update();
            if($request->status == 'Diantar'){
                $waiters = Waiters::get();
                $is_found = 0;
                $i = 0;
                while($is_found == 0 && $i < count($waiters)){
                    if(@$waiters[$i]->recent_status->status == 'Confirmed' || $waiters[$i]->recent_status == null){
                        $waiters = $waiters[$i];
                        $is_found = 1;
                    }
                    $i++;
                }
                if($is_found == 1){
                    $status = new StatusWaiters;
                    $status->id_waiters = $waiters->id;
                    $status->id_pesanan = $request->id_pesanan;
                    $status->status = "Busy";
                    $status->save();
                }else{
                    return redirect()->back()->with('warning', 'Mohon coba sebentar lagi semua waiters sedang mengantar makanan');
                }
            }
            DB::commit();
        }catch(\Exception $e){
            DB::rollback();
            return redirect()->back()->with('error', $e->getMessage());
        }


        return redirect()->back()->with('success', 'Pesanan dengan kode '.$data->kode_pesanan." ".$request->status);
    }

    public function cetakStruk(Request $request, $id_pesanan){
        $data = Pesanan::select("pesanan.id", "pesanan.created_at","nama_pemesan", "m_meja.no_meja", "m_jenis_pembayaran.jenis_pembayaran", "pesanan.status", "kode_pesanan","total_pembayaran")
        ->join('masterdata_daftar_meja as m_meja', 'm_meja.id', 'pesanan.meja_id')
        ->join('masterdata_jenis_pembayaran as m_jenis_pembayaran', 'm_jenis_pembayaran.id', 'pesanan.jenis_pembayaran_id')
        ->where('pesanan.id', $id_pesanan)->first();
        $detail = DetailPesanan::select('masterdata_jenis_menu.jenis_menu','menu.nama_menu', 'menu.foto_menu', 'detail_pesanan.qty', 'menu.harga as harga_satuan')
            ->join('menu', 'detail_pesanan.menu_id', 'menu.id')
            ->join('masterdata_jenis_menu', 'menu.jenis_menu_id', 'masterdata_jenis_menu.id')
            ->where('pesanan_id', $id_pesanan)->get();
        $customPaper = array(0,0,300.80,430.00);
        $pdf = Pdf::loadView('admin.struk', compact('data', 'detail'));
        $pdf->setPaper($customPaper, "portrait");
        return $pdf->stream();
    }
}
