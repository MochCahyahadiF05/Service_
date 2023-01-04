@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard v1</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  {{-- <h3>{{$user->where('role','user')->get()->count()}}</h3> --}}
                  <h3>{{$user->get()->count()}}</h3>
                  {{-- <p>Pengguna</p> --}}
                  <p>User</p>
                </div>
                <div class="icon">
                  <i class="fa-solid fa-users"></i>
                </div>
                <a href="{{route('user.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>{{$montir->get()->count()}}</h3>
  
                  <p>Montir</p>
                </div>
                <div class="icon">
                  <i class="fas fa-user-cog"></i>
                </div>
                <a href="{{route('montir.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            {{-- <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>{{$mobil->get()->count()}}</h3>
  
                  <p>Mobil</p>
                </div>
                <div class="icon">
                  <i class="ion ion-android-car"></i>
                </div>
                <a href="{{ route('mobil.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div> --}}
            <!-- ./col -->
            {{-- <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>{{$contact->get()->count()}}</h3>
  
                  <p>Message</p>
                </div>
                <div class="icon">
                  <i class="ion ion-android-mail"></i>
                </div>
                <a href="{{ route('contact.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div> --}}
            <!-- ./col -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
</div>
@endsection
{{-- @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
