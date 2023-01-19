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
    @include('sweetalert::alert')
    <div class="row justify-content-center">
        <div class="col-md-12">
            {{-- @include('layouts/_flash') --}}
            <div class="card">
                <div class="card-header">
                    Data Riwayat Service
                </div>
                {{-- <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#addService"><i class="nav-icon fas fa-plus"></i></button> --}}
                {{-- @include('backEnd.service.create') --}}
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-middle" id="dataTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>No Polisi</th>
                                    <th>Tgl Booking</th>
                                    <th>Jenis Service</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($transaksi as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->nama}}</td>
                                        <td>{{ $data->no_polisi }}</td>
                                        <td>{{ $data->tgl_boking }}</td>
                                        <td>{{ $data->service->nama_service }}</td>
                                        <td>Rp {{ number_format($data->total)}}</td>
                                        <td>{{$data->status}}</td>
                                        <td>
                                            <form action="" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="button" class="btn btn-sm btn-outline-warning" data-toggle="modal" data-target="#detaiTransaksi-{{$data->id}}"><i class="nav-icon fas fa-eye"></i></button>&nbsp;
                                                <button type="button" class="btn btn-sm btn-outline-success" data-toggle="modal" data-target="#updateTransaksi-{{ $data->id }}"><i class="nav-icon fas fa-edit"></i></button>&nbsp;
                                                <button type="button" class="btn btn-sm btn-outline-success" ><a href="{{route('laporan.show',$data->id)}}"><i class="nav-icon fas fa-edit"></i></a></button>&nbsp;
                                                {{-- <button type="submit" class="btn btn-sm btn-outline-danger show_confirm" data-toggle="tooltip" title='Delete' onclick="return confirm('apakah anda yakin?')">
                                                    <i class="nav-icon fas fa-trash-alt"></i> 
                                                </button> --}}
                                            </form>
                                        </td>
                                    </tr>
                                    
                                    @include('backEnd.transaksi.show')
                                    @include('backEnd.transaksi.edit')
                                    
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection