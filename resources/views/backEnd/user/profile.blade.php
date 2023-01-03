@extends('layouts.admin')

@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Account settings</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Account settings v1</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection
@section('content')
{{-- <div class="container">
    <div class="row">
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <span class="float-right text-sm text-primary mr-2"><b>{{Auth::user()->role}}</b></span>
<center>
    <img src="{{asset('dist/img/user1-128x128.jpg')}}" class="rounded-circle" alt="" sizes="" srcset="">
    <table class="mt-4 ml-2">
        <tr>
            <td>Name</td>
            <td> : </td>
            <td>{{Auth::user()->name}}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td> : </td>
            <td>{{Auth::user()->email}}</td>
        </tr>
        <tr>
            <td>No Telepon</td>
            <td> : </td>
            <td>{{Auth::user()->no_telepon}}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td> : </td>
        </tr>
        <tr>
            <td></td>
            <td colspan="2">{{Auth::user()->alamat}}</td>
        </tr>
    </table>
</center>
</div>
</div>
</div>
<div class="col-8">
    <div class="card">
        <div class="card-body">
            <ul class="nav nav-pills nav-justified">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Much longer nav link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li>
            </ul>
        </div>
    </div>
</div>
</div>
</div> --}}

<div class="layout-content">
    <!-- Content -->
    @include('sweetalert::alert')

    <div class="container-fluid flex-grow-1 container-p-y">
        <div class="card overflow-hidden">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-3 pt-0">
                    <div class="list-group list-group-flush account-settings-links">
                        <a class="list-group-item list-group-item-action active" data-toggle="list" href="#account-general">General</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-change-password">Change password</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="account-general">
                            <form action="{{route('user.update',Auth::user()->id)}}" method="post">
                                @csrf
                                @method('put')
                                <div class="card-body media align-items-center">
                                    <img src="{{asset('dist/img/user1-128x128.jpg')}}" alt="" class="d-block ui-w-80 rounded-circle">
                                    <div class="media-body ml-4">
                                        <label class="btn btn-outline-primary">
                                            Upload new photo
                                            {{-- <input type="file" class="form-control"> --}}
                                        </label> &nbsp;
                                    </div>
                                </div>
                                <hr class="border-light m-0">

                                <div class="card-body">
                                    {{-- <div class="form-group">
                                    <label class="form-label">Username</label>
                                    <input type="text" class="form-control mb-1" value="{{Auth::user()->name}}">
                                </div> --}}
                                <div class="form-group">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" id="formName" name="name" placeholder="Your Name" value="{{Auth::user()->name}}">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">E-mail</label>
                                    <input type="email" class="form-control" id="formEmail" name="email" placeholder="name@example.com" value="{{Auth::user()->email}}">
                                    {{-- <div class="alert alert-warning mt-3">
                                            Your email is not confirmed. Please check your inbox.<br>
                                            <a href="javascript:void(0)">Resend confirmation</a>
                                        </div> --}}
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">No Telepon</label>
                                    <input type="text" class="form-control" id="formNumberPon" placeholder="name@example.com" name="no_telepon" value="{{Auth::user()->no_telepon}}">

                                    @error('no_telepon')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Alamat</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat">{{Auth::user()->alamat}}</textarea>
                                    @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <input class="form-check-input" type="hidden" name="role" id="radioRole" value="{{Auth::user()->role}}">
                                    <input type="hidden" class="form-control" id="formNumberPon" placeholder="name@example.com" name="no_polisi" value="{{Auth::user()->no_polisi}}">
                                </div>
                        </div>
                        <div class="text-right mt-3 mb-4 mr-2">
                            <button type="submit" class="btn btn-primary">Save</button>&nbsp;
                        </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="account-change-password">
                        <form action="{{route('user.update',Auth::user()->id)}}" method="post">
                            @csrf
                            @method('put')
                            <div class="card-body pb-2">

                                <div class="form-group">
                                    <label class="form-label">Current password</label>
                                    <input id="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" name="old_password" autocomplete="old-password">

                                    @error('old_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="form-label">New password</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Repeat new password</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                                </div>
                                <div class="hidden">
                                    <input type="hidden" class="form-control" id="formName" name="name" placeholder="Your Name" value="{{Auth::user()->name}}">
                                    <input class="form-check-input" type="hidden" name="role" id="radioRole" value="{{Auth::user()->role}}">
                                    <input type="hidden" class="form-control" id="formNumberPon" placeholder="name@example.com" name="no_polisi" value="{{Auth::user()->no_polisi}}">
                                    <input type="hidden" class="form-control" id="formEmail" name="email" placeholder="name@example.com" value="{{Auth::user()->email}}">
                                    <input type="hidden" class="form-control" id="formNumberPon" placeholder="name@example.com" name="no_telepon" value="{{Auth::user()->no_telepon}}">
                                </div>

                            </div>
                            <div class="text-right mt-3 mb-4 mr-2">
                                <button type="submit" class="btn btn-primary">Save</button>&nbsp;
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="text-right mt-3">
            <button type="button" class="btn btn-primary">Save changes</button>&nbsp;
            <button type="button" class="btn btn-default">Cancel</button>
        </div> --}}
</div>
@endsection
