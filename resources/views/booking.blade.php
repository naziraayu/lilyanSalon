@extends ('template')

@section('content')
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg 12">
                <h3 class="page-header"><i class="icon_document_alt"></i>Booking</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('menu.index') }}"><i class="bi bi-house-door"></i></a></li>
                    <li class="breadcrumb-item active">Booking</li>
                    {{-- <li class="breadcrumb-item active">Default</li> --}}
                </ol>
            </div>
        </div>
    </section> 
</section> 
<div class="container">
    <section class="my-2 d-flex flex-wrap justify-content-start" style="max-width: 100%;">
        @foreach ($data as $item)
        <div class="card m-2" style="width: 17rem;">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light" style="height: 200px; overflow: hidden;">
                <img src="{{ $item->image }}" class="img-fluid w-100 h-100" style="object-fit: cover;" />
            </div>
            <div class="card-body">
                <h5 class="card-title font-weight-bold">Customer: {{ $item->name }}</h5>
                <p class="mb-2">Nama Treatment: {{ $item->nama_treatment }}</p>
                <p class="mb-2">Service: {{ $item->service }}</p>
                <p class="mb-2">Kecamatan: {{ $item->kecamatan }}</p>
                <p class="card-text">Alamat: {{ $item->alamat }}</p>
                <p class="mb-2">
                    Status: 
                    <span class="{{ $item->status == 'Sudah bayar' ? 'status-sudah-bayar' : 'status-belum-bayar' }}">
                        {{ $item->status }}
                    </span>
                </p>
                    <hr class="my-4" />
                    <div class="row"></div>
                    <div class="col">
                        <div class="d-flex justify-content-between">
                            <p class="lead"><strong>Tanggal</strong></p>
                            <p class="lead"><strong>Jam</strong></p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item me-2">
                                    <div class="chip">{{ $item->tanggal }}</div>
                                </li>
                            </ul>
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item me-0">
                                    <div class="chip">{{ $item->jam }}</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                <div class="btn-group">
                    <form action="/hapus_data_book/{{ $item['id'] }}" method="POST">
                        @csrf
                        <button class="btn btn-danger" type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                            <i class="bi bi-trash"></i> Hapus
                        </button>
                        @if ($item->status != 'Sudah bayar')
                        <a href="{{ route('transaksi', $item->id) }}" class="btn btn-success ml-auto">
                            <i class="bi bi-cash"></i> Bayar
                        </a>
                        @endif
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </section>
</div>
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<style>
    .status-belum-bayar {
        color: red;
        font-weight: bold;
    }
    .status-sudah-bayar {
        color: green;
        font-weight: bold;
    }
</style>
