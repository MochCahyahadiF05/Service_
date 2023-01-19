@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Riwayat Service</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Riwayat Service v1</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection
@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                            <table class="table align-middle">
                                <thead>
                                    <tr>
                                        <th>Tanggal Awal</th>
                                        <th>Tanggal Akhir</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                            <form action="{{ route('laporan.print') }}" method="post">
                                            <td><input type="date" name="tanggal_awal" style="border: none;border-bottom: 2px solid black"></td>
                                            <td><input type="date" name="tanggal_akhir" style="border: none;border-bottom: 2px solid black"></td>
                                            <td>
                                                    @csrf
                                                    <input type="submit" class="btn btn-sm btn-success" value="Print">
                                                </form>
                                            </td>
                                        </tr>
                                </tbody>
                            </table>
                        </div>
        </div>
    </div>
</div>
@endsection