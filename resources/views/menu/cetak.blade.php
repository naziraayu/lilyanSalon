<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        table.static{
            position: relative;
            border: 1px solid #354353; /* Ubah warna border sesuai kebutuhan */
        }
    </style>
    <title>Cetak Menu</title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Daftar Menu Treatment</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
            <tr>
                <th>No.</th>
                <th>Nama Treatment</th>
                <th>Harga</th>
                <th>Deskripsi</th>
            </tr>
            @foreach($data as $key => $menu)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $menu->nama_treatment }}</td>
                <td>{{ $menu->harga }}</td>
                <td>{{ $menu->deskripsi }}</td>
            </tr>
            @endforeach
        </table>
    </div>

    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>
