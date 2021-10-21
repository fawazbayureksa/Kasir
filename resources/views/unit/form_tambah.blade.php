@extends('template')

@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3>Tambah unit Barang</h3>
                </div>
                <div class="card-body">
                   <div class="col-md-8">
                       <form action="{{route('unit.store')}}" method="post">
                           @csrf
                           <label for="">Unit</label>
                           <input type="text" name="unit" class="form-control mb-3 mt-2">
                           <button type="submit" class="btn btn-success btn-md"><i class="fa fa-paper-plane"></i> Simpan</button>
                           <a href="{{route('unit.index')}}" class="btn btn-dark">Kembali</a>
                       </form>
                   </div>
                </div>
            </div>
        </div>
    </div>
@endsection