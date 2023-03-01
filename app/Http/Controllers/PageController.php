<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }

    public function about(){
        return '2141720243 / Muhamad Farrel R';
    }

    public function articles($id){
        return 'Halaman artikel dengan id ' .$id;
    }
}
