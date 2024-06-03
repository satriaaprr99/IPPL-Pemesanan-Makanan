<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Contact;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ContentLanding;
use App\Models\Masterdata\JenisMenu;
use App\Models\Masterdata\DaftarMeja;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class CmsController extends Controller
{
    public function indexMenu(){
        $jenis_menu = JenisMenu::get();
        return view('admin.daftarMenu', compact('jenis_menu'));
    }
    public function listMenu(Request $request){
        $data = Menu::select('menu.*', 'masterdata_jenis_menu.jenis_menu')
        ->join('masterdata_jenis_menu', 'masterdata_jenis_menu.id', 'menu.jenis_menu_id')->get();
        return datatables()->of($data)->addIndexColumn()
        ->addColumn('aksi', function($row){
            $btn = "<button class='btn btn-sm btn-warning fw-bold text-white' type='button' onclick=\"edit('".Crypt::encrypt($row->id)."')\">Edit</button>";
            $btnDelete = "<button class='btn btn-sm btn-danger fw-bold text-white ms-3' type='button' onclick=\"deleteData('".Crypt::encrypt($row->id)."')\">Hapus</button>";
            return $btn . $btnDelete;
        })->rawColumns(['aksi'])
        ->toJson();
    }
    public function showDetailMenu($id){
        try{
            $data = Menu::find(Crypt::decrypt($id));
            if($data){
                return response()->json(["status" => 'success', 'data' => $data]);
            }else{
                return response()->json(["status" => 'error', 'data' => "Data tidak ditemukan"]);
            }
        }catch(\Exception $e){
            return response()->json(["status" => 'error', 'data' => $e->getMessage()]);
        }
    }
    public function storeUpdateMenu(Request $request){
        try{
            $rules = [
                "nama_menu" => 'required',
                "deskripsi" => 'required',
                "harga" => "required",
                "jenis_menu_id" => "required|exists:masterdata_jenis_menu,id",
            ];
            if($request->id == null){
                $rules['foto_menu'] = 'required';
            }
            $validator = Validator::make($request->all(), $rules);
            if($validator->fails()){
                $messages = '<br>' . implode('<br>', $validator->messages()->all());
                return redirect()->back()->with('warning', 'Periksa data yang anda isi! ' . $messages);
            }
            $data = new Menu;
            $message = "disimpan";
            if($request->id){
                $data = Menu::find(Crypt::decrypt($request->id));
                $message = "diperbaharui";
            }
            $data->nama_menu = $request->nama_menu;
            $data->deskripsi = $request->deskripsi;
            $data->harga = $request->harga;
            $data->jenis_menu_id = $request->jenis_menu_id;
            if($request->hasFile('foto_menu')){
                $file = $request->file('foto_menu');
                $originalName = $file->getClientOriginalName();
                $filename = Str::random(8) .date('dmYhis') ."-". $originalName;
                $file->storeAs('foto_menu', $filename, "public");
                if($data->foto_menu != null){
                    Storage::disk('public')->delete($data->foto_menu);
                }
                $data->foto_menu = 'foto_menu/'.$filename;
            }
            $data->save();

            return redirect()->back()->with('success', 'data berhasil '.$message);
        }catch(\Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    public function deleteMenu($id){
        $id = Crypt::decrypt($id);
        $data = Menu::find($id);
        if($data->foto_menu != null){
            Storage::disk('public')->delete($data->foto_menu);
        }

        if($data->delete()){
            return redirect()->back()->with('success', 'data berhasil dihapus');
        }else{
            return redirect()->back()->with('error', "gagal menghapus data");
        }
    }
    public function indexJenisMenu(){
        return view('admin.jenisMenu');
    }

    public function listPesanMasuk(){
        $data = Contact::orderBy('id', 'desc');

        return datatables()->of($data)->addIndexColumn()->toJson();
    }

    public function storeUpdateLanding(Request $request){
        
        $data = new ContentLanding;
        if($request->id){
            $data = ContentLanding::find($request->id);
        }

        $data->title_s1 = $request->title_s1;
        $data->caption_s1 = $request->caption_s1;
        if($request->hasFile('bg_slider_1')){
            $file = $request->file('bg_slider_1');
            $originalExt = $file->getClientOriginalExtension();
            $filename = "imgSlider1-". '.' .$originalExt;
            $file->storeAs('bg_slider_1', $filename, "public");
            $data->bg_slider_1 = 'bg_slider_1/'.$filename;
        }

        $data->title_s2 = $request->title_s2;
        $data->caption_s2 = $request->caption_s2;
        if($request->hasFile('bg_slider_2')){
            $file = $request->file('bg_slider_2');
            $originalExt = $file->getClientOriginalExtension();
            $filename = "imgSlider2-". '.' .$originalExt;
            $file->storeAs('bg_slider_2', $filename, "public");
            $data->bg_slider_2 = 'bg_slider_2/'.$filename;
        }

        $data->title_s3 = $request->title_s3;
        $data->caption_s3 = $request->caption_s3;
        if($request->hasFile('bg_slider_3')){
            $file = $request->file('bg_slider_3');
            $originalExt = $file->getClientOriginalExtension();
            $filename = "imgSlider3-". '.' .$originalExt;
            $file->storeAs('bg_slider_3', $filename, "public");
            $data->bg_slider_3 = 'bg_slider_3/'.$filename;
        }

        if($request->hasFile('bg_section_1')){
            $file = $request->file('bg_section_1');
            $originalExt = $file->getClientOriginalExtension();
            $filename = "bgSection1-". '.' .$originalExt;
            $file->storeAs('bg_section_1', $filename, "public");
            $data->bg_section_1 = 'bg_section_1/'.$filename;
        }
        $data->title1 = $request->title1;
        if($request->hasFile('gambar1_t1')){
            $file = $request->file('gambar1_t1');
            $originalExt = $file->getClientOriginalExtension();
            $filename = "img1T1-". '.' .$originalExt;
            $file->storeAs('gambar1_t1', $filename, "public");
            $data->gambar1_t1 = 'gambar1_t1/'.$filename;
        }
        $data->judul1_t1 = $request->judul1_t1;
        $data->content1_t1 = $request->content1_t1;
        if($request->hasFile('gambar2_t1')){
            $file = $request->file('gambar2_t1');
            $originalExt = $file->getClientOriginalExtension();
            $filename = "img2T1-". '.' .$originalExt;
            $file->storeAs('gambar2_t1', $filename, "public");
            $data->gambar2_t1 = 'gambar2_t1/'.$filename;
        }
        $data->judul2_t1 = $request->judul2_t1;
        $data->content2_t1 = $request->content2_t1;
        if($request->hasFile('gambar3_t1')){
            $file = $request->file('gambar3_t1');
            $originalExt = $file->getClientOriginalExtension();
            $filename = "img3T1-". '.' .$originalExt;
            $file->storeAs('gambar3_t1', $filename, "public");
            $data->gambar3_t1 = 'gambar3_t1/'.$filename;
        }
        $data->judul3_t1 = $request->judul3_t1;
        $data->content3_t1 = $request->content3_t1;

        if($request->hasFile('bg_section_2')){
            $file = $request->file('bg_section_2');
            $originalExt = $file->getClientOriginalExtension();
            $filename = "bgSection2-". '.' .$originalExt;
            $file->storeAs('bg_section_2', $filename, "public");
            $data->bg_section_2 = 'bg_section_2/'.$filename;
        }
        $data->title2 = $request->title2;
        $data->subtitle2 = $request->subtitle2;

        if($request->hasFile('gambar1_t3')){
            $file = $request->file('gambar1_t3');
            $originalExt = $file->getClientOriginalExtension();
            $filename = "img1T3-". '.' .$originalExt;
            $file->storeAs('gambar1_t3', $filename, "public");
            $data->gambar1_t3 = 'gambar1_t3/'.$filename;
        }
        $data->judul1_t3 = $request->judul1_t3;
        $data->subtitle1_t3 = $request->subtitle1_t3;
        $data->caption1_t3 = $request->caption1_t3;
        if($request->hasFile('gambar2_t3')){
            $file = $request->file('gambar2_t3');
            $originalExt = $file->getClientOriginalExtension();
            $filename = "img2T3-". '.' .$originalExt;
            $file->storeAs('gambar2_t3', $filename, "public");
            $data->gambar2_t3 = 'gambar2_t3/'.$filename;
        }
        $data->judul2_t3 = $request->judul2_t3;
        $data->subtitle2_t3 = $request->subtitle2_t3;
        $data->caption2_t3 = $request->caption2_t3;
        if($request->hasFile('gambar3_t3')){
            $file = $request->file('gambar3_t3');
            $originalExt = $file->getClientOriginalExtension();
            $filename = "img3T3-". '.' .$originalExt;
            $file->storeAs('gambar3_t3', $filename, "public");
            $data->gambar3_t3 = 'gambar3_t3/'.$filename;
        }
        $data->judul3_t3 = $request->judul3_t3;
        $data->subtitle3_t3 = $request->subtitle3_t3;
        $data->caption3_t3 = $request->caption3_t3;

        if($request->hasFile('bg_section_4')){
            $file = $request->file('bg_section_4');
            $originalExt = $file->getClientOriginalExtension();
            $filename = "bgSection4-". '.' .$originalExt;
            $file->storeAs('bg_section_4', $filename, "public");
            $data->bg_section_4 = 'bg_section_4/'.$filename;
        }
        $data->title4 = $request->title4;
        $data->subtitle4 = $request->subtitle4;

        $data->caption_f_1 = $request->caption_f_1;
        $data->caption_f_2 = $request->caption_f_2;
        $data->caption_f_3 = $request->caption_f_3;
        $data->caption_f_4 = $request->caption_f_4;

        $data->save();

        return redirect()->back()->with('success', 'data berhasil disimpan');
    }
    
}
