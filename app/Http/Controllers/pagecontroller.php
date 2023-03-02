<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagecontroller extends Controller
{
    public function index() {
        return 'Selamat Datang';
        }
    public function about() {
        return "214172042, Iddam anbiya haqi";
        }
    public function articles($id) {
        return "Halaman Artikel dengan Id " .$id;
        }
}
