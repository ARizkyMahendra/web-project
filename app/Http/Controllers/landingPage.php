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
        // $menuPeriode = MenuPeriode::all();

        return view('page.home',[
            'title' => 'Beranda - Catering Box 3 Putri',
            'contact' => $contact,
            'menuGallery' => $menuGallery,
            
            // 'menuPeriode' => $menuPeriode,
        ]);
    }

    public function about(){
        return view('page.about',[
            'title' => 'Tentang Kami - Catering Box 3 Putri',
        ]);
    }

    public function order(){
        return view('page.order',[
            'title' => 'Order - Catering Box 3 Putri',
        ]);
    }

    public function package(){
        $paket = DB::table('pakets')->get();
        return view('page.package',[
            'title' => 'Paket - Catering Box 3 Putri',
            'paket' => $paket,
        ]);
    }
    
    public function menuGallery(){
        $menuGallery = DB::table('menu_galleries')->get();
        return view('page.menu_gallery',[
            'title' => 'Menu Gallery - Catering Box 3 Putri',
            'menuGallery' => $menuGallery,
        ]);
    }

    public function jobList(){
        
        return view('page.job_list',[
            'title' => 'List lowongan - Catering Box 3 Putri',
            
        ]);
    }

    public function jobDetail(){
        
        return view('page.job_detail',[
            'title' => 'Detail Lowongan - Catering Box 3 Putri',
            
        ]);
    }

    public function contact(){
        $contact = DB::table('contacts')->get();
        return view('page.contact',[
            'title' => 'Kontak Kami - Catering Box 3 Putri',
            'contact' => $contact,
        ]);
    }

    public function testimonial(){
        // $contact = DB::table('contacts')->get();
        return view('page.testimonial',[
            'title' => 'Testimonial - Catering Box 3 Putri',
            // 'contact' => $contact,
        ]);
    }
}
