<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengeluaranReskiController extends Controller
{
    public function index() {
        

        $PengeluaranReski = DB::table('table_t_pengeluaranitem_reski')
        ->select('*')
        ->join('table_t_pengeluaran_reski', 'table_t_pengeluaran_reski.nobk_reski','table_t_pengeluaranitem_reski.nobk_reski')
        ->join('table_t_barang_reski', 'table_t_barang_reski.barangid_reski','=', 'table_t_pengeluaranitem_reski.barangid_reski')
        ->join('table_t_bagian_reski', 'table_t_bagian_reski.bagianid_reski','=', 'table_t_pengeluaran_reski.bagianid_reski')
        ->join('table_t_petugas_reski', 'table_t_petugas_reski.petugasid_reski','=', 'table_t_pengeluaran_reski.petugasid_reski')
        ->get();

            return view('pengeluaranreski', ['PengeluaranReski' => $PengeluaranReski]);
        }
}
