<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
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

	<!-- Start Banner Area -->
	
    {{-- @include('frontEnd.layouts.includes.banner.login') --}}
    @yield('banner')
	<!-- End Banner Area -->

    {{-- Start content --}}
	<!--================Login Box Area =================-->
	

    @yield('contentt')
	<!--================End Login Box Area =================-->
    {{-- Start content --}}

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
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script src="{{asset('frontEnd/assets/js/gmaps.min.js')}}"></script>
    <script src="{{asset('frontEnd/assets/js/main.js')}}"></script>
    <script>
        // fungsi initialize untuk mempersiapkan peta
        function initialize() {
        var propertiPeta = {
            center:new google.maps.LatLng(-8.5830695,116.3202515),
            zoom:9,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        
        var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
        }

        // event jendela di-load  
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
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