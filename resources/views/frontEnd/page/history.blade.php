@extends('frontEnd.layouts.indexx')
@section('banner')
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Riwayat Pemesanan</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="category.html">Riwayat Pemesanan</a>
                </nav>
            </div>
        </div>
    </div>
</section>
@endsection

@section('contentt')
<div class="container">
    <table class="table table-borderless mt-4">
        <thead>
            <tr>
                <th>Nama</th>
                <th>No Polisi</th>
                <th>Tanggal Pesan</th>
                <th>Alamat</th>
                <th>Service</th>
                <th>Montir</th>
                <th>No Telepon Montir</th>
                <th>Total</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($transaksi as $data)
            <tr>
                <td>{{$data->nama}}</td>
                <td>{{$data->no_polisi}}</td>
                <td>{{$data->tgl_boking}}</td>
                <td>{{$data->alamat}}</td>
                <td>{{$data->service->nama_service}}</td>
                <td>{{$data->montir->nama_montir ?? ''}}</td>
                <td>{{$data->montir->tlp_montir ?? ''}}</td>
                <td>Rp. {{number_format($data->total,0,',','.')}}</td>
                <td>{{$data->status ?? 'Belum di Proses'}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
