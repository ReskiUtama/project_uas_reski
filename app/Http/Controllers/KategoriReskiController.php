<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriReskiController extends Controller
{
    public function index()
    {

        $KategoriReski = DB::table('kategori_reski_tabel')->get();

        return view('kategorireski', ['KategoriReski' => $KategoriReski]);
    }
}
