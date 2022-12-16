@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">User Management</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">User Management v1</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            {{-- @include('layouts/_flash') --}}
            <div class="card">
                <div class="card-header">
                    Data User
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-middle" id="dataTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>No Telepon</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($user as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->email }}</td>
                                        <td> {{$data->role}} </td>
                                        <td>{{ $data->no_telepon }}</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-outline-success" data-toggle="modal" data-target="#editUserData-{{ $data->id }}"><i class="nav-icon fas fa-edit"></i></button>&nbsp;
                                            <button type="button" class="btn btn-sm btn-outline-warning" data-toggle="modal" data-target="#showUserData-{{ $data->id }}"><i class="nav-icon fas fa-eye"></i></button>
                                            {{-- <a href="{{route('user.edit',$data->id)}}"
                                                class="btn btn-sm btn-outline-success">
                                                
                                                
                                            </a> | --}}
                                            {{-- <a href="{{ route('mobil.show', $data->id) }}"
                                                class="btn btn-sm btn-outline-warning">
                                                <i class="nav-icon fas fa-eye"></i>
                                                
                                            </a> --}}
                                        </td>
                                    </tr>
                                    @include('backEnd.user.edit')
                                    @include('backEnd.user.show')
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
