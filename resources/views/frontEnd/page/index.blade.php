<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    {{-- <link rel="shortcut icon" href="{{asset('frontEnd/assets/img/fav.png')}}"> buat icon web --}}
    <!-- Author Meta -->
    <meta name="author" content="CodePixar">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Bursa Cell Phone</title>
    <!--
		CSS
		============================================= -->
    <link rel="stylesheet" href="{{asset('frontEnd/assets/css/linearicons.css')}}">
    <link rel="stylesheet" href="{{asset('frontEnd/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontEnd/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('frontEnd/assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('frontEnd/assets/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('frontEnd/assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('frontEnd/assets/css/nouislider.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontEnd/assets/css/ion.rangeSlider.css')}}" />
    <link rel="stylesheet" href="{{asset('frontEnd/assets/css/ion.rangeSlider.skinFlat.css')}}" />
    <link rel="stylesheet" href="{{asset('frontEnd/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('frontEnd/assets/css/main.css')}}">
    {{-- fontawesome --}}
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.2.1-web/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.2.1-web/css/solid.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.2.1-web/css/fontawesome.css')}}">
</head>

<body>

    <!-- Start Header Area -->

    @include('frontEnd.layouts.includes.navbar')
    <!-- End Header Area -->

    <!-- start banner Area -->
    <section class="banner-area">
        <div class="container">
            <div class="row fullscreen align-items-center justify-content-start">
                <div class="col-lg-12">
                    <div class="active-banner owl-carousel">
                        <!-- single-slide -->
                        <div class="row single-slide align-items-center d-flex">
                            <div class="col-lg-5 col-md-6">
                                <div class="banner-content">
                                    <h2 style="font-size: 35px">Service Motor <br>Tanpa Ke Bengkel!</h2>
                                    {{-- <p>Anda Tidak usah datang ke Bengkel untuk Service  Motor Karana anda tinggal memanggil kami kapanpun dan dimanapun </p> --}}
                                    <p>Anda Tidak Perlu Mengantri lagi Di Bengkel, dan Menunggu lama, kini Anda tinggal Memanggil Kami untuk datng ke tempat anda dimanapun dan kapanpun.</p>
                                    <div class="add-bag d-flex align-items-center">
                                        <a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
                                        <span class="add-text text-uppercase">Pesan Sekarang</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md">
                                <div class="banner-img">
                                    <center>
                                        <img class="" src="{{asset('frontEnd/assets/img/Motorbike2.png')}}" alt="" style="height: 650px; width:650px;">
                                    </center>
                                </div>
                            </div>
                        </div>
                        <!-- single-slide -->
                        <div class="row single-slide">
                            <div class="col-lg-7">
                                <div class="banner-img">
                                    <img class="img-fluid" src="" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->


    <!-- start product Area -->
    <section class="mb-5 mt-5">
        <div class="container">
            <div class="col">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Barang</a></li>
                            {{-- <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li> --}}
                            <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Booking Service</a></li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="activity">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, omnis placeat perspiciatis quia delectus voluptate autem voluptatum quam quas ipsa!
                            </div>
                            <!-- /.tab-pane -->
                            {{-- <div class="tab-pane" id="timeline">
                    <!-- The timeline -->
                    <div class="timeline timeline-inverse">
                      <!-- timeline time label -->
                      <div class="time-label">
                        <span class="bg-danger">
                          10 Feb. 2014
                        </span>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-envelope bg-primary"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 12:05</span>

                          <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                          <div class="timeline-body">
                            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                            weebly ning heekya handango imeem plugg dopplr jibjab, movity
                            jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                            quora plaxo ideeli hulu weebly balihoo...
                          </div>
                          <div class="timeline-footer">
                            <a href="#" class="btn btn-primary btn-sm">Read more</a>
                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                          </div>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-user bg-info"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>

                          <h3 class="timeline-header border-0"><a href="#">Sarah Young</a> accepted your friend request
                          </h3>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-comments bg-warning"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 27 mins ago</span>

                          <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                          <div class="timeline-body">
                            Take me to your leader!
                            Switzerland is small and neutral!
                            We are more like Germany, ambitious and misunderstood!
                          </div>
                          <div class="timeline-footer">
                            <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
                          </div>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline time label -->
                      <div class="time-label">
                        <span class="bg-success">
                          3 Jan. 2014
                        </span>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-camera bg-purple"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 2 days ago</span>

                          <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                          <div class="timeline-body">
                            <img src="https://placehold.it/150x100" alt="...">
                            <img src="https://placehold.it/150x100" alt="...">
                            <img src="https://placehold.it/150x100" alt="...">
                            <img src="https://placehold.it/150x100" alt="...">
                          </div>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <div>
                        <i class="far fa-clock bg-gray"></i>
                      </div>
                    </div>
                  </div>
                  <!-- /.tab-pane --> --}}

                            <div class="tab-pane" id="settings">
                                <form class="form-horizontal" method="POST" action="{{route('transaksi.store')}}">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="inputName" placeholder="Name" name="nama">
                                            @error('nama')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail" class="col-sm-2 col-form-label">No Plat</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control @error('no_polisi') is-invalid @enderror" id="inputEmail" placeholder="D 1234 TES" name="no_polisi">
                                            @error('no_polisi')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputSkills" class="col-sm-2 col-form-label">Tanggal Boking</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control @error('tgl_boking') is-invalid @enderror" id="inputSkills" placeholder="Skills" name="tgl_boking">
                                            @error('tgl_boking')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName2" class="col-sm-2 col-form-label">Alamat</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control @error('alamat') is-invalid @enderror" id="inputExperience" placeholder="Experience" name="alamat"></textarea>
                                            @error('alamat')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputSkills" class="col-sm-2 col-form-label">Jenis Service</label>
                                        <div class="col-sm-10">
                                            {{-- <input type="text" class="form-control" id="inputSkills" placeholder="Skills"> --}}
                                            <select class="form-contro @error('id_service') is-invalid @enderror" name="id_service">
                                                <option value="0">Pilih Komponen Request</option>
                                                @foreach($service as $services)
                                                <option value="{{$services->id}}">{{$services->nama_service }} | {{$services->harga_service}} </option>
                                                @endforeach
                                            </select>
                                            @error('id_service')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- <div class="form-group-row">
                                      <label for="inputExperience" class="col-sm-2 col-form-label">barang?</label>
                                      <input type="radio" name="yesno" id="yesCheck" onclick="javascript:yesNoCheck();">iya
                                      <input type="radio" name="yesno" id="noCheck" onclick="javascript:yesNoCheck();">no
                                    </div> --}}
                                    {{-- <span id="ifYes" style="display: none"> --}}
                                      <div class="form-group row">
                                        <label for="inputExperience" class="col-sm-2 col-form-label">Merk oli</label>
                                        <div class="col-sm-10">
                                            <select class="form-control @error('id_barang') is-invalid @enderror" name="id_barang">
                                                <option value="0">Pilih Komponen Request</option>
                                                @foreach($barang as $barangs)
                                                <option value="{{$barangs->id}}">{{$barangs->nama_barang }} | {{$barangs->harga_barang}} </option>
                                                @endforeach
                                            </select>
                                            @error('id_barang')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputSkills" class="col-sm-2 col-form-label">qty</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control @error('jumlah') is-invalid @enderror" id="inputSkills" placeholder="qty" name="jumlah">
                                            @error('jumlah')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- </span> --}}
                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-danger">pesan</button>
                                        </div>
                                    </div>
                                </form>
                                
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </section>
    <!-- end product Area -->



    <br>
    <br>
    <br>
    <br>

    <!-- start footer Area -->
    @include('frontEnd.layouts.includes.footer')
    <!-- End footer Area -->

    <script src="{{asset('frontEnd/assets/js/vendor/jquery-2.2.4.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="{{asset('frontEnd/assets/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontEnd/assets/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('frontEnd/assets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('frontEnd/assets/js/jquery.sticky.js')}}"></script>
    <script src="{{asset('frontEnd/assets/js/nouislider.min.js')}}"></script>
    {{-- <script src="{{asset('frontEnd/assets/js/countdown.js')}}"></script> --}}
    <script src="{{asset('frontEnd/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('frontEnd/assets/js/owl.carousel.min.js')}}"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="{{asset('frontEnd/assets/js/gmaps.min.js')}}"></script>
    <script src="{{asset('frontEnd/assets/js/main.js')}}"></script>
    <script type="text/javascript">
      function yesNoCheck(){
        if (document.getElementById('yesCheck').checked) {
          document.getElementById('ifYes').style.display='block';
        }
        else{
          document.getElementById('ifYes').style.display='none';
        }
      }
    </script>
</body>

</html>
