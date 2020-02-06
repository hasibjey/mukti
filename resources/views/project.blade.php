<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Project</title>

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
                            <a href="/about" class="c-nav-link">about us</a>
                        </li>
                        <li class="c-nav-item">
                            <a href="/contact" class="c-nav-link">contact</a>
                        </li>
                    </ul>
                </nav>
            <!-- Navigation section end -->

            <!-- content section start -->
                <section class="content container project-box">
                    <div class="content-head">
                        <h2 class="project-title">Project Name</h2>
                        {{-- <img src="{{ asset('img/right.jpg') }}" alt="" class="header-pic">
                        <h2 class="project-name">Project Name</h2> --}}
                    </div>
                    <div class="main-content project-content">
                        <div class="image-box">
                            <img src="{{ asset('img/right.jpg') }}" alt="">
                            <div class="sub-img">
                                <img src="{{ asset('img/right.jpg') }}" alt="">
                                <img src="{{ asset('img/left.jpg') }}" alt="">
                                <img src="{{ asset('img/right.jpg') }}" alt="">
                                <img src="{{ asset('img/left.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="description">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </div>

                    </div>

                    <button class="load-more">Donate Project</button>
                </section>

                <section class="content container">
                    <div class="content-head">
                        <h2 class="project-title">Project Name</h2>
                        {{-- <img src="{{ asset('img/right.jpg') }}" alt="" class="header-pic">
                        <h2 class="project-name">Project Name</h2> --}}
                    </div>
                    <div class="main-content project-content">
                        <div class="image-box">
                            <img src="{{ asset('img/right.jpg') }}" alt="">
                            <div class="sub-img">
                                <img src="{{ asset('img/right.jpg') }}" alt="">
                                <img src="{{ asset('img/left.jpg') }}" alt="">
                                <img src="{{ asset('img/right.jpg') }}" alt="">
                                <img src="{{ asset('img/left.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="description">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </div>

                    </div>

                    <button class="load-more">Donate Project</button>
                </section>
            <!-- content section end -->

            <!-- footer section start -->
                <footer class="footer">
                    <section class="footer-info">
                        <div class="company">
                            <h2 class="title">Address</h2>
                            <div class="body">
                                <li class="address">Hasney Tower (5th floor) 3/A KarwanBazar C/A, Dhaka-1215</li>
                                <li>+8801711535544</li>
                                <li>0255013604</li>
                                <li>thegoodearthworld@gmail.com</li>
                            </div>
                        </div>
                        <div class="quick-link">
                            {{-- <h2 class="title">Quick link</h2> --}}
                            <li><a href="#">home</a></li>
                            <li><a href="#">how to donate</a></li>
                            <li><a href="#">about us</a></li>
                            <li><a href="#">contact</a></li>
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
