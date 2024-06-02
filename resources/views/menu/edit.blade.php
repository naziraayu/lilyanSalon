@extends ('template')
@section('content')
{{-- <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet"> --}}
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="icon_document_alt"></i> Menu Treatment</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('menu.index') }}"><i class="bi bi-house-door"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{ url('data_menu') }}">Menu Treatment</a></li>
                    <li class="breadcrumb-item active">Edit Menu Treatment</li>
                </ol>
            </div>
        </div>
        {{-- form validation --}}
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        {{ isset($admin_lecturer) ? 'Menambahkan' : 'Mengubah' }} Menu Treatment
                    </header>
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
                    <br>
                    @foreach ($data as $item)
                    <div class="card">
                        <br>
                        <div class="card-body">
                            <form class="row g-3" id="data_menu_form" method="POST" action="/update_data_menu/{{ $item['id'] }}" enctype="multipart/form-data">
                                {!! csrf_field() !!}
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="nama_treatment" name="nama_treatment" placeholder="Nama Treatment" value="{{ $item['nama_treatment'] }}">
                                        <label for="cname">Nama Treatment</label>
                                    </div>
                                </div>
                                <div class="col-md-6">  
                                    <div class="form-floating">
                                        <input type="number" class="form-control" id="harga" name="harga" placeholder="Harga" value="{{ $item['harga'] }}">
                                        <label for="price">Harga</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating">
                                        <input type="file" class="form-control" id="image" name="image" placeholder="Upload" value="{{ $item['image'] }}">
                                        <label for="image">Upload Gambar</label>
                                      </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi" style="height: 100px;">{{ $item['deskripsi'] }}</textarea>
                                        <label for="cname">Deskripsi</label>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                    <button type="submit" class="btn" style="background-color: #864659; color: #fff; margin-left:700px;">Simpan</button>
                                </div>
                            </form><!-- End floating Labels Form -->
                            <script>
                                document.getElementById('data_menu_form').addEventListener('submit', function(event) {
                                    var imageInput = document.getElementById('image');
                                    if (imageInput.files.length === 0) {
                                        event.preventDefault(); // Mencegah pengiriman form
                                        Swal.fire({
                                            icon: 'warning',
                                            title: 'Peringatan',
                                            text: 'Silakan unggah gambar sebelum menyimpan.',
                                            confirmButtonColor: '#864659'
                                        });
                                    }
                                });
                            </script>
                        </div>
                    </div>
                    @endforeach
                </section>
            </div>
        </div>
    </section>
</section>
@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>