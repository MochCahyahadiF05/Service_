<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Struk Pembayaran {{$transaksi->nama}} </title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <style>
        *{
            font-size: 10px;
        }
         .table{
            width: 100%;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <div class="mt-4">
        <div class="row">
            <div class="col">Assalaam Service</div>
            <div class="col" align="right">logo</div>
        </div>
        <div class="row">
            <div class="col"> 
                Jl. Situ Tarate Jl. Cibaduyut, Cangkuang Kulon <br>
                Telp 021-213-123 / 0812-3141-4214
            </div>
        </div>
        <div class="mt-3">
            <center>
                <h2><b>Nota Pembayaran</b></h2>
            </center>
            <div class="row mt-3">
                <div class="col">
                    <table>
                        <tr>
                            <td>No Polisi</td>
                            <td>:</td>
                            <td>D 1213 za</td>
                        </tr>
                        <tr>
                            <td>Nama Mekanik</td>
                            <td>:</td>
                            <td>D 1213 za</td>
                        </tr>
                    </table>
                </div>
                <div class="col">
                    <table>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td>Nama</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td>Alamat</td>
                        </tr>
                        <tr>
                            <td>No Telepon</td>
                            <td>:</td>
                            <td>No Telepon</td>
                        </tr>
                    </table>
                </div>
                <hr class="mt-2">
            </div>
            <div class="ml-">
                <table class="table table-resposive">
                    <tr>
                        <th>No</th>
                        <th>Deskription Service</th>
                        <th>Harga Satuan</th>
                        <th>Qty</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Service Ringan</td>
                        <td>Rp. 75.000</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Oli Dunh</td>
                        <td>Rp. 30.000</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td colspan="2" align="right">Total Part</td>
                        <td colspan="2" align="right">Rp 21</td>
                    </tr>
                    <tr>
                        <td colspan="2" align="right">Grand Total</td>
                        <td colspan="2" align="right">Rp 21</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script>
        window.print();
    </script>
</body>
</html>
