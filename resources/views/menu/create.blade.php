@extends ('template')
@section('content')
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="icon_document_alt"></i> Menu Treatment</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('menu.index') }}"><i class="bi bi-house-door"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{ url('data_menu') }}">Menu Treatment</a></li>
                    <li class="breadcrumb-item active">Tambah Menu Treatment</li>
                </ol>
            </div>
        </div>
        {{-- form validation --}}
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <heBooking class="panel-heading">
                        {{ isset($admin_lecturer) ? 'Mengubah' : 'Menambahkan' }} Menu Treatment
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
                    <br><br><br>
                    <div class="card">
                        <br>
                        <div class="card-body">
                            <form class="row g-3" id="data_menu_form" method="POST" enctype="multipart/form-data" action="{{ route('tambah_data_menu') }}">
                                {!! csrf_field() !!}
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="nama_treatment" placeholder="Nama Treatment" name="nama_treatment">
                                        <label for="cname">Nama Treatment</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating">
                                        <input type="number" class="form-control" id="harga" name="harga" placeholder="Harga">
                                        <label for="harga">Harga</label>
                                    </div>
                                </div>       
                                <div class="col-6">
                                    <div class="form-floating">
                                        <input type="file" class="form-control" id="image" name="image" placeholder="Upload">
                                        <label for="image">Upload Gambar</label>
                                      </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Deskripsi" id="deskripsi" name="deskripsi" style="height: 100px;"></textarea>
                                        <label for="cname">Deskripsi</label>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                    <button type="submit" class="btn" style="background-color: #864659; color: #fff; margin-left:700px;" >Simpan</button>
                                </div>
                            </form><!-- End floating Labels Form -->
                        </div>
                    </div>
                </section>
            </div>
        </div>
        {{-- end from validation --}}
    </section>
</section>
@endsection
