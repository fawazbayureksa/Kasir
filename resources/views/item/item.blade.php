@extends('template')

@section('content')
    <div class="row justify-content-center mt-5">
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
          
        </div>
      @endif
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div class="row text-center">
                        <div class="col-6">
                            <h3>Item</h3>
                        </div>
                        <div class="col-6">
                            <a href="{{route('item.create')}}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped text-center">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Kategori</th>
                                    <th>Unit</th>
                                    <th>Harga Beli</th>
                                    <th>Harga Jual</th>
                                    <th>Stok</th>
                                    <th><i class="fa fa-cog"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $d)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$d->name}}</td>
                                    <td>{{$d->c_name}}</td>
                                    <td>{{$d->u_name}}</td>
                                    <td>Rp {{number_format($d->harga_beli)}}</td>
                                    <td>Rp {{number_format($d->harga_jual)}}</td>
                                    <td>{{$d->stok}}</td>
                                    <td>
                                        <div class="row justify-content-center">
                                            <div class="col-md-3">
                                                <a href="{{route('item.edit',$d->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                            </div>
                                            <div class="col-md-3">
                                                <form action="{{route('item.destroy',$d->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"  class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection