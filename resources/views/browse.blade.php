<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--
    - primary meta tag
  -->
    <title>EduWeb - The Best Program to Enroll for Exchange</title>
    <meta name="title" content="EduWeb - The Best Program to Enroll for Exchange">
    <meta name="description" content="This is an education html template made by codewithsadee">

    <!--
    - favicon
  -->
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

    <!--
    - custom css link
  -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!--
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;500;600;700;800&family=Poppins:wght@400;500&display=swap"
        rel="stylesheet">

    <!--
    - preload images
  -->
    <link rel="preload" as="image" href="./assets/images/hero-bg.svg">
    <link rel="preload" as="image" href="./assets/images/hero-banner-1.jpg">
    <link rel="preload" as="image" href="./assets/images/hero-banner-2.jpg">
    <link rel="preload" as="image" href="./assets/images/hero-shape-1.svg">
    <link rel="preload" as="image" href="./assets/images/hero-shape-2.png">

</head>

<body id="top">

    <!--
    - #HEADER
  -->

    <header class="header" data-header>
        <div class="container">

            <a href="#" class="logo">
                {{-- <img src="./assets/images/logo.svg" width="162" height="50" alt="EduWeb logo"> --}}
            </a>

            <nav class="navbar" data-navbar>

                <div class="wrapper">
                    <a href="#" class="logo">
                        <img src="./assets/images/logo.svg" width="162" height="50" alt="EduWeb logo">
                    </a>

                    <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
                        <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
                    </button>
                </div>

                <ul class="navbar-list">

                    <li class="navbar-item">
                        <a href="{{ url('/') }}" class="navbar-link" data-nav-link>Home</a>
                    </li>

                    <li class="navbar-item">
                        <a href="#about" class="navbar-link" data-nav-link>About</a>
                    </li>



                </ul>

            </nav>

            <div class="header-actions">
                <button class="header-action-btn" aria-label="cart" title="Cart">
                    <ion-icon name="cart-outline" aria-hidden="true"></ion-icon>
                    <span class="btn-badge">0</span>
                </button>
                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="navbar-link">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="btn has-before">
                                <span class="span">Get Started</span>
                                <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                            </a>
                            {{-- @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                            @endif --}}
                        @endauth
                    </div>
                @endif

                <button class="header-action-btn" aria-label="open menu" data-nav-toggler>
                    <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
                </button>

            </div>

            <div class="overlay" data-nav-toggler data-overlay></div>

        </div>
    </header>
    <main>
        <article>

            <section class="section course" id="courses" aria-label="course">
                <div class="container">

                    <p class="section-subtitle">Popular Courses</p>

                    <h2 class="h2 section-title">Pick A Course To Get Started</h2>

                    <ul class="grid-list">

                        <li>
                            <a href="#">
                            <div class="course-card">

                                <figure class="card-banner img-holder" style="--width: 370; --height: 220;">
                                    <img src="./assets/images/course-1.jpg" width="370" height="220" loading="lazy"
                                        alt="Build Responsive Real- World Websites with HTML and CSS" class="img-cover">
                                </figure>

                                <div class="abs-badge">
                                    <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                                    <span class="span">3 Weeks</span>
                                </div>

                                <div class="card-content">

                                    <span class="badge">Beginner</span>

                                    <h3 class="h3">
                                        <a href="#" class="card-title">Build Responsive Real- World Websites
                                            with HTML and CSS</a>
                                    </h3>


                                    <data class="price" value="29">$29.00</data>

                                    <ul class="card-meta-list">

                                        <li class="card-meta-item">
                                            <ion-icon name="library-outline" aria-hidden="true"></ion-icon>

                                            <span class="span">8 Lessons</span>
                                        </li>

                                        <li class="card-meta-item">
                                            <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                                            <span class="span">20 Students</span>
                                        </li>

                                    </ul>

                                </div>

                            </div>
                            </a>
                        </li>

                        <li>
                            <div class="course-card">

                                <figure class="card-banner img-holder" style="--width: 370; --height: 220;">
                                    <img src="./assets/images/course-2.jpg" width="370" height="220"
                                        loading="lazy" alt="Java Programming Masterclass for Software Developers"
                                        class="img-cover">
                                </figure>

                                <div class="abs-badge">
                                    <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                                    <span class="span">8 Weeks</span>
                                </div>

                                <div class="card-content">

                                    <span class="badge">Advanced</span>

                                    <h3 class="h3">
                                        <a href="#" class="card-title">Java Programming Masterclass for Software
                                            Developers</a>
                                    </h3>


                                    <data class="price" value="49">$49.00</data>

                                    <ul class="card-meta-list">

                                        <li class="card-meta-item">
                                            <ion-icon name="library-outline" aria-hidden="true"></ion-icon>

                                            <span class="span">15 Lessons</span>
                                        </li>

                                        <li class="card-meta-item">
                                            <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                                            <span class="span">35 Students</span>
                                        </li>

                                    </ul>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="course-card">

                                <figure class="card-banner img-holder" style="--width: 370; --height: 220;">
                                    <img src="./assets/images/course-3.jpg" width="370" height="220"
                                        loading="lazy" alt="The Complete Camtasia Course for Content Creators"
                                        class="img-cover">
                                </figure>

                                <div class="abs-badge">
                                    <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                                    <span class="span">3 Weeks</span>
                                </div>

                                <div class="card-content">

                                    <span class="badge">Intermediate</span>

                                    <h3 class="h3">
                                        <a href="#" class="card-title">The Complete Camtasia Course for Content
                                            Creators</a>
                                    </h3>

                                    <data class="price" value="35">$35.00</data>

                                    <ul class="card-meta-list">

                                        <li class="card-meta-item">
                                            <ion-icon name="library-outline" aria-hidden="true"></ion-icon>

                                            <span class="span">13 Lessons</span>
                                        </li>

                                        <li class="card-meta-item">
                                            <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                                            <span class="span">18 Students</span>
                                        </li>

                                    </ul>

                                </div>

                            </div>
                        </li>

                    </ul>

                    <a href="#" class="btn has-before">
                        <span class="span">Browse more courses</span>

                        <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                    </a>

                </div>
            </section>
        </article>
    </main>





    <!--
    - #FOOTER
  -->

    <footer class="footer" style="background-image: url('./assets/images/footer-bg.png')">

        <div class="footer-top section">
            <div class="container grid-list">

                <div class="footer-brand">

                    <a href="#" class="logo">
                        <img src="./assets/images/logo-light.svg" width="162" height="50" alt="EduWeb logo">
                    </a>

                    <p class="footer-brand-text">
                        Lorem ipsum dolor amet consecto adi pisicing elit sed eiusm tempor incidid unt labore dolore.
                    </p>


                </div>

                <ul class="footer-list">

                    <li>
                        <p class="footer-list-title">Online Platform</p>
                    </li>

                    <li>
                        <a href="#" class="footer-link">About</a>
                    </li>


                </ul>

                <ul class="footer-list">

                    <li>
                        <p class="footer-list-title">Links</p>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Contact Us</a>
                    </li>


                </ul>

                <div class="footer-list">

                    <p class="footer-list-title">Contacts</p>

                    <p class="footer-list-text">
                        Enter your email address to register to our newsletter subscription
                    </p>

                    <form action="" class="newsletter-form">
                        <input type="email" name="email_address" placeholder="Your email" required
                            class="input-field">

                        <button type="submit" class="btn has-before">
                            <span class="span">Subscribe</span>

                            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                        </button>
                    </form>

                    <ul class="social-list">

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-facebook"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-linkedin"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-instagram"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-twitter"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-youtube"></ion-icon>
                            </a>
                        </li>

                    </ul>

                </div>

            </div>
        </div>

    </footer>





    <!--
    - #BACK TO TOP
  -->

    <a href="#top" class="back-top-btn" aria-label="back top top" data-back-top-btn>
        <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
    </a>

    <script src="{{ url('assets/js/script.js') }}" defer></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
