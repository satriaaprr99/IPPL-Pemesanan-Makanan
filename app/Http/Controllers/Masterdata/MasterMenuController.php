<?php

namespace App\Http\Controllers\Masterdata;

use App\Models\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;

class MasterMenuController extends Controller
{
    
    public function list(Request $request){
        $data = Menu::select('menu.*', 'masterdata_jenis_menu.jenis_menu')->join('masterdata_jenis_menu', 'masterdata_jenis_menu.id', 'menu.jenis_menu_id');
        return datatables()->of($data)->addIndexColumn()
        ->addColumn('aksi', function($row){
            $btn = "";
            return $btn;
        })
        ->toJson();
    }
    public function storeUpdate(Request $request){
        try{
            $data = Menu::find($request->id);
            if(!$data){
                $data = new Menu;
            }
            $data->nama_menu = $request->nama_menu;
            $data->deskripsi = $request->deskripsi;
            $data->harga = $request->harga;
            $data->jenis_menu_id = $request->jenis_menu_id;
            $data->save();

            return redirect()->back()->with('success', 'data berhasil ditambahkan');
        }catch(\Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    public function delete($id){
        $id = Crypt::decrypt($id);
        $data = Menu::find($id);

        if($data->delete()){
            return redirect()->back()->with('success', 'data berhasil dihapus');
        }else{
            return redirect()->back()->with('error', "gagal menghapus data");
        }
    }
}
