<?php

namespace App\Http\Controllers;

use DateTime;
use Carbon\Carbon;
use App\Models\Menu;
use App\Models\Contact;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use App\Models\StatusWaiters;
use App\Models\Masterdata\JenisMenu;

class DashboardController extends Controller
{
    public function index(){
        $menuFavorit = JenisMenu::get();

        foreach ($menuFavorit as $key=>$item) {
            $menu_info = Menu::selectRaw("foto_menu,nama_menu,harga, (SELECT COUNT(*) FROM detail_pesanan WHERE menu_id = menu.id) as jumlah_pesanan")
            ->where('jenis_menu_id', $item->id)
            ->having('jumlah_pesanan', '>', 0)
            ->orderBy('jumlah_pesanan', 'asc')->first();

            if(!$menu_info){
                unset($menuFavorit[$key]);
            }else{
                $item->menu_info = $menu_info;
            }
        }
        $menuFavorit = array_values($menuFavorit->toArray());
        // return response()->json($menuFavorit);
        $counterKeunangan = Pesanan::whereMonth('created_at', date('m'))->sum('total_pembayaran');
        $counterPesanan = Pesanan::whereMonth('created_at', date('m'))->count();
        $counterPesan = Contact::count();
        return view('admin.dashboard', compact('menuFavorit', 'counterKeunangan', 'counterPesanan', 'counterPesan'));
    }

    public function chartPesananMasuk(Request $request){
        $chartValue = [];
        for ($i=0; $i < 12 ; $i++) { 
            $chartValue[$i] = ["bulan" => Carbon::parse(DateTime::createFromFormat('!m', $i+1))->translatedFormat('F'), "total" => Pesanan::whereMonth('created_at', $i+1)->count()];
        }
        return response()->json($chartValue);
    }

    public function taskWaiters(Request $request){
        $data = StatusWaiters::select('waiters.nama_lengkap', 'pesanan.kode_pesanan as no_pesanan', 'b.no_meja', 'pesanan.nama_pemesan', 'c.jenis_pembayaran')
        ->join('waiters', 'waiters.id', 'status_waiters.id_waiters')
        ->join('pesanan', 'pesanan.id', 'status_waiters.id_pesanan')
        ->join('masterdata_daftar_meja as b', 'b.id', 'pesanan.meja_id')
        ->join('masterdata_jenis_pembayaran as c', 'c.id', 'pesanan.jenis_pembayaran_id')
        ->where('status_waiters.status', 'Busy')->get();
        // return response()->json($data);

        return datatables()->of($data)->addIndexColumn()->toJson();
    }
}
