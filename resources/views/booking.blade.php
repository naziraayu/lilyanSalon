@extends ('template')

@section('content')
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg 12">
                <h3 class="page-header"><i class="icon_document_alt"></i>Booking</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('dashboard') }}"><i class="bi bi-house-door"></i></a></li>
                    <li class="breadcrumb-item active">Booking</li>
                    {{-- <li class="breadcrumb-item active">Default</li> --}}
                </ol>
            </div>
        </div>
    </section>
</section>  
<table class="table table-hover" style="border-radius: 50px">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Customer</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Jam</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        @foreach ($data as $item)
            <tr>
                <th scope="row">{{ $no }}</th> 
                {{-- @foreach ($data2 as $item2) --}}
                <td>{{ $item->nama_lengkap }}</td>
                {{-- @endforeach --}}
                <td>{{ $item->tanggal }}</td>
                <td>{{ $item->jam }}</td>
                <td>
                    <div class="btn-group">
                        <form action="/hapus_data_book/{{ $item['id'] }}" method="POST">
                            @csrf
                            <a href="{{ route('transaksi', $item->id) }}" class="btn btn-success">
                                <i class="bi bi-cash"></i>
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
</table>
@endsection
 