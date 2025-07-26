<!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>RayhanSch - Education Is About Academic Excellence</title>
       <link rel="shortcut icon" href="{{ asset('assets/images/favicon.svg') }}" type="image/svg+xml">
       <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
       <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700;800&display=swap" rel="stylesheet">
       @livewireStyles
       @vite(['resources/js/app.js'])
   </head>
   <body id="top">
       <header class="header" data-header>
           <div class="container">
               <h1>
                   <a href="{{ route('home') }}" class="logo">RayhanSch</a>
               </h1>
               <nav class="navbar" data-navbar>
                   <div class="navbar-top">
                       <a href="{{ route('home') }}" class="logo">RayhanSch</a>
                       <button class="nav-close-btn" aria-label="Close menu" data-nav-toggler>
                           <ion-icon name="close-outline"></ion-icon>
                       </button>
                   </div>
                   <ul class="navbar-list">
                       <li class="navbar-item">
                           <a href="#home" class="navbar-link" data-nav-toggler>Home</a>
                       </li>
                       <li class="navbar-item">
                           <a href="#about" class="navbar-link" data-nav-toggler>About</a>
                       </li>
                       <li class="navbar-item">
                           <a href="#courses" class="navbar-link" data-nav-toggler>Courses</a>
                       </li>
                       <li class="navbar-item">
                           <a href="#event" class="navbar-link" data-nav-toggler>Event</a>
                       </li>
                       <li class="navbar-item">
                           <a href="#" class="navbar-link" data-nav-toggler>Blog</a>
                       </li>
                       <li class="navbar-item">
                           <a href="#" class="navbar-link" data-nav-toggler>Contact</a>
                       </li>
                   </ul>
               </nav>
               <div class="header-actions">
                   <button class="header-action-btn" aria-label="Open search" data-search-toggler>
                       <ion-icon name="search-outline"></ion-icon>
                   </button>
                   @guest
                       <a href="{{ route('login') }}" class="header-action-btn login-btn">
                           <ion-icon name="person-outline" aria-hidden="true"></ion-icon>
                           <span class="span">Login</span>
                       </a>
                       <a href="{{ route('register') }}" class="header-action-btn login-btn">
                           <ion-icon name="person-add-outline" aria-hidden="true"></ion-icon>
                           <span class="span">Register</span>
                       </a>
                   @else
                       <a href="{{ route('dashboard') }}" class="header-action-btn login-btn">
                           <ion-icon name="person-outline" aria-hidden="true"></ion-icon>
                           <span class="span">{{ Auth::user()->name }}</span>
                       </a>
                   @endguest
                   <button class="header-action-btn nav-open-btn" aria-label="Open menu" data-nav-toggler>
                       <ion-icon name="menu-outline"></ion-icon>
                   </button>
               </div>
               <div class="overlay" data-nav-toggler data-overlay></div>
           </div>
       </header>
       <div class="search-container" data-search-box>
           <div class="container">
               <button class="search-close-btn" aria-label="Close search" data-search-toggler>
                   <ion-icon name="close-outline"></ion-icon>
               </button>
               <div class="search-wrapper">
                   <input type="search" name="search" placeholder="Search Here..." aria-label="Search" class="search-field">
                   <button class="search-submit" aria-label="Submit" data-search-toggler>
                       <ion-icon name="search-outline"></ion-icon>
                   </button>
               </div>
           </div>
       </div>
       <main>
           @yield('content')
       </main>
       <footer class="footer">
           <div class="container">
               <div class="footer-top">
                   <div class="footer-brand">
                       <a href="{{ route('home') }}" class="logo">RayhanSch</a>
                       <p class="section-text">
                           It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum.
                       </p>
                       <ul class="social-list">
                           <li><a href="#" class="social-link"><ion-icon name="logo-facebook"></ion-icon></a></li>
                           <li><a href="#" class="social-link"><ion-icon name="logo-twitter"></ion-icon></a></li>
                           <li><a href="#" class="social-link"><ion-icon name="logo-linkedin"></ion-icon></a></li>
                           <li><a href="#" class="social-link"><ion-icon name="logo-pinterest"></ion-icon></a></li>
                       </ul>
                   </div>
                   <ul class="footer-list">
                       <li><p class="footer-list-title">Explore</p></li>
                       <li><a href="#" class="footer-link"><ion-icon name="chevron-forward" aria-hidden="true"></ion-icon><span class="span">About Us</span></a></li>
                       <li><a href="#" class="footer-link"><ion-icon name="chevron-forward" aria-hidden="true"></ion-icon><span class="span">Upcoming Events</span></a></li>
                       <li><a href="#" class="footer-link"><ion-icon name="chevron-forward" aria-hidden="true"></ion-icon><span class="span">Blog &gt; News</span></a></li>
                       <li><a href="#" class="footer-link"><ion-icon name="chevron-forward" aria-hidden="true"></ion-icon><span class="span">FAQ Question</span></a></li>
                       <li><a href="#" class="footer-link"><ion-icon name="chevron-forward" aria-hidden="true"></ion-icon><span class="span">Testimonial</span></a></li>
                       <li><a href="#" class="footer-link"><ion-icon name="chevron-forward" aria-hidden="true"></ion-icon><span class="span">Privacy Policy</span></a></li>
                   </ul>
                   <ul class="footer-list">
                       <li><p class="footer-list-title">Useful Links</p></li>
                       <li><a href="#" class="footer-link"><ion-icon name="chevron-forward" aria-hidden="true"></ion-icon><span class="span">Contact Us</span></a></li>
                       <li><a href="#" class="footer-link"><ion-icon name="chevron-forward" aria-hidden="true"></ion-icon><span class="span">Pricing Plan</span></a></li>
                       <li><a href="#" class="footer-link"><ion-icon name="chevron-forward" aria-hidden="true"></ion-icon><span class="span">Instructor Profile</span></a></li>
                       <li><a href="#" class="footer-link"><ion-icon name="chevron-forward" aria-hidden="true"></ion-icon><span class="span">FAQ</span></a></li>
                       <li><a href="#" class="footer-link"><ion-icon name="chevron-forward" aria-hidden="true"></ion-icon><span class="span">Popular Courses</span></a></li>
                       <li><a href="#" class="footer-link"><ion-icon name="chevron-forward" aria-hidden="true"></ion-icon><span class="span">Terms &gt; Conditions</span></a></li>
                   </ul>
                   <ul class="footer-list">
                       <li><p class="footer-list-title">Contact Info</p></li>
                       <li class="footer-item"><ion-icon name="location-outline" aria-hidden="true"></ion-icon><address class="footer-link">Rangpur</address></li>
                       <li class="footer-item"><ion-icon name="call" aria-hidden="true"></ion-icon><a href="tel:+13647657839" class="footer-link">+00 000 0000</a></li>
                       <li class="footer-item"><ion-icon name="call" aria-hidden="true"></ion-icon><a href="tel:+13647657840" class="footer-link">+00 000 0000</a></li>
                       <li class="footer-item"><ion-icon name="mail-outline" aria-hidden="true"></ion-icon><a href="mailto:contact@rayhansch.com" class="footer-link">contact@rayhansch.com</a></li>
                   </ul>
               </div>
               <div class="footer-bottom">
                   <p class="copyright">
                       Copyright 2023 RayhanSch. All Rights Reserved by <a href="#" class="copyright-link">Rayhan Rana</a>
                   </p>
               </div>
           </div>
       </footer>
       <a href="#top" class="back-top-btn" aria-label="Back to top" data-back-top-btn>
           <ion-icon name="arrow-up"></ion-icon>
       </a>
       <script src="{{ asset('assets/js/script.js') }}" defer></script>
       <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
       <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
       @livewireScripts
   </body>
   </html>