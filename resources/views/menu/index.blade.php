@extends ('template')

@section('content')
@if(session('success'))
    <script type="text/javascript">
        Swal.fire({
            // position: "top-end",
            icon: "success",
            title: "{{ session('success') }}",
            showConfirmButton: false,
            timer: 2000
        });
    </script>
@endif
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg 12">
                <h3 class="page-header"><i class="icon_document_alt"></i>Master</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('menu.index') }}"><i class="bi bi-house-door"></i></a></li>
                    <li class="breadcrumb-item active">Menu Treatment</li>
                    {{-- <li class="breadcrumb-item active">Default</li> --}}
                </ol>
            </div>
        </div>
        {{-- form validation --}}
        <div class="row"> 
            <div class="col-lg-12">
                <section class="panel">
                    {{-- <header class="panel-heading">
                        Menu Treatment
                    </header> --}}
                    <div class="panel-body">
                        <div style="display: inline-block;">
                            <a href="{{ route('tambah_data_menu') }}">
                                <button class="btn" type="button" style="background-color:#B9798C; color: #fff; "><i class="bi bi-plus"> Tambah</i></button>
                            </a>
                        </div>
                        <div style="display: inline-block;">
                            <form action="{{ route('cetak_menu') }}" method="GET" target="_blank">
                                <button type="submit" class="btn" style="background-color:#B9798C; color: #fff;">
                                    <i class="bi bi-printer"></i> Cetak
                                </button>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
</section>  
@foreach ($data as $item)
<div class="container mt-1 mb-2">
    <div class="row">
        <div class="col-md-12">
            <div class="row p-2 bg-white border rounded mb-2">
                <div class="col-md-3 mt-1">
                    <img class="img-fluid img-responsive rounded product-image" src="{{ asset($item->image) }}"></div>
                <div class="col-md-6 mt-3">
                    <h5>{{ $item->nama_treatment }}</h5>
                    <p class="text-justify description mb-0">{{ $item->deskripsi }}</p>
                </div>
                <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                    <div class="d-flex flex-row align-items-center">
                        <h4 class="mr-1">Rp {{ number_format($item->harga, 0, ',', '.') }}</h4>
                    </div>
                    <div class="d-flex flex-column mt-4">
                        <a href="/edit_data_menu/{{ $item['id'] }}" class="btn btn-warning btn-sm action-button mb-1">
                            <i class="bi bi-pencil-square"></i> <span style="font-style: normal;">Edit Menu</span>
                        </a>
                        <form action="/hapus_data_menu/{{ $item['id'] }}" method="POST" class="mt-2 delete-form">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger btn-sm action-button delete-button">
                                <i class="bi bi-trash"></i><span style="font-style: normal;">Hapus Menu</span>
                            </button>
                        </form>
                        <script type="text/javascript">
                            $(document).ready(function() {
                                $('.delete-button').on('click', function(e) {
                                    e.preventDefault();
                                    var form = $(this).closest('.delete-form');
                                    var url = form.attr('action');
                    
                                    Swal.fire({
                                        title: "Apa Anda Yakin?",
                                        text: "Anda ingin menghapus menu ini?",
                                        icon: "warning",
                                        showCancelButton: true,
                                        confirmButtonColor: "#3085d6",
                                        cancelButtonColor: "#d33",
                                        confirmButtonText: "Ya, Hapus!"
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            $.ajax({
                                                type: 'POST',
                                                url: url,
                                                data: form.serialize(),
                                                success: function(response) {
                                                    if (response.success) {
                                                        Swal.fire({
                                                            title: "Deleted!",
                                                            text: response.message,
                                                            icon: "success"
                                                        }).then(() => {
                                                            location.reload(); // Reload the page after success
                                                        });
                                                    } else {
                                                        Swal.fire({
                                                            title: "Error!",
                                                            text: response.message,
                                                            icon: "error"
                                                        });
                                                    }
                                                },
                                                error: function(xhr, status, error) {
                                                    Swal.fire({
                                                        title: "Error!",
                                                        text: "Terjadi kesalahan saat menghapus data.",
                                                        icon: "error"
                                                    });
                                                }
                                            });
                                        }
                                    });
                                });
                            });
                        </script>
                        {{-- <form action="/hapus_data_menu/{{ $item['id'] }}" method="POST" class="mt-2" id="delete-form">
                            @csrf
                            <button class="btn btn-outline-danger btn-sm action-button" id="delete-button" > 
                                <i class="bi bi-trash"></i> Hapus Menu
                            </button>
                        </form> --}}
                        {{-- <script type="text/javascript">
                            $(document).ready(function() {
                                  $('#delete-button').on('click', function(e) {
                                  e.preventDefault();
                      
                                  Swal.fire({
                                    title: "Are you sure?",
                                    text: "Anda ingin menghapus menu ini?",
                                    icon: "warning",
                                    showCancelButton: true,
                                    confirmButtonColor: "#3085d6",
                                    cancelButtonColor: "#d33",
                                    confirmButtonText: "Yes, delete it!"
                                  }).then((result) => {
                                    if (result.isConfirmed) {
                                      $('#delete-form').submit();
                                      Swal.fire({
                                        title: "Deleted!",
                                        text: "Your file has been deleted.",
                                        icon: "success"
                                      });
                                    }
                                  });
                                })
                            });
                        </script> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
{{-- <table class="table table-hover" style="border-radius: 50px">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Treatment</th>
            <th scope="col">Gambar</th>
            <th scope="col">Harga</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        @foreach ($data as $item)
            <tr>
                <th scope="row">{{ $no }}</th> 
                <td>{{ $item->nama_treatment }}</td>
                <td>
                    <img src="{{ asset($item->image) }}" alt="" style="width: 100px; height: 100px;">
                </td>
                <td>{{ $item->harga }}</td>
                <td>{{ $item->deskripsi}}</td>
                <td>
                    <div class="btn-group">
                        <form action="/hapus_data_menu/{{ $item['id'] }}" method="POST">
                            @csrf
                            <a href="/edit_data_menu/{{ $item['id'] }}" class="btn btn-warning">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <button class="btn btn-danger" type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                                <i class="bi bi-trash"></i>
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
@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<style>
    .description {
    display: -webkit-box;
    -webkit-line-clamp: 3; /* Batasi deskripsi menjadi 3 baris */
    -webkit-box-orient: vertical;  
    overflow: hidden;
    text-overflow: ellipsis;
    height: auto; /* Pastikan tinggi menyesuaikan dengan jumlah baris */
    margin-top: 0.5rem; /* Menambahkan margin atas jika diperlukan */
}

    .action-button {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 150px; /* Atur lebar sesuai kebutuhan */
    text-align: center;
}

    body{
        background:#eee
    }
    .ratings i{
        font-size: 16px;color: red
    }
    .strike-text{
        color: red;text-decoration: line-through
    }
    .product-image{
        width: 100%
    }
    .dot{
        height: 7px;
        width: 7px;
        margin-left: 6px;
        margin-right: 6px;
        margin-top: 3px;
        background-color: blue;
        border-radius: 50%;
        display: inline-block
    }
    .spec-1{
        color: #938787;
        font-size: 15px
    }
    h5{
        font-weight: 400
    }
    .para{
        font-size: 16px
    }
</style>

