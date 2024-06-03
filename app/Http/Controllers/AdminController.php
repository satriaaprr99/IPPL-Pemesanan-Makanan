<?php

namespace App\Http\Controllers;

use App\Models\ContentLanding;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function pesananMasuk(){
        return view('admin.pesananMasuk');
    }
    
    public function rekapPesanan(){
        return view('admin.rekapPesanan');
    }

    public function monitoring(){
        return view('admin.monitoring');
    }

    public function pesanMasuk(){
        return view('admin.pesanMasuk');
    }

    public function editlandingpage(){
        $data = ContentLanding::first();
        if(!$data){
            $data = new ContentLanding;
            $data->title_s1 = "Gurih asal Bandung.";
            $data->caption_s1 = "Who Needs a Boyfriend if there Pizza And WiFi are both available.";
            $data->bg_slider_1 = url("../landing/demos/restaurant/images/slider/1.jpg");
            $data->title_s2 = "Make your Chocolate.";
            $data->caption_s2 = "You'll be surprised to see the Final Results of your<br>Creation &amp; would crave for more.";
            $data->bg_slider_2 = "../landing/demos/restaurant/images/slider/3.jpg";
            $data->title_s3 = "Hello &amp; Welcome.";
            $data->caption_s3 = "Coffee drinkers make better Lovers. Everything starts with a great Coffee.";
            $data->bg_slider_3 = "../landing/demos/restaurant/images/slider/2.jpg";
            $data->bg_section_1 = "../landing/demos/restaurant/images/sections/4.jpg";
            $data->title1 = "Bagaimana Kami Bekerja";
            $data->gambar1_t1 = "landing/demos/restaurant/images/icons/bowl.svg";
            $data->judul1_t1 = "Makanan tersaji Panas";
            $data->content1_t1 = "Sangat penting bagi pelanggan untuk memperhatikan hal ini.";
            $data->gambar2_t1 = "landing/demos/restaurant/images/icons/spoon.svg";
            $data->judul2_t1 = "Menu yang Beragam";
            $data->content2_t1 = "Datang kesini tidak akan membuat andab bosan, dikarenakan restoran ini menyediakan banyak menu.";
            $data->gambar3_t1 = "landing/demos/restaurant/images/icons/glass.svg";
            $data->judul3_t1 = "In-House Brewery";
            $data->content3_t1 = "Velit id facilis odit aliquid laudantium. Tempore, sequi. Harum nesciunt, magni aperiam est?";
            $data->bg_section_2 = "../landing/demos/restaurant/images/sections/5.jpg";
            $data->title2 = "Sehat &amp; Lezat";
            $data->subtitle2 = "Our Food Menu";
            $data->gambar1_t3 = "landing/demos/restaurant/images/featured/1.jpg";
            $data->judul1_t3 = "Lokasi yang Strategis.";
            $data->subtitle1_t3 = "Makanan terasa lezat apabila disertai dengan Pemandangan yang Indah.";
            $data->caption1_t3 = "Restoran mana lagi yang memiliki pemandangan indah seperti Restoran Kami? Tunggu apalagi";
            $data->gambar2_t3 = "landing/demos/restaurant/images/featured/2.jpg";
            $data->judul2_t3 = "Aneka Rasa Nikmat.";
            $data->subtitle2_t3 = "Makanan yang lezat membuat suasana yang ramai.";
            $data->caption2_t3 = "Porro repellat vero sapiente amet vitae quibusdam necessitatibus consectetur, labore totam. Accusamus perspiciatis asperiores labore esse.";
            $data->gambar3_t3 = "landing/demos/restaurant/images/featured/3.jpg";
            $data->judul3_t3 = "Dessert yang Lezat.";
            $data->subtitle3_t3 = "Hal terindah didalam hidup adalah makanan manis.";
            $data->caption3_t3 = "Quos, non, esse eligendi ab accusantium voluptatem. Maxime eligendi beatae, atque tempora ullam. Vitae delectus quia, consequuntur rerum quo. , labore totam. Accusamus perspiciatis asperiores.";
            $data->bg_section_4 = "../landing/demos/restaurant/images/sections/4.jpg";
            $data->title4 = "Sweet &amp; Sexy";
            $data->subtitle4 = "Our Dessert Menu";
            $data->caption_f_1 = "795 Folsom Ave, Suite 600";
            $data->caption_f_2 = "San Francisco, CA 94107";
            $data->caption_f_3 = "Sun - Thu | 07:00 - 23:00 Hours";
            $data->caption_f_4 = "Fri - Sat | 08:00 - 01:00 Hours";
        }
        // return response()->json($data);
        return view('admin.editlandingpage', compact('data'));
    }

    public function daftarWaiters(){
        return view('admin.daftarWaiters');
    }
}
