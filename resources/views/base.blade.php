<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <title>Infinix force </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Sites meta Data -->
    <meta name="application-name"
          content="Infinix force - Crypto, BitCoin, Etheruim">
    <meta name="author" content="thetork">
    <meta name="keywords" content="Infinix force - Crypto, BitCoin, Etheruim">
    <meta name="description"
          content="">

    <!-- OG meta data -->
    <meta property="og:title"
          content="">
    <meta property="og:site_name" content=Infinix>
    <meta property="og:url" content="https://infinixforce.io/">
    <meta property="og:description"
          content="Welcome to Infinix,">
    <meta property="og:type" content="website">
    <meta property="og:image" content="assets/images/og.png">

    <link rel="shortcut icon" href="{{asset('images/preview.svg')}}" type="image/x-icon">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/swiper-bundle.min.css')}}">
    <!-- main css for template -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
</head>

<body>

<!-- ===============>> Preloader start here <<================= -->
<div class="preloader">
    <img src="{{asset('images/preview.svg')}}" alt="preloader icon">
</div>
<!-- ===============>> Preloader end here <<================= -->
@include('_partials._header')
@yield('content')
@include('_partials._footer')

<!-- ===============>> scrollToTop start here <<================= -->
<a href="#" class="scrollToTop scrollToTop--style1"><i class="fa-solid fa-arrow-up-from-bracket"></i></a>
<!-- ===============>> scrollToTop ending here <<================= -->





<!-- vendor plugins -->

<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/all.min.js')}}"></script>
<script src="{{asset('js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('js/aos.js')}}"></script>
<script src="{{asset('js/fslightbox.js')}}"></script>
<script src="{{asset('js/purecounter_vanilla.js')}}"></script>



<script src="{{asset('js/custom.js')}}"></script>


</body>

</html>
