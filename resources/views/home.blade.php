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
                    <div class="small-box bg-secondary">
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
                {{-- open --}}
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{$transaksi}}</h3>

                            <p>Pesanan Bulan ini</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <a href="{{route('montir.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                {{-- close --}}
                {{-- open --}}
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{$transaksii}}</h3>

                            <p>pesanan dicancel bulan ini</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <a href="{{route('montir.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                {{-- close --}}

            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-9 col-6">
                    <canvas id="myChart" height="100px"></canvas>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{$transaksiii}}</h3>

                            <p>pesanan Selesai bulan ini</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <a href="{{route('montir.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script type="text/javascript">
    var labels =  {{ Js::from($labels) }};
    var selesai =  {{ Js::from($selesais) }};
    var booking =  {{ Js::from($bookings) }};
    var cancel =  {{ Js::from($cancels) }};
    var p =  {{ Js::from($p) }};
  
    const data = {
        labels: labels,
        datasets: [
            {
                label: 'Transaksi',
                backgroundColor: 'purple',
                borderColor: 'purple',
                data: p,
            },
            // {
            //     label: 'Selesai',
            //     backgroundColor: 'green',
            //     borderColor: 'green',
            //     data: selesai,
            // },
            // {
            //     label:'Booking',
            //     backgroundColor: 'yellow',
            //     borderColor: 'yellow',
            //     data: booking,
            // },
            // {
            //     label:'Cancel',
            //     backgroundColor: 'red',
            //     borderColor: 'red',
            //     data: cancel,
            // }
        ]
    };
  
    const config = {
        type: 'line',
        data: data,
        options: {
            responsive: true,
            plugins: {
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: 'Transaksi'
            }
            }
        },
    };
  
    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    );
</script>
@endsection
