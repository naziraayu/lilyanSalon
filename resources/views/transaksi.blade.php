@extends('template')

@section('content')
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="icon_document_alt"></i>Transaksi</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('dashboard') }}"><i class="bi bi-house-door"></i></a></li>
                    <li class="breadcrumb-item active">Transaksi</li>
                </ol>
            </div>
        </div>
        <div class="card">
            <br>
            <div class="card-body">
                <form class="row g-3" id="data_menu_form" method="POST" action="{{ route('tambah_data_menu') }}">
                    {!! csrf_field() !!}
                    @foreach($transaksi as $item)
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="id_transaksi" placeholder="ID Transaksi" name="id_transaksi" value="{{ $item->id_transaksi }}" disabled>
                            <label for="id_transaksi">ID Transaksi</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="id_booking" placeholder="ID Booking" name="id_booking" value="{{ $item->id_booking }}" disabled>
                            <label for="id_booking">ID Booking</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="id_menu" placeholder="Menu Treatment" name="id_menu" value="{{ $item->nama_treatment }}" disabled>
                            <label for="id_menu">Menu Treatment</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <select class="form-select" id="additional_menu" name="additional_menu">
                                <option value="">Pilih Tambahan Menu Treatment</option>
                                @foreach($additional_menu as $menu)
                                    <option value="{{ $menu->harga }}">{{ $menu->nama_treatment }}</option>
                                @endforeach
                            </select>
                            <label for="additional_menu">Tambahan Menu Treatment</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <input type="number" class="form-control" id="harga" name="harga" placeholder="Harga" value="{{ $item->harga }}" disabled>
                            <label for="harga">Grand Total</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <input type="number" class="form-control" id="kembalian" name="kembalian" placeholder="Kembalian" value="{{ $item->kembalian }}" disabled>
                            <label for="kembalian">Kembalian</label>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="reset" class="btn btn-danger">Batal</button>
                        <button type="submit" class="btn" style="background-color: #864659; color: #fff; margin-left:700px;">Bayar</button>
                    </div>
                    @endforeach
                </form>
            </div>
        </div>
    </section>
    <!-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        let additionalMenu = document.getElementById('additional_menu');
        let grandTotalInput = document.getElementById('harga');

        additionalMenu.addEventListener('change', function() {
            let selectedOption = additionalMenu.options[additionalMenu.selectedIndex];
            let additionalPrice = parseFloat(selectedOption.value);

            let currentGrandTotal = parseFloat(grandTotalInput.value);
            let newGrandTotal = currentGrandTotal + additionalPrice;

            grandTotalInput.value = newGrandTotal.toFixed(2);
        });
    });
</script> -->

</section>
@endsection


