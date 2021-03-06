@extends("layouts.index")
@section('content')

    <body>

        <div id="video">
            <div class="preloader">
                <div class="preloader-bounce">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>

            <header id="header">
                <div class="container-fluid">
                    <div class="navbar">
                        <a href="#" id="logo" title="Elegance by TemplateMo">
                            Elegance
                        </a>
                        <div class="navigation-row">
                            <nav id="navigation">
                                <button type="button" class="navbar-toggle"> <i class="fa fa-bars"></i> </button>
                                <div class="nav-box navbar-collapse">
                                    <ul class="navigation-menu nav navbar-nav navbars" id="nav">
                                        <li data-menuanchor="slide01" class="active"><a href="#slide01">Home</a></li>
                                        <li data-menuanchor="slide02"><a href="#slide02">About Me</a></li>
                                        <li data-menuanchor="slide03"><a href="#slide03">Services</a></li>
                                        <li data-menuanchor="slide04"><a href="#slide04">My Skills</a></li>
                                        <li data-menuanchor="slide05"><a href="#slide05">My Work</a></li>
                                        {{-- <li data-menuanchor="slide06"><a href="#slide06">Testimonials</a></li> --}}
                                        <li data-menuanchor="slide06"><a href="#slide06">Contact Me</a></li>
                                        <li data-menuanchor="slide08"><a href="/about/edit">Dashboard</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>

            <video autoplay muted loop id="myVideo">
                <source src="images/video-bg.mp4" type="video/mp4">
            </video>

            <div id="fullpage" class="fullpage-default">

                <div class="section animated-row" data-section="slide01">
                    <div class="section-inner">
                        <div class="welcome-box">
                            <span class="welcome-first animate" data-animate="fadeInUp">Hello, Bienvenue a mon </span>
                            <h1 class="welcome-title animate" data-animate="fadeInUp">Portofolio</h1>
                            <p class="animate" data-animate="fadeInUp">Je vous remercie de venir jettere un coup
                                d'oeil a mon protofolio, j'espere que celas vous plairas bonne visite !!</p>
                            <div class="scroll-down next-section animate data-animate=" fadeInUp""><img
                                    src="images/mouse-scroll.png" alt=""><span>Scroll Down</span></div>
                        </div>
                    </div>
                </div>

                <div class="section animated-row" data-section="slide02">
                    <div class="section-inner">
                        <div class="about-section">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 wide-col-laptop">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="about-contentbox">
                                                <div class="animate" data-animate="fadeInUp">
                                                    <span>{{ $about->title1 }}</span>
                                                    <h2>{{ $about->title2 }}</h2>

                                                    <p>
                                                        {{ $about->txt1 }}
                                                    </p>
                                                    {{-- <button>
                                                    <a class="btn btn-primary text-white" href="/{{$show->id}}/show">EDIT</a>
                                                </button> --}}

                                                </div>
                                                <div class="facts-list owl-carousel">
                                                    <div class="item animate" data-animate="fadeInUp">
                                                        <div class="counter-box">
                                                            <i class="fa fa-trophy counter-icon"
                                                                aria-hidden="true"></i><span class="count-number">1</span>
                                                            Premier Prix Green <br>
                                                            Akhaton Start Up
                                                        </div>
                                                    </div>
                                                    {{-- <div class="item animate" data-animate="fadeInUp">
                                                    <div class="counter-box">
                                                        <i class="fa fa-graduation-cap counter-icon" aria-hidden="true"></i><span class="count-number">4</span> Degrees
                                                    </div>
                                                </div> --}}
                                                    <div class="item animate" data-animate="fadeInUp">
                                                        <div class="counter-box">
                                                            <i class="fa fa-desktop counter-icon"
                                                                aria-hidden="true"></i><span
                                                                class="count-number">12</span> Working Months
                                                        </div>
                                                    </div>

                                                    <div class="item animate" data-animate="fadeInUp">
                                                        <div class="counter-box">
                                                            <i class="fa fa-certificate counter-icon"
                                                                aria-hidden="true"></i><span class="count-number">2</span>
                                                            Certificates <br>
                                                            Full Stack
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <figure class="about-img animate" data-animate="fadeInUp"><img
                                                    src="{{ asset($about->img) }}" class="rounded" alt=""></figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section animated-row" data-section="slide03">
                    <div class="section-inner">
                        <div class="row justify-content-center">
                            <div class="col-md-8 wide-col-laptop">
                                <div class="title-block animate" data-animate="fadeInUp">
                                    <span>Services</span>
                                    <h2>What I Do?</h2>
                                </div>
                                <div class="services-section">
                                    <div class="services-list owl-carousel">
                                        <div class="item animate" data-animate="fadeInUp">
                                            <div class="service-box">
                                                <span class="service-icon"><i class="fa fa-bookmark"
                                                        aria-hidden="true"></i></span>
                                                <h3>Bootstrap Themes</h3>
                                                <p>Nullam auctor, justo vitae accumsan ultrices, arcu ex molestie massa, eu
                                                    maximus enim tortor vitae quam. </p>
                                            </div>
                                        </div>
                                        <div class="item animate" data-animate="fadeInUp">
                                            <div class="service-box">
                                                <span class="service-icon"><i class="fa fa-cloud"
                                                        aria-hidden="true"></i></span>
                                                <h3>HTML5 Coding</h3>
                                                <p>Nullam auctor, justo vitae accumsan ultrices, arcu ex molestie massa, eu
                                                    maximus enim tortor vitae quam. </p>
                                            </div>
                                        </div>
                                        <div class="item animate" data-animate="fadeInUp">
                                            <div class="service-box">
                                                <span class="service-icon"><i class="fa fa-desktop"
                                                        aria-hidden="true"></i></span>
                                                <h3>Fully Responsive</h3>
                                                <p>Nullam auctor, justo vitae accumsan ultrices, arcu ex molestie massa, eu
                                                    maximus enim tortor vitae quam. </p>
                                            </div>
                                        </div>
                                        <div class="item animate" data-animate="fadeInUp">
                                            <div class="service-box">
                                                <span class="service-icon"><i class="fa fa-mobile"
                                                        aria-hidden="true"></i></span>
                                                <h3>Mobile Ready</h3>
                                                <p>Nullam auctor, justo vitae accumsan ultrices, arcu ex molestie massa, eu
                                                    maximus enim tortor vitae quam. </p>
                                            </div>
                                        </div>
                                        <div class="item animate" data-animate="fadeInUp">
                                            <div class="service-box">
                                                <span class="service-icon"><i class="fa fa-comments"
                                                        aria-hidden="true"></i></span>
                                                <h3>Fast Support</h3>
                                                <p>Nullam auctor, justo vitae accumsan ultrices, arcu ex molestie massa, eu
                                                    maximus enim tortor vitae quam. </p>
                                            </div>
                                        </div>
                                        <div class="item animate" data-animate="fadeInUp">
                                            <div class="service-box">
                                                <span class="service-icon"><i class="fa fa-database"
                                                        aria-hidden="true"></i></span>
                                                <h3>24-hour Up Time</h3>
                                                <p>Nullam auctor, justo vitae accumsan ultrices, arcu ex molestie massa, eu
                                                    maximus enim tortor vitae quam. </p>
                                            </div>
                                        </div>
                                        <div class="item animate" data-animate="fadeInUp">
                                            <div class="service-box">
                                                <span class="service-icon"><i class="fa fa-bell"
                                                        aria-hidden="true"></i></span>
                                                <h3>Instant Upgrades</h3>
                                                <p>Nullam auctor, justo vitae accumsan ultrices, arcu ex molestie massa, eu
                                                    maximus enim tortor vitae quam. </p>
                                            </div>
                                        </div>
                                        <div class="item animate" data-animate="fadeInUp">
                                            <div class="service-box">
                                                <span class="service-icon"><i class="fa fa-camera"
                                                        aria-hidden="true"></i></span>
                                                <h3>Always Monitoring</h3>
                                                <p>Nullam auctor, justo vitae accumsan ultrices, arcu ex molestie massa, eu
                                                    maximus enim tortor vitae quam. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section animated-row" data-section="slide04">
                    <div class="section-inner">
                        <div class="row justify-content-center">
                            <div class="col-md-7 wide-col-laptop">
                                <div class="title-block animate" data-animate="fadeInUp">
                                    <span>My Skills</span>
                                    <h2>What i???m good?</h2>
                                </div>
                                <div class="skills-row animate" data-animate="fadeInDown">
                                    <div class="row">
                                        <div class="col-md-8 offset-md-2">
                                            <div class="skill-item">
                                                <h6>{{ $skills->skill1_txt }}</h6>
                                                <div class="skill-bar">
                                                    <span>{{ $skills->skill1 }}%</span>
                                                    <div class="filled-bar"></div>
                                                </div>
                                            </div>
                                            <div class="skill-item">
                                                <h6>{{ $skills->skill2_txt }}</h6>
                                                <div class="skill-bar">
                                                    <span>{{ $skills->skill2 }}%</span>
                                                    <div class="filled-bar-2"></div>
                                                </div>
                                            </div>
                                            <div class="skill-item">
                                                <h6>{{ $skills->skill3_txt }}</h6>
                                                <div class="skill-bar">
                                                    <span>{{ $skills->skill3 }}%</span>
                                                    <div class="filled-bar"></div>
                                                </div>
                                            </div>
                                            <div class="skill-item last-skill">
                                                <h6>{{ $skills->skill4_txt }}</h6>
                                                <div class="skill-bar">
                                                    <span>{{ $skills->skill4 }}%</span>
                                                    <div class="filled-bar-2"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section animated-row" data-section="slide06">
                    <div class="section-inner">
                        <div class="row justify-content-center">
                            <div class="col-md-8 wide-col-laptop">
                                <div class="title-block animate" data-animate="fadeInUp">
                                    <span>My Work</span>
                                    <h2>what i???ve done?</h2>
                                </div>
                                <div class="gallery-section">
                                    <div class="gallery-list owl-carousel">
                                        @foreach ($works as $work)
                                                <div class="item animate" data-animate="fadeInUp">
                                                <div class="portfolio-item">
                                                    <div class="thumb">
                                                        <img src="{{ asset('/storage/'.$work->img) }}" alt="">
                                                    </div>
                                                    <div class="thumb-inner animate" data-animate="fadeInUp">
                                                        <h4>{{ $work->title1 }}</h4>
                                                        <p>{{ $work->txt }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div class="section animated-row" data-section="slide05">
                <div class="section-inner">
                    <div class="row justify-content-center">
                        <div class="col-md-8 wide-col-laptop">
                            <div class="title-block animate" data-animate="fadeInUp">
                                <span>TESTIMONIALS</span>
                                <h2>what THEY SAY?</h2>
                            </div>
                            <div class="col-md-8 offset-md-2">
                                <div class="testimonials-section">
                                    <div class="testimonials-slider owl-carousel">
                                        <div class="item animate" data-animate="fadeInUp">
                                            <div class="testimonial-item">
                                                <div class="client-row">
                                                    <img src="images/profile-01.jpg" class="rounded-circle" alt="profile 1">
                                                </div>
                                                <div class="testimonial-content">
                                                    <h4>Sandar</h4>
                                                    <p>"Ut varius leo eu mauris lacinia, eleifend posuere urna gravida. Aenean a mattis lacus."</p>
                                                    <span>Managing Director</span>
                                                </div>                                           
                                            </div>
                                        </div>
                                        <div class="item animate" data-animate="fadeInUp">
                                            <div class="testimonial-item">
                                                <div class="client-row">
                                                    <img src="images/profile-01.jpg" class="rounded-circle" alt="profile 2">
                                                </div>
                                                <div class="testimonial-content">
                                                    <h4>Shinn</h4>
                                                    <p>"Nam iaculis, leo nec facilisis sollicitudin, dui massa tempus odio, vitae malesuada ante elit vitae eros."</p>
                                                    <span>CEO and Founder</span>
                                                </div>                                           
                                            </div>
                                        </div>
                                        <div class="item animate" data-animate="fadeInUp">
                                            <div class="testimonial-item">
                                                <div class="client-row">
                                                    <img src="images/profile-01.jpg" class="rounded-circle" alt="profile 3">
                                                </div>
                                                <div class="testimonial-content">
                                                    <h4>Marlar</h4>
                                                    <p>"Etiam efficitur, tortor facilisis finibus semper, diam magna fringilla lectus, et fringilla felis urna posuere tortor."</p>
                                                    <span>Chief Marketing Officer</span>
                                                </div>                                           
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

                <div class="section animated-row" data-section="slide06">
                    <div class="section-inner">
                        <div class="row justify-content-center">
                            <div class="col-md-7 wide-col-laptop">
                                <div class="title-block animate" data-animate="fadeInUp">
                                    <span>Contact</span>
                                    <h2>Get In Touch!</h2>
                                </div>
                                <div class="contact-section">
                                    <div class="row">
                                        <div class="col-md-6 animate" data-animate="fadeInUp">
                                            <div class="contact-box">
                                                <div class="contact-row">
                                                    <i class="fa fa-map-marker"></i>{{ $contact->adresse }}
                                                </div>
                                                <div class="contact-row">
                                                    <i class="fa fa-phone"></i> {{ $contact->num }}
                                                </div>
                                                <div class="contact-row">
                                                    <i class="fa fa-envelope"></i> {{ $contact->mail }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 animate" data-animate="fadeInUp">
                                            <form id="ajax-contact" method="post" action="#">
                                                <div class="input-field">
                                                    <input type="text" class="form-control" name="name" id="name"
                                                        required placeholder="Name">
                                                </div>
                                                <div class="input-field">
                                                    <input type="email" class="form-control" name="email" id="email"
                                                        required placeholder="Email">
                                                </div>
                                                <div class="input-field">
                                                    <textarea class="form-control" name="message" id="message" required
                                                        placeholder="Message"></textarea>
                                                </div>
                                                <button class="btn" type="submit">Submit</button>
                                            </form>
                                            <div id="form-messages" class="mt-3"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="social-icons">
                <div class="text-right">
                    <ul class="social-icons">
                        <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#" title="Instagram"><i class="fa fa-behance"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>



    </body>
@endsection
