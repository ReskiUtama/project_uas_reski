@extends('layout.app')
@section('title','DATA BARANG')

@section('content')
<body>
    <div class="card">
        <div class="card-body">
            <table class="table table-success table-striped table-hover">
                <tr>
                    <tr class="text-center">
                    <th>NO</th>
                    <th>BARANG ID</th>
                    <th>NAMA BARANG</th>
                    <th>SATUAN</th>
                    <th>HARGA</th>
                    <th>NAMA KATEGORI</th>
                    <th>STOK</th>
                </tr>
        
                    @foreach($data as $key =>$row)

                    <tr class="text-center align-middle">
                    <th>{{ $key + 1 }}</th>
                    <td>{{ $row->barangid_reski }}</td>
                    <td>{{ $row->nama_barang_reski }}</td>
                    <td>{{ $row->satuan_reski }}</td>
                    <td>{{ $row->harga_reski }}</td>
                    <td>{{ $row->nama_kategori_reski }}</td>
                    <td>{{ $row->stok_reski }}</td>
                </tr>
            @endforeach
            </table>
        </div>
    </div>
    
</body>
@endsection