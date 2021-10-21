@extends('template')

@section('content')
    <div class="row justify-content-center mt-5">
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
          
        </div>
      @endif
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="row text-center">
                        <div class="col-6">
                            <h3>Unit</h3>
                        </div>
                        <div class="col-6">
                            <a href="{{route('unit.create')}}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped text-center">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th><i class="fa fa-cog"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $d)
                                <tr>
                                    <td>{{$d->name}}</td>
                                    <td>
                                        <form action="{{route('unit.destroy',$d->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"  class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                        </form>
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