<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>About us</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/styles.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/quary.css') }}">

    </head>
    <body>
        <div class="wrapper" id="app">

            <!-- header section start -->
                <header class="header">
                    <img src="{{ asset('img/logo.png') }}" alt="">
                </header>
            <!-- header section end -->

            <!-- Navigation section start -->
                <nav class="main-nav">
                    <div class="nav-btn">
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>
                    <ul class="c-nav-group">
                        <li class="c-nav-item">
                            <a href="/" class="c-nav-link">Home</a>
                        </li>
                        <li class="c-nav-item">
                            <a href="#" class="c-nav-link">How to donate</a>
                        </li>
                        <li class="c-nav-item">
                            <a href="#" class="c-nav-link">about us</a>
                        </li>
                        <li class="c-nav-item">
                            <a href="/contact" class="c-nav-link">contact</a>
                        </li>
                    </ul>
                </nav>
            <!-- Navigation section end -->

            <!-- content section start -->
                <section class="content container">

                    <strong>Company about us</strong>

                </section>
            <!-- content section end -->

            <!-- footer section start -->
                <footer class="footer">
                    <section class="footer-info">
                        <div class="company">
                            <h2 class="title">mukti</h2>
                            <div class="body">
                                <li class="address">House: T-28, Floor: 5A, Nurjahan Road, Dhaka-1205 kjshdfihv bahgdbfuyg jhsbdfuyhg jhbsdfuyg</li>
                                <li>+880 1945111111</li>
                                <li>info@gmail.com</li>
                            </div>
                        </div>
                        <div class="quick-link">
                            <h2 class="title">Quick link</h2>
                            <li><span>home</span></li>
                            <li><span>how to donate</span></li>
                            <li><span>about us</span></li>
                            <li><span>contact</span></li>
                        </div>
                        <div class="social-media">
                            <h2 class="title">social media</h2>
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </section>
                    
                    <div class="copyright container">
                        <hr>
                        Mukti © {{ now()->year }}. Powered by <a href="#">Md Hasibur Rahman</a>
                    </div>
                </footer>
            <!-- footer section end -->

        </div>

        <!-- javascript section -->
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('front/js/custom.js') }}"></script>
    </body>
</html>
