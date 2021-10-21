<?php

namespace App\Http\Controllers;
use App\Models\Item;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Unit;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataitem = DB::table('item')
        ->join('unit', 'item.unit_id', '=', 'unit.id')
        ->join('category', 'item.category_id', '=', 'category.id')
        ->select('item.*', 'unit.name AS u_name' , 'category.name AS c_name')
        ->get();

        return view('item/item', ['data' => $dataitem]);

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        
        $dataunit=Unit::all();
        $kategori=Category::all();
        return view('item/form_tambah',compact('dataunit','kategori'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Item::create([
            'name' => $request->nama,
            'category_id' => $request->kategori,
            'unit_id' => $request->unit,
            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual,
            'stok' => $request->stok
        ]);
       return redirect()->route('item.index')->with('status','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
      
        $dataitem = DB::table('item')
        ->join('unit', 'item.unit_id', '=', 'unit.id')
        ->join('category', 'item.category_id', '=', 'category.id')
        ->select('item.*', 'unit.name AS u_name' , 'category.name AS c_name')
        ->where('item.id', '=', $id)
        ->first();
        $dataunit=Unit::all();
        $kategori=Category::all();
        return view('item/form_ubah',compact('dataunit','kategori','dataitem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Item::find($id);
        $item->name = $request->nama;
        $item->category_id = $request->kategori;
        $item->unit_id = $request->unit;
        $item->harga_beli = $request->harga_beli;
        $item->harga_jual = $request->harga_jual;
        $item->stok = $request->stok;
        $item->save();

        return redirect()->route('item.index')->with('status','Data berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Item::find($id);
        $item->delete();

        return redirect()->route('item.index')->with('status','Data berhasil dihapus');
    }
}
