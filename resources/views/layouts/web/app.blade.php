<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('web/css/bootstrap/bootstrap.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css">

    <!-- animation - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('web/automotive/css/aos.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('web/automotive/css/animate.css') }}">

    <!-- carousel - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('web/automotive/css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('web/automotive/css/slick-theme.css') }}">

    <!-- custom - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('web/css/custom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('web/css/datepicker.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('web/css/mdb/css/mdb.min.css') }}"> --}}

    <title>Rentalin Alat</title>
</head>

<body>
    <!-- preloader - start -->
    <div class="preloader">
        <div class="animation_preloader">
            <div class="spinner"></div>
            <p class="text-center">Loading</p>
        </div>
        <div class="loader">
            <div class="row vh-100">
                <div class="col-3 loader_section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader_section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader_section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader_section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- preloader - end -->

    @include('layouts.web.navbar')

    @yield('content')

    <section class="nullable"></section>
    {{-- FOOTER --}}
    <footer>
        <div class="container">
            <div class="row text-left">
                <div class="col-lg-4 col-sm-12">
                    <img src="{{ asset('web/images/logo.png') }}" alt="" width="257" height="44">
                    <p class="title=description mt-3">Jl Melati No. 5A, Surakarta</p>
                    <a href="mailto:rentalinalat@gmail.com" style="text-decoration: none;color: #0D0D0D;"><p class="title=description">rentalinalat@gmail.com</p></a>
                    <a href="https://wa.me/6288215380301" style="text-decoration: none;color: #0D0D0D;"><p class="title=description">0882-1538-0301</p></a>
                </div>
                <div class="col-lg-2 col-md-6 mt-3">
                    <span class="footer-title">Menu</span>
                    <a href="{{ route('home') }}" style="text-decoration: none;color: #0D0D0D;"><p class="title=description mt-3">Home</p></a>
                    <a href="{{ route('produk') }}" style="text-decoration: none;color: #0D0D0D;"><p class="title=description">Product</p></a>
                    <a href="" style="text-decoration: none;color: #0D0D0D;"><p class="title=description">Contact Us</p></a>
                </div>
                <div class="col-lg-2 col-md-6 mt-3">
                    <span class="footer-title">Kategori</span>
                    <a href="" style="text-decoration: none;color: #0D0D0D;"><p class="title=description mt-3">Multimedia</p></a>
                    <a href="" style="text-decoration: none;color: #0D0D0D;"><p class="title=description">PC & Laptop</p></a>
                    <a href="" style="text-decoration: none;color: #0D0D0D;"><p class="title=description">TV</p></a>
                    <a href="" style="text-decoration: none;color: #0D0D0D;"><p class="title=description">Audio</p></a>
                    <a href="" style="text-decoration: none;color: #0D0D0D;"><p class="title=description">Lainnya</p></a>
                </div>
                <div class="col-lg-4 mt-3">
                    <span class="footer-title">Newslatter</span>
                    <p class="title=description mt-3">Bergabunglah dengan email kami untuk menerima berita dan pembaruan terbaru dari tim kami.</p>
                    <form action="POST">
                        <div class="form_item">
                            <div class="position-relative">
                                <label for="email" class="input_icon"><i class="filter bi bi-envelope-fill"></i></label>
                                <input id="email" type="email" name="email" placeholder="Masukkan Email Anda">
                            </div>
                            <button class="btn btn-custom mt-3" type="submit">
                                Subscribe
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <hr style="border: 2px solid #dddddde1;">
            <div class="row mb-4">
                <div class="col-lg-6 mb-lg-1 mb-3 text-lg-start text-md-center text-center">
                    2022 © <a href="https://lookcreative.id/" style="text-decoration: none;color: #CC1522;">Look Creative.</a> all right reserved
                </div>
                <div class="col-lg-6 text-lg-end text-md-center text-center">
                    <a href="" style="text-decoration: none;"><i class="bi bi-instagram m-3" style="color: #CC1522;font-size: 20px;"></i></a>
                    <a href="" style="text-decoration: none;"><i class="bi bi-twitter m-3" style="color: #CC1522;font-size: 20px;"></i></a>
                    <a href="" style="text-decoration: none;"><i class="bi bi-whatsapp m-3" style="color: #CC1522;font-size: 20px;"></i></a>
                    <a href="" style="text-decoration: none;"><i class="bi bi-facebook m-3" style="color: #CC1522;font-size: 20px;"></i></a>
                </div>
            </div>
        </div>
    </footer>
    {{-- END FOOTER --}}

    {{-- Script --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

    <!-- fraimwork - jquery include -->
    <script src="{{ asset('web/automotive/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('web/automotive/js/popper.min.js') }}"></script>
    <script src="{{ asset('web/automotive/js/bootstrap.min.js') }}"></script>

    <!-- animation - jquery include -->
    <script src="{{ asset('web/automotive/js/aos.js') }}"></script>
    <script src="{{ asset('web/automotive/js/parallaxie.js') }}"></script>

    <!-- carousel - jquery include -->
    <script src="{{ asset('web/automotive/js/slick.min.js') }}"></script>

    <!-- popup - jquery include -->
    <script src="{{ asset('web/automotive/js/magnific-popup.min.js') }}"></script>

    <!-- select ontions - jquery include -->
    <script src="{{ asset('web/automotive/js/nice-select.min.js') }}"></script>

    <!-- isotope - jquery include -->
    <script src="{{ asset('web/automotive/js/isotope.pkgd.js') }}"></script>
    <script src="{{ asset('web/automotive/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('web/automotive/js/masonry.pkgd.min.js') }}"></script>

    <!-- google map - jquery include -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk2HrmqE4sWSei0XdKGbOMOHN3Mm2Bf-M&ver=2.1.6"></script>
    <script src="{{ asset('web/automotive/js/gmaps.min.js') }}"></script>

    <!-- pricing range - jquery include -->
    <script src="{{ asset('web/automotive/js/jquery-ui.js') }}"></script>

    <!-- counter - jquery include -->
    <script src="{{ asset('web/automotive/js/waypoint.js') }}"></script>
    <script src="{{ asset('web/automotive/js/counterup.min.js') }}"></script>

    <!-- contact form - jquery include -->
    <script src="{{ asset('web/automotive/js/validate.js') }}"></script>

    <!-- mobile menu - jquery include -->
    <script src="{{ asset('web/automotive/js/mCustomScrollbar.js') }}"></script>

    <!-- custom - jquery include -->
    <script src="{{ asset('web/automotive/js/custom.js') }}"></script>
    <script src="{{ asset('web/js/custom.js') }}"></script>
    <script>
        jQuery({ Counter: 1 }).animate({
        Counter: jQuery('.counter1').text()
            }, {
            duration: 5000,
            easing: 'swing',
            step: function() {
                jQuery('.counter1').text(Math.ceil(this.Counter).toLocaleString('de'));
            }  
        });
        jQuery({ Counter: 1 }).animate({
            Counter: jQuery('.counter2').text()
            }, {
            duration: 5000,
            easing: 'swing',
            step: function() {
                jQuery('.counter2').text(Math.ceil(this.Counter).toLocaleString('de'));
            }  
        });
    </script>
</body>

</html>
