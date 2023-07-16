<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>No BK</th>
            <th>Barang</th>
            <th>Jumlah</th>
        </tr>

        @foreach($PengeluaranitemReski as $item)
        
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->nobk_reski }}</td>
            <td>{{ $item->barangid_reski }}</td>
            <td>{{ $item->jumlah_reski }}</td>
        </tr>

        @endforeach
    </table>
</body>