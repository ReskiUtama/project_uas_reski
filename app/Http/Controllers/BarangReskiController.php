<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangReskiController extends Controller
{
    public function index() {
        {
    $BarangReski = DB::table('table_t_barang_reski')
    ->join('kategori_reski_tabel', 'kategori_reski_tabel.id', 'table_t_barang_reski.kategoriid_reski')
    ->get();
    return view('barangreski/barangreski', ['data' => $BarangReski]);
        }
    }
    public function add(){
        return view('barangreski/add');
     }
}        