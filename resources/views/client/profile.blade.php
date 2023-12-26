<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="./images/profile/logo.ico" type="image/x-icon">

  <!--
    - custom css link
  -->

  <link rel="stylesheet" href="{{ asset('css\top-bar.css') }}">

  <link rel="stylesheet" href="{{ asset('css\profile.css') }}">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>
  <section class="top-bar">
    <div class="container">
        <div class="row" >
            <div class="col-md-6">
                <ul class="top-bar__social-list">
                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>
            <div class="col-md-6">
                <div class="top-bar__links">
                    @if (!isset($_SESSION['userprofide'][ 'usernames']) )
                        <a href="{{ route('login') }}">Login</a>
                    @else
                    <a href="{{ route('profile') }}">{{ $_SESSION['userprofide'][ 'usernames'] }}</a>
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

            <div class="col-md-9 col-lg-8 ">
                <ul class="top-nav__menu">
                    <li class="active"><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('recipes') }}">Recipes</a></li>
                    <li><a href="{{ route('admin') }}">admin</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>

            <div class="col-2 col-md-1 col-lg-2">
                <div class="top-nav__search">
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
                <li><a href="index.html">Home</a></li>
                <li><a href="recipes.html">Recipes</a></li>
                <li class="active"><a href="recipe-detail.html">Recipe Detail</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

  <!--
    - #MAIN
  -->

  <main>

    <!--
      - #SIDEBAR
    -->

    <aside class="sidebar" data-sidebar>

      <div class="sidebar-info">

        <figure class="avatar-box">
          <img src="./images/profile/my-avatar.png" alt="Richard hanrick" width="80">
        </figure>

        <div class="info-content">
          <h1 class="name" title="Name">Richard hanrick</h1>

          <button class="follow-button" type="button">Theo Dõi</button>
          <h2>6</h2>
          <p>Follower</p>
        </div>

        <button class="info_more-btn" data-sidebar-btn>

          <ion-icon name="chevron-down"></ion-icon>
        </button>

      </div>

      <div class="sidebar-info_more">

        <!-- <div class="separator"></div> -->

        <ul class="contacts-list">

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Email</p>

              <a href="mailto:richard@example.com" class="contact-link">richard@example.com</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="phone-portrait-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Phone</p>

              <a href="tel:+12133522795" class="contact-link">+1 (213) 352-2795</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="calendar-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Birthday</p>

              <time datetime="1982-06-23">June 23, 1982</time>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Location</p>

              <address>Sacramento, California, USA</address>
            </div>

          </li>

        </ul>

        <div class="separator"></div>

        <ul class="social-list">

          <li class="social-item">
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

        </ul>

      </div>

    </aside>





    <!--
      - #main-content
    -->

    <div class="main-content">

      <!--
        - #NAVBAR
      -->
      <div class="portfolio" data-page="portfolio">

        <header>
          <h2 class="h2 article-title">Shared Food Categories</h2>
          <div >
            <a href="Post.html"><i class="fa-solid fa-plus"></i></a>
             <button  onclick="chuyenTrang()">Đăng Bài Mới </button>
          </div>

        </header>

        <section class="projects">



          <div class="filter-select-box">

            <ul class="select-list">

              <li class="select-item">
                <button data-select-item>All</button>
              </li>

              <li class="select-item">
                <button data-select-item>Web design</button>
              </li>

              <li class="select-item">
                <button data-select-item>Applications</button>
              </li>

              <li class="select-item">
                <button data-select-item>Web development</button>
              </li>

            </ul>

          </div>

          <ul class="project-list">

            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./images/profile/project-1.jpg" alt="finance" loading="lazy">
                </figure>

                <h3 class="project-title">Finance</h3>

                <p class="project-category">Web development</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./images/profile/project-2.png" alt="orizon" loading="lazy">
                </figure>

                <h3 class="project-title">Orizon</h3>

                <p class="project-category">Web development</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web design">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./images/profile/project-3.jpg" alt="fundo" loading="lazy">
                </figure>

                <h3 class="project-title">Fundo</h3>

                <p class="project-category">Web design</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="applications">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./images/profile/project-4.png" alt="brawlhalla" loading="lazy">
                </figure>

                <h3 class="project-title">Brawlhalla</h3>

                <p class="project-category">Applications</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web design">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./images/profile/project-5.png" alt="dsm." loading="lazy">
                </figure>

                <h3 class="project-title">DSM.</h3>

                <p class="project-category">Web design</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web design">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./images/profile/project-6.png" alt="metaspark" loading="lazy">
                </figure>

                <h3 class="project-title">MetaSpark</h3>

                <p class="project-category">Web design</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./images/profile/project-7.png" alt="summary" loading="lazy">
                </figure>

                <h3 class="project-title">Summary</h3>

                <p class="project-category">Web development</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="applications">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./images/profile/project-8.jpg" alt="task manager" loading="lazy">
                </figure>

                <h3 class="project-title">Task Manager</h3>

                <p class="project-category">Applications</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./images/profile/project-9.png" alt="arrival" loading="lazy">
                </figure>

                <h3 class="project-title">Arrival</h3>

                <p class="project-category">Web development</p>

              </a>
            </li>

          </ul>
        </section>
      </div>
    </div>
  </main>
  <!--
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>
  <script>
    function chuyenTrang() {
      // Sử dụng window.location.href để chuyển đến trang mới
      window.location.href = 'Post.html';
  }
  </script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>a
