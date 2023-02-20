@extends('frontEnd.layouts.indexx')
@section('banner')
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Profile</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="category.html">Profile</a>
                </nav>
            </div>
        </div>
    </div>
</section>
@endsection
@section('contentt')
@include('sweetalert::alert')
<div class="container mmt-4 mb-4">
    <h2 style="text-decoration-line: underline">Profile</h2>
    <div class="profile">
        <form action="{{route('profile.update',Auth::user()->id)}}" method="post">
            @csrf
            @method('put')
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" id="formName" name="name" placeholder="Your Name" value="{{Auth::user()->name}}" >
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="formEmail" name="email" placeholder="name@example.com" value="{{Auth::user()->email}}" readonly>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label class="form-label">No Telepon</label>
                        <input type="text" class="form-control" id="formNumberPon" placeholder="name@example.com" name="name" value="{{Auth::user()->name}}">

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label class="form-label">Alamat</label>
                        <input type="email" class="form-control" id="formNumberPon" placeholder="name@example.com" name="email" value="{{Auth::user()->email}}">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div> --}}
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label class="form-label">No Telepon</label>
                        <input type="text" class="form-control" id="formNumberPon" placeholder="name@example.com" name="no_telepon" value="{{Auth::user()->no_telepon}}">

                        @error('no_telepon')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label class="form-label">Alamat</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="alamat">{{Auth::user()->alamat}}</textarea>
                        @error('alamat')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <input type="hidden" name="role" value="{{Auth::user()->role}}">
            </div>
            {{-- <div class="row" id="ifYes" style="display: none">
                <div class="col">
                    <div class="mb-3">
                        <label for="old_password" class="form-label">Password Lama</label>
                        <input id="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" name="old_password" value="" autocomplete="old-password">

                        @error('old_password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="password" class="form-label">{{ __('New Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                    </div>
                </div>
                <div class="hidden">
                    <input type="hidden" class="form-control" id="formName" name="name" placeholder="Your Name" value="{{Auth::user()->name}}">
                    <input class="form-check-input" type="hidden" name="role" id="radioRole" value="{{Auth::user()->role}}">
                    <input type="hidden" class="form-control" id="formNumberPon" placeholder="name@example.com" name="no_polisi" value="{{Auth::user()->no_polisi}}">
                    <input type="hidden" class="form-control" id="formEmail" name="email" placeholder="name@example.com" value="{{Auth::user()->email}}">
                    {{-- <input type="hidden" class="form-control" id="formNumberPon" placeholder="name@example.com" name="no_telepon" value="{{Auth::user()->no_telepon}}"> --}
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group-row ">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Ganti Password</label>
                        <input type="radio" name="yesno" id="yesCheck" onclick="javascript:yesNoCheck();" style="
                        -ms-transform: scale(1.5); /* Untu IE  */
                        -webkit-transform: scale(1.5); /* untuk Chrome, Mozilla,Safari, Opera */
                        transform: scale(1.5);">&nbsp;&nbsp;<span>Iya</span>&nbsp;&nbsp;
                        <input type="radio" name="yesno" id="noCheck" onclick="javascript:yesNoCheck();" style="
                        -ms-transform: scale(1.5); /* Untu IE  */
                        -webkit-transform: scale(1.5); /* untuk Chrome, Mozilla,Safari, Opera */
                        transform: scale(1.5);" checked>&nbsp;&nbsp;<span>Tidak</span>
                    </div>
                </div>--}}
                <div class="col-6">
                    <div class="text-right mt-3 mb-4 mr-2">
                        <button type="submit" class="btn btn-primary">Save</button>&nbsp;
                    </div>
                </div>
            </div> 

        </form>
    </div>
</div>
<script type="text/javascript">
    function yesNoCheck() {
        if (document.getElementById('yesCheck').checked) {
            document.getElementById('ifYes').style.display = 'flex';
        } else {
            document.getElementById('ifYes').style.display = 'none';
        }
    }

</script>
@endsection
