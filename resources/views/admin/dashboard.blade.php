@extends('layouts.index')
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
                        Dashboard 
                        <i class="fas fa-cogs"></i>
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
                                    <li data-menuanchor="slide06"><a href="#slide06">Testimonials</a></li>
                                    <li data-menuanchor="slide07"><a href="#slide07">Contact Me</a></li>
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
                        <span class="welcome-first animate" data-animate="fadeInUp">Hello, welcome to</span>
                        <h1 class="welcome-title animate" data-animate="fadeInUp">elegance</h1>
                        <p class="animate" data-animate="fadeInUp">This is a clean and modern HTML5 template with a video background. You can use this layout for your profile page. Please spread a word about templatemo to your friends. Thank you.</p>
                        <div class="scroll-down next-section animate data-animate="fadeInUp""><img src="images/mouse-scroll.png" alt=""><span>Scroll Down</span></div>
                    </div>
                </div>
            </div>

            <div class="section animated-row" data-section="slide02">
                <div class="section-inner">
                    <div class="about-section">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 wide-col-laptop">
                                <div class="row">
                                    <table class="table">
                                        <thead>
                                          <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Title1</th>
                                            <th scope="col">Title2</th>
                                            <th scope="col">Txt1</th>
                                            <th scope="col">IMG</th>
                                            <th scope="col">icons</th>
                                            <th scope="col">IconNmb</th>
                                            <th scope="col">IconTxt</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>@mdo</td>
                                            <td>@mdo</td>
                                            <td>@mdo</td>
                                            <td>@mdo</td>
                                          </tr>
                                          <tr>
                                            {{-- <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td> --}}
                                          </tr>
                                          <tr>
                                            {{-- <th scope="row">3</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td> --}}
                                          </tr>
                                        </tbody>
                                      </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section animated-row" data-section="slide03">
                <div class="section-inner">
                    <div class="about-section">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 wide-col-laptop">
                                <div class="row">
                                    <table class="table">
                                        <thead>
                                          <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Title1</th>
                                            <th scope="col">Title2</th>
                                            <th scope="col">Icon</th>
                                            <th scope="col">IconTitle</th>
                                            <th scope="col">Description</th>
                                            
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>@mdo</td>
                                            <td>@mdo</td>
                                            
                                          </tr>
                                          <tr>
                                            {{-- <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td> --}}
                                          </tr>
                                          <tr>
                                            {{-- <th scope="row">3</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td> --}}
                                          </tr>
                                        </tbody>
                                      </table>
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
                                <h2>What i’m good?</h2>
                            </div>
                            <div class="skills-row animate" data-animate="fadeInDown">
                                <div class="row">
                                    <div class="col-md-8 offset-md-2">   
                                        <div class="skill-item">
                                            <h6>HTML CSS</h6>
                                            <div class="skill-bar">
                                                <span>70%</span>
                                                <div class="filled-bar"></div>
                                            </div>          
                                        </div>
                                        <div class="skill-item">
                                            <h6>PSD Design</h6>
                                            <div class="skill-bar">
                                                <span>90%</span>
                                                <div class="filled-bar-2"></div>
                                            </div>          
                                        </div>
                                        <div class="skill-item">
                                            <h6>Social Media</h6>
                                            <div class="skill-bar">
                                                <span>70%</span>
                                                <div class="filled-bar"></div>
                                            </div>          
                                        </div>
                                        <div class="skill-item last-skill">
                                            <h6>Leadership</h6>
                                            <div class="skill-bar">
                                                <span>90%</span>
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
                                <h2>what i’ve done?</h2>
                            </div>
                            <div class="gallery-section">
                                <div class="gallery-list owl-carousel">
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <img src="images/item-1.jpg" alt="">
                                            </div>
                                            <div class="thumb-inner animate" data-animate="fadeInUp">
                                                <h4>templatemo is the best</h4>
                                                <p>Please tell your friends about it. Templatemo is the best website to download free Bootstrap CSS templates.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <img src="images/item-2.jpg" alt="">
                                            </div>
                                            <div class="thumb-inner animate" data-animate="fadeInUp">
                                                <h4>templatemo is the best</h4>
                                                <p>Please tell your friends about it. Templatemo is the best website to download free Bootstrap themes.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <img src="images/item-3.jpg" alt="">
                                            </div>
                                            <div class="thumb-inner animate" data-animate="fadeInUp">
                                                <h4>templatemo is the best</h4>
                                                <p>Please tell your friends about it. Templatemo is the best website to download free Bootstrap layouts.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <img src="images/item-1.jpg" alt="">
                                            </div>
                                            <div class="thumb-inner animate" data-animate="fadeInUp">
                                                <h4>templatemo is the best</h4>
                                                <p>Please tell your friends about it. Templatemo is the best website to download free Bootstrap templates.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <img src="images/item-2.jpg" alt="">
                                            </div>
                                            <div class="thumb-inner animate" data-animate="fadeInUp">
                                                <h4>templatemo is the best</h4>
                                                <p>Please tell your friends about it. Templatemo is the best website to download Bootstrap CSS templates.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <img src="images/item-3.jpg" alt="">
                                            </div>
                                            <div class="thumb-inner animate" data-animate="fadeInUp">
                                                <h4>templatemo is the best</h4>
                                                <p>Please tell your friends about it. Templatemo is the best website to download free Bootstrap templates.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <img src="images/item-1.jpg" alt="">
                                            </div>
                                            <div class="thumb-inner animate" data-animate="fadeInUp">
                                                <h4>templatemo is the best</h4>
                                                <p>Please tell your friends about it. Templatemo is the best website to download free Bootstrap templates.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <img src="images/item-2.jpg" alt="">
                                            </div>
                                            <div class="thumb-inner animate" data-animate="fadeInUp">
                                                <h4>templatemo is the best</h4>
                                                <p>Please tell your friends about it. Templatemo is the best website to download free Bootstrap templates.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <img src="images/item-3.jpg" alt="">
                                            </div>
                                            <div class="thumb-inner animate" data-animate="fadeInUp">
                                                <h4>templatemo is the best</h4>
                                                <p>Please tell your friends about it. Templatemo is the best website to download free Bootstrap templates.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section animated-row" data-section="slide05">
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
            </div>

            <div class="section animated-row" data-section="slide07">
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
                                                <i class="fa fa-map-marker"></i> 123 New Street Here, Wonderful City 10220
                                            </div>
                                            <div class="contact-row">
                                                <i class="fa fa-phone"></i> 090 080 0210
                                            </div>
                                            <div class="contact-row">
                                                <i class="fa fa-envelope"></i> info@company.co
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 animate" data-animate="fadeInUp">
                                        <form id="ajax-contact" method="post" action="#">
                                            <div class="input-field">
                                                <input type="text" class="form-control" name="name" id="name" required placeholder="Name">
                                            </div>
                                            <div class="input-field">
                                                <input type="email" class="form-control" name="email" id="email" required placeholder="Email">
                                            </div>
                                            <div class="input-field">
                                                <textarea class="form-control" name="message" id="message" required placeholder="Message"></textarea>
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