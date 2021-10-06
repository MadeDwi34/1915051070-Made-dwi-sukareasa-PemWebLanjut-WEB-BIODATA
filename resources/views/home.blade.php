@extends('layout')

@section('home')
<header class="header" id="navbar-collapse-toggle">
    <!-- Fixed Navigation Starts -->
    <ul class="icon-menu d-none d-lg-block revealator-slideup revealator-once revealator-delay1">
        <li class="icon-box active">
            <i class="fa fa-home"></i>
            <a href="/">
                <h2>Home</h2>
            </a>
        </li>
        <li class="icon-box">
            <i class="fa fa-user"></i>
            <a href="/about">
                <h2>About</h2>
            </a>
        </li>
    </header>
<!-- Main Content Starts -->
<section class="container-fluid main-container container-home p-0 revealator-slideup revealator-once revealator-delay1">
    <div class="color-block d-none d-lg-block"></div>
    <div class="row home-details-container align-items-center">
        <div class="col-lg-4 bg position-fixed d-none d-lg-block"></div>
        <div class="col-12 col-lg-8 offset-lg-4 home-details text-left text-sm-center text-lg-left">
            <div>
                <img src="img/dk.png" class="img-fluid main-img-mobile d-none d-sm-block d-lg-none" alt="my picture" />
                <h6 class="text-uppercase open-sans-font mb-0 d-block d-sm-none d-lg-block">Halo Sahabat!</h6>
                <h1 class="text-uppercase poppins-font"><span>Perkenalkan Saya </span> {{ $nama }}</h1>
                <p class="open-sans-font">Saya Adalah Mahasiswa Universitas Pendidikan Ganesha yang saat ini sedang menghadapi semester 5 dengan sistem kuliah daring.</p>
                <a href="/about" class="btn btn-about">Tentang Saya</a>
            </div>
        </div>
    </div>
</section>
<!-- Main Content Ends -->

<!-- Template JS Files -->
<script src="js/jquery-3.5.0.min.js"></script>
<script src="js/styleswitcher.js"></script>
<script src="js/preloader.min.js"></script>
<script src="js/fm.revealator.jquery.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/cbpGridGallery.js"></script>
<script src="js/jquery.hoverdir.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/custom.js"></script>

</body>


<!-- Mirrored from slimhamdi.net/tunis/dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Mar 2021 11:57:16 GMT -->
</html>

@endsection

