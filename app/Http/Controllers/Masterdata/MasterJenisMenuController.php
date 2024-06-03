<?php

namespace App\Http\Controllers\Masterdata;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Masterdata\JenisMenu;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;

class MasterJenisMenuController extends Controller
{
    public function listJenisMenu(Request $request){
        $data = JenisMenu::query();

        return datatables()->of($data)->addIndexColumn()
        ->addColumn('aksi', function($row){
            $btn = "<button class='btn btn-sm btn-warning fw-bold text-white' type='button' onclick=\"edit('".Crypt::encrypt($row->id)."', '".$row->jenis_menu."')\">Edit</button>";
            $btnDelete = "<button class='btn btn-sm btn-danger fw-bold text-white ms-3' type='button' onclick=\"deleteData('".Crypt::encrypt($row->id)."')\">Hapus</button>";
            return $btn . $btnDelete;
        })->rawColumns(['aksi'])
        ->toJson();
    }
    public function storeUpdateJenisMenu(Request $request){
        try{
            $validator = Validator::make($request->all(), [
                'jenis_menu' => 'required|max:255'
            ]);
            if ($validator->fails()) {
                return redirect()->back()->with('error', $validator->messages()->get('*'));
            }
            $data = new JenisMenu;
            $message = 'disimpan';
            if($request->id){
                $data = JenisMenu::find(Crypt::decrypt($request->id));
                $message = 'diperbaharui';
            }
            $data->jenis_menu = $request->jenis_menu;
            $data->save();

            return redirect()->back()->with('success', 'data berhasil '.$message);
            // return response()->json("success");
        }catch(\Exception $e){
            // return response()->json($e->getMessage());
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    public function deleteJenisMenu($id){
        $id = Crypt::decrypt($id);
        $data = JenisMenu::find($id);

        if($data->delete()){
            return redirect()->back()->with('success', 'data berhasil dihapus');
        }else{
            return redirect()->back()->with('error', "gagal menghapus data");
        }
    }
}
