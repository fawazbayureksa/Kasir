@extends('template')

@section('content')
<section id="home">
    <div class="row mt-5">
        <div class="col-md-4 my-2">           
            <div class="card">
                <div class="card-body bg-primary text-white">
                    <i class="fa fa-user"></i>
                    <span>Jumlah user : 20</span>
                </div>
            </div>
        </div>
        <div class="col-md-4 my-2">           
            <div class="card bg-success text-white">
                <div class="card-body">
                    <i class="fa fa-boxes "></i>
                    <span>Jumlah Item : 20</span>
                </div>
            </div>
        </div>
        <div class="col-md-4 my-2">           
            <div class="card">
                <div class="card-body bg-warning">
                    <i class="fa fa-cash-register"></i>
                    <span>Jumlah penjualan : 20</span>
                </div>
            </div>
        </div>
    </div>
</section>
    @endsection