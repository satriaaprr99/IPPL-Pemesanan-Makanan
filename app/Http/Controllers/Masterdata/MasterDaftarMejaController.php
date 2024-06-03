<?php

namespace App\Http\Controllers\Masterdata;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Masterdata\DaftarMeja;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class MasterDaftarMejaController extends Controller
{
    public function indexDaftarMeja(Request $request){
        return view('admin.daftarMeja');
    }
    public function listDaftarMeja(Request $request){
        $data = DaftarMeja::query();
        return datatables()->of($data)->addIndexColumn()
        ->addColumn('qr_code', function($row){
            $url = QrCode::size(150)->generate(ENV('APP_URL_PUBLISHED').'/book-table/'.Crypt::encrypt($row->id));
            return $url;
        })
        ->addColumn('aksi', function($row){
            $btn = "<button class='btn btn-sm btn-warning fw-bold text-white' type='button' onclick=\"edit('".Crypt::encrypt($row->id)."', '".$row->no_meja."')\">Edit</button>";
            $btnDelete = "<button class='btn btn-sm btn-danger fw-bold text-white mx-2' type='button' onclick=\"deleteData('".Crypt::encrypt($row->id)."')\">Hapus</button>";
            $btnbook = "<a class='btn btn-sm btn-info text-white' href='".url('/book-table', ['id' => Crypt::encrypt($row->id)])."'>Book</a>";
            return $btn . $btnDelete. $btnbook;
        })->rawColumns(['aksi'])
        ->toJson();
    }
    public function storeUpdateDaftarMeja(Request $request){
        try{
            $validator = Validator::make($request->all(), [
                'no_meja' => 'required|max:255'
            ]);
            if ($validator->fails()) {
                return redirect()->back()->with('error', $validator->messages()->get('*'));
            }
            $data = new DaftarMeja;
            $message = 'disimpan';
            if($request->id){
                $data = DaftarMeja::find(Crypt::decrypt($request->id));
                $message = 'diperbaharui';
            }
            $data->no_meja = $request->no_meja;
            $data->status = 'Dipakai';
            $data->save();

            return redirect()->back()->with('success', 'data berhasil '.$message);
        }catch(\Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    public function deleteDaftarMeja($id){
        $id = Crypt::decrypt($id);
        $data = DaftarMeja::find($id);

        if($data->delete()){
            return redirect()->back()->with('success', 'data berhasil dihapus');
        }else{
            return redirect()->back()->with('error', "gagal menghapus data");
        }
    }
}
