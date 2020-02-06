<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>People</title>

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

            <!-- banner section start -->
                <section class="people-banner">
                    <img src="{{ asset('img/left.jpg') }}" alt="">
                    <div class="banner-button-section">
                        <h2 href="#">people</h2>
                    </div>
                </section>
            <!-- banner section end -->

            <!-- content section start -->
                <section class="content container">
                    <div class="content-head isotop-nav">
                        <li>poor</li>
                        <li>handicap</li>
                        <li>mental</li>
                        <li>jobless</li>
                        <li>other</li>
                        <li class="search-box">
                            <input type="text" class="search">
                            <button class="search-btn"><i class="fas fa-search"></i></button>
                        </li>
                    </div>
                    <div class="main-content">

                        <div class="main-box">
                            <div class="people-img"><img src="{{ asset('img/people/t-1.jpg') }}" alt=""></div>
                            <div class="hover"></div>
                            <div class="info-box">
                                <h2 class="name">Abdur Rohim</h2>
                                <div class="info">
                                    some information for people. some information for people. some information for people.
                                </div>
                                <button class="see-details" type="button" data-toggle="modal" data-target="#people-profile">see details</button>
                            </div>
                        </div>

                        <div class="main-box">
                            <div class="people-img"><img src="{{ asset('img/people/t-2.jpg') }}" alt=""></div>
                            <div class="hover"></div>
                            <div class="info-box">
                                <h2 class="name">Abdur Rohim</h2>
                                <div class="info">
                                    some information for people. some information for people. some information for people.
                                </div>
                                <button class="see-details" type="button" data-toggle="modal" data-target="#people-profile">see details</button>
                            </div>
                        </div>

                        <div class="main-box">
                            <div class="people-img"><img src="{{ asset('img/people/t-3.jpg') }}" alt=""></div>
                            <div class="hover"></div>
                            <div class="info-box">
                                <h2 class="name">Abdur Rohim</h2>
                                <div class="info">
                                    some information for people. some information for people. some information for people.
                                </div>
                                <button class="see-details" type="button" data-toggle="modal" data-target="#people-profile">see details</button>
                            </div>
                        </div>

                        <div class="main-box">
                            <div class="people-img"><img src="{{ asset('img/people/t-2.jpg') }}" alt=""></div>
                            <div class="hover"></div>
                            <div class="info-box">
                                <h2 class="name">Abdur Rohim</h2>
                                <div class="info">
                                    some information for people. some information for people. some information for people.
                                </div>
                                <button class="see-details" type="button" data-toggle="modal" data-target="#people-profile">see details</button>
                            </div>
                        </div>

                        <div class="main-box">
                            <div class="people-img"><img src="{{ asset('img/people/t-1.jpg') }}" alt=""></div>
                            <div class="hover"></div>
                            <div class="info-box">
                                <h2 class="name">Abdur Rohim</h2>
                                <div class="info">
                                    some information for people. some information for people. some information for people.
                                </div>
                                <button class="see-details" type="button" data-toggle="modal" data-target="#people-profile">see details</button>
                            </div>
                        </div>

                        <div class="main-box">
                            <div class="people-img"><img src="{{ asset('img/people/t-3.jpg') }}" alt=""></div>
                            <div class="hover"></div>
                            <div class="info-box">
                                <h2 class="name">Abdur Rohim</h2>
                                <div class="info">
                                    some information for people. some information for people. some information for people.
                                </div>
                                <button class="see-details" type="button" data-toggle="modal" data-target="#people-profile">see details</button>
                            </div>
                        </div>

                        <div class="main-box">
                            <div class="people-img"><img src="{{ asset('img/people/tt.jpg') }}" alt=""></div>
                            <div class="hover"></div>
                            <div class="info-box">
                                <h2 class="name">Abdur Rohim</h2>
                                <div class="info">
                                    some information for people. some information for people. some information for people.
                                </div>
                                <button class="see-details" type="button" data-toggle="modal" data-target="#people-profile">see details</button>
                            </div>
                        </div>

                        <div class="main-box">
                            <div class="people-img"><img src="{{ asset('img/people/t-3.jpg') }}" alt=""></div>
                            <div class="hover"></div>
                            <div class="info-box">
                                <h2 class="name">Abdur Rohim</h2>
                                <div class="info">
                                    some information for people. some information for people. some information for people.
                                </div>
                                <button class="see-details" type="button" data-toggle="modal" data-target="#people-profile">see details</button>
                            </div>
                        </div>

                        <div class="main-box">
                            <div class="people-img"><img src="{{ asset('img/people/t-1.jpg') }}" alt=""></div>
                            <div class="hover"></div>
                            <div class="info-box">
                                <h2 class="name">Abdur Rohim</h2>
                                <div class="info">
                                    some information for people. some information for people. some information for people.
                                </div>
                                <button class="see-details" type="button" data-toggle="modal" data-target="#people-profile">see details</button>
                            </div>
                        </div>

                        <div class="main-box">
                            <div class="people-img"><img src="{{ asset('img/people/t-2.jpg') }}" alt=""></div>
                            <div class="hover"></div>
                            <div class="info-box">
                                <h2 class="name">Abdur Rohim</h2>
                                <div class="info">
                                    some information for people. some information for people. some information for people.
                                </div>
                                <button class="see-details" type="button" data-toggle="modal" data-target="#people-profile">see details</button>
                            </div>
                        </div>

                        <div class="main-box">
                            <div class="people-img"><img src="{{ asset('img/people/t-3.jpg') }}" alt=""></div>
                            <div class="hover"></div>
                            <div class="info-box">
                                <h2 class="name">Abdur Rohim</h2>
                                <div class="info">
                                    some information for people. some information for people. some information for people.
                                </div>
                                <button class="see-details" type="button" data-toggle="modal" data-target="#people-profile">see details</button>
                            </div>
                        </div>

                        <div class="main-box">
                            <div class="people-img"><img src="{{ asset('img/people/tt.jpg') }}" alt=""></div>
                            <div class="hover"></div>
                            <div class="info-box">
                                <h2 class="name">Abdur Rohim</h2>
                                <div class="info">
                                    some information for people. some information for people. some information for people.
                                </div>
                                <button class="see-details" type="button" data-toggle="modal" data-target="#people-profile">see details</button>
                            </div>
                        </div>

                    </div>

                    <nav aria-label="Page navigation example pagination">
                        <ul class="pagination justify-content-center">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
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
