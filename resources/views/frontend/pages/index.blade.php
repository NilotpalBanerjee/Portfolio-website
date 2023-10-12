@extends('frontend.layout.master')
@section('content')

<section id="hello" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 about-img-wrap">
                <div class="about-img wow slideInRight">
                    <img src="{{url('/')}}/frontend/media/hello-section/FILE083.JPG" alt="" class="img-responsive">
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-me wow slideInLeft">
                    <div class="about-me-title">
                        <h1><span class="point">I am Nilotpal Banerjee</span></h1>
                    </div>
                    <div class="about-me-text">
                        <div class="opacity-box">
                            <br>
                            <p>As a recent graduate with a Bachelor's degree in Computer Science Engineering, I am eager to leverage my strong foundation in programming, algorithms, and problem-solving to contribute effectively in the technology industry. I possess proficiency in languages such as Java, and C++, along with experience in software development, database management, and web technologies. During my academic journey.</p>
                        </div>
                    </div>
                    <div class="about-me-info">
                        <p>
                            <span class="span-title">Phone</span>
                            <a href="tel:+91 7908070882"><span>+91 7908070882</span></a>
                        </p>
                        <p>
                            <span class="span-title">Email</span>
                            <a href="mailto:"><span>neelbanerjee1212@gmail.com</span></a>
                        </p>
                        <p>
                            <span class="span-title">Address</span>
                            <span>Natun Pally G Block Benachity, Durgapur - 13</span>
                        </p>
                        <p>
                            <span class="span-title">Social</span>
                            <span class="span-icons">
                                <a target="_blank" href="https://www.facebook.com/" class="mdi fonts-icons mdi-facebook"></a>
                                <a target="_blank" href="https://twitter.com/" class="mdi fonts-icons mdi-twitter"></a>
                                <a target="_blank" href="https://www.instagram.com/" class="mdi fonts-icons mdi-instagram"></a>
                                <a target="_blank" href="https://www.linkedin.com/" class="mdi fonts-icons mdi-linkedin"></a>
                                <a target="_blank" href="https://github.com/" class="mdi fonts-icons mdi-github-circle"></a>
                            </span>
                        </p>
                    </div>
                    <div class="about-btns">
                        <a data-toggle="modal" data-target="#contact-modal" href="#" class="site-btn">Contact me</a>
                        <a href="{{url('/')}}/frontend/./download/Nilotpal_Banerjee.pdf" class="site-btn gray-btn">Download cv</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="skills" class="section">
    <div class="container">
        <div class="row wave-bg">
            <div class="zigzag wow slideInLeft">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 105 20" xml:space="preserve">
                    <g>
                        <rect class="st0" width="105" height="20"/>
                        <g>
                            <polyline class="st1" points="2.5,5 16.8,15 31.1,5 45.3,15 59.6,5 73.9,15 88.2,5 102.5,15   "/>
                        </g>
                    </g>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 105 20" xml:space="preserve">
                    <g>
                        <rect class="st0" width="105" height="20"/>
                        <g>
                            <polyline class="st1" points="2.5,5 16.8,15 31.1,5 45.3,15 59.6,5 73.9,15 88.2,5 102.5,15   "/>
                        </g>
                    </g>
                </svg>
            </div>
            <div class="col-md-4 wow slideInLeft">
                <div class="section-sidebar">
                    <h2><span class="point">Skills</span></h2>
                    <div class="opacity-box">
                        <p>I am inspired by creating great work with people who are as passionate as I am about building something awesome.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    
                @foreach($skills as $sk)
                    <div class="col-md-6 wow zoomIn">
                        <div class="advantages-box">
                            <h4>{{ $sk->name }}</h4>
                            <div class="opacity-box">
                                <p>{{ $sk->description }} </p>
                            </div>
                        </div>
                    </div>
                @endforeach
                    <!-- <div class="col-md-6 wow zoomIn">
                        <hr class="mobile-hr">
                        <div class="advantages-box">
                            <h4>UI\UX Design</h4>
                            <div class="opacity-box">
                                <p>Photoshop, Illustrator, Sketch, Axure, XMind, Prototyping, Wireframing, User Research, Usability Testing.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 wow zoomIn">
                        <hr>
                        <div class="advantages-box">
                            <h4>Frontend Development</h4>
                            <div class="opacity-box">
                                <p>HTML, CSS, LESS, SASS, Bootstrap, Wordpress, Drupal, Phonegap / Cordova, Ionic, Foundation, Angular.js.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow zoomIn">
                        <hr>
                        <div class="advantages-box">
                            <h4>Consulting & SEO Audit</h4>
                            <div class="opacity-box">
                                <p>Screaming Frog, Woorank, Raventools, Semrush, Moz, WebCEO, Google Analytics, ChartBeat, CrazyEgg.</p>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>

<section id="experience" class="section">
    <div class="container">
        <div class="row wave-bg">
            <div class="zigzag wow slideInLeft">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 105 20" xml:space="preserve">
                    <g>
                       <rect class="st0" width="105" height="20"/>
                        <g>
                            <polyline class="st1" points="2.5,5 16.8,15 31.1,5 45.3,15 59.6,5 73.9,15 88.2,5 102.5,15   "/>
                        </g>
                    </g>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 105 20" xml:space="preserve">
                    <g>
                        <rect class="st0" width="105" height="20"/>
                        <g>
                            <polyline class="st1" points="2.5,5 16.8,15 31.1,5 45.3,15 59.6,5 73.9,15 88.2,5 102.5,15   "/>
                        </g>
                    </g>
                </svg>
            </div>
            <div class="col-md-4 wow slideInLeft">
                <div class="section-sidebar">
                    <h2><span class="point">Experience</span></h2>
                    <div class="opacity-box">
                        <p>Computer Science engineer fresher with strong problem-solving skills, programming proficiency, and a passion for innovation. Seeking opportunities to apply academic knowledge and contribute to cutting-edge projects.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8 right-box">
                <div class="row wow zoomIn">
                    <div class="col-md-12">
                        <div class="about-row">
                            <h4 class="about-tittle">Web Developer</h4>
                            <p class="about-info">IGMI LEAD CONSULTANCY PVT LTD </p>
                            <p>Jun 2022 – Aug 2022</p>
                            <div class="opacity-box">
                                <p>During my web development internship at IGMI Company, I gained hands-on experience in front-end and back-end development, worked with HTML, CSS, JavaScript, and PHP, and collaborated with a team to create responsive websites. I learned about agile development processes and contributed to testing and bug fixing..</p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>

            </div>
        </div>
    </div>
</section>

<section id="education" class="section">
    <div class="container">
        <div class="row wave-bg">
            <div class="zigzag wow slideInLeft">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 105 20" xml:space="preserve">
                    <g>
                        <rect class="st0" width="105" height="20"/>
                        <g>
                            <polyline class="st1" points="2.5,5 16.8,15 31.1,5 45.3,15 59.6,5 73.9,15 88.2,5 102.5,15   "/>
                        </g>
                    </g>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 105 20" xml:space="preserve">
                    <g>
                        <rect class="st0" width="105" height="20"/>
                        <g>
                            <polyline class="st1" points="2.5,5 16.8,15 31.1,5 45.3,15 59.6,5 73.9,15 88.2,5 102.5,15   "/>
                        </g>
                    </g>
                </svg>
            </div>
            <div class="col-md-4 wow slideInLeft">
                <div class="section-sidebar">
                    <h2><span class="point">Education</span></h2>
                    <div class="opacity-box">
                        <p>All my life I have been driven by my strong belief that education
                            is important. I try to learn something new every single day.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8 right-box">
                <div class="row wow zoomIn">
                    <div class="col-md-12">
                        <div class="about-row">
                            <h4 class="about-tittle">Dr. B.C. Roy Engineering College</h4>
                            <p class="about-info">MAKAUT University</p>
                            <p>2020 - 2023</p>
                            <div class="opacity-box">
                                <p>Computer Science & Engineering | CGPA: <b>8.89</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row wow zoomIn">
                    <div class="col-md-12">
                        <div class="about-row">
                            <h4 class="about-tittle">Dr. B.C. Roy Polytechnic College, WBSCTE, West Bengal</h4>
                            <p class="about-info">WBSCTE</p>
                            <p>2017 - 2020</p>
                            <div class="opacity-box">
                                <p>Computer Science & Technology| CGPA: <b>7.2</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>

<section id="portfolio" class="section section-small-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow slideInLeft">
                    <h2><span class="point">Portfolio</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="portfolio-sort wow slideInLeft">
                    <ul class="list-inline">
                        <li class="colored-link" data-mixitup-control data-filter="all">All projects</li>
                        <li class="colored-link" data-mixitup-control data-filter=".web-sites">Web sites</li>
                        <li class="colored-link" data-mixitup-control data-filter=".ui-ux-design">UI\UX design</li>
                        <li class="colored-link" data-mixitup-control data-filter=".frontend">Frontend</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="portfolio">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-6 mix web-sites wow flipInX">
                            <a data-toggle="modal" data-target="#portfolio-modal" data-name="patty" title="Shop web app “Patty”" href="#" class="portfolio-box">
                                <div class="portfolio-img">
                                    <img src="{{url('/')}}/frontend/media/portfolio-images/portfolio-1.jpg" alt="">
                                </div>
                                <div class="portfolio-name">
                                    <span>Shop web app “Patty”</span>
                                </div>
                                <div class="portfolio-date">
                                    <span>April, 2017</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 mix frontend wow flipInX">
                            <a data-toggle="modal" data-target="#portfolio-modal" data-name="phoenix" title="Startup website “Phoenix”" href="#" class="portfolio-box">
                                <div class="portfolio-img">
                                    <img src="{{url('/')}}/frontend/media/portfolio-images/portfolio-2.jpg" alt="">
                                </div>
                                <div class="portfolio-name">
                                    <span>Startup website “Phoenix”</span>
                                </div>
                                <div class="portfolio-date">
                                    <span>March, 2016</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 mix web-sites wow flipInX">
                            <a data-toggle="modal" data-target="#portfolio-modal" data-name="ewesta" title="Corporate chat “eWesta”" href="#" class="portfolio-box">
                                <div class="portfolio-img">
                                    <img src="{{url('/')}}/frontend/media/portfolio-images/portfolio-3.jpg" alt="">
                                </div>
                                <div class="portfolio-name">
                                    <span>Corporate chat “eWesta”</span>
                                </div>
                                <div class="portfolio-date">
                                    <span>December, 2015</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 mix frontend wow flipInX">
                            <a data-toggle="modal" data-target="#portfolio-modal" data-name="foody"  title="Restaraunt web app “Foody”" href="#" class="portfolio-box">
                                <div class="portfolio-img">
                                    <img src="{{url('/')}}/frontend/media/portfolio-images/portfolio-4.jpg" alt="">
                                </div>
                                <div class="portfolio-name">
                                    <span>Restaraunt web app “Foody”</span>
                                </div>
                                <div class="portfolio-date">
                                    <span>May, 2014</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 mix ui-ux-design wow flipInX">
                            <a data-toggle="modal" data-target="#portfolio-modal" data-name="stark" title="Game website “Stark”" href="#" class="portfolio-box">
                                <div class="portfolio-img">
                                    <img src="{{url('/')}}/frontend/media/portfolio-images/portfolio-5.jpg" alt="">
                                </div>
                                <div class="portfolio-name">
                                    <span>Game website “Stark”</span>
                                </div>
                                <div class="portfolio-date">
                                    <span>June, 2014</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 mix web-sites wow flipInX">
                            <a data-toggle="modal" data-target="#portfolio-modal" data-name="te4h" title="Blogger website “Te4h”" href="#" class="portfolio-box">
                                <div class="portfolio-img">
                                    <img src="{{url('/')}}/frontend/media/portfolio-images/portfolio-6.jpg" alt="">
                                </div>
                                <div class="portfolio-name">
                                    <span>Blogger website “Te4h”</span>
                                </div>
                                <div class="portfolio-date">
                                    <span>April, 2014</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 mix frontend wow flipInX">
                            <a data-toggle="modal" data-target="#portfolio-modal" data-name="lamp" title="Product website “Lamp”" href="#" class="portfolio-box">
                                <div class="portfolio-img">
                                    <img src="{{url('/')}}/frontend/media/portfolio-images/portfolio-7.jpg" alt="">
                                </div>
                                <div class="portfolio-name">
                                    <span>Product website “Lamp”</span>
                                </div>
                                <div class="portfolio-date">
                                    <span>December, 2013</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 mix ui-ux-design wow flipInX">
                            <a data-toggle="modal" data-target="#portfolio-modal" data-name="zebra" title="Blog web app “Zebra”" href="#" class="portfolio-box">
                                <div class="portfolio-img">
                                    <img src="{{url('/')}}/frontend/media/portfolio-images/portfolio-8.jpg" alt="">
                                </div>
                                <div class="portfolio-name">
                                    <span>Blog web app “Zebra”</span>
                                </div>
                                <div class="portfolio-date">
                                    <span>March, 2013</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="feedback" class="section">
    <div class="container">
        <div class="row wave-bg">
            <div class="zigzag wow slideInLeft">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 105 20" xml:space="preserve">
                    <g>
                        <rect class="st0" width="105" height="20"/>
                        <g>
                            <polyline class="st1" points="2.5,5 16.8,15 31.1,5 45.3,15 59.6,5 73.9,15 88.2,5 102.5,15   "/>
                        </g>
                    </g>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 105 20" xml:space="preserve">
                    <g>
                        <rect class="st0" width="105" height="20"/>
                        <g>
                            <polyline class="st1" points="2.5,5 16.8,15 31.1,5 45.3,15 59.6,5 73.9,15 88.2,5 102.5,15   "/>
                        </g>
                    </g>
                </svg>
            </div>
            <div class="col-md-4 wow slideInLeft">
                <div class="section-sidebar">
                    <h2><span class="point">Feedback</span></h2>
                    <div class="opacity-box">
                        <p>Take a look at the reviews of my customers and ensure the quality of my services.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8 right-box">
                <div class="row wow zoomIn">
                    <div class="col-md-12">
                        <div class="feedback-block">
                            <img class="feedback-image" src="{{url('/')}}/frontend/media/feedback-images/feedback-1.jpg" alt="">
                            <h4 class="about-tittle">Stacey Don</h4>
                            <p class="about-info">President @ Coolor Studio</p>
                            <div class="opacity-box">
                                <p>"Considers problems as a challenge and enjoys finding creative yet appropriate
                                    solutions. Nilotpal is able to work out his own solutions, but also works
                                    well with a group to solve problems. Performs most jobs well and has the
                                    habit of checking work outcomes. Nilotpal is achieving excellence in some areas
                                    but in others is not yet achieving the highest standards.""</p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row wow zoomIn">
                    <div class="col-md-12">
                        <div class="feedback-block">
                            <img class="feedback-image" src="{{url('/')}}/frontend/media/feedback-images/feedback-2.jpg" alt="">
                            <h4 class="about-tittle">Anson Shura</h4>
                            <p class="about-info">Project Manager @ Motion Studio</p>
                            <div class="opacity-box">
                                <p>“He will always try to do what is required, even if it means performing tasks that
                                  are not in the job description or if required to do extra work unexpectedly. However,
                                  may sometimes complain about the extra load. Aiming for a top job in the organization.
                                  He sets very high standards, aware that this will bring attention and promotion.”</p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>

<section id="contact" class="section">
    <div class="container">
        <div class="row wave-bg">
            <div class="zigzag wow slideInLeft">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 105 20" xml:space="preserve">
                    <g>
                        <rect class="st0" width="105" height="20"/>
                        <g>
                            <polyline class="st1" points="2.5,5 16.8,15 31.1,5 45.3,15 59.6,5 73.9,15 88.2,5 102.5,15   "/>
                        </g>
                    </g>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 105 20" xml:space="preserve">
                    <g>
                        <rect class="st0" width="105" height="20"/>
                        <g>
                            <polyline class="st1" points="2.5,5 16.8,15 31.1,5 45.3,15 59.6,5 73.9,15 88.2,5 102.5,15   "/>
                        </g>
                    </g>
                </svg>
            </div>
            <div class="col-md-4 wow slideInLeft">
                <div class="section-sidebar">
                    <h2><span class="point">Contact</span></h2>
                    <div class="opacity-box">
                        <p>Are you working on something great? I would love to help make it
                            happen! Drop me a letter and start your project right now! Just do it.</p>
                    </div>
                </div>
            </div>
            <form action="#" class="wow slideInRight js-footer-form">
                <div class="form-wrapper">
                    <div class="col-md-3">
                        <div class="form-group">
                            <input class="form-field js-field-name" type="text" placeholder="Name" required>
                            <span class="form-validation"></span>
                            <span class="form-invalid-icon"><i class="mdi mdi-close" aria-hidden="true"></i></span>
                        </div>

                        <div class="form-group">
                            <input class="form-field js-field-email" type="email" placeholder="E-mail" required>
                            <span class="form-validation"></span>
                            <span class="form-invalid-icon"><i class="mdi mdi-close" aria-hidden="true"></i></span>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <textarea class="form-field js-field-message" placeholder="Message" required></textarea>
                            <span class="form-validation"></span>
                        </div>
                        <div class="submit-holder">
                            <input class="site-btn" type="submit" value="Send message">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection