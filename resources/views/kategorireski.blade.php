@extends('layout.app')
@section('title','KATEGORI BARANG')

@section('content')
<body>
    <div class="card">
    <div class="card-body">
    <table class="table table-success table-striped table-hover">
        <tr>

            <th>NO</th>
            <th>Nama Kategori</th>

        </tr>

        @foreach($KategoriReski as $key =>$row)
        

            <th>{{ $key + 1 }}</th>
            <td>{{ $row->nama_kategori_reski }}</td>

        </tr>

        @endforeach
    </table>
</body>
@endsection