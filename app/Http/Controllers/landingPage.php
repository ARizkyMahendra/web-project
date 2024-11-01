<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class landingPage extends Controller
{
    public function index(){

        // $data = DB::table('contacts')->all();
       
        return view('page.home',[
            'title' => 'Beranda - Catering Box 3 Putri',
            // 'data' => $data,
        ]);
    }
}
