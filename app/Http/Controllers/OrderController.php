<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use DB;
use App\Models\OrderProduct;


class OrderController extends Controller
{
    public function index(){
        $laporan = DB::table('order_products')->get();
        return view('laporan.index',compact('laporan'));

    }
}
