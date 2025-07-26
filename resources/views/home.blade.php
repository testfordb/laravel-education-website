@extends('layouts.app')
   @section('content')
   <section class="hero" id="home" aria-label="hero" style="background-image: url('{{ asset('assets/images/hero-bg.jpg') }}')">
       <div class="container">
           <div class="hero-content">
               <p class="section-subtitle">Better Learning Future With Us</p>
               <h2 class="h1 hero-title">Education emphasizes academic excellence.</h2>
               <p class="hero-text">
                   Sed eu volutpat arcu, a tincidunt nulla quam, feugiat sit amet ipsum a, dapibus porta velit.
               </p>
               <a href="#" class="btn btn-primary">
                   <span class="span">Get Started Today</span>
                   <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
               </a>
           </div>
           <figure class="hero-banner">
               <img src="{{ asset('assets/images/hero-banner.png') }}" width="500" height="500" loading="lazy" alt="hero image" class="w-100">
               <img src="{{ asset('assets/images/hero-abs-1.png') }}" width="318" height="352" loading="lazy" aria-hidden="true" class="abs-img abs-img-1">
               <img src="{{ asset('assets/images/hero-abs-2.png') }}" width="160" height="160" loading="lazy" aria-hidden="true" class="abs-img abs-img-2">
           </figure>
       </div>
   </section>
   <section class="section category" aria-label="category">
       <div class="container">
           <p class="section-subtitle">Course Categories</p>
           <h2 class="h2 section-title">Popular Topics To Learn</h2>
           <ul class="grid-list">
               @foreach ($categories as $category)
                   <li>
                       <div class="category-card">
                           <div class="card-icon">
                               <ion-icon name="{{ $category->name === 'Personal Development' ? 'briefcase-outline' : ($category->name === 'Human Research' ? 'file-tray-full-outline' : ($category->name === 'Art & Design' ? 'color-palette-outline' : ($category->name === 'Business Management' ? 'layers-outline' : ($category->name === 'Web Development' ? 'laptop-outline' : ($category->name === 'Lifestyle' ? 'thumbs-up-outline' : ($category->name === 'Digital Marketing' ? 'headset-outline' : ($category->name === 'Data Sciences' ? 'server-outline' : 'medkit-outline'))))))) }}"></ion-icon>
                           </div>
                           <div>
                               <h3 class="h3 card-title">
                                   <a href="#">{{ $category->name }}</a>
                               </h3>
                               <span class="card-meta">{{ $category->course_count }} Course</span>
                           </div>
                       </div>
                   </li>
               @endforeach
           </ul>
       </div>
   </section>
   <section class="section about" id="about" aria-label="about">
       <div class="container">
           <figure class="about-banner">
               <img src="{{ asset('assets/images/about-banner.jpg') }}" width="450" height="590" loading="lazy" alt="about banner" class="w-100 about-img">
               <img src="{{ asset('assets/images/about-abs-1.jpg') }}" width="188" height="242" loading="lazy" aria-hidden="true" class="abs-img abs-img-1">
               <img src="{{ asset('assets/images/about-abs-2.jpg') }}" width="150" height="200" loading="lazy" aria-hidden="true" class="abs-img abs-img-2">
           </figure>
           <div class="about-content">
               <p class="section-subtitle">Who We Are</p>
               <h2 class="h2 section-title">We Offer The Best Carrier</h2>
               <ul class="about-list">
                   <li class="about-item">
                       <div class="item-icon item-icon-1">
                           <img src="{{ asset('assets/images/about-icon-1.png') }}" width="30" height="30" loading="lazy" aria-hidden="true">
                       </div>
                       <div>
                           <h3 class="h3 item-title">Industry Expert Instructor</h3>
                           <p class="item-text">
                               Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmoded tempor incididunt dolore magna aliqua.
                           </p>
                       </div>
                   </li>
                   <li class="about-item">
                       <div class="item-icon item-icon-2">
                           <img src="{{ asset('assets/images/about-icon-2.png') }}" width="30" height="30" loading="lazy" aria-hidden="true">
                       </div>
                       <div>
                           <h3 class="h3 item-title">Up-to-Date Course Content</h3>
                           <p class="item-text">
                               Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmoded tempor incididunt dolore magna aliqua.
                           </p>
                       </div>
                   </li>
                   <li class="about-item">
                       <div class="item-icon item-icon-3">
                           <img src="{{ asset('assets/images/about-icon-3.png') }}" width="30" height="30" loading="lazy" aria-hidden="true">
                       </div>
                       <div>
                           <h3 class="h3 item-title">Biggest Student Community</h3>
                           <p class="item-text">
                               Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmoded tempor incididunt dolore magna aliqua.
                           </p>
                       </div>
                   </li>
               </ul>
               <a href="#" class="btn btn-primary">
                   <span class="span">Know About Us</span>
                   <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
               </a>
           </div>
       </div>
   </section>
   <section class="section course" id="courses" aria-label="course" style="background-image: url('{{ asset('assets/images/course-bg.jpg') }}')">
       <div class="container">
           <p class="section-subtitle">Popular Courses</p>
           <h2 class="h2 section-title">Our Popular Courses</h2>
           <ul class="grid-list">
               @foreach ($courses as $course)
                   <li>
                       <div class="course-card">
                           <figure class="card-banner">
                               <img src="{{ asset($course->image->path) }}" width="370" height="270" loading="lazy" alt="{{ $course->title }}" class="img-cover">
                           </figure>
                           <div class="card-actions">
                               <span class="badge">{{ $course->level }}</span>
                               <button class="whishlist-btn" aria-label="Add to whishlist" data-whish-btn>
                                   <ion-icon name="heart"></ion-icon>
                               </button>
                           </div>
                           <div class="card-content">
                               <ul class="card-meta-list">
                                   <li class="card-meta-item">
                                       <ion-icon name="reader-outline" aria-hidden="true"></ion-icon>
                                       <span class="card-meta-text">{{ $course->lessons }} Lessons</span>
                                   </li>
                                   <li class="card-meta-item">
                                       <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
                                       <time datetime="{{ $course->duration }}" class="card-meta-text">{{ $course->duration }}</time>
                                   </li>
                               </ul>
                               <h3 class="h3">
                                   <a href="#" class="card-title">{{ $course->title }}</a>
                               </h3>
                               <div class="rating-wrapper">
                                   <div class="rating">
                                       @for ($i = 0; $i < 5; $i++)
                                           <ion-icon name="star"></ion-icon>
                                       @endfor
                                   </div>
                                   <span class="text">{{ $course->reviews }} Reviews</span>
                               </div>
                               <div class="card-footer">
                                   <div class="card-price">
                                       <span class="span">${{ number_format($course->price, 2) }}</span>
                                       @if ($course->original_price)
                                           <del class="del">${{ number_format($course->original_price, 2) }}</del>
                                       @endif
                                   </div>
                                   <div class="card-meta-item">
                                       <ion-icon name="people-outline" aria-hidden="true"></ion-icon>
                                       <span class="card-meta-text">{{ $course->students }} Students</span>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </li>
               @endforeach
           </ul>
           <a href="#" class="btn btn-primary">
               <span class="span">View All Courses</span>
               <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
           </a>
       </div>
   </section>
   <section class="section cta" aria-label="workshop" style="background-image: url('{{ asset('assets/images/cta-bg.png') }}">
       <div class="container">
           <figure class="cta-banner">
               <img src="{{ asset('assets/images/cta-banner.jpg') }}" width="580" height="380" loading="lazy" alt="cta banner" class="img-cover">
           </figure>
           <div class="cta-content">
               <p class="section-subtitle">Free Workshop</p>
               <h2 class="h2 section-title">Join Our Free Workshops</h2>
               <p class="section-text">
                   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
               </p>
               <a href="#" class="btn btn-secondary">
                   <span class="span">Upcoming Workshop</span>
                   <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
               </a>
           </div>
       </div>
   </section>
   <section class="section event" id="event" aria-label="event">
       <div class="container">
           <p class="section-subtitle">Upcoming Events</p>
           <h2 class="h2 section-title">Let’s Join Our Community</h2>
           <ul class="grid-list">
               @foreach ($events as $event)
                   <li>
                       <div class="event-card">
                           <figure class="card-img">
                               <img src="{{ asset($event->image->path) }}" width="370" height="250" loading="lazy" alt="{{ $event->title }}" class="img-cover">
                           </figure>
                           <time class="badge" datetime="{{ $event->date }}">{{ \Carbon\Carbon::parse($event->date)->format('d M Y') }}</time>
                           <div class="card-content">
                               <address class="card-address">
                                   <ion-icon name="location-outline" aria-hidden="true"></ion-icon>
                                   <span class="span">{{ $event->address }}</span>
                               </address>
                               <h3 class="h3">
                                   <a href="#" class="card-title">{{ $event->title }}</a>
                               </h3>
                               <a href="#" class="btn-link">
                                   <span class="span">Get Ticket</span>
                                   <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                               </a>
                           </div>
                       </div>
                   </li>
               @endforeach
           </ul>
       </div>
   </section>
   <section class="section newsletter" aria-label="newsletter" style="background-image: url('{{ asset('assets/images/newsletter-bg.jpg') }}')">
       <div class="container">
           <p class="section-subtitle">Subscribe Newsletter</p>
           <h2 class="h2 section-title">Get Every Latest News</h2>
           <form action="" class="newsletter-form">
               <div class="input-wrapper">
                   <input type="email" name="email_address" aria-label="email" placeholder="Enter your mail address" required class="email-field">
                   <ion-icon name="mail-open-outline" aria-hidden="true"></ion-icon>
               </div>
               <button type="submit" class="btn btn-primary">
                   <span class="span">Subscribe</span>
                   <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
               </button>
           </form>
       </div>
   </section>
   @endsection