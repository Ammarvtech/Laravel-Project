<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='copyright' content=''>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title Tag  -->
    <title>Eshop - eCommerce HTML5 Template.</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ url('frontend/assets/images/favicon.png') }}">
    <!-- Web Font -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">

    <!-- StyleSheet -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ url('frontend/assets/css/bootstrap.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ url('frontend/assets/css/magnific-popup.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('frontend/assets/css/font-awesome.css') }}">
    <!-- Fancybox -->
    <link rel="stylesheet" href="{{ url('frontend/assets/css/jquery.fancybox.min.css') }}">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="{{ url('frontend/assets/css/themify-icons.css') }}">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{ url('frontend/assets/css/niceselect.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ url('frontend/assets/css/animate.css') }}">
    <!-- Flex Slider CSS -->
    <link rel="stylesheet" href="{{ url('frontend/assets/css/flex-slider.min.css') }}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ url('frontend/assets/css/owl-carousel.css') }}">
    <!-- Slicknav -->
    <link rel="stylesheet" href="{{ url('frontend/assets/css/slicknav.min.css') }}">

    <!-- Eshop StyleSheet -->
    <link rel="stylesheet" href="{{ url('frontend/assets/css/reset.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/assets/style.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/assets/css/responsive.css') }}">



</head>

<body class="js">

    <!-- Header -->
    <header class="header shop">

        <div class="middle-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-12">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="/"><img src="{{ url('frontend/assets/images/logo.png') }}"
                                    alt="logo"></a>
                        </div>
                        <!--/ End Logo -->
                        <!-- Search Form -->
                        <div class="search-top">
                            <div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
                            <!-- Search Form -->
                            <div class="search-top">
                                <form class="search-form">
                                    <input type="text" placeholder="Search here..." name="search">
                                    <button value="search" type="submit"><i class="ti-search"></i></button>
                                </form>
                            </div>
                            <!--/ End Search Form -->
                        </div>
                        <!--/ End Search Form -->
                        <div class="mobile-nav"></div>
                    </div>
                    <div class="col-lg-8 col-md-7 col-12"
                        style="display: flex; justify-content: center; align-items: center">
                        <div class="nav-main">
                            <ul style="display: flex; justify-content: center; align-items: center">
                                @foreach ($categories as $category)
                                    <li class="nav-item" style="color: orange; font-size: 20px">
                                        <a href="{{ url('category/' . $category->id) }}"
                                            class="nav-link active">{{ $category->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-12">
                        <div class="right-bar">
                            <!-- Search Form -->
                            <div class="sinlge-bar">
                                <a href="#" class="single-icon"><i class="fa fa-user-circle-o"
                                        aria-hidden="true"></i></a>
                            </div>
                            <div class="sinlge-bar shopping">
                                <a href="/cart" class="single-icon"><i class="ti-bag"></i> <span
                                        class="total-count">{{ count((array) session('cart')) }}</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--/ End Header -->

    @yield('content')

    <!-- Start Footer Area -->
    <footer class="footer">
        <!-- Footer Top -->
        <div class="footer-top section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer about">
                            <div class="logo">
                                <a href="index.html"><img src="{{ url('frontend/assets/images/logo2.png') }}"
                                        alt="#"></a>
                            </div>
                            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium
                                alias sunt tempore cupiditate neque repudiandae animi, accusantium rem modi corrupti
                                eaque distinctio ab officiis molestias veniam. Quod nihil maiores perspiciatis!</p>
                            <p class="call">Got Question? Call us 24/7<span><a href="tel:123456789">+0123 456
                                        789</a></span></p>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-2 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer links">
                            <h4>Information</h4>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Faq</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Help</a></li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-2 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer links">
                            <h4>Customer Service</h4>
                            <ul>
                                <li><a href="#">Payment Methods</a></li>
                                <li><a href="#">Money-back</a></li>
                                <li><a href="#">Returns</a></li>
                                <li><a href="#">Shipping</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer social">
                            <h4>Get In Tuch</h4>
                            <!-- Single Widget -->
                            <div class="contact">
                                <ul>
                                    <li>NO. 342 - London Oxford Street.</li>
                                    <li>012 United Kingdom.</li>
                                    <li>info@eshop.com</li>
                                    <li>+032 3456 7890</li>
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                            <ul>
                                <li><a href="#"><i class="ti-facebook"></i></a></li>
                                <li><a href="#"><i class="ti-twitter"></i></a></li>
                                <li><a href="#"><i class="ti-flickr"></i></a></li>
                                <li><a href="#"><i class="ti-instagram"></i></a></li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Top -->
        <div class="copyright">
            <div class="container">
                <div class="inner">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="left">
                                <p>Copyright © 2020 - All Rights Reserved.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="right">
                                <img src="{{ url('frontend/assets/images/payments.png') }}" alt="#">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- /End Footer Area -->

    <!-- Jquery -->
    <script src="{{ url('frontend/assets/js/jquery.min.js') }}"></script>
    <script src="{{ url('frontend/assets/js/jquery-migrate-3.0.0.js') }}"></script>
    <script src="{{ url('frontend/assets/js/jquery-ui.min.js') }}"></script>
    <!-- Popper JS -->
    <script src="{{ url('frontend/assets/js/popper.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ url('frontend/assets/js/bootstrap.min.js') }}"></script>
    <!-- Color JS -->
    {{-- <script src="{{ url('frontend/assets/js/colors.js') }}"></script> --}}
    <!-- Slicknav JS -->
    <script src="{{ url('frontend/assets/js/slicknav.min.js') }}"></script>
    <!-- Owl Carousel JS -->
    <script src="{{ url('frontend/assets/js/owl-carousel.js') }}"></script>
    <!-- Magnific Popup JS -->
    <script src="{{ url('frontend/assets/js/magnific-popup.js') }}"></script>
    <!-- Waypoints JS -->
    <script src="{{ url('frontend/assets/js/waypoints.min.js') }}"></script>
    <!-- Countdown JS -->
    <script src="{{ url('frontend/assets/js/finalcountdown.min.js') }}"></script>
    <!-- Nice Select JS -->
    <script src="{{ url('frontend/assets/js/nicesellect.js') }}"></script>
    <!-- Flex Slider JS -->
    <script src="{{ url('frontend/assets/js/flex-slider.js') }}"></script>
    <!-- ScrollUp JS -->
    <script src="{{ url('frontend/assets/js/scrollup.js') }}"></script>
    <!-- Onepage Nav JS -->
    <script src="{{ url('frontend/assets/js/onepage-nav.min.js') }}"></script>
    <!-- Easing JS -->
    <script src="{{ url('frontend/assets/js/easing.js') }}"></script>
    <!-- Active JS -->
    {{-- <script src="js/active.js"></script> --}}


    <script type="text/javascript">
        $(".update-cart").change(function(e) {
            e.preventDefault();

            var ele = $(this);

            $.ajax({
                url: '{{ route('update.cart') }}',
                method: "patch",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("data-id"),
                    quantity: ele.parents("tr").find(".quantity").val()
                },
                success: function(response) {
                    window.location.reload();
                }
            });
        });


        $(".remove-from-cart").click(function(e) {
            e.preventDefault();

            var ele = $(this);

            if (confirm("Are you sure want to remove?")) {
                $.ajax({
                    url: '{{ route('remove.from.cart') }}',
                    method: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: ele.parents("tr").attr("data-id")
                    },
                    success: function(response) {
                        window.location.reload();
                    }
                });
            }
        });
    </script>
</body>

</html>
