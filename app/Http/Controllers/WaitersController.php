<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Waiters;
use Illuminate\Http\Request;
use App\Models\StatusWaiters;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class WaitersController extends Controller
{
    public function monitoring(){
        $data = Waiters::select("nama_lengkap", "status_waiters.status", "total_pembayaran", "masterdata_jenis_pembayaran.jenis_pembayaran", 'pesanan.kode_pesanan', 'status_waiters.id as id_status_waiters')
        ->join('status_waiters', 'waiters.id', 'status_waiters.id_waiters')
        ->join('pesanan', 'pesanan.id', 'status_waiters.id_pesanan')
        ->join('masterdata_jenis_pembayaran', 'pesanan.jenis_pembayaran_id', 'masterdata_jenis_pembayaran.id')
        ->orderBy('status_waiters.status', 'asc')->get();
        return datatables()->of($data)->addIndexColumn()
        ->addColumn('aksi', function($row){
            $btn = "<button class='btn btn-sm btn-success' onclick='confirmPesanan($row->id_status_waiters)'>Confirm</button>";
            if($row->status != 'Busy'){
                $btn= '';
            }
            return $btn;
        })->rawColumns(['aksi'])
        ->toJson();
    }
    public function daftarWaitersAjax(){
        $data = Waiters::query();

        return datatables()->of($data)->addIndexColumn()
        ->addColumn('aksi', function($row){
            $btn = "<button class='btn btn-sm btn-warning fw-bold text-white' type='button' onclick=\"edit('".Crypt::encrypt($row->id)."')\">Edit</button>";
            $btnDelete = "<button class='btn btn-sm btn-danger fw-bold text-white ms-3' type='button' onclick=\"deleteData('".Crypt::encrypt($row->id)."')\">Hapus</button>";
            return $btn . $btnDelete;
        })
        ->rawColumns(['aksi'])
        ->toJson();
    }
    public function showDetail($id){
        try{
            $data = Waiters::find(Crypt::decrypt($id));
            if($data){
                return response()->json(["status" => 'success', 'data' => $data]);
            }else{
                return response()->json(["status" => 'error', 'data' => "Data tidak ditemukan"]);
            }
        }catch(\Exception $e){
            return response()->json(["status" => 'error', 'data' => $e->getMessage()]);
        }
    }
    public function storeUpdate(Request $request){
        try{
            $rules = [
                "nik" => 'required',
                "nama_lengkap" => 'required',
                "no_telp" => "required",
            ];
            $validator = Validator::make($request->all(), $rules);
            if($validator->fails()){
                $messages = '<br>' . implode('<br>', $validator->messages()->all());
                return redirect()->back()->with('warning', 'Periksa data yang anda isi! ' . $messages);
            }
            $data = new Waiters;
            $message = "disimpan";
            if($request->id){
                $data = Waiters::find(Crypt::decrypt($request->id));
                $message = "diperbaharui";
            }
            $data->nik = $request->nik;
            $data->nama_lengkap = $request->nama_lengkap;
            $data->no_telp = $request->no_telp;
            $data->save();

            return redirect()->back()->with('success', 'data berhasil '.$message);
        }catch(\Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    public function delete($id){
        $id = Crypt::decrypt($id);
        $data = Waiters::find($id);

        if($data->delete()){
            return redirect()->back()->with('success', 'data berhasil dihapus');
        }else{
            return redirect()->back()->with('error', "gagal menghapus data");
        }
    }

    public function confirmWaiters($id_status_waiters){
        $status = StatusWaiters::findOrFail($id_status_waiters);
        $pesanan = Pesanan::findOrFail($status->id_pesanan);
        $pesanan->status = 'Selesai';
        $pesanan->update();
        $status->status = 'Confirmed';
        $status->update();

        return redirect()->back()->with('success', 'Status dikonfirmasi');
    }
}
