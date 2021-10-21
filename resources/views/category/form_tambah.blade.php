@extends('template')

@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3>Tambah Kategori Barang</h3>
                </div>
                <div class="card-body">
                   <div class="col-md-8">
                       <form action="{{route('category.store')}}" method="post">
                           @csrf
                           <label for="">Kategori</label>
                           <input type="text" name="kategori" class="form-control mb-3 mt-2">
                           <button type="submit" class="btn btn-success btn-md"><i class="fa fa-paper-plane"></i> Simpan</button>
                       </form>
                   </div>
                </div>
            </div>
        </div>
    </div>
@endsection