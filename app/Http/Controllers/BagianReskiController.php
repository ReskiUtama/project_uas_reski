<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BagianReskiController extends Controller
{
    public function index() {
{
        $BagianReski = DB::table('table_t_bagian_reski')->get();

        return view('bagianreski', ['BagianReski' => $BagianReski]);
        }
    }
}
