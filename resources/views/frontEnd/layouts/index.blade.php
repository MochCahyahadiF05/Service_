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
    <title>Service Home</title>
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
                                        <a class="add-btn" href="{{url('/transaksi')}}"><span class="lnr lnr-cross"></span></a>
                                        <span class="add-text text-uppercase">Pesan Sekarang</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6 ">
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

    <!-- start features Area -->
    <section class="features-area section_gap">
        <div class="container">
            <div class="row features-inner">
                <!-- single features -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="f-icon">
                            <img src="{{asset('frontEnd/assets/img/features/f-icon1.png')}}" alt="">
                        </div>
                        <h6>Free Delivery</h6>
                        <p>Free Shipping on all order</p>
                    </div>
                </div>
                <!-- single features -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="f-icon">
                            <img src="{{asset('frontEnd/assets/img/features/f-icon2.png')}}" alt="">
                        </div>
                        <h6>Return Policy</h6>
                        <p>Free Shipping on all order</p>
                    </div>
                </div>
                <!-- single features -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="f-icon">
                            <img src="{{asset('frontEnd/assets/img/features/f-icon3.png')}}" alt="">
                        </div>
                        <h6>24/7 Support</h6>
                        <p>Free Shipping on all order</p>
                    </div>
                </div>
                <!-- single features -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="f-icon">
                            <img src="{{asset('frontEnd/assets/img/features/f-icon4.png')}}" alt="">
                        </div>
                        <h6>Secure Payment</h6>
                        <p>Free Shipping on all order</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end features Area -->

    <!-- start product Area -->
    <section class="mb-5">
        
        <div class="container">
            <div class="title">
                <h1 style="font-weight: bold">Langkah Mudah<br>Panggil Mekanik</h1>
            </div>
            <div class="body mt-5">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card border-light mb-3" style="max-width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Pilih Perbaikan Kendaraan</h5>
                                <p class="card-text">Pilih Jenis Service Yang anda Inginkan, ceritakan masalahnya dan pilih part yang dibutuhkan. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-light mb-3" style="max-width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Pilih Tanggal,Waktu dan Lokasi</h5>
                                <p class="card-text">Mekanik kami akan datang sesuai tanggal, waktu dan tempat pilihan Anda </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-light mb-3" style="max-width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Duduk dan Santai Bersama keluarga</h5>
                                <p class="card-text">Tidak perlu pergi ke bengkel - cukup santai dan duduk manis di rumah.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end product Area -->

    <!-- Start exclusive deal Area -->
    <section class="mt-5">
        <div class="container">
            <div class="title">
                <h1 style="font-weight: bold">Testimoni<br>Dari Mereka</h1>
            </div>
            <div class="body mt-5">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                      <div class="card h-100">
                        <img src="{{asset('frontEnd/assets/img/narto.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Naruto</h5>
                          <p class="card-text">"Pelayanannya sanagat bagus,Mekaniknya ramah dan sangat hebat untuk memperbaikinya dan cepat. Pokonya sangat Menghemat waktu saya sebagai Kades Konoha, Mantullah."</p>
                        </div>
                        <div class="card-footer">
                          <small class="text-muted"><img src="{{asset('frontEnd/assets/img/bintang.png')}}" class="card-img-top" alt="..." style="width: 100px"> <span>5.0</span></small>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-100">
                        <img src="{{asset('frontEnd/assets/img/sakura.png')}}" class="card-img-top" alt="..." height="300px">
                        <div class="card-body">
                          <h5 class="card-title">Sakura</h5>
                          <p class="card-text">"Wah Ini pengalaman pertama saya bisa Service motor tanpa harus menunggu lama, Tinggal Pesan dan si Mekaniknya datang KeRumah ,ini bener-bener mempermudah saya, Apalagi Yang memesakan Sasuke-kun hahah"</p>
                        </div>
                        <div class="card-footer">
                          <small class="text-muted"><img src="{{asset('frontEnd/assets/img/bintang.png')}}" class="card-img-top" alt="..." style="width: 100px"> <span>5.0</span></small>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-100">
                        <img src="{{asset('frontEnd/assets/img/sasuke.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Sasuke</h5>
                          <p class="card-text">"ini sangat membantu saya karena bisa memanggil mekanik dimana pun dan kapan pun saat saya membutuhkan"</p>
                        </div>
                        <div class="card-footer">
                          <small class="text-muted"><img src="{{asset('frontEnd/assets/img/bintang.png')}}" class="card-img-top" alt="..." style="width: 100px"> <span>5.0</span></small>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </section>
    <!-- End exclusive deal Area -->

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
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script> --}}
    <script src="{{asset('frontEnd/assets/js/gmaps.min.js')}}"></script>
    <script src="{{asset('frontEnd/assets/js/main.js')}}"></script>
</body>
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/63bf915747425128790cfc35/1gmi4vhod';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
</html>
