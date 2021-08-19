<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index(){
        $nama = 'Awang';
        return view('index', compact('nama'));
    }
    public function about(){
        $nama = 'Awang';
        return view('about', compact('nama'));
    }
}
