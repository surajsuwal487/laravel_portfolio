<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href={{ asset('styles/styles.css') }}>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    {{-- Toaster --}}
    <link rel="stylesheet" href="{{ asset('toastr/toastr.min.css') }}">
</head>

<body class="main-content">
    <header class="container header active" id="home">
        <div class="header-content">
            <div class="left-header">
                <div class="h-shape"></div>
                <div class="image">
                    <img src="{{ asset('img/hero2.jpg') }}" alt="">
                </div>
            </div>
            <div class="right-header">
                <h1 class="name">
                    Hi, I'm <span>Suraj Suwal</span>
                    A Web Developer.
                </h1>
                <p>
                    I am a Back End developer with industry experience building websites and web applications. I
                    specialize in PHP(Laravel) and have professional experience working with Laravel. I also have
                    experience working with MYSQL, HTML, CSS, Javascript, APIs, Bootstrap and jQuerry.
                </p>
                {{-- <div class="btn-con">
                    <a href="" class="main-btn">
                        <span class="btn-text">Download CV</span>
                        <span class="btn-icon"><i class="fas fa-download"></i></span>
                    </a>
                </div> --}}
            </div>
        </div>
    </header>
    <main>
        <section class="container about" id="about">
            <div class="main-title">
                <h2>About <span>me</span><span class="bg-text">my stats</span></h2>
            </div>
            <div class="">
                <div class="">
                    {{-- <h4>Information About me</h4> --}}
                    <p>
                        I am a highly skilled and experienced backend developer with a specialization in [PHP, Laravel,
                        MYSQL, HTML, CSS, Bootstrap, Javascript,Jquery,REST APIs]. I am proficient in developing and
                        maintaining server-side logic and have a deep understanding of databases and APIs. I am highly
                        adaptable and able to quickly learn new technologies and programming languages. I am passionate
                        about building efficient and scalable systems and am dedicated to delivering high-quality work.
                        I enjoy working in a team environment and am always looking for ways to improve my skills and
                        stay up-to-date with the latest industry developments.
                    </p>
                    {{-- <div class="btn-con">
                        <a href="#" class="main-btn">
                            <span class="btn-text">Download CV</span>
                            <span class="btn-icon"><i class="fas fa-download"></i></span>
                        </a>
                    </div> --}}
                </div>
                {{-- <div class="right-about">
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">650+</p>
                            <p class="small-text">Projects <br /> Completed</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">10+</p>
                            <p class="small-text">Years of <br /> experience</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">300+</p>
                            <p class="small-text">Happy <br /> Clients</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">400+</p>
                            <p class="small-text">Customer <br /> reviews</p>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="about-stats">
                <h4 class="stat-title">My Skills</h4>
                <div style="text-align: center">

                    <p> <a href="https://getbootstrap.com" target="_blank" rel="noreferrer"> <img
                                src="https://raw.githubusercontent.com/devicons/devicon/master/icons/bootstrap/bootstrap-plain-wordmark.svg"
                                alt="bootstrap" width="80" height="80" /> </a> <a
                            href="https://www.w3schools.com/css/" target="_blank" rel="noreferrer"> <img
                                src="https://raw.githubusercontent.com/devicons/devicon/master/icons/css3/css3-original-wordmark.svg"
                                alt="css3" width="80" height="80" /> </a> <a href="https://git-scm.com/"
                            target="_blank" rel="noreferrer"> <img
                                src="https://www.vectorlogo.zone/logos/git-scm/git-scm-icon.svg" alt="git"
                                width="80" height="80" /> </a> <a href="https://www.w3.org/html/" target="_blank"
                            rel="noreferrer"> <img
                                src="https://raw.githubusercontent.com/devicons/devicon/master/icons/html5/html5-original-wordmark.svg"
                                alt="html5" width="80" height="80" /> </a> <a
                            href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank"
                            rel="noreferrer">
                            <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/javascript/javascript-original.svg"
                                alt="javascript" width="80" height="80" /> </a> <a href="https://laravel.com/"
                            target="_blank" rel="noreferrer"> <img
                                src="https://raw.githubusercontent.com/devicons/devicon/master/icons/laravel/laravel-plain-wordmark.svg"
                                alt="laravel" width="80" height="80" /> </a> <a href="https://www.mysql.com/"
                            target="_blank" rel="noreferrer"> <img
                                src="https://raw.githubusercontent.com/devicons/devicon/master/icons/mysql/mysql-original-wordmark.svg"
                                alt="mysql" width="80" height="80" /> </a> <a href="https://www.php.net"
                            target="_blank" rel="noreferrer"> <img
                                src="https://raw.githubusercontent.com/devicons/devicon/master/icons/php/php-original.svg"
                                alt="php" width="80" height="80" /> </a> </p>

                </div>
                {{-- <div class="progress-bars">
                    <div class="progress-bar">
                        <p class="prog-title">html5</p>
                        <div class="progress-con">
                            <p class="prog-text">80%</p>
                            <div class="progress">
                                <span class="html"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">css3</p>
                        <div class="progress-con">
                            <p class="prog-text">95%</p>
                            <div class="progress">
                                <span class="css"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">javascript</p>
                        <div class="progress-con">
                            <p class="prog-text">75%</p>
                            <div class="progress">
                                <span class="js"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">ReactJS</p>
                        <div class="progress-con">
                            <p class="prog-text">75%</p>
                            <div class="progress">
                                <span class="react"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">NodeJS</p>
                        <div class="progress-con">
                            <p class="prog-text">87%</p>
                            <div class="progress">
                                <span class="node"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">Python</p>
                        <div class="progress-con">
                            <p class="prog-text">70%</p>
                            <div class="progress">
                                <span class="python"></span>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            <h4 class="stat-title">My Timeline</h4>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">2022 November - present</p>
                    <h5>Laravel Developer<span> - Prologic Solutions</span></h5>
                    {{-- <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe quasi vero fugit.
                    </p> --}}
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">April, 2022 - September, 2022</p>
                    <h5>Laravel Developer<span> - Creatu Developers</span></h5>
                    {{-- <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe quasi vero fugit.
                    </p> --}}
                </div>
                {{-- <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">2016 - 2017</p>
                    <h5>C++ Programmer<span> - Slime Tech</span></h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe quasi vero fugit.
                    </p>
                </div> --}}
                {{-- <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">2009 - 2013</p>
                    <h5>Business Degree<span> - Sussex University</span></h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe quasi vero fugit.
                    </p>
                </div> --}}
                {{-- <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">2013 - 2016</p>
                    <h5>Computer Science Degree<span> - Brookes University</span></h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe quasi vero fugit.
                    </p>
                </div> --}}
                {{-- <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">2017 - present</p>
                    <h5>3d Animation<span> - Brighton University</span></h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe quasi vero fugit.
                    </p>
                </div> --}}
            </div>
        </section>
        <section class="container" id="portfolio">
            <div class="main-title">
                <h2>My <span>Portfolio</span><span class="bg-text">My Work</span></h2>
            </div>
            <p class="port-text">
                Here is some of my project that I have involved in.
            </p>
            <div class="portfolios">
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/port1.jpg" alt="">
                    </div>
                    <h3 style="text-align: center">Nepali Garden</h3>
                    <div class="hover-items">
                        <small style="text-align: center">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            Iste alias amet dicta aut accusantium, impedit accusamus eveniet vero error totam adipisci!
                            Libero asperiores explicabo nemo earum velit? Ad, ipsam autem.</small>
                    </div>
                    {{-- <div class="hover-items">
                        <h3>Project Source</h3>
                        <div class="icons">
                            <a href="#" class="icon">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-behance"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div> --}}
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/port2.jpg" alt="">
                    </div>
                    <h3 style="text-align: center">Creatu Learning</h3>
                    <div class="hover-items">
                        <small style="text-align: center">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            Iste alias amet dicta aut accusantium, impedit accusamus eveniet vero error totam adipisci!
                            Libero asperiores explicabo nemo earum velit? Ad, ipsam autem.</small>
                    </div>
                    {{-- <div class="hover-items">
                        <h3>Project Source</h3>
                        <div class="icons">
                            <a href="#" class="icon">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-behance"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div> --}}
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/port3.jpg" alt="">
                    </div>
                    <h3 style="text-align: center">Raju Blogs</h3>
                    <div class="hover-items">
                        <small style="text-align: center">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            Iste alias amet dicta aut accusantium, impedit accusamus eveniet vero error totam adipisci!
                            Libero asperiores explicabo nemo earum velit? Ad, ipsam autem.</small>
                    </div>
                    {{-- <div class="hover-items">
                        <h3>Project Source</h3>
                        <div class="icons">
                            <a href="#" class="icon">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-behance"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div> --}}
                </div>
                {{-- <div class="portfolio-item">
                    <div class="image">
                        <img src="img/port3.jpg" alt="">
                    </div>
                    <h3 style="text-align: center">HR Portal</h3>
                    <div class="hover-items">
                        <small style="text-align: center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste alias amet dicta aut accusantium, impedit accusamus eveniet vero error totam adipisci! Libero asperiores explicabo nemo earum velit? Ad, ipsam autem.</small>
                    </div>
                    <div class="hover-items">
                        <h3>Project Source</h3>
                        <div class="icons">
                            <a href="#" class="icon">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-behance"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="portfolio-item">
                    <div class="image">
                        <img src="img/port2.jpg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Project Source</h3>
                        <div class="icons">
                            <a href="#" class="icon">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-behance"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="portfolio-item">
                    <div class="image">
                        <img src="img/port3.jpg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Project Source</h3>
                        <div class="icons">
                            <a href="#" class="icon">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-behance"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="portfolio-item">
                    <div class="image">
                        <img src="img/port4.jpg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Project Source</h3>
                        <div class="icons">
                            <a href="#" class="icon">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-behance"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="portfolio-item">
                    <div class="image">
                        <img src="img/port5.jpg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Project Source</h3>
                        <div class="icons">
                            <a href="#" class="icon">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-behance"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="portfolio-item">
                    <div class="image">
                        <img src="img/port2.jpg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Project Source</h3>
                        <div class="icons">
                            <a href="#" class="icon">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-behance"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="portfolio-item">
                    <div class="image">
                        <img src="img/port7.jpg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Project Source</h3>
                        <div class="icons">
                            <a href="#" class="icon">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-behance"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </section>
        <section class="container contact" id="contact">
            <div class="contact-container">
                <div class="main-title">
                    <h2>Contact <span>Me</span><span class="bg-text">Contact</span></h2>
                </div>
                <div class="contact-content-con">
                    <div class="left-contact">
                        <h4>Contact me here</h4>
                        <p>
                            Thank you for visiting my website. If you have any questions or would like to work with me,
                            please feel free to reach out. I would be happy to hear from you!" or "Please don't hesitate
                            to contact me if you have any questions about my services, would like to schedule a
                            consultation, or just want to say hi.
                        </p>
                        <div class="contact-info">
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>Location</span>
                                </div>
                                <p>
                                    <span>: Koteshwor, Kathmandu</span>
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                    <span>Email</span>
                                </div>
                                <p>
                                    <span>: surajsuwal487@gmail.com</span>
                                </p>
                            </div>
                        </div>
                        <div class="contact-icons">
                            <div class="contact-icon">
                                <a href="https://github.com/surajsuwal487" target="_blank">
                                    <i class="fab fa-github"></i>
                                </a>
                                <a href="https://www.linkedin.com/in/suraj-suwal-6ba669190/" target="_blank">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="right-contact">
                        <form action="{{ route('inquiry.store') }}" method="POST" class="contact-form">
                            @csrf
                            <div class="input-control i-c-2">
                                <input type="text" name="name" required placeholder="YOUR NAME">
                                <input type="email" name="email" required placeholder="YOUR EMAIL">
                            </div>
                            <div class="input-control">
                                <input type="text" name="subject" required placeholder="ENTER SUBJECT">
                            </div>
                            <div class="input-control">
                                <textarea name="message" id="" cols="15" required rows="8" placeholder="Message Here..."></textarea>
                            </div>
                            <div class="input-control">
                                <input type="submit" id="inquirySubmit" value="Submit">
                            </div>
                            <div class="submit-btn">
                                <a href="#" class="main-btn">
                                    <span class="btn-text">Download CV</span>
                                    <span class="btn-icon"><i class="fas fa-download"></i></span>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <div class="controls">
        <div class="control active-btn" data-id="home">
            <i class="fas fa-home"></i>
        </div>
        <div class="control" data-id="about">
            <i class="fas fa-user"></i>
        </div>
        <div class="control" data-id="portfolio">
            <i class="fas fa-briefcase"></i>
        </div>
        <!-- <div class="control" data-id="blogs">
            <i class="far fa-newspaper"></i>
        </div> -->
        <div class="control" data-id="contact">
            <i class="fas fa-envelope-open"></i>
        </div>
    </div>
    <div class="theme-btn">
        <i class="fas fa-adjust"></i>
    </div>
    <script src="{{ asset('app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('toastr/toastr.min.js') }}"></script>

    <!-- Script for Toastr-->
    @if (session('success'))
        <script>
            $(function() {
                toastr.success("{{ session('success') }}");
            });
        </script>
    @endif
    @if (session('error'))
        <script>
            $(function() {
                toastr.error("{{ session('error') }}");
            });
        </script>
    @endif
    @if ($errors->any())
        @foreach ($errors->all() as $key => $error)
            <script>
                $(function() {

                    toastr.error("{{ $error }}");
                });
            </script>
        @endforeach
    @endif
    <script>
        // $('#inquirySubmit').click(function(e){
        //     e.preventDefault();
        //     alert('Your Inquiry has been submittes successfully.');
        // })
    </script>
</body>

</html>
