@extends('template')

@section('content')
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg 12">
                <h3 class="page-header"><i class="icon_document_alt"></i>Data Customer</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('menu.index') }}"><i class="bi bi-house-door"></i></a></li>
                    <li class="breadcrumb-item active">Data Customer</li>
                    {{-- <li class="breadcrumb-item active">Default</li> --}}
                </ol>
            </div>
        </div>
    </section>
</section> 
<div class="container">
    <div class="row">
        @foreach ($customer as $customers)
        <div class="col-xl-4 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-1 ms-1 d-flex align-items-center">
                            <i class="bi bi-person-circle me-2 mt-2" style="font-size: 30px; color: #864659"></i>
                            <h5 class="font-size-15 mt-3">{{ $customers->name }}</h5>
                        </div>
                    </div>
                    
                    <div class="mt-3 pt-1">
                        <p class="text-muted mb-0"><i class="bi bi-telephone font-size-15 align-middle pe-2" style="color: #864659"></i>{{ $customers->nomor_hp }}</p>
                        <p class="text-muted mb-0 mt-2"><i class="bi bi-envelope-fill font-size-15 align-middle pe-2" style="color: #864659"></i>{{ $customers->email }}</p>
                        <p class="text-muted mb-0 mt-2"><i class="bi bi-lock-fill font-size-15 align-middle pe-2" style="color: #864659"></i>{{ $customers->password }}</p>
                    </div>
                    
                </div>
            </div>
        </div>
        @endforeach
    </div>
    {{-- <div class="row g-0 align-items-center pb-4">
        <div class="col-sm-6">
            <div><p class="mb-sm-0">Showing 1 to 10 of 57 entries</p></div>
        </div>
        <div class="col-sm-6">
            <div class="float-sm-end">
                <ul class="pagination mb-sm-0">
                    <li class="page-item disabled">
                        <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                    </li>
                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item">
                        <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div> --}}
</div>
{{-- <table class="table table-hover" style="border-radius: 50px">
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

            <tr>
                <td>{{ $loop->iteration }}</td> <!-- Gunakan $loop->iteration untuk menghasilkan nomor urut secara otomatis -->
                <td>{{ $customers->nama_lengkap }}</td>
                <td>{{ $customers->no_telp }}</td>
                <td>{{ $customers->password }}</td>
                <td>{{ $customers->pertanyaan_keamanan }}</td>
                <td>{{ $customers->jawaban }}</td>
            </tr>

    </tbody>
</table> --}}
@endsection

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/css/boxicons.min.css" integrity="sha512-pVCM5+SN2+qwj36KonHToF2p1oIvoU3bsqxphdOIWMYmgr4ZqD3t5DjKvvetKhXGc/ZG5REYTT6ltKfExEei/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css" integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NN" />

<style>
    body{margin-top:20px;
background-color:#eee;
}
.card {
    margin-bottom: 24px;
    box-shadow: 0 2px 3px #e4e8f0;
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid #eff0f2;
    border-radius: 1rem;
}
.avatar-md {
    height: 4rem;
    width: 4rem;
}
.rounded-circle {
    border-radius: 50%!important;
}
.img-thumbnail {
    padding: 0.25rem;
    background-color: #f1f3f7;
    border: 1px solid #eff0f2;
    border-radius: 0.75rem;
}
.avatar-title {
    align-items: center;
    background-color: #3b76e1;
    color: #fff;
    display: flex;
    font-weight: 500;
    height: 100%;
    justify-content: center;
    width: 100%;
}
.bg-soft-primary {
    background-color: rgba(59,118,225,.25)!important;
}
a {
    text-decoration: none!important;
}
.badge-soft-danger {
    color: #f56e6e !important;
    background-color: rgba(245,110,110,.1);
}
.badge-soft-success {
    color: #63ad6f !important;
    background-color: rgba(99,173,111,.1);
}
.mb-0 {
    margin-bottom: 0!important;
}
.badge {
    display: inline-block;
    padding: 0.25em 0.6em;
    font-size: 75%;
    font-weight: 500;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: 0.75rem;
}
</style>
