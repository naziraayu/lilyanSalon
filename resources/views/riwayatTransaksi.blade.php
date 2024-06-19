@extends('template')

@section('content')
@if(session('success'))
    <script type="text/javascript">
        Swal.fire({
            // position: "top-end",
            icon: "success",
            title: "{{ session('success') }}",
            showConfirmButton: false,
            timer: 1500
        });
    </script>
@endif
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg 12">
                <h3 class="page-header"><i class="icon_document_alt"></i>Transaksi</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('menu.index') }}"><i class="bi bi-house-door"></i></a></li>
                    <li class="breadcrumb-item active">Riwayat Transaksi</li>
                    {{-- <li class="breadcrumb-item active">Default</li> --}}
                </ol>
            </div>
        </div>
    </section>
</section> 
<div class="container">
    <div class="row">
        @foreach ($transaksi as $transaksis)
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card card-margin">
                <div class="card-header no-border">
                    <h5 class="card-title" style="color: #864659">Customer: {{ $transaksis->name }}</h5>
                </div>
                <div class="card-body pt-0">
                    <div class="widget-49">
                        <div class="widget-49-title-wrapper">
                            <div class="widget-49-date-primary">
                                <i class="bi bi-calendar-check"></i>
                                {{-- <span class="widget-49-date-day">{{ $transaksis->tanggal }}</span> --}}
                                {{-- <span class="widget-49-date-month">apr</span> --}}
                            </div>
                            <div class="widget-49-meeting-info">
                                <span class="widget-49-pro-title">No: {{ $transaksis->id_transaksi }}</span>
                                <span class="widget-49-meeting-time">Tanggal: {{ $transaksis->tanggal }}</span>
                            </div>
                        </div>
                        <ol class="widget-49-meeting-points" type="none">
                            <li type="none" class="widget-49-meeting-item">Treatment: <span>{{ $transaksis->nama_treatment }}</span></li>
                            <li type="none" class="widget-49-meeting-item">Grand Total: <span>{{ $transaksis->grand_total }}</span></li>
                            {{-- <li class="widget-49-meeting-item"><span>Session timeout increase to 30 minutes</span></li> --}}
                        </ol>
                        <div class="widget-49-meeting-action">
                            <button class="btn btn-outline-secondary " type="button" data-toggle="modal" data-target="#detailModal{{ $transaksis->id_transaksi }}">Detail
                                <i class="bi bi-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="detailModal{{ $transaksis->id_transaksi }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="col d-flex">
                            <span class="text-muted" id="orderno" style="font-weight: 700; font-size: 20px">Detail Transaksi</span>
                        </div>
                        <div class="gap">
                            <div class="col-2 d-flex mx-auto"></div>
                        </div>
                    </div>
                    <div class="modal-body">    
                        <div class="container">
                            {{-- <div class="title" style="font-size: 15px; color: blue">
                                <h6>Detail Item</h6>
                            </div> --}}
                            <div class="row">
                                <div class="col">
                                    <img class="img-fluid" src="{{ $transaksis->image }}" style="width: 100%; height: 100px; object-fit: cover;">
                                </div>
                                <div class="col">
                                    <ul class="right" type="none" >
                                        <li class="right">No: {{ $transaksis->id_transaksi }}</li>
                                        <li class="right">Customer: {{ $transaksis->name }}</li>
                                        <li class="right">Jam: {{ $transaksis->jam }}</li>
                                        <li class="right">Tanggal: {{ $transaksis->tanggal }}</li>
                                        {{-- <li class="right">Status: {{ $transaksis->status }}</li> --}}
                                    </ul>
                                </div>
                            </div>
                            <hr>
                            <div class="title" style="font-size: 15px; color: blue">
                                <h6>Detail Order</h6>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <ul type="none">
                                        <li class="left">Nama Treatment </li>
                                        <li class="left">Harga </li>
                                        <li class="left">Biaya Akomodasi </li>
                                        <li class="left">Grand Total</li>
                                        <li class="left">Bayar </li>
                                        <li class="left">Kembalian </li>
                                    </ul>
                                </div>
                                <div class="col">
                                    <ul class="right" type="none" style="text-align: right;">
                                        <li class="right">{{ $transaksis->nama_treatment }}</li>
                                        <li class="right">Rp {{ number_format($transaksis->harga, 0, ',', '.') }}</li>
                                        <li class="right">Rp {{ number_format($transaksis->akomodasi, 0, ',', '.') }}</li>
                                        <li class="right">Rp {{ number_format($transaksis->grand_total, 0, ',', '.') }}</li>
                                        <li class="right">Rp {{ number_format($transaksis->bayar, 0, ',', '.') }}</li>
                                        <li class="right">Rp {{ number_format($transaksis->kembalian, 0, ',', '.') }}</li>
                                    </ul>
                                </div>
                            </div>
                            <hr>
                            <div class="title" style="font-size: 15px; color: blue">
                                <h6>Tambahan</h6>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <ul type="none">
                                        <li class="left">Tambahan Menu </li>
                                        <li class="left">Harga </li>
                                    </ul>
                                </div>
                                <div class="col">
                                    <ul class="right" type="none" style="text-align: right;">
                                        @foreach ($transaksis->detail as $detail)
                                        <li class="right">{{ $detail->nama_treatment }}</li>
                                        <li class="right">Rp {{ number_format($detail->harga, 0, ',', '.') }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
<script>
    $(document).ready(function(){
      $('.modal').modal();
    });
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{{-- <table class="table table-hover" style="border-radius: 50px">
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
                            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#detailModal{{ $transaksis->id_transaksi }}">Detail
                                <i class="bi bi-arrow-right"></i>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            
            <?php 
            $no++;
            ?>
        @endforeach
    </tbody>
</table> --}}

<style>
    .modal {
        font-family: 'Times New Roman', Times, serif;
    }
    body{
    background: #F4F7FD;
    margin-top:20px;
}

.card-margin {
    margin-bottom: 1.875rem;
}

.card {
    border: 0;
    box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
    -webkit-box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
    -moz-box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
    -ms-box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #ffffff;
    background-clip: border-box;
    border: 1px solid #e6e4e9;
    border-radius: 8px;
}

.card .card-header.no-border {
    border: 0;
}
.card .card-header {
    background: none;
    padding: 0 0.9375rem;
    font-weight: 500;
    display: flex;
    align-items: center;
    min-height: 50px;
}
.card-header:first-child {
    border-radius: calc(8px - 1px) calc(8px - 1px) 0 0;
}

.widget-49 .widget-49-title-wrapper {
  display: flex;
  align-items: center;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-primary {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  background-color: #edf1fc;
  width: 3rem;
  height: 3rem;
  border-radius: 50%;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-primary .widget-49-date-day {
  color: #4e73e5;
  font-weight: 500;
  font-size: 1.5rem;
  line-height: 1;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-primary .widget-49-date-month {
  color: #4e73e5;
  line-height: 1;
  font-size: 1rem;
  text-transform: uppercase;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-secondary {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  background-color: #fcfcfd;
  width: 4rem;
  height: 4rem;
  border-radius: 50%;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-secondary .widget-49-date-day {
  color: #dde1e9;
  font-weight: 500;
  font-size: 1.5rem;
  line-height: 1;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-secondary .widget-49-date-month {
  color: #dde1e9;
  line-height: 1;
  font-size: 1rem;
  text-transform: uppercase;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-success {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  background-color: #e8faf8;
  width: 4rem;
  height: 4rem;
  border-radius: 50%;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-success .widget-49-date-day {
  color: #17d1bd;
  font-weight: 500;
  font-size: 1.5rem;
  line-height: 1;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-success .widget-49-date-month {
  color: #17d1bd;
  line-height: 1;
  font-size: 1rem;
  text-transform: uppercase;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-info {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  background-color: #ebf7ff;
  width: 4rem;
  height: 4rem;
  border-radius: 50%;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-info .widget-49-date-day {
  color: #36afff;
  font-weight: 500;
  font-size: 1.5rem;
  line-height: 1;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-info .widget-49-date-month {
  color: #36afff;
  line-height: 1;
  font-size: 1rem;
  text-transform: uppercase;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-warning {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  background-color: floralwhite;
  width: 4rem;
  height: 4rem;
  border-radius: 50%;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-warning .widget-49-date-day {
  color: #FFC868;
  font-weight: 500;
  font-size: 1.5rem;
  line-height: 1;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-warning .widget-49-date-month {
  color: #FFC868;
  line-height: 1;
  font-size: 1rem;
  text-transform: uppercase;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-danger {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  background-color: #feeeef;
  width: 4rem;
  height: 4rem;
  border-radius: 50%;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-danger .widget-49-date-day {
  color: #F95062;
  font-weight: 500;
  font-size: 1.5rem;
  line-height: 1;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-danger .widget-49-date-month {
  color: #F95062;
  line-height: 1;
  font-size: 1rem;
  text-transform: uppercase;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-light {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  background-color: #fefeff;
  width: 4rem;
  height: 4rem;
  border-radius: 50%;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-light .widget-49-date-day {
  color: #f7f9fa;
  font-weight: 500;
  font-size: 1.5rem;
  line-height: 1;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-light .widget-49-date-month {
  color: #f7f9fa;
  line-height: 1;
  font-size: 1rem;
  text-transform: uppercase;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-dark {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  background-color: #ebedee;
  width: 4rem;
  height: 4rem;
  border-radius: 50%;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-dark .widget-49-date-day {
  color: #394856;
  font-weight: 500;
  font-size: 1.5rem;
  line-height: 1;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-dark .widget-49-date-month {
  color: #394856;
  line-height: 1;
  font-size: 1rem;
  text-transform: uppercase;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-base {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  background-color: #f0fafb;
  width: 4rem;
  height: 4rem;
  border-radius: 50%;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-base .widget-49-date-day {
  color: #68CBD7;
  font-weight: 500;
  font-size: 1.5rem;
  line-height: 1;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-base .widget-49-date-month {
  color: #68CBD7;
  line-height: 1;
  font-size: 1rem;
  text-transform: uppercase;
}

.widget-49 .widget-49-title-wrapper .widget-49-meeting-info {
  display: flex;
  flex-direction: column;
  margin-left: 1rem;
}

.widget-49 .widget-49-title-wrapper .widget-49-meeting-info .widget-49-pro-title {
  color: #3c4142;
  font-size: 14px;
}

.widget-49 .widget-49-title-wrapper .widget-49-meeting-info .widget-49-meeting-time {
  color: #B1BAC5;
  font-size: 13px;
}

.widget-49 .widget-49-meeting-points {
  font-weight: 400;
  font-size: 13px;
  margin-top: .5rem;
}

.widget-49 .widget-49-meeting-points .widget-49-meeting-item {
  display: list-item;
  color: #727686;
}

.widget-49 .widget-49-meeting-points .widget-49-meeting-item span {
  margin-left: .5rem;
}

.widget-49 .widget-49-meeting-action {
  text-align: right;
}

.widget-49 .widget-49-meeting-action a {
  text-transform: uppercase;
}   
</style>
 
<!-- Pastikan jQuery dan JavaScript Bootstrap sudah disertakan -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
