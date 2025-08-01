<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- ==== CSS Links ==== -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/skins/color-1.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
    <!-- ==== Style Switcher ==== -->
     <link rel="stylesheet" href="{{ asset('assets/css/skins/color-1.css') }}" class="alternate-style" title="color-1" disabled>
     <link rel="stylesheet" href="{{ asset('assets/css/skins/color-2.css') }}" class="alternate-style" title="color-2" disabled>
     <link rel="stylesheet" href="{{ asset('assets/css/skins/color-3.css') }}" class="alternate-style" title="color-3" disabled>
     <link rel="stylesheet" href="{{ asset('assets/css/skins/color-4.css') }}" class="alternate-style" title="color-4" disabled>
     <link rel="stylesheet" href="{{ asset('assets/css/skins/color-5.css') }}" class="alternate-style" title="color-5" disabled>
    <link rel="stylesheet" href="assets/css/style-switcher.css">
</head>
<body>
    <!-- ==== Main Container Start === -->
     <div class="main-container">
        <!-- ==== Aside Start === -->
         <div class="aside">
            <div class="logo">
                <a href="#"><span>I</span>ftekharul</a>
            </div>
            <div class="nav-toggler">
                <span></span>
            </div>
            <ul class="nav">
                <li><a href="#home" class="active"><i class="fa fa-home"></i>Home</a></li>
                <li><a href="#about"><i class="fa fa-user"></i>About</a></li>
                <li><a href="#services"><i class="fa fa-list"></i>Services</a></li>
                <li><a href="#portfolio"><i class="fa fa-briefcase"></i>Portfolio</a></li>
                <li><a href="#contact"><i class="fa fa-comments"></i>Contact</a></li>
            </ul>
         </div>
        <!-- ==== Aside End === -->
        <!-- ==== Main Content Start === -->
         <div class="main-content">
            <!-- ==== Home Section Start === -->
             <section class="home active section" id="home">
                <div class="container">
                    <div class="row">
                        <div class="home-info padd-15">
                            <h3 class="hello">Hello, my name is <span class="name">Iftekharul Islam</span></h3>
                            <h3 class="my-profession">I'm a <span class="typing">web designer</span></h3>
                            <p>I'm a web Designer with extensive experience for over 10 years. My expertise is to create and website design, graphic design, and many more...</p>
                            <a href="#" class="btn">Download CV</a>
                        </div>
                        <div class="home-img padd-15">
                            <img src="assets/images/a.jpg" alt="Hero Image">
                        </div>
                    </div>
                </div>
             </section>
            <!-- ==== Home Section End === -->
            <!-- ==== About Section Start === -->
             <section class="about section" id="about">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>About Me</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="about-content padd-15">
                            <div class="row">
                                <div class="about-text padd-15">
                                    <h3>I'm Iftekharul Islam and <span>Web Developer</span></h3>
                                    <p>I'm a passionate Web Developer with a strong foundation in front-end and back-end technologies. I specialize in building responsive, user-friendly websites and web applications using HTML, CSS, JavaScript, and frameworks like React and Laravel. With a keen eye for design and performance, I strive to create seamless digital experiences that not only look great but also function flawlessly across all devices. I enjoy turning ideas into real, working products and continuously improving my skills to keep up with the ever-evolving web landscape.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="personal-info padd-15">
                                    <div class="row">
                                        <div class="info-item padd-15">
                                            <p>Birthday: <span>14 Dec 2002</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Age: <span>23</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Website: <span>www.domain.com</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Email: <span>info@gmail.com</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Degree: <span>BSc in CSE</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Phone: <span>+880 1759-378005</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>City: <span>Dhaka</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Freelance: <span>Available</span></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="buttons padd-15">
                                            <a href="#contact" data-section-index="1" class="btn hire-me">Hire Me</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="skills padd-15">
                                    <div class="row">
                                        <div class="skill-item padd-15">
                                            <h5>CSS</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 76%;"></div>
                                                <div class="skill-percent">76%</div>
                                            </div>
                                        </div>
                                        <div class="skill-item padd-15">
                                            <h5>JS</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 86%;"></div>
                                                <div class="skill-percent">86%</div>
                                            </div>
                                        </div>
                                        <div class="skill-item padd-15">
                                            <h5>PHP</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 66%;"></div>
                                                <div class="skill-percent">66%</div>
                                            </div>
                                        </div>
                                        <div class="skill-item padd-15">
                                            <h5>HTML</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 96%;"></div>
                                                <div class="skill-percent">96%</div>
                                            </div>
                                        </div>
                                        <div class="skill-item padd-15">
                                            <h5>Bootstrap</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 76%;"></div>
                                                <div class="skill-percent">76%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="education padd-15">
                                    <h3 class="title">Education</h3>
                                    <div class="row">
                                        <div class="timeline-box padd-15">
                                            <div class="timeline shadow-dark">
                                                <!-- ==== Timeline Item ==== -->
                                                 <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                        <h3 class="timeline-date">
                                                            <i class="fa fa-calendar"></i> 2013 - 2015
                                                        </h3>
                                                        <h4 class="timeline-title">Secondary School Certificate</h4>
                                                        <p class="timeline-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, ab. Dolor labore minus iusto excepturi sapiente architecto quos. Repellendus, eius. Nisi cupiditate quam obcaecati molestiae natus.</p>
                                                 </div>
                                                <!-- ==== Timeline Item ==== -->
                                                 <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                        <h3 class="timeline-date">
                                                            <i class="fa fa-calendar"></i> 2013 - 2015
                                                        </h3>
                                                        <h4 class="timeline-title">Secondary School Certificate</h4>
                                                        <p class="timeline-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, ab. Dolor labore minus iusto excepturi sapiente architecto quos. Repellendus, eius. Nisi cupiditate quam obcaecati molestiae natus.</p>
                                                 </div>
                                                <!-- ==== Timeline Item ==== -->
                                                 <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                        <h3 class="timeline-date">
                                                            <i class="fa fa-calendar"></i> 2013 - 2015
                                                        </h3>
                                                        <h4 class="timeline-title">Secondary School Certificate</h4>
                                                        <p class="timeline-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, ab. Dolor labore minus iusto excepturi sapiente architecto quos. Repellendus, eius. Nisi cupiditate quam obcaecati molestiae natus.</p>
                                                 </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="experience padd-15">
                                    <h3 class="title">Experience</h3>
                                    <div class="row">
                                        <div class="timeline-box padd-15">
                                            <div class="timeline shadow-dark">
                                                <!-- ==== Timeline Item ==== -->
                                                 <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                        <h3 class="timeline-date">
                                                            <i class="fa fa-calendar"></i> 2013 - 2015
                                                        </h3>
                                                        <h4 class="timeline-title">Secondary School Certificate</h4>
                                                        <p class="timeline-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, ab. Dolor labore minus iusto excepturi sapiente architecto quos. Repellendus, eius. Nisi cupiditate quam obcaecati molestiae natus.</p>
                                                 </div>
                                                <!-- ==== Timeline Item ==== -->
                                                 <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                        <h3 class="timeline-date">
                                                            <i class="fa fa-calendar"></i> 2013 - 2015
                                                        </h3>
                                                        <h4 class="timeline-title">Secondary School Certificate</h4>
                                                        <p class="timeline-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, ab. Dolor labore minus iusto excepturi sapiente architecto quos. Repellendus, eius. Nisi cupiditate quam obcaecati molestiae natus.</p>
                                                 </div>
                                                <!-- ==== Timeline Item ==== -->
                                                 <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                        <h3 class="timeline-date">
                                                            <i class="fa fa-calendar"></i> 2013 - 2015
                                                        </h3>
                                                        <h4 class="timeline-title">Secondary School Certificate</h4>
                                                        <p class="timeline-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, ab. Dolor labore minus iusto excepturi sapiente architecto quos. Repellendus, eius. Nisi cupiditate quam obcaecati molestiae natus.</p>
                                                 </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             </section>
            <!-- ==== About Section End === -->
            <!-- ==== Services Section Start === -->
              <section class="service section" id="services">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>Services</h2>
                        </div>
                    </div>
                    <div class="row">
                        <!-- ==== Service Item Start ==== -->
                         <div class="service-item padd-15">
                            <div class="service-item-inner">
                                <div class="icon">
                                    <i class="fa fa-mobile-alt"></i>
                                </div>
                                <h4>Web Design</h4>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias id nostrum tempore.</p>
                            </div>
                         </div>
                        <!-- ==== Service Item End ==== -->
                         <!-- ==== Service Item Start ==== -->
                         <div class="service-item padd-15">
                            <div class="service-item-inner">
                                <div class="icon">
                                    <i class="fa fa-laptop-code"></i>
                                </div>
                                <h4>Web Design</h4>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias id nostrum tempore.</p>
                            </div>
                         </div>
                        <!-- ==== Service Item End ==== -->
                         <!-- ==== Service Item Start ==== -->
                         <div class="service-item padd-15">
                            <div class="service-item-inner">
                                <div class="icon">
                                    <i class="fa fa-palette"></i>
                                </div>
                                <h4>Web Design</h4>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias id nostrum tempore.</p>
                            </div>
                         </div>
                        <!-- ==== Service Item End ==== -->
                         <!-- ==== Service Item Start ==== -->
                         <div class="service-item padd-15">
                            <div class="service-item-inner">
                                <div class="icon">
                                    <i class="fa fa-code"></i>
                                </div>
                                <h4>Web Design</h4>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias id nostrum tempore.</p>
                            </div>
                         </div>
                        <!-- ==== Service Item End ==== -->
                         <!-- ==== Service Item Start ==== -->
                         <div class="service-item padd-15">
                            <div class="service-item-inner">
                                <div class="icon">
                                    <i class="fa fa-search"></i>
                                </div>
                                <h4>Web Design</h4>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias id nostrum tempore.</p>
                            </div>
                         </div>
                        <!-- ==== Service Item End ==== -->
                         <!-- ==== Service Item Start ==== -->
                         <div class="service-item padd-15">
                            <div class="service-item-inner">
                                <div class="icon">
                                    <i class="fa fa-bullhorn"></i>
                                </div>
                                <h4>Web Design</h4>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias id nostrum tempore.</p>
                            </div>
                         </div>
                        <!-- ==== Service Item End ==== -->
                    </div>
                </div>
              </section>
            <!-- ==== Services Section End === -->
            <!-- ==== Portfolio Section Start === -->
             <section class="portfolio section" id="portfolio">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>Portfolio</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="portfolio-heading padd-15">
                            <h2>My Last Projects :</h2>
                        </div>
                    </div>
                    <div class="row">
                        <!-- ==== Portfolio Item Start ==== -->
                         <div class="portfolio-item padd-15">
                            <div class="portfolio-item-inner shadow-dark">
                                <div class="portfolio-img">
                                    <img src="assets/images/portfolio/1.jpg" alt="Project 01">
                                </div>
                            </div>
                         </div>
                        <!-- ==== Portfolio Item End ==== -->
                        <!-- ==== Portfolio Item Start ==== -->
                         <div class="portfolio-item padd-15">
                            <div class="portfolio-item-inner shadow-dark">
                                <div class="portfolio-img">
                                    <img src="assets/images/portfolio/2.jpg" alt="Project 02">
                                </div>
                            </div>
                         </div>
                        <!-- ==== Portfolio Item End ==== -->
                        <!-- ==== Portfolio Item Start ==== -->
                         <div class="portfolio-item padd-15">
                            <div class="portfolio-item-inner shadow-dark">
                                <div class="portfolio-img">
                                    <img src="assets/images/portfolio/3.jpg" alt="Project 03">
                                </div>
                            </div>
                         </div>
                        <!-- ==== Portfolio Item End ==== -->
                        <!-- ==== Portfolio Item Start ==== -->
                         <div class="portfolio-item padd-15">
                            <div class="portfolio-item-inner shadow-dark">
                                <div class="portfolio-img">
                                    <img src="assets/images/portfolio/4.jpg" alt="Project 04">
                                </div>
                            </div>
                         </div>
                        <!-- ==== Portfolio Item End ==== -->
                        <!-- ==== Portfolio Item Start ==== -->
                         <div class="portfolio-item padd-15">
                            <div class="portfolio-item-inner shadow-dark">
                                <div class="portfolio-img">
                                    <img src="assets/images/portfolio/5.jpg" alt="Project 05">
                                </div>
                            </div>
                         </div>
                        <!-- ==== Portfolio Item End ==== -->
                        <!-- ==== Portfolio Item Start ==== -->
                         <div class="portfolio-item padd-15">
                            <div class="portfolio-item-inner shadow-dark">
                                <div class="portfolio-img">
                                    <img src="assets/images/portfolio/6.jpg" alt="Project 06">
                                </div>
                            </div>
                         </div>
                        <!-- ==== Portfolio Item End ==== -->
                    </div>
                </div>
             </section>
            <!-- ==== Portfolio Section End === -->
            <!-- ==== Coontact Section Start === -->
             <section class="contact section" id="contact">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>Contact Me</h2>
                        </div>
                    </div>
                    <h3 class="contact-title padd-15">Have You Any Questions ?</h3>
                    <h4 class="contact-sub-title padd-15">I'M AT YOUR SERVICES </h4>
                    <div class="row">
                        <!-- ==== Contact Info Item Start ==== -->
                         <div class="contact-info-item padd-15">
                            <div class="icon"><i class="fa fa-phone"></i></div>
                            <h4>Call Us On</h4>
                            <p>+880 1759-378005</p>
                         </div>
                        <!-- ==== Contact Info Item End ==== -->
                         <!-- ==== Contact Info Item Start ==== -->
                         <div class="contact-info-item padd-15">
                            <div class="icon"><i class="fa fa-map-marker-alt"></i></div>
                            <h4>Office</h4>
                            <p>Dhaka</p>
                         </div>
                        <!-- ==== Contact Info Item End ==== -->
                         <!-- ==== Contact Info Item Start ==== -->
                         <div class="contact-info-item padd-15">
                            <div class="icon"><i class="fa fa-envelope"></i></div>
                            <h4>Email</h4>
                            <p>info@gmail.com</p>
                         </div>
                        <!-- ==== Contact Info Item End ==== -->
                         <!-- ==== Contact Info Item Start ==== -->
                         <div class="contact-info-item padd-15">
                            <div class="icon"><i class="fa fa-globe-europe"></i></div>
                            <h4>Website</h4>
                            <p>www.domain.com</p>
                         </div>
                        <!-- ==== Contact Info Item End ==== -->
                    </div>
                    <h3 class="contact-title padd-15">SEND ME AN EMAIL</h3>
                    <h4 class="contact-sub-title padd-15">I'M VERY RESPONSIVE TO MESSAGES </h4>
                    <!-- ==== Contact Form ==== -->
                     <div class="row">
                        <div class="contact-form padd-15">
                            <div class="row">
                                <div class="form-item col-6 padd-15">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                                </div>
                                <div class="form-item col-6 padd-15">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-item col-12 padd-15">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Subject">
                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-item col-12 padd-15">
                                <div class="form-group">
                                    <textarea name="" class="form-control" id="" placeholder="Message"></textarea>
                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-item col-12 padd-15">
                                <button type="submit" class="btn">Send Message</button>
                                </div>
                            </div>
                        </div>
                     </div>
                </div>
             </section>
            <!-- ==== Coontact Section End === -->
         </div>
         <!-- ==== Main Content End === -->
     </div>
    <!-- ==== Main Container End === -->
     <!-- ==== Style Switcher Start ==== -->
      <div class="style-switcher">
        <div class="style-switcher-toggler s-icon">
            <i class="fas fa-cog fa-spin"></i>
        </div>
        <div class="day-night s-icon">
            <i class="fas "></i>
        </div>
        <h4>Theme Colors</h4>
        <div class="colors">
            <span class="color-1" onclick="setActiveStyle('color-1')"></span>
            <span class="color-2" onclick="setActiveStyle('color-2')"></span>
            <span class="color-3" onclick="setActiveStyle('color-3')"></span>
            <span class="color-4" onclick="setActiveStyle('color-4')"></span>
            <span class="color-5" onclick="setActiveStyle('color-5')"></span>
        </div>
      </div>
    <!-- ==== Style Switcher End ==== -->
    <!-- ==== Footer Part Start ==== -->
     <footer>
        <p>&copy; 2025 Iftekharul Islam. All rights reserved.</p>
    </footer>
    <!-- ==== Footer Part End ==== -->
    <!-- ==== JS Links ==== -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.1.0/typed.umd.js" integrity="sha512-+2pW8xXU/rNr7VS+H62aqapfRpqFwnSQh9ap6THjsm41AxgA0MhFRtfrABS+Lx2KHJn82UOrnBKhjZOXpom2LQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/js/style-switcher.js') }}"></script>
</body>
</html>