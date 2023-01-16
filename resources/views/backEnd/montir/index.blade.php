@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Barang</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Barang v1</li>
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
                    Data Barang
                </div>
                <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#addMontir"><i class="nav-icon fas fa-plus"></i></button>
                @include('backEnd.montir.create')
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-middle" id="dataTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Telepon</th>
                                    <th>Alamat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($montir as $montirs)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $montirs->nama_montir }}</td>
                                        <td>{{ $montirs->tlp_montir}} </td>
                                        <td>{{ $montirs->alamat_montir }}</td>
                                        <td>
                                            <form action="{{route('montir.destroy',$montirs->id)}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="button" class="btn btn-sm btn-outline-success" data-toggle="modal" data-target="#editMontir-{{ $montirs->id }}"><i class="nav-icon fas fa-edit"></i></button>&nbsp;
                                            
                                            {{-- <a href="{{route('user.edit',$data->id)}}"
                                                class="btn btn-sm btn-outline-success">
                                            
                                                
                                            </a> | --}}
                                            {{-- <a href="{{ route('mobil.show', $data->id) }}"
                                                class="btn btn-sm btn-outline-warning">
                                                <i class="nav-icon fas fa-eye"></i>
                                                
                                            </a> --}}
                                                <button type="submit" class="btn btn-sm btn-outline-danger show_confirm" data-toggle="tooltip" title='Delete' >
                                                    <i class="nav-icon fas fa-trash-alt"></i> 
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    
                                    @include('backEnd.montir.edit')
                                    
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