<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengeluaranitemReskiController extends Controller
{
    public function index() {
        {

            $PengeluaranitemReski = DB::table('table_t_pengeluaranitem_reski')
            ->join('table_t_pengeluaran_reski', 'table_t_pengeluaran_reski.nobk_reski', 'table_t_pengeluaranitem_reski.id')
            ->get();

            return view('pengeluaranitemreski', ['data' => $PengeluaranitemReski]);
        }
    }
}
