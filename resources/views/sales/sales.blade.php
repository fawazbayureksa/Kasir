@extends('template')

@section('content')

<section class="content mt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4 col-6">
                <div class="card">
                    <div class="card-body bg-">
                        <form method="POST">
                            <div class="form-group mb-2">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <Label>Date</Label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="date" id="date" value="<?=date('Y-m-d')?>" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <Label>Kasir</Label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" id="user" value="" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <!-- ./col -->
            <div class="col-sm-4 col-6">
                <div class="card">
                    <div class="card-body bg-">
                        <div class="row">
                            <form action="" method="POST">
                                <div class="form-group input-group mb-2">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <Label for="name">Item</Label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="hidden" name="id" id="item_id">
                                            <input type="hidden" name="harga_jual" id="harga_jual">
                                            <input type="hidden" name="stok" id="stok">
                                            <input type="text" id="name" name="" class="form-control" autofocus autocomplete="off">
                                        </div>
                                        <div class="col-sm-3">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="fa fa-search"></i>
                                                  </button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <Label>Jumlah</Label>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="number" name="jumlah" id="jumlah" min="1" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row justify-content-end">
                                        <div class="col-sm-4 ">
                                            <button type="button" name="add_cart" id="add_cart" class="btn btn-primary btn-flat"><i class="fa fa-shopping-cart"></i> Add </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-6">
                <div class="card">
                    <div class="card-body bg-">
                        <div class="row">
                            <div class="col-sm-8 offset-4">
                                <h5>Invoice <b><span id="invoice"></span></b></h5>
                            </div>
                        </div>
                        <div>
                            <div class="col-sm-2 offset-10">
                                <strong>
                                    <span id="grand_total2" style="font-size:4em;">0</span>
                                </strong>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card my-3">
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama item</th>
                                    <th>Harga</th>
                                    <th>Jumlah</th>
                                    <th>Total</th>
                                    <th> <i class="fa fa-cog"></i> </th>
                                </tr>
                            </thead>
                            <tbody id="cart_table">
                               <td></td>
                               <td id="nama_item"></td>
                               <td id="harga_item"></td>
                               <td id="jumlah_pesan"></td>
                               <td id="total_pesan"></td>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col-sm-4 col-6">
                <div class="card">
                    <div class="card-body ">
                        <form method="POST">
                            <div class="form-group my-3">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <Label>Grand Total</Label>
                                    </div>
                                    <div class="col-sm-7">
                                        <input type="number" id="grand_total" value="" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-5 my-3">
                                        <Label>Cash</Label>
                                    </div>
                                    <div class="col-sm-7">
                                        <input type="number" id="cash" value="" min="0" class="form-control" value="0">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <Label>Change</Label>
                                    </div>
                                    <div class="col-sm-7">
                                        <input type="number" id="change" value="" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-6">
                <form method="POST">
                    <div class="form-group">
                        <button id="cancel_payment" class="btn btn-warning btn-flat my-3"><i class="fa fa-undo"></i> Cancel</button>
                        <button id="process_payment" class="btn btn-success btn-flat"><i class="fa fa-paper-plane"></i> Proses Bayar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Pili Item</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body table-responsive">
                    <table class="table table-bordered" id="example2" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Harga</th>
                                <th>stok</th>
                                <th><i class="fa fa-cog"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $d)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$d->name}}</td>
                                <td>Rp. {{number_format($d->harga_jual)}}</td>
                                <td>{{$d->stok}}</td>
                                <td> <button class="btn btn-info btn-sm" id="select" data-id="<?= $d->id ?>" data-name="<?= $d->name ?>" data-price="<?= $d->harga_jual ?>" data-stock="<?= $d->stok ?>">
                                    <i class="fa fa-check"></i> Pilih
                                </button></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Pilih</button>
                </div>
            </div>

        </div>

    </div>

</section>
<script>
    
    $(document).on('click', '#select', function() {
        $('#item_id').val($(this).data('id'));
        $('#name').val($(this).data('name'));
        $('#harga_jual').val($(this).data('price'));
        $('#stok').val($(this).data('stock'));
        $('#exampleModal').click();
        
    })
    $(document).on('click', '#add_cart', function() {
        var id = $('#item_id').val()
        var harga_jual = $('#harga_jual').val()
        var stok = $('#stok').val()
        var jumlah = $('#jumlah').val()
        var name = $('#name').val()
     
        if (id == '') {
            alert('Belum ada produk yang dipilih')
            $('#name').focus()
        }
        else if (jumlah == '') {
            alert('Masukkan Jumlah pesanan')
            $('#jumlah').focus()
        }
        else if (stok < jumlah) {
           alert('Stok tidak cukup')
            $('#id').val('')
            $('#name').val('')
            $('#jumlah').val('')
            $('#name').focus()   
        } 
        else{
            //     $.ajax({
            //     type: 'POST',
            //     url: "{{route('sales.proses')}}",
            //     data: {
            //         'add_cart': true,
            //         'name' : name,
            //         'id': id,
            //         'harga_jual': harga_jual,
            //         'jumlah': jumlah
            //     },
            //     success:function(response){
            //        console.log(response)
            //     },
            // })
                // console.log(name)
            $('#nama_item').html(name)
            $('#jumlah_pesan').html(jumlah)
            $('#harga_item').html(harga_jual)
                
            var total = harga_jual * jumlah

            $('#total_pesan').html(total)

        }
    })

</script>
@endsection
