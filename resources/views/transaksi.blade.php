@extends ('template')
@section('content')
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg 12">
                <h3 class="page-header"><i class="icon_document_alt"></i>Transaksi</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('dashboard') }}"><i class="bi bi-house-door"></i></a></li>
                    <li class="breadcrumb-item active">Transaksi</li>
                    {{-- <li class="breadcrumb-item active">Default</li> --}}
                </ol>
            </div>
        </div>
        {{-- @foreach ($data as $item) --}}
        <div class="card">
            <br>
            <div class="card-body">
                <form class="row g-3" id="data_menu_form" method="POST" action="{{ route('tambah_data_menu') }}">
                    {!! csrf_field() !!}
                    @foreach($transaksi as $item)
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="id_transaksi" placeholder="ID Transaksi" name="id_transaksi" disabled>
                            <label for="cname">{{ $item->nama_treatment }}</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="id_booking" placeholder="ID Booking" name="id_booking" disabled>
                            <label for="cname">ID Booking</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="id_menu" name="id_menu" placeholder="Menu Treatment" disabled>
                            <label for="cname">Menu Treatment</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="id_menu" name="id_menu" placeholder="Menu Treatment">
                            <label for="cname">Tambahan Menu Treatment</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <input type="number" class="form-control" id="harga" name="harga" placeholder="Harga">
                            <label for="price">Grand Total</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <input type="number" class="form-control" id="kembalian" name="kembalian" placeholder="Kembalian">
                            <label for="price">Kembalian</label>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="reset" class="btn btn-danger">Batal</button>
                        <button type="submit" class="btn" style="background-color: #864659; color: #fff; margin-left:700px;" >Bayar</button>
                    </div>
                    @endforeach
                </form><!-- End floating Labels Form -->
        
            </div>
        </div>
        {{-- @endforeach --}}
    </section>
</section>  
@endsection