<?php include './_template/header.tpl.php' ?>

    <section class="hero-section position-relative vh-100">
        <div class="overlay position-absolute"></div>
        <div class="container h-100">
            <div class="row m-0 justify-content-center align-items-center h-100">
                <div class="col-lg-8 col-md-6 p-0">
                    <div class="text-center">
                        <span class="text-uppercase fw-800 text-blue">Hey! I am</span>
                        <h1 class="mt-3 fw-800">Velappan</h1>
                        <h2 class="mt-3 fw-800">
                            I'm a 
                            <span
                                class="txt-rotate text-blue"
                                data-period="2000"
                                data-rotate='[ "Web Developer.", "Web Designer.", "Traveller."]'>
                            </span>
                        </h2>
                        <div class="mouse mt-4">
                            <a href="#resume" class="m-icon">
                                <div class="down-to-resume h-100">
                                    <i class="fa-solid fa-arrow-down-long"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <main>
        <!-- ===== Start : About Section 
        =============================-->

        <section class="about-section mb-5" id="about">
            <div class="container">
                <div class="row m-0">
                    <div class="col-lg-6 p-0">
                        <div class="d-flex about-img">
                            
                        </div>
                    </div>
                    <div class="col-lg-6 p-0 ps-lg-5">
                        <div class="about-me py-lg-5 py-3">
                            <h1 class="fw-800 mb-4">About Me</h1>
                            <p class="text-gray">
                                Innovative Front End Developer with one year experience building and maintaining responsive
                                websites. Proficient in HTML, CSS, jQuery, JavaScript plus modern libraries and frameworks.
                                Interest to learn and work back end
                            </p>
                            <ul class="about-info mt-4 ps-0">
                                <li class="d-flex">
                                    <span class="text-dark">Name:</span> <span class="text-gray">velappan</span>
                                </li>
                                <li class="d-flex">
                                    <span class="text-dark">Date of birth:</span> <span class="text-gray">June 13, 1999</span>
                                </li>
                                <li class="d-flex">
                                    <span class="text-dark">Address:</span> <span class="text-gray">Kanya kumari, Tamil Nadu</span>
                                </li>
                                <li class="d-flex">
                                    <span class="text-dark">Zip code:</span> <span class="text-gray">629 501</span>
                                </li>
                                <li class="d-flex">
                                    <span class="text-dark">Email:</span> <span class="text-gray">tvelappan99@gmail.com</span>
                                </li>
                                <li class="d-flex">
                                    <span class="text-dark">Phone: </span> <span class="text-gray">+91 9597493541</span>
                                </li>
                            </ul>
                            <a href="./download.php?file=Velappan_resume" target="_blank" class="btn btn-blue text-white text-uppercase mt-4">Download CV</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== End : About Section 
        =============================-->

        <!-- ===== Start : Resume Section 
        ==============================-->

        <section class="resume-section mb-5" id="resume">
            <div class="container">
                <div class="row m-0">
                    <div class="col-lg-3 p-0">
                        <nav id="resume-navbar" class="navbar flex-column align-items-stretch p-lg-3 resume-navbar">
                            
                            <ul id="resume-navbar" class="ps-0 lh-40">
                                <li data-move='education' class="active cp">
                                    Education
                                </li>
                                <li data-move='experience' class="cp">
                                    Experience
                                </li>
                                <li data-move='skills' class="cp">
                                    Skills
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-9 p-0">
                        <div class="p-lg-3 ps-2 ps-lg-0 content-wrapper">
                            <!-- Education Section -->
                            <div class="education-resume scrollto" id="education-resume">
                                <div class="resume-title">
                                    <h2 class="fw-800 text-blue">Education</h2>
                                </div>
                                <div class="education-details">
                                    <div class="d-flex mt-4">
                                        <div class="image-icon d-flex justify-content-center align-items-center text-white">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                        </div>
                                        <div class="details px-3 w-calc">
                                            <span class="fw-800 text-blue">2016 - 2020</span>
                                            <h6 class="fw-800 mt-2">UG degree in Electrical and Electronics Engineering</h6>
                                            <span class="fw-800 text-blue mt-2">Cape Institute of Technology</span>
                                            <p class="mt-2">CGPA : 7</p>
                                        </div>
                                    </div>
                                    <div class="d-flex mt-4">
                                        <div class="image-icon d-flex justify-content-center align-items-center text-white">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                        </div>
                                        <div class="details px-3 w-calc">
                                            <span class="fw-800 text-blue">2015 - 2026</span>
                                            <h6 class="fw-800 mt-2">Higher Secondary Education</h6>
                                            <span class="fw-800 text-blue mt-2">G.H.S.S Eathamozhy </span>
                                            <p class="mt-2">First class with 74.5%</p>
                                        </div>
                                    </div>
                                    <div class="d-flex mt-4">
                                        <div class="image-icon d-flex justify-content-center align-items-center text-white">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                        </div>
                                        <div class="details px-3 w-calc">
                                            <span class="fw-800 text-blue">2013 - 2024</span>
                                            <h6 class="fw-800 mt-2">Secondary School Education</h6>
                                            <span class="fw-800 text-blue mt-2">G.H.S.S Eathamozhy </span>
                                            <p class="mt-2">First class with 91.5%</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Experience Section -->
                            <div class="experience-resume scrollto" id="experience-resume">
                                <div class="resume-title">
                                    <h2 class="fw-800 text-blue">Experience</h2>
                                </div>
                                <div class="experience-details">
                                    <div class="d-flex mt-4">
                                        <div class="image-icon d-flex justify-content-center align-items-center text-white">
                                            <i class="fa-solid fa-briefcase"></i>
                                        </div>
                                        <div class="details px-3 w-calc">
                                            <span class="fw-800 text-blue">04/2021 – 10/2021</span>
                                            <h6 class="fw-800 mt-2">Web Developer Trainee, Gowebez</h6>
                                            <span class="fw-800 text-blue mt-2">Chennai, Tamil Nadu</span>
                                            <p class="mt-2">Learn new things about web development in training period</p>
                                        </div>
                                    </div>
                                    <div class="d-flex mt-4">
                                        <div class="image-icon d-flex justify-content-center align-items-center text-white">
                                            <i class="fa-solid fa-briefcase"></i>
                                        </div>
                                        <div class="details px-3 w-calc">
                                            <span class="fw-800 text-blue">11/2021 – 04/2022</span>
                                            <h6 class="fw-800 mt-2">Junior Front End Developer, Gowebez</h6>
                                            <span class="fw-800 text-blue mt-2">Chennai, Tamil Nadu</span>
                                            <p class="mt-2">ROLES AND RESPONSIBILITIES :</p>
                                            <ul>
                                                <li>PSD to Table less HTML an d CSS development.</li>
                                                <li>optimized CSS development</li>
                                                <li>custom the jQuery plugin as per clients needs</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="d-flex mt-4">
                                        <div class="image-icon d-flex justify-content-center align-items-center text-white">
                                            <i class="fa-solid fa-briefcase"></i>
                                        </div>
                                        <div class="details px-3 w-calc">
                                            <span class="fw-800 text-blue">05/2022 – present</span>
                                            <h6 class="fw-800 mt-2">Front End Developer, Gowebez</h6>
                                            <span class="fw-800 text-blue mt-2">Chennai, Tamil Nadu</span>
                                            <p class="mt-2">ROLES AND RESPONSIBILITIES :</p>
                                            <ul>
                                                <li>Using, HTML JavaScript and CSS to bring concepts to life</li>
                                                <li>Developing and maintain the user interface</li>
                                                <li>Implementing design on mobile websites</li>
                                                <li>Translating wireframes design to HTML</li>
                                                <li>Building reusable code for future u se, Optimizing web pages for maximum speed and
                                                scalability</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Skills Section -->
                            <div class="skills-resume scrollto" id="skills-resume">
                                <div class="resume-title">
                                    <h2 class="fw-800 text-blue">Skills</h2>
                                </div>
                                <div class="skills-details">
                                    <div class="row m-0">
                                        <div class="col-lg-6 p-0 pe-lg-2">
                                            <div class="skill mt-4">
                                                <div class="d-flex justify-content-between">
                                                    <h6>HTML</h6>
                                                    <span>90%</span>
                                                </div>
                                                <div class="progress mt-1">
                                                    <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 p-0 ps-lg-2">
                                            <div class="skill mt-4">
                                                <div class="d-flex justify-content-between">
                                                    <h6>CSS</h6>
                                                    <span>85%</span>
                                                </div>
                                                <div class="progress mt-1">
                                                    <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 p-0 pe-lg-2">
                                            <div class="skill mt-4">
                                                <div class="d-flex justify-content-between">
                                                    <h6>Java Script</h6>
                                                    <span>80%</span>
                                                </div>
                                                <div class="progress mt-1">
                                                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 p-0 ps-lg-2">
                                            <div class="skill mt-4">
                                                <div class="d-flex justify-content-between">
                                                    <h6>jQuery</h6>
                                                    <span>80%</span>
                                                </div>
                                                <div class="progress mt-1">
                                                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 p-0 pe-lg-2">
                                            <div class="skill mt-4">
                                                <div class="d-flex justify-content-between">
                                                    <h6>Bootstrap 4 & 5</h6>
                                                    <span>80%</span>
                                                </div>
                                                <div class="progress mt-1">
                                                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 p-0 ps-lg-2">
                                            <div class="skill mt-4">
                                                <div class="d-flex justify-content-between">
                                                    <h6>PHP</h6>
                                                    <span>70%</span>
                                                </div>
                                                <div class="progress mt-1">
                                                    <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 p-0 pe-lg-2">
                                            <div class="skill mt-4">
                                                <div class="d-flex justify-content-between">
                                                    <h6>React JS</h6>
                                                    <span>30%</span>
                                                </div>
                                                <div class="progress mt-1">
                                                    <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 p-0 ps-lg-2">
                                            <div class="skill mt-4">
                                                <div class="d-flex justify-content-between">
                                                    <h6>Laravel</h6>
                                                    <span>70%</span>
                                                </div>
                                                <div class="progress mt-1">
                                                    <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
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
        </section>

        <!-- ===== End : Resume Section 
        ==============================-->

        <!-- ===== Start : Service Section 
        ==============================-->
        <section class="service mb-5" id="service">
            <div class="container">
                <div class="resume-title text-center mb-3">
                    <h2 class="fw-800 text-blue">Services</h2>
                </div>
                <div class="row m-0 mt-5">
                    <div class="col-lg-4 p-0 mt-4 mt-lg-0">
                        <div class="service-box text-center h-100 p-3 p-lg-5 mx-lg-3">
                            <div class="service-icon">
                                <i class="fa-solid fa-code"></i>
                            </div>
                            <div class="services-details mt-3">
                                <h6 class="mb-4 mt-2">Web Developer</h6>
                                <p class="mt-3 mb-0 text-gray">
                                    Web development can range from developing a simple single static page of plain text to complex web applications, electronic businesses, and social network services.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 p-0 mt-4 mt-lg-0">
                        <div class="service-box text-center h-100 p-3 p-lg-5 mx-lg-3">
                            <div class="service-icon">
                            <i class="fa-solid fa-paintbrush"></i>
                            </div>
                            <div class="services-details mt-3">
                                <h6 class="mb-4 mt-2">Web Designer</h6>
                                <p class="mt-3 mb-0 text-gray">
                                    Appearance and design are incorporated as vital elements whether you're designing a website, mobile app or maintaining content on a web page.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 p-0 mt-4 mt-lg-0">
                        <div class="service-box text-center h-100 p-3 p-lg-5 mx-lg-3">
                            <div class="service-icon">
                            <i class="fa-solid fa-paintbrush"></i>
                            </div>
                            <div class="services-details mt-3">
                                <h6 class="mb-4 mt-2">Phtography</h6>
                                <p class="mt-3 mb-0 text-gray">
                                    Photography is the art of taking pictures with a device called a camera. 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ===== End : Service Section 
        ==============================-->

        <!-- ===== Start : Blog Section 
        ==============================-->

        <section class="blog-section mb-5" id="blogs">
            <div class="overlay"></div>
            <div class="container">
                <div class="text-center">
                    <h1 class="text-white">Currently blog are not available</h1>
                    <button class="btn btn-blue my-3">Hire Me</button>
                </div>
            </div>
        </section>

        <!-- ===== End : Blog Section 
        ==============================-->

        <!-- ===== Start : Contant Section 
        ==============================-->

        <section class="contact-section" id="contact">
            <div class="container">
                <div class="resume-title text-center my-3">
                    <h1 class="fw-800 text-blue">Contact Us</h1>
                </div>
                <div class="row m-0 mt-4">
                    <div class="col-md-6 col-lg-3 p-max-0 mt-4 mt-lg-0">
                        <div class="card text-center h-100 p-4">
                            <div class="d-flex justify-content-center align-items-center py-3">
                                <div class="contact-icon">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                            </div>
                            <h4 class="mb-3">Address</h4>
                            <p class="text-gray">34-45,Vellalar street, Eathamozhy, Kanya Kumari, Tamil Nadu</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 p-max-0 mt-4 mt-lg-0">
                        <div class="card text-center h-100 p-4">
                            <div class="d-flex justify-content-center align-items-center py-3">
                                <div class="contact-icon">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                            </div>
                            <h4 class="mb-3">Phone</h4>
                            <a href="tel:9597493541" class="text-decoration-none mt-3">9597493541</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 p-max-0 mt-4 mt-lg-0">
                        <div class="card text-center h-100 p-4">
                            <div class="d-flex justify-content-center align-items-center py-3">
                                <div class="contact-icon">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                            </div>
                            <h4 class="mb-3">Email</h4>
                            <a href="mailto: tvelappan99@gmail.com" class="text-decoration-none mt-3">tvelappan99@gmail.com</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 p-max-0 mt-4 mt-lg-0">
                        <div class="card text-center h-100 p-4">
                            <div class="d-flex justify-content-center align-items-center py-3">
                                <div class="contact-icon">
                                    <i class="fa-solid fa-link"></i>
                                </div>
                            </div>
                            <h4 class="mb-3">Web Site</h4>
                            <a href="#" class="text-decoration-none mt-3">yoursite.com</a>
                        </div>
                    </div>
                </div>
                <div class="contact-form mt-5">
                    <div class="row m-0">
                        <div class="col-lg-6 p-0">
                            <div class="d-flex h-100">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63188.98971888896!2d77.38001264075105!3d8.171303594311691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b04f0dfc0ddc7b7%3A0x809a9e32a95d3ed1!2sNagercoil%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1660648215872!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                        <div class="col-lg-6 p-0">
                            <form action="" method="post" class="p-lg-5">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control mt-4 validation" data-required-name='Name' placeholder="Your Name" data-type='text'>
                                    <small class="text-danger"></small>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control mt-4 validation" data-required-name='Email' placeholder="Your Email"  data-type='email'>
                                    <small class="text-danger"></small>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phone" id="phone" class="form-control mt-4 validation" data-required-name='Phone' placeholder="Your Phone Number"  data-type='phone'>
                                    <small class="text-danger"></small>
                                </div>
                                <div class="form-group">
                                    <textarea name="message" class="form-control mt-4 validation" id="message" cols="30" rows="3" data-required-name='Message' placeholder="Leave Your Message"  data-type='text'></textarea>
                                    <small class="text-danger"></small>
                                </div>
                                <button type="submit" class="btn btn-blue mt-4" id="contant-us">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== End : Contant Section 
        ==============================-->
        
    </main>
    
<?php include './_template/footer.tpl.php' ?>
