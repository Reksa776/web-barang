<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Penerimaan Barang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        /* table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            text-align: left;
            padding: 8px;
            border: 1px solid black;
        }
        th {
            background-color: #f2f2f2;
        } */
        h2{
            text-align: center;
        }
    </style>
    <script>
        window.print()
    </script>
</head>
<body>
    @foreach ($barangKeluar as $barang)
    <h2>LAPORAN PENGELUARAN BARANG PT INVENTORI BARANG</h2>
    <div style="display: flex; justify-content: space-between;">
        <div>
            <p>Tanggal Penerimaan: {{$barang->tanggal}}</p>
        </div>
    </div>
    <table style="width: 400px; margin: 0 70px;">
        <tbody>
            <tr>
                <td>Nama Penerima</td>
                <td>: {{$barang->penerima}}</td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td>: {{$barang->nama_barang}}</td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td>: {{$barang->jumlah}}</td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td>: {{$barang->keterangan}}</td>
            </tr>
        </tbody>
    </table>
    @endforeach
</body>
</html>