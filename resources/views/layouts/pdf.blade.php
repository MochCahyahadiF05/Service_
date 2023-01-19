<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .table{
            width: 100%;
            border-collapse: collapse;
        }
        th,td {
            border-bottom: 1px solid #ddd;
            padding: 8px;
        }
        .total{
            background-color: rgb(82, 245, 82);
        }
        .no{
            border-right: 1px solid #ddd
        }
        .red{
            background-color: rgb(255, 0, 0);
            color:white;
        }
    </style>
</head>
<body>
    <table class="table" align="center">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>No Polisi</th>
                <th>Tanggal Booking</th>
                <th>Jenis Service</th>
                <th>No Telp</th>
                <th>Merk</th>
                <th>Qty</th>
                <th>Montir</th>
                <th>Alamat</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach($transaksi as $data)
            <tr @if($data->status != 'Selesai')
                class="red"
            @endif>
                {{-- @if($data->status == 'Selesai')     --}}
                <td class="no" >{{$no++}}</td>
                <td>{{$data->nama}}</td>
                <td>{{ $data->no_polisi }}</td>
                <td>{{ $data->tgl_boking }}</td>
                <td>{{ $data->service->nama_service }}</td>
                <td>{{ $data->no_hp }}</td>
                <td>{{ $data->barang->merk ?? '' }}</td>
                <td>{{ $data->jumlah }}</td>
                <td>{{ $data->montir->nama_montir }}</td>
                <td>{{ $data->alamat }}</td>
                <td>Rp.{{ number_format($data->total)}}</td>
                {{-- @endif --}}
            </tr>
            @endforeach
            <tr class="total">
                <td colspan="10" align="center"> Total Semua</td>
                <td>Rp.{{number_format($transaksi->sum('total')) }}</td>
            </tr>
        </tbody>
    </table>    
</body>
</html>
