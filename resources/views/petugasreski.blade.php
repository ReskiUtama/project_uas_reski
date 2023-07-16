@extends('layout.app')
@section('title','DATA PETUGAS')

@section('content')

<body>
    <div class="card">
        <div class="card-body">
        <table class="table table-success table-striped table-hover">
            <tr class="text-center">
            <th>NO</th>
            <th>PETUGAS ID</th>
            <th>NAMA PETUGAS</th>
            <th>ALAMAT</th>
            <th>HANDPHONE</th>
            <th>PASSWORD</th>
            <th>LEVEL</th>
        </tr>

            @foreach($PetugasReski as $key =>$row)
        
            <tr class="text-center align-middle">
            <th>{{ $key + 1 }}</th>
            <td>{{ $row->petugasid_reski }}</td>
            <td>{{ $row->nama_petugas_reski  }}</td>
            <td>{{ $row->alamat_reski }}</td>
            <td>{{ $row->handphone_reski  }}</td>
            <td>{{ $row->password_reski  }}</td>
            <td>{{ $row->level_reski  }}</td>
        </tr>

        @endforeach
    </table>
</body>
@endsection