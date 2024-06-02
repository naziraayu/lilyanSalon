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
        {{-- <heBooking class="panel-heading">
            {{ isset($admin_lecturer) ? 'Gagal Melakukan' : 'Berhasil Melakukan' }} Pembayaran
        </heBooking Informationformation
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <br> --}}
        {{-- @foreach($data as $item) --}}
        <div class="card">
            <br>
            <div class="card-body">
                <form class="row g-3" id="data_transaksi_form" method="POST" action="{{ route('bayarTransaksi') }}">
                    {!! csrf_field() !!}
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="id_transaksi" placeholder="ID Transaksi" name="id_transaksi" readonly >
                            <label for="id_transaksi">ID Transaksi</label>
                        </div>
                    </div>
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            var idInput = document.getElementById('id_transaksi');
                            var idTransaksi = generateID();
                            idInput.value = idTransaksi;
                        });
        
                        function generateID() {
                            var currentTime = new Date();
                            var year = currentTime.getFullYear();
                            var month = pad(currentTime.getMonth() + 1);
                            var date = pad(currentTime.getDate());
                            var hours = pad(currentTime.getHours());
                            var minutes = pad(currentTime.getMinutes());
                            var seconds = pad(currentTime.getSeconds());
                            return year + month + date + hours + minutes + seconds;
                        }
        
                        function pad(n) {
                            return n < 10 ? '0' + n : n;
                        }
                    </script>
                    @foreach($data as $item)
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="booking_id" placeholder="ID Booking" name="booking_id" value="{{ $item->id }}" >
                            <label for="booking_id">ID Booking</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="nama_lengkap" placeholder="Nama Customer" name="nama_lengkap" value="{{ $item->nama_lengkap }}" >
                            <label for="nama_lengkap">Nama Customer</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-floating">
                            <input type="hidden" class="form-control" id="customer_id" placeholder="Menu Treatment" name="customer_id" value="{{ $item->customer_id }}">
                            {{-- <label for="customer_id">Customer ID</label> --}}
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-floating">
                            <input type="hidden" class="form-control" id="menu_id" placeholder="Menu Treatment" name="menu_id" value="{{ $item->menu_id }}">
                            {{-- <label for="menu_id">Menu ID</label> --}}
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="nama_treatment" placeholder="Menu Treatment" name="nama_treatment" 
                            value="{{ $item->nama_treatment }}" readonly>
                            <label for="nama_treatment">Menu Treatment</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating">
                            <select class="form-select" id="tambah_menu" name="tambah_menu" >
                                <option value="">Pilih Tambahan Menu Treatment</option>
                                @foreach($data_menu as $menu)
                                <option value="{{ $menu->id }}|{{ $menu->harga }}|{{ $menu->nama_treatment }}">{{ $menu->nama_treatment }} - {{ $menu->harga }}</option>
                                @endforeach
                            </select>
                            <label for="tambah_menu">Tambahan Menu Treatment</label>
                        </div>
                    </div>  
                    <div class="col-6">
                        <div class="form-floating">
                            <input type="number" class="form-control" id="akomodasi" name="akomodasi" placeholder="akomodasi" 
                            value="{{ $item->akomodasi }}" readonly>
                            <label for="akomodasi">Biaya akomodasi</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-floating">
                            <input type="number" class="form-control" id="harga" name="harga" placeholder="Harga" 
                            value="{{ $item->harga }}" readonly>
                            <label for="harga">Grand Total</label>
                        </div>
                    </div>
                    {{-- <script>
                        //script yang bener
                        document.addEventListener('DOMContentLoaded', function() {
                            // Fungsi untuk memformat angka
                            function numberFormat(number) {
                                return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
                            }
                    
                            var tambahMenuSelect = document.getElementById('tambah_menu');
                            var grandTotalInput = document.getElementById('harga');
                            var basePrice = parseFloat(grandTotalInput.value.replace(/\./g, '') || 0);
                            var selectedAdditionalMenu = false;
                    
                            tambahMenuSelect.addEventListener('change', function() {
                                if (!selectedAdditionalMenu && this.value !== "") {
                                    var menuInfo = this.value.split('|');
                                    var harga = parseFloat(menuInfo[1]);
                    
                                    var newGrandTotal = basePrice + harga;
                                    grandTotalInput.value = numberFormat(newGrandTotal.toFixed(0));
                    
                                    selectedAdditionalMenu = true;
                                }
                            });
                    
                            var bayarInput = document.getElementById('bayar');
                            var kembalianInput = document.getElementById('kembalian');
                    
                            bayarInput.addEventListener('input', function() {
                                var bayar = parseFloat(this.value.replace(/\./g, '') || 0);
                                var grandTotal = parseFloat(grandTotalInput.value.replace(/\./g, '') || 0);
                                
                                // Validasi agar bayar tidak kurang dari harga
                                if (bayar < grandTotal) {
                                    kembalianInput.value = "Bayar tidak cukup";
                                } else {
                                    var kembalian = bayar - grandTotal;
                                    kembalianInput.value = numberFormat(kembalian.toFixed(0));
                                }
                            });
                    
                            // Menambahkan event listener untuk memformat angka saat input berubah
                            [bayarInput, kembalianInput].forEach(function(input) {
                                input.addEventListener('input', function() {
                                    this.value = numberFormat(parseFloat(this.value.replace(/\./g, '') || 0));
                                });
                            });
                        });
                    </script>               --}}
                    {{-- <script>
                            document.addEventListener('DOMContentLoaded', function() {
                            // Fungsi untuk memformat angka
                            function numberFormat(number) {
                                return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
                            }

                            var tambahMenuSelect = document.getElementById('tambah_menu');
                            var grandTotalInput = document.getElementById('harga');
                            var basePrice = parseFloat(grandTotalInput.value.replace(/\./g, '') || 0);
                            var selectedAdditionalMenu = false;

                            tambahMenuSelect.addEventListener('change', function() {
                                if (!selectedAdditionalMenu && this.value !== "") {
                                    var menuInfo = this.value.split('|');
                                    var harga = parseFloat(menuInfo[1]);

                                    var newGrandTotal = basePrice + harga;
                                    grandTotalInput.value = numberFormat(newGrandTotal.toFixed(0));

                                    selectedAdditionalMenu = true;
                                }
                            });

                            var bayarInput = document.getElementById('bayar');
                            var kembalianInput = document.getElementById('kembalian');

                            bayarInput.addEventListener('input', function() {
                                var bayar = parseFloat(this.value.replace(/\./g, '') || 0);
                                var grandTotal = parseFloat(grandTotalInput.value.replace(/\./g, '') || 0);
                                
                                // Validasi agar bayar tidak kurang dari harga
                                if (bayar < grandTotal) {
                                    kembalianInput.value = "Bayar tidak cukup";
                                } else {
                                    var kembalian = bayar - grandTotal;
                                    kembalianInput.value = numberFormat(kembalian.toFixed(0));
                                }
                            });

                            // Menambahkan event listener untuk memformat angka saat input berubah
                            [bayarInput, kembalianInput].forEach(function(input) {
                                input.addEventListener('input', function() {
                                    this.value = numberFormat(parseFloat(this.value.replace(/\./g, '') || 0));
                                });
                            });
                        });
                    </script> --}}
                    <script>
                       document.addEventListener('DOMContentLoaded', function() {
                            var tambahMenuSelect = document.getElementById('tambah_menu');
                            var grandTotalInput = document.getElementById('harga');
                            var akomodasiInput = document.getElementById('akomodasi');
                            var basePrice = parseFloat(grandTotalInput.value || 0);
                            var akomodasiPrice = parseFloat(akomodasiInput.value || 0);
                            var selectedAdditionalMenu = false;

                            // Menambahkan akomodasi ke base price
                            var basePriceWithAkomodasi = basePrice + akomodasiPrice;
                            grandTotalInput.value = basePriceWithAkomodasi.toFixed(2);

                            tambahMenuSelect.addEventListener('change', function() {
                                if (!selectedAdditionalMenu && this.value !== "") {
                                    var menuInfo = this.value.split('|');
                                    var harga = parseFloat(menuInfo[1]);

                                    var newGrandTotal = basePriceWithAkomodasi + harga;
                                    grandTotalInput.value = newGrandTotal.toFixed(2);

                                    selectedAdditionalMenu = true;
                                }
                            });

                            var bayarInput = document.getElementById('bayar');
                            var kembalianInput = document.getElementById('kembalian');

                            bayarInput.addEventListener('input', function() {
                                var bayar = parseFloat(this.value);
                                var grandTotal = parseFloat(grandTotalInput.value);
                                var kembalian = bayar - grandTotal;

                                if (kembalian >= 0) {
                                    kembalianInput.value = kembalian.toFixed(2);
                                } else {
                                    kembalianInput.value = "";
                                }
                            });
                        });
                    </script>
                    @endforeach
                    <div class="col-6">
                        <div class="form-floating">
                            <input type="number" class="form-control" id="bayar" name="bayar" placeholder="Bayar" >
                            <label for="bayar">Bayar</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-floating">
                            <input type="number" class="form-control" id="kembalian" name="kembalian" placeholder="Kembalian" readonly>
                            <label for="kembalian">Kembalian</label>
                        </div>
                    </div>
                    {{-- <script>
                        //ini juga bener
                        document.addEventListener('DOMContentLoaded', function() {
                            // Fungsi untuk memformat angka dengan titik sebagai pemisah ribuan
                            function numberFormat(number) {
                                return number.toLocaleString('id-ID', { minimumFractionDigits: 0 });
                            }
                    
                            var tambahMenuSelect = document.getElementById('tambah_menu');
                            var grandTotalInput = document.getElementById('harga');
                            var basePrice = parseFloat(grandTotalInput.value.replace(/\./g, '') || 0);
                    
                            tambahMenuSelect.addEventListener('change', function() {
                                var menuInfo = this.value.split('|');
                                if (menuInfo.length >= 2) {
                                    var harga = parseFloat(menuInfo[1]);
                                    var newGrandTotal = basePrice + harga;
                                    grandTotalInput.value = numberFormat(newGrandTotal);
                                } else {
                                    grandTotalInput.value = numberFormat(basePrice);
                                }
                            });
                    
                            var bayarInput = document.getElementById('bayar');
                            var kembalianInput = document.getElementById('kembalian');
                    
                            bayarInput.addEventListener('input', function() {
                                var bayar = parseFloat(this.value.replace(/\./g, '') || 0);
                                var grandTotal = parseFloat(grandTotalInput.value.replace(/\./g, '') || 0);
                    
                                // Validasi agar bayar tidak kurang dari harga
                                if (bayar < grandTotal) {
                                    kembalianInput.value = "Bayar tidak cukup";
                                } else {
                                    var kembalian = bayar - grandTotal;
                                    kembalianInput.value = numberFormat(kembalian);
                                }
                            });
                    
                            // Menambahkan event listener untuk memformat angka saat input berubah
                            bayarInput.addEventListener('input', function() {
                                this.value = numberFormat(parseFloat(this.value.replace(/\./g, '') || 0));
                            });
                        });
                    </script> --}}
                    <div class="text-center">
                        <button type="reset" class="btn btn-danger">Batal</button>
                        <button id="submitTransaksi" type="submit" class="btn" style="background-color: #864659; color: #fff; margin-left:700px;">Bayar</button>
                    </div>
                </form>
            </div>
        </div>
        {{-- @endforeach --}}
    </section>
</section>
@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>