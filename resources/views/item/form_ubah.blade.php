@extends('template')
@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3>Tambah Item Barang</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('item.update',$dataitem->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Nama Barang</label>
                                <input type="text" name="nama"  value="{{$dataitem->name}}" class="form-control my-3">
                            </div>
                            <div class="col-md-6">
                                <label for="">Kategori Produk</label>
                            <select name="kategori" id="" class="form-control my-3">
                                <option value="{{$dataitem->category_id}}" selected>{{$dataitem->c_name}}</option>
                                @foreach ($kategori as $ka)
                                <option value="{{$ka->id}}">{{$ka->name}}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Unit Produk</label>
                                    <select name="unit" id="" class="form-control my-3">
                                        <option value="{{$dataitem->unit_id}}">{{$dataitem->u_name}}</option>
                                        @foreach ($dataunit as $k)
                                        <option value="{{$k->id}}">{{$k->name}}</option>
                                        @endforeach
                                    </select>
                            </div>
                            <div class="col-md-6">
                                <label for="">Harga Beli</label>
                                <input type="number" name="harga_beli" value="{{$dataitem->harga_beli}}"  class="form-control my-3">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Harga Jual</label>
                                <input type="number" name="harga_jual"  value="{{$dataitem->harga_jual}}" class="form-control my-3">
                            </div>
                            <div class="col-md-6">
                                <label for="">Stok</label>
                                <input type="number" name="stok" value="{{$dataitem->stok}}" class="form-control my-3">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success btn-md"><i class="fa fa-paper-plane"></i> Ubah</button>
                        <a href="{{route('item.index')}}" class="btn btn-dark">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection