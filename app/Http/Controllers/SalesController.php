<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Item;

class SalesController extends Controller
{
    
    public function index(){
        $data = Item::all();
        return view('sales/sales',compact('data'));
    }
    public function proses(Request $request){
        $datareq = $request->all();
        

        return response()->json(['success'=>'Ajax request submitted successfully']);
    }
    public function dataPesan(){

    }
}
