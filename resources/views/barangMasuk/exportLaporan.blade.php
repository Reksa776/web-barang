<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Pemasukan Barang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
            border: 1px solid black;
        }

        th {
            background-color: #f2f2f2;
        }

        h2 {
            text-align: center;
        }
    </style>
    <script>
        window.print()
    </script>
</head>

<body>
    <h2>LAPORAN PEMASUKAN BARANG PT INVENTORI BARANG</h2>
    <div style="display: flex; justify-content: space-between;">
        <div>
            <p>Tanggal Cetak: {{date('d-m-Y')}}</p>
        </div>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="width: 10px">No</th>
                <th>Tanggal</th>
                <th>Nama Barang</th>
                <th>Jenis</th>
                <th>Merek</th>
                <th>Ukuran</th>
                <th>Jumlah</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($barangMasuk as $index => $Barang)

            <tr>
                <td>{{$index + 1}}</td>
                <td>{{$Barang->tanggal}}</td>
                <td>{{$Barang->nama_barang}}</td>
                <td>{{$Barang->jenis}}</td>
                <td>{{$Barang->merek}}</td>
                <td>{{$Barang->ukuran}}</td>
                <td>{{$Barang->jumlah}}</td>
                <td>{{$Barang->keterangan}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>