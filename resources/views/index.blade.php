@extends('layouts.app')

@section('content')

<section id="hero">
<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="background h-100" style="background-image: url('http://infohive.com.bd/files/images/home_slider/1/Home_Slider-1.jpg'); position: relative;background-position:center;background-size:cover; ">
      <div class="layer h-100 w-100" style="position:absolute; top:0;left:0;background-color:black;opacity:50%;">
      </div>
      <div class="carousel-caption d-block">
        <h1>Hosted Email Security</h1>
        <p>Think about it, email is main line of communication of any business—but it’s also a main target for unwanted intruders. Modern business demands an email solution that allows to send and receive files of any size without worrying every time by hitting the send button or open a message.infoHive lets business to communicate securely, efficiently and most importantly—with confidence.</p>
      </div>
    </div>
    </div>
    <div class="carousel-item">
      <div class="background h-100" style="background-image: url('http://infohive.com.bd/files/images/home_slider/2/VPS.jpg'); position: relative;background-position:center;background-size:cover; ">
      <div class="layer h-100 w-100" style="position:absolute; top:0;left:0;background-color:black;opacity:50%;">
      </div>
      <div class="carousel-caption d-block">
        <h1>Hosted VPS (Virtual Private Server)</h1>
        <p>Effortlessly get the power and flexibility that you require on the fly. infoHive provides you with high performance VPS which includes simplicity, scalability &amp; customization. Customers are provided with total control of VPS including root access. Considering the security, we keep periodic backups with uptime and performance monitoring.</p>
      </div>
    </div>
    </div>
    <div class="carousel-item">
      <div class="background h-100"  style="background-image: url('http://infohive.com.bd/files/images/home_slider/3/banner-electronic-document-management-system.jpg'); position: relative;background-position:center;background-size:cover; ">
      <div class="layer h-100 w-100" style="position:absolute; top:0;left:0;background-color:black;opacity:50%;">
      </div>
      <div class="carousel-caption d-block">
        <h1>Hosted DMS- Digitize. Automate. Transform.</h1>
        <p>Business happens everywhere: in the office, on the road, in your home. Bridge the gap between your field and office. With hosted Document Management System by infoHive, you can digitize and secure your information to flow effortlessly between your decision makers — from anywhere, on any device, at any time. This is the new pace of productivity for the heart of business.</p>
      </div>
    </div>
    </div>
    <div class="carousel-item">
      <div class="background h-100"  style="background-image: url('http://infohive.com.bd/files/images/home_slider/4/pexels-photo-3184292.jpeg'); position: relative;background-position:center;background-size:cover; ">
        <div class="layer h-100 w-100" style="position:absolute; top:0;left:0;background-color:black;opacity:50%;">
        </div>
        <img src="http://infohive.com.bd/files/images/home_slider/4/pexels-photo-3184292.jpeg" class="d-block h-100 w-100" alt="...">
        <div class="carousel-caption d-block">
          <h1>Hosted ERP (Enterprise Resource Planner)</h1>
          <p>Modern businesses require to continue focusing on what they do best and to react to new market opportunities swiftly and confidently. From financials to supply chain management to billing &amp; inventory management and beyond, the hosted ERP platform by infoHive is engineered to streamline mission-critical processes, which in turn allow organizations to have clear visibility and control of their business.</p>
        </div>
      </div>
      </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

</section>


<!-- ABOUT -->
<section id="about" class="about">
<div class="container">
  <div class="section-title">
    <h2>
      About
    </h2>
    <p>
      About Us
    </p>
  </div>
  <div class="row content">
    <div class="col-lg-12 pt-12 pt-lg-0">
      <p>
        <br>
      </p>
      <p>
        <strong>infoHive</strong>
        is a IT based tech startup based in Bangladesh. We have
        combined our expertise with world’s best and leading technologies to provide
        our valuable clients the bespoke solutions and services considering their
        business challenges and assist them on their road to success. We trust in
        quality delivery as well as our client’s achievement to be successful with our
        journey.&nbsp; &nbsp;
      </p>
      <p>
        As IT based tech startup, we deliver innovative solutions
        both on premise and cloud based towards our client. Also, we are always on the
        look out for new technologies and solutions that will help our clients to meet
        their upcoming IT challenges by increasing efficiency.&nbsp;
      </p>
      <p></p>
      <a href="/product-services" class="btn-learn-more">Learn More</a>
    </div>
  </div>
</div>
</section>


<!-- SERVICES -->
<section id="services" class="services" style="padding:60px 0;">
<div class="container">
  <div class="section-title">
    <h2>
      Services
    </h2>
    <p>
      Products & Services
    </p>
  </div>
  <div class="row">
    <div class="col-lg-3 col-md-6">
      <div class="icon">
        <center>
          <img style="width:60px;" src="http://infohive.com.bd/files/images/service/9/Hosting%20Service-2.png" alt="">
        </center>
      </div>
      <p style="padding: 20px 0 0 0; text-align:center; color:#00aeef">Hosted Service</p>
      <p style="text-align:center">Hosting Service: VPS, CPANEL, DEDICATED</p>
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="icon">
        <center>
          <img style="width:60px;" src="http://infohive.com.bd/files/images/service/10/Email-Email%20Sec.png" alt="">
        </center>
      </div>
      <p style="padding: 20px 0 0 0; text-align:center; color:#00aeef">Email Service, Email Security & Email Archive</p>
      <p style="text-align:center">Email Service, Email Security & Email Archive</p>
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="icon">
        <center>
          <img style="width:60px;" src="http://infohive.com.bd/files/images/service/11/Infra%20(2).png" alt="">
        </center>
      </div>
      <p style="padding: 20px 0 0 0; text-align:center; color:#00aeef">Infrastructure Solution</p>
      <p style="text-align:center">We provide infrastructure solution plan, Design, Concept & Implementation</p>
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="icon">
        <center>
          <img style="width:60px;" src="http://infohive.com.bd/files/images/service/8/cyber%20security.PNG" alt="">
        </center>
      </div>
      <p style="padding: 20px 0 0 0; text-align:center; color:#00aeef">InfoSec Solutions</p>
      <p style="text-align:center">We provide wide range of InfoSec Solutions from Perimeter to End-user and Vulnerability ASsessment Tools</p>
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="icon">
        <center>
          <img style="width:60px;" src="http://infohive.com.bd/files/images/service/12/cloud.jpg" alt="">
        </center>
      </div>
      <p style="padding: 20px 0 0 0; text-align:center; color:#00aeef">Cloud Services</p>
      <p style="text-align:center">We provide Cloud Services: Deployment & Migration</p>
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="icon">
        <center>
          <img style="width:60px;" src="http://infohive.com.bd/files/images/service/13/unnamed.png" alt="">
        </center>
      </div>
      <p style="padding: 20px 0 0 0; text-align:center; color:#00aeef">Managed Services</p>
      <p style="text-align:center">infoHive MSP offers value-driven solutions and a range of IT support services. We can remotely manage your company's IT infrastructure and/or end-user systems on a proactive basis.</p>
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="icon">
        <center>
          <img style="width:60px;" src="http://infohive.com.bd/files/images/service/14/erp.jpg" alt="">
        </center>
      </div>
      <p style="padding: 20px 0 0 0; text-align:center; color:#00aeef">Hosted ERP</p>
      <p style="text-align:center">Hosted ERP (Enterprise Resource Planner)</p>
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="icon">
        <center>
          <img style="width:60px;" src="http://infohive.com.bd/files/images/service/15/dms.png" alt="">
        </center>
      </div>
      <p style="padding: 20px 0 0 0; text-align:center; color:#00aeef">Hosted DMS</p>
      <p style="text-align:center">Hosted Document Management System- Digitize. Automate. Transform</p>
    </div>
  </div>
</div>
</section>


<!-- TECH COLLAB -->
<section id="faq" class="faq" style="padding:60px 0;">
  <div class="container">
    <div class="section-title">
      <h2>
        Collaborators
      </h2>
      <p>
        Tech- Collaborators
      </p>
    </div>
    <div class="row faq-item d-flex align-items-stretch">
      <div class="col-lg-4">
        <h4>The top companies in the world partner with Forcepoint</h4>
        <p style=""><a href="/tech-collaborators">See collaborators &gt;&gt;</a></p>
      </div>
      <div class="col-lg-8">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-xs-6">
            <a title="Stimulus Software" target="_blank" href="#">
              <img style="width:150px;margin-bottom:40px" src="http://infohive.com.bd/files/images/partner/1/Stimulus%20Software.PNG" alt="">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>

<section id="contact" class="contact section-bg" style="padding:60px 0;">
<div class="container">
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
            <div class="validate">Required</div>
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
</section>


@endsection
