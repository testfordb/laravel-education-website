@extends('layouts.app')
   @section('content')
   <section class="section" style="background-image: url('{{ asset('assets/images/hero-bg.jpg') }}'); min-height: 100vh; display: flex; align-items: center;">
       <div class="container">
           <div class="login-content" style="max-width: 500px; margin: 0 auto; background: var(--white); padding: 40px; border-radius: var(--radius-6); box-shadow: var(--shadow-1);">
               <h2 class="h2 section-title" style="text-align: center; margin-bottom: 30px;">Login to RayhanSch</h2>
               <form method="POST" action="{{ route('login') }}" class="newsletter-form">
                   @csrf
                   <div class="input-wrapper" style="margin-bottom: 20px;">
                       <input type="email" name="email" aria-label="email" placeholder="Email address" required class="email-field" value="{{ old('email') }}">
                       <ion-icon name="mail-open-outline" aria-hidden="true"></ion-icon>
                       @error('email')
                           <span class="text-danger" style="font-size: var(--fs-6);">{{ $message }}</span>
                       @enderror
                   </div>
                   <div class="input-wrapper" style="margin-bottom: 20px;">
                       <input type="password" name="password" aria-label="password" placeholder="Password" required class="email-field">
                       <ion-icon name="lock-closed-outline" aria-hidden="true"></ion-icon>
                       @error('password')
                           <span class="text-danger" style="font-size: var(--fs-6);">{{ $message }}</span>
                       @enderror
                   </div>
                   <div style="margin-bottom: 20px;">
                       <label style="display: flex; align-items: center; gap: 10px;">
                           <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                           <span style="font-size: var(--fs-6);">Remember me</span>
                       </label>
                   </div>
                   <button type="submit" class="btn btn-primary" style="width: 100%;">
                       <span class="span">Login</span>
                       <ion-icon name="log-in-outline" aria-hidden="true"></ion-icon>
                   </button>
                   <div style="text-align: center; margin-top: 20px;">
                       <a href="{{ route('register') }}" class="btn-link" style="font-size: var(--fs-6); color: var(--ultramarine-blue);">
                           Don't have an account? Register
                       </a>
                   </div>
               </form>
           </div>
       </div>
   </section>
   @endsection