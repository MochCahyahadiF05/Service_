@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Service</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Service v1</li>
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
                    Data Service
                </div>
                <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#addService"><i class="nav-icon fas fa-plus"></i></button>
                @include('backEnd.service.create')
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-middle" id="dataTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Harga</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($service as $services)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $services->nama_service }}</td>
                                        <td> Rp. {{ number_format($services->harga_service,0,",",".")}} </td>
                                        <td>{{$services->status}}</td>
                                        <td>
                                            <form action="{{route('service.destroy',$services->id)}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="button" class="btn btn-sm btn-outline-success" data-toggle="modal" data-target="#editService-{{ $services->id }}"><i class="nav-icon fas fa-edit"></i></button>&nbsp;
                                                <button type="submit" class="btn btn-sm btn-outline-danger show_confirm" data-toggle="tooltip" title='Delete' onclick="return confirm('apakah anda yakin?')">
                                                    <i class="nav-icon fas fa-trash-alt"></i> 
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    
                                    @include('backEnd.service.edit')
                                    
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