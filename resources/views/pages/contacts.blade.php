@extends('layouts.app')

@section('content')
<div class="contact">
<div class="container">
    <div style="height:100px;"></div>
    <div class="section-title">
        <h2>
          Contact
        </h2>
        <p>
          Contact Us
        </p>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="row">
            <div class="col-md-12">
              <div class="info-box">
                <span class="iconify" data-icon="bx-bx-map" data-inline="false"></span>
                <h3>Our Address</h3>
                <p>Plot No: 89, Sayeed Grand Center (2nd Floor), Sector#7, Uttara, Dhaka - 1230 , Bangladesh</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <span class="iconify" data-icon="bx-bx-envelope" data-inline="false"></span>
                <h3>Email Us</h3>
                <p>sales@infohive.com.bd</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <span class="iconify" data-icon="bx-bx-phone-call" data-inline="false"></span>
                <h3>Call Us</h3>
                <p>(+88) 01714057290</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <form action="/contacts" method="POST" role="form" class="php-email-form">
            @csrf
            <div class="form-row">
              <div class="col form-group" style="padding: 5px 5px;">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
                <div class="validate"></div>
              </div>
              <div class="col form-group" style="padding: 5px 5px;">
                <input type="email" name="email" class="form-control" id="email" placeholder="Your Email">
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-group" style="padding: 5px 0;">
              <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject">
              <div class="validate"></div>
            </div>
            <div class="form-group" style="padding: 5px 0;">
              <textarea style="height: 60px" class="form-control" name="message" cols="5" rows="5" placeholder="Message"></textarea>
              <div class="validate"></div>
            </div>
            <div class="mb-3">
              <div class="loading">Your message has been sent. Thank you.</div>
            </div>
            <div class="text-center">
              <button type="submit" name="contact">Send Message</button>
            </div>
          </form>
          @if ($errors->any())
          <div class="text-danger">
            @foreach ($errors->all() as $error)
              <li class="text-center">
                {{ $error }}
              </li>
            @endforeach
          </div>
        @endif
        </div>
      </div>
</div>
<div class="h-25"></div>
</div>
@endsection