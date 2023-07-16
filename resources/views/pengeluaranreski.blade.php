@extends('layout.app')
@section('title','PENGELUARAN ITEM')

@section('content')

<body>
    <div class="card">
        <div class="card-body">
        <table class="table table-success table-striped table-hover">
            <tr class="text-center">
            <th>NO</th>
            <th>NAMA PETUGAS</th>
            <th>BAGIAN</th>
            <th>TANGGAL</th>
            <th>JUMLAH</th>
            <th>STOK</th>
        </tr>

            @foreach($PengeluaranReski as $key =>$row)
        
            <tr class="text-center align-middle">
            <th>{{ $key + 1 }}</th>
            <td>{{ $row->nama_petugas_reski }}</td>
            <td>{{ $row->nama_bagian_reski }}</td>
            <td>{{ $row->tanggal_reski }}</td>
            <td>{{ $row->jumlah_reski }}</td>
            <td>{{ $row->stok_reski }}</td>
        </tr>

        @endforeach
    </table>
</body>
@endsection