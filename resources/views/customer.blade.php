@extends('template')

@section('content')
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg 12">
                <h3 class="page-header"><i class="icon_document_alt"></i>Data Customer</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('dashboard') }}"><i class="bi bi-house-door"></i></a></li>
                    <li class="breadcrumb-item active">Data Customer</li>
                    {{-- <li class="breadcrumb-item active">Default</li> --}}
                </ol>
            </div>
        </div>
        {{-- form validation --}}
        {{-- <div class="row"> 
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Menu Treatment
                    </header>
                    <div class="panel-body">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <a href="{{ route('tambah_data_menu') }}">
                            <button class="btn" type="button" style="background-color:#B9798C; color: #fff; "><i class="bi bi-plus"> Tambah</i></button>
                        </a>
                    </div>
                </section>
            </div>
        </div> --}}
        {{-- <div class="card">
            <div class="card-body">
                <form class="row g-3">
                    <div class="col-md-12">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingName" placeholder="Your Name">
                        <label for="floatingName">Nama Treatment</label>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingEmail" placeholder="Your Email">
                        <label for="floatingEmail">Kategori</label>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Harga</label>
                    </div>
                    </div>
                    <div class="col-12">
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Address" id="floatingTextarea" style="height: 100px;"></textarea>
                        <label for="floatingTextarea">Deskripsi</label>
                    </div>
                    </div>
                    <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form><!-- End floating Labels Form -->
        
            </div>
        </div>   --}}
    </section>
</section>  
<table class="table table-hover" style="border-radius: 50px">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Customer</th>
            <th scope="col">No Telp</th>
            <th scope="col">Password</th>
            <th scope="col">Pertanyaan Keamanan</th>
            <th scope="col">Jawaban</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($customer as $customers)
            <tr>
                <td>{{ $loop->iteration }}</td> <!-- Gunakan $loop->iteration untuk menghasilkan nomor urut secara otomatis -->
                <td>{{ $customers->nama_lengkap }}</td>
                <td>{{ $customers->no_telp }}</td>
                <td>{{ $customers->password }}</td>
                <td>{{ $customers->pertanyaan_keamanan }}</td>
                <td>{{ $customers->jawaban }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection