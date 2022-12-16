@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                {{-- @include('layouts/_flash') --}}
                <div class="card">
                    <div class="card-header">
                        nambah Data Barang
                    </div>
                    <div class="card-body">
                        <form action="{{ route('user.update',$user->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label for="formName" class="form-label">Your Name</label>
                                <input type="text" class="form-control" id="formName" name="name" placeholder="Your Name" value="{{$user->name}}">
                            </div>
                            <div class="mb-3">
                                <label for="formEmail" class="form-label">Your Email</label>
                                <input type="email" class="form-control" id="formEmail"name="email" placeholder="name@example.com" value="{{$user->email}}">
                            </div>
                            <div class="mb-3">
                                <label for="formPassword" class="form-label">Your Password</label>
                                <input type="text" class="form-control" id="formPassword" name="role" placeholder="name@example.com" value="{{$user->role}}">
                            </div>
                            {{-- <div class="mb-3">
                                <label for="formRole" class="form-label">Your Role</label>
                                <select class="form-select" aria-label="Default select example" name="role" value="{{$user->role}}">
                                    <option selected>Role</option>
                                    <option value="user">User</option>
                                    <option value="admin">Admin</option>
                                    <option value="super_admin">Super Admin</option>
                                </select>
                            </div> --}}
                            <div class="mb-3">
                                <label for="formNumberPon" class="form-label">Your No Phone</label>
                                <input type="text" class="form-control" id="formNumberPon" placeholder="name@example.com" name="no_telepon" value="{{$user->no_telepon}}">
                            </div>
                            <div class="mb-3">
                                <label for="formNumberPon" class="form-label">Your No Polisi</label>
                                <input type="text" class="form-control" id="formNumberPon" placeholder="name@example.com" name="no_polisi" value="{{$user->no_polisi}}">
                            </div>
                            <div class="mb-3">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection