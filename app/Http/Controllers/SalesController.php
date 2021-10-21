<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Item;

class SalesController extends Controller
{
    
    public function index(){
        $data = Item::all();
        return view('sales/sales',compact('data'));
    }
}
