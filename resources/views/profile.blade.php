<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>People Profile</title>

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
                <section class="content container">

                    <div class="people-profile">

                        <div class="img">
                            <img src="{{ asset('img/people/01.jpg') }}" alt="" class="people-img">
                        </div>

                        <table class="table table-sm table-bordered">
                            <tr>
                                <th>Name</th>
                                <td>prople name</td>
                            </tr>
                            <tr>
                                <th>NID</th>
                                <td>1234567890</td>
                            </tr>
                            <tr>
                                <th>Mother's name</th>
                                <td>mother's name</td>
                            </tr>
                            <tr>
                                <th>father's name</th>
                                <td>father's name</td>
                            </tr>
                            <tr>
                                <th>gender</th>
                                <td>gender</td>
                            </tr>
                            <tr>
                                <th>age</th>
                                <td>age number</td>
                            </tr>
                            <tr>
                                <th>marital status</th>
                                <td>marital status</td>
                            </tr>
                            <tr>
                                <th>family member</th>
                                <td>family member</td>
                            </tr>
                            <tr>
                                <th>occupation</th>
                                <td>occupation</td>
                            </tr>
                            <tr>
                                <th>contact no</th>
                                <td>01912345678</td>
                            </tr>
                            <tr>
                                <th>health status</th>
                                <td>health status</td>
                            </tr>
                            <tr>
                                <th>family problem/disaster</th>
                                <td>family problem/disaster</td>
                            </tr>
                            <tr>
                                <th>economical status</th>
                                <td>economical status</td>
                            </tr>
                            <tr>
                                <th>housing status</th>
                                <td>housing status</td>
                            </tr>
                            <tr>
                                <th>education qualification</th>
                                <td>education qualification</td>
                            </tr>
                            <tr>
                                <th>address</th>
                                <td>hous#01, Road#01, Dhaka bangladesh</td>
                            </tr>
                            <tr>
                                <th>support needed</th>
                                <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.</td>
                            </tr>
                        </table>

                        <button class="see-details donate">donate</button>

                    </div>

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

            <!-- Modal -->
                <div class="modal fade" id="people-profile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                    <div class="modal-header border-0">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">

                        <div class="people-profile">
                            <img src="{{ asset('img/people/01.jpg') }}" alt="">

                            <table class="table table-sm table-bordered">
                                <tr>
                                    <th>Name</th>
                                    <td>prople name</td>
                                </tr>
                                <tr>
                                    <th>NID</th>
                                    <td>1234567890</td>
                                </tr>
                                <tr>
                                    <th>Mother's name</th>
                                    <td>mother's name</td>
                                </tr>
                                <tr>
                                    <th>father's name</th>
                                    <td>father's name</td>
                                </tr>
                                <tr>
                                    <th>gender</th>
                                    <td>gender</td>
                                </tr>
                                <tr>
                                    <th>age</th>
                                    <td>age number</td>
                                </tr>
                                <tr>
                                    <th>marital status</th>
                                    <td>marital status</td>
                                </tr>
                                <tr>
                                    <th>family member</th>
                                    <td>family member</td>
                                </tr>
                                <tr>
                                    <th>occupation</th>
                                    <td>occupation</td>
                                </tr>
                                <tr>
                                    <th>contact no</th>
                                    <td>01912345678</td>
                                </tr>
                                <tr>
                                    <th>health status</th>
                                    <td>health status</td>
                                </tr>
                                <tr>
                                    <th>family problem/disaster</th>
                                    <td>family problem/disaster</td>
                                </tr>
                                <tr>
                                    <th>economical status</th>
                                    <td>economical status</td>
                                </tr>
                                <tr>
                                    <th>housing status</th>
                                    <td>housing status</td>
                                </tr>
                                <tr>
                                    <th>education qualification</th>
                                    <td>education qualification</td>
                                </tr>
                                <tr>
                                    <th>address</th>
                                    <td>hous#01, Road#01, Dhaka bangladesh</td>
                                </tr>
                                <tr>
                                    <th>support needed</th>
                                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.</td>
                                </tr>
                            </table>

                            <button class="see-details donate">donate</button>

                        </div>
                        
                    </div>
                    </div>
                </div>
                </div>

        </div>

        <!-- javascript section -->
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('front/js/custom.js') }}"></script>
    </body>
</html>
