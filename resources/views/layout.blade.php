

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blog food</title>
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/4a9d18e4fd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- AOS Animate afdsfasdfadf dfa Library -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- CSS Stylesheets  -->

    <link rel="stylesheet" href="{{ asset('css/container.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <link rel="stylesheet" href="{{ asset('css/col.css') }}">
    <link rel="stylesheet" href="{{ asset('css/row.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/recipe-detail.css') }}">
    <link rel="stylesheet" href="{{ asset('css/recipes.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Calo.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css\profile.css') }}"> --}}


</head>

<body>
    <!-- Header start -->
        <header>

            <!-- Top-bar section start -->
            <section class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="top-bar__social-list">
                                <li>
                                    <a href="#"><i class="fab fa-pinterest"></i></a>
                                </li>

                                <li>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>

                                <li>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </li>

                                <li>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                </li>

                                <li>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                </li>

                                <li>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-md-6">
                            <div class="top-bar__links">
                                @if (!isset($_SESSION['userprofide'][ 'usernames'])&& !isset($_SESSION['userprofide']))
                                    <a href="{{ route('login') }}">Login</a>
                                @else
                                <a href="{{ route('profile', ['id'=>  $_SESSION['userprofide'][ 'nameIdentifiers']]) }}">{{ $_SESSION['userprofide'][ 'usernames'] }}</a>
                                <span>/</span>
                                <a href="{{ route('logout') }}">logout</a>
                                @endif

                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- Top-bar section end -->

            <!-- Navigation section start -->
            <nav class="top-nav">
                <div class="container">
                    <div class="row">
                        <div class="col-4 col-md-2 col-lg-2">
                            <a href="index.html" class="top-nav___link-logo">
                                <img class="top-nav__logo" src="./images/logo.svg" alt="">
                            </a>
                        </div>

                        <div class="col-md-9 col-lg-8">
                            <ul class="top-nav__menu">
                                <li class="active"><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('recipes') }}">Recipes</a></li>
                                @if ( isset($_SESSION['userprofide']))
                                @if ($_SESSION['userprofide']['role'] == 'Admin')
                                    <li><a href="{{ route('admin') }}">admin</a></li>
                                @endif
                                @endif
                                <li><a href="{{ route('Calo') }}">calo</a></li>
                                <li><a href="{{ route('about') }}">About</a></li>
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                            </ul>
                        </div>

                        <div class="col-2 col-md-1 col-lg-2">
                            <div class="top-nav__search" style="display: flex">
                                <input type="search">
                                <button>
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="top-nav__toggle" id="showMenu">
                                <div class="top-nav__toggle-bars">
                                    <div class="top-nav__toggle-bar" id="barTop"></div>
                                    <div class="top-nav__toggle-bar" id="hideBar"></div>
                                    <div class="top-nav__toggle-bar" id="barBottom"></div>
                                </div>
                            </div>
                        </div>

                        <ul class="top-nav__menu-toggle" id="navLinks">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="recipes.html">Recipes</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Navigation section end -->
        </header>
        @section('main')

        @show
        <footer>
            <section class="app-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="app-footer__logo-wrapper">
                                <img src="images/logo.svg" alt="">
                            </div>
                            <ul class="app-footer__social-list">
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="app-footer__right">
                                <ul class="app-footer__menu">
                                    <li class="active"><a href="#">Home</a></li>
                                    <li><a href="recipes.html">Recipes</a></li>
                                    <li><a href="recipe-detail.html">Recipe Detail</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                                <p>Copyright © 2020 All rights reserved | This template is made with <i
                                        class="far fa-heart"></i> by <a href="#">Colorlib</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </footer>
        <!-- Footer end -->

        <!-- Scroll-to-top button start -->
        <div class="scroll-to-top">
            <button id="scrollButton">
                <i class="fas fa-chevron-up"></i>
            </button>
        </div>
        <!-- Scroll-to-top button end -->

        <!-- Javascript -->
        <script src="{{ asset('js\main.js') }}"></script>
        <script src="{{ asset('js\knockout\knockout-latest.min.js') }}"></script>
        <script src="{{ asset('js\signalr\dist\browser\signalr.min.js') }}"></script>


        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init({
                easing: 'ease-in-out',
                duration: 600,
                once: true,
            });
        </script>
        {{-- comment --}}
           <script>

        var connection = new signalR.HubConnectionBuilder()
                                .withUrl('http://localhost:7114/SignalrHub')
                                .build();

                            connection.start().then(function () {
                                console.log('SignalR Started...');
                            }).catch(function (err) {
                                console.log('Không thể kết nối SignalR...');
                                return console.error(err);
                            });
        </script>

    </body>

    </html>
