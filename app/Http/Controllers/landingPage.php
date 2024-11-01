<?php

namespace App\Http\Controllers;

use App\Models\MenuGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class landingPage extends Controller
{
    public function index(){

        $contact = DB::table('contacts')->get();
        $menuGallery = DB::table('menu_galleries')->get();
        // $data = Paket::all();
        // $menuPeriode = MenuPeriode::all();

        return view('page.home',[
            'title' => 'Beranda - Catering Box 3 Putri',
            'contact' => $contact,
            'menuGallery' => $menuGallery,
            // 'data' => $data,
            // 'menuPeriode' => $menuPeriode,
        ]);
    }

    public function about(){
        return view('page.about',[
            'title' => 'Tentang Kami - Catering Box 3 Putri',
        ]);
    }
}
