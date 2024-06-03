<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Contact;
use App\Models\ContentLanding;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use App\Models\DetailPesanan;
use App\Models\Masterdata\JenisMenu;
use App\Models\Masterdata\DaftarMeja;
use App\Models\Masterdata\JenisPembayaran;

class LandingController extends Controller
{
    public function index(){
        $data = ContentLanding::first();
        return view('landing', compact('data'));
    }

    public function menu(Request $request){
        $jenisMenu = JenisMenu::get();
        $id_meja = $request->cookie('table_session');
        $myOrder = count(session()->get('table_order_'.$id_meja) ?? []);
        foreach ($jenisMenu as $key => $value) {
            $value->menu = Menu::where('jenis_menu_id', $value->id)->get();
        }
        return view('menu', compact('jenisMenu', 'myOrder'));
    }

    public function gallery(){
        return view('gallery');
    }

    public function blog(){
        return view('blog');
    }

    public function contact(){
        return view('contact');
    }

    public function sendMessage(Request $request){
        $data = new Contact;
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->pesan = $request->pesan;
        $data->save();

        return redirect()->back()->with('success', 'Terkirim! <br> Terimakasih atas pesan, kritik ataupun saran anda');
    }

    public function pesanan(Request $request){
        $no_meja = $request->cookie('table_session');
        if($no_meja == null){
            return redirect('/')->with('warning', 'Silahkan scan QR code yang ada pada meja anda terlebih dahulu');
        }
        $data = array_count_values(session()->get('table_order_'.$no_meja) ?? []);
        $pesanan = [];
        foreach($data as $key=>$item){
            array_push($pesanan, ["id_menu" => $key, "jumlah"=>$item]);
        }
        $list_id_menu = array_column($pesanan, 'id_menu');
        $data_keranjang = Menu::whereIn('id', $list_id_menu)->get();
        foreach ($data_keranjang as $value) {
            foreach ($pesanan as $itemPesanan) {
                if($value->id == $itemPesanan['id_menu']){
                    $value->jumlah_order = $itemPesanan['jumlah'];
                }
            }
        }
        $history = [];
        $myOrderList = session()->get('my_order_'.$no_meja) ?? [];
        if(count($myOrderList) > 0){
            $history = Pesanan::select("pesanan.id", "nama_pemesan", "m_meja.no_meja", "m_jenis_pembayaran.jenis_pembayaran", "pesanan.status", "kode_pesanan","total_pembayaran")
            ->join('masterdata_daftar_meja as m_meja', 'm_meja.id', 'pesanan.meja_id')
            ->join('masterdata_jenis_pembayaran as m_jenis_pembayaran', 'm_jenis_pembayaran.id', 'pesanan.jenis_pembayaran_id')
            ->whereIn('pesanan.id', $myOrderList)->get();
            foreach ($history as $item) {
                $item->detail = DetailPesanan::select('masterdata_jenis_menu.jenis_menu','menu.nama_menu', 'detail_pesanan.qty', 'menu.harga as harga_satuan')
                    ->join('menu', 'detail_pesanan.menu_id', 'menu.id')
                    ->join('masterdata_jenis_menu', 'menu.jenis_menu_id', 'masterdata_jenis_menu.id')
                    ->where('pesanan_id', $item->id)->get();
            }
        }
        $no_meja = DaftarMeja::where('id', $no_meja)->first()->no_meja;
        $jenis_pembayaran = JenisPembayaran::get();
        // return response()->json($history);
        return view('pesanan', compact('data_keranjang', 'jenis_pembayaran', 'no_meja', 'history'));
    }
}
