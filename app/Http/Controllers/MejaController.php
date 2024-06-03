<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Masterdata\DaftarMeja;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Cookie;

class MejaController extends Controller
{
    public function setSessionMeja(Request $request, $id){
        try{
            $id = Crypt::decrypt($id);
        }catch(\Exception $e){
            return redirect('/')->with('error', 'Permintaan anda tidak valid');
        }
        $id_meja = $request->cookie('table_session');
        $request->session()->forget('table_order_'.$id_meja);
        $request->session()->flush();
        Cookie::queue(Cookie::forget('table_session'));
        $meja = DaftarMeja::find($id);
        Cookie::queue('table_session', $id, 40);
        return redirect('/')->with('success', 'Selamat datang, meja anda nomor '.$meja->no_meja.' silahkan lakukan pemesanan, enjoy...');

    }
    public function generateMejaCode(Request $request, $id, $time){
        $id = Crypt::decrypt($id);
        $token = Crypt::decrypt($time);
        $requestTime = Carbon::parse($token)->format('Y-m-d H:i');
        if(Carbon::now()->diffInMinutes($requestTime) > 1){
            return redirect()->back()->with('error', 'Tidak dapat melakukan pesanan, hak akses kadaluarsa');
        }else{
            return redirect()->back()->with('success', 'Sesi meja didapatkan');
        }
    }
}
