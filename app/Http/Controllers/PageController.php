<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }

    public function about() {
        return 'Nama: Arjuna Satria Hutama<br>NIM: 244107020158';
    }

    public function articles($id) {
        return 'Halaman Artikel dengan ID '.$id;
    }
}
