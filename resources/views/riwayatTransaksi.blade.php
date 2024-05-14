@extends('template')

@section('content')
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg 12">
                <h3 class="page-header"><i class="icon_document_alt"></i>Transaksi</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('dashboard') }}"><i class="bi bi-house-door"></i></a></li>
                    <li class="breadcrumb-item active">Riwayat Transaksi</li>
                    {{-- <li class="breadcrumb-item active">Default</li> --}}
                </ol>
            </div>
        </div>
    </section>
</section> 
<table class="table table-hover" style="border-radius: 50px">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">ID Transaksi</th>
            <th scope="col">Nama Customer</th>
            <th scope="col">Grand Total</th>
            <th scope="col">Lihat Detail</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        @foreach ($transaksi as $transaksis)
            <tr>
                <th scope="row">{{ $no }}</th> 
                <td>{{ $transaksis->id_transaksi }}</td>
                <td>{{ $transaksis->nama_lengkap }}</td>
                <td>{{ $transaksis->grand_total}}</td>
                <td>
                    <div class="btn-group">
                        <form action="" method="POST">
                            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#detailModal{{$transaksis->id_transaksi}}">Detail
                                <i class="bi bi-arrow-right"></i>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            <script>
                $(document).ready(function(){
                  $('.modal').modal();
                });
            </script>
            <?php 
            $no++;
            ?>
        @endforeach
    </tbody>
</table>
@endsection
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> --}}