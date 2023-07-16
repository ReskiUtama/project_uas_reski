@extends('layout.app')
@section('title','BAGIAN ')

@section('content')

<body>
    <div class="card">
        <div class="card-body">
            <table class="table table-success table-striped table-hover">
 
        <tr class="text-center">
            <th>NO</th>
            <th>BAGIAN ID</th>
            <th>NAMA BAGIAN</th>
            <th>KEPALA BAGIAN </th>
            <th>TELEPHONE</th>
        </tr>

        @foreach($BagianReski as $key =>$row)
        
        <tr class="text-center align-middle">

        <th>{{ $key + 1 }}</th>
            <td>{{ $row->bagianid_reski }}</td>
            <td>{{ $row->nama_bagian_reski }}</td>
            <td>{{ $row->kepala_bagian_reski }}</td>
            <td>{{ $row->telepon_reski }}</td>
        </tr>

        @endforeach
    </table>
</body>
@endsection