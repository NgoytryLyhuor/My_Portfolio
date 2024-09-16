<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ngoytry_Lyhuor</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="image/icon.jpg">

    {{-- <!-- light Mode --> --}}
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanuman:wght@100;300;400;700;900&family=Lato:wght@100;300;400;700&family=Moulpali&family=Poppins:wght@300;400;500;600&family=Quicksand:wght@300;400;500;600;700&family=Roboto:wght@100;300;400;500;700&family=Titillium+Web:wght@200;300;400;700&display=swap" rel="stylesheet">
    
    {{-- <!-- Icons Css --> --}}
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
</head>
<body class="position-relative">
    {{-- <!-- back_to_top --> --}}
    <div class="circle position-fixed back-to-top">
        <div class="conttainer-fluid d-flex justify-content-center align-items-center">
            <i class="ri-arrow-up-s-line text-white"></i>
        </div>
    </div>

    {{-- <!-- responsive_navbar --> --}}
    <div class="container-fluid re_navbar p-0">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="re_name m-2">
                <a href="#home">
                    <img src="image/me.jpg" style="width: 45px; height: 48px;object-fit: cover;border-radius: 50%;" alt="">
                </a>
            </div>
            <div class="re_menu m-2">
                <div class="re_socail d-flex justify-content-between">
                    <a href="https://web.facebook.com/ngoytry.lyhuor20/" target="_blank"><button class="btn p-0"><i style="font-size: 18px" class="text-white ri-facebook-fill p-1"></i></button></a>
                    <a href="https://t.me/ngoytrylyhuor" target="_blank"><button class="btn p-0"><i style="font-size: 18px" class="text-white ri-telegram-fill p-1"></i></button></a>
                    <button class="re_menu_icon">
                        <p class="re_menu_bar"></p>
                        <p class="re_menu_bar"></p>
                        <p class="re_menu_bar"></p>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="w-100 re_slide_menu">
        <div class="container-fluid p-0 mt-1 pb-3">
            <ul class="navbar-nav text-center">
                <li class="p-2"><a class="side_button" href="#home">Home</a></li>
                <li class="p-2"><a class="side_button" href="#about_me">About Me</a></li>
                <li class="p-2"><a class="side_button" href="#what_i_do">What I Do</a></li>
                <li class="p-2"><a class="side_button" href="#resume">Resume</a></li>
                <li class="p-2"><a class="side_button" href="#portfolio">Portfolio</a></li>
                <li class="p-2"><a class="side_button" href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>

    {{-- <!-- loading --> --}}
    <div id="load_page" class="container-fluid position-fixed loading p-0 m-0 d-flex justify-content-center align-items-center">
        <div class="spinner">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </div>
    <div class="container-fluid main">
        <div class="row">
            <div class="col-sm-0 col-lg-2 left p-0 ">
                <div class="container-fluid mt-5 p-0">
                    <div class="container-fluid d-flex justify-content-center p-0">
                        <div class="profile overflow-hidden">
                            <img class="w-100 h-100" style="object-fit: cover" src="image/me.jpg" alt="">
                        </div>
                    </div>
                    <h4 class="text-center mt-4 text-white">Ngoytry Lyhuor</h4>
                </div>
                <div class="container-fluid p-0 mt-5">
                    <ul class="navbar-nav text-center">
                        <li class="p-2"><a class="side_button" href="#home">Home</a></li>
                        <li class="p-2"><a class="side_button" href="#about_me">About Me</a></li>
                        <li class="p-2"><a class="side_button" href="#what_i_do">What I Do</a></li>
                        <li class="p-2"><a class="side_button" href="#resume">Resume</a></li>
                        <li class="p-2"><a class="side_button" href="#portfolio">Portfolio</a></li>
                        <li class="p-2"><a class="side_button" href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="container-fluid p-0 position-absolute bottom-0 mb-2">
                    <div class="container text-white d-flex justify-content-center">
                        <a href="https://web.facebook.com/ngoytry.lyhuor20/" target="_blank"><button class="btn p-0"><i style="font-size: 18px" class="ri-facebook-fill p-1"></i></button></a>
                        <a href="https://t.me/ngoytrylyhuor" target="_blank"><button class="btn p-0"><i style="font-size: 18px" class="ri-telegram-fill p-1"></i></button></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-10 right p-0">
                {{-- <!-- home --> --}}
                <div id="home" class="lay_1 d-flex align-items-center position-relative">
                    <div class="container">
                        <div class="container d-flex justify-content-center align-items-center">
                            <h1>Welcome</h1>
                        </div>
                        <div class="container d-flex justify-content-center align-items-center">
                            <p class="auto_typing text-white text-center"></p>
                        </div>
                        <div class="container d-flex justify-content-center align-items-center">
                            <p class="text-white text-center h2">based in Phnom Penh, Cambodia.</p>
                        </div>
                        <div class="container d-flex justify-content-center align-items-center mt-3">
                            <a class="h5" href="#contact"><button>Hire Me</button></a>
                        </div>
                    </div>
                    <div class="container-fluid p-0 position-absolute bottom-0 d-flex justify-content-center mb-5">
                        <i class="ri-arrow-down-s-line"></i>
                    </div>
                </div>

                {{-- <!-- About me --> --}}
                <div id="about_me" class="lay_2">
                    <div class="container-fluid p-0 d-flex justify-content-center position-relative float-left text-center">
                        <h1 class="back_word position-absolute">ABOUT ME</h1>
                        <h3 class="position-absolute text-white pb-sm-4">Know Me More</h3>
                    </div>
                    <div class="container-fluid myself float-left">
                        <div class="row">
                            <div class="col-lg-7 col-xl-8 text-center text-lg-start pb-5">
                                <p>I'm <span>Ngoytry Lyhuor,</span> a Web Developer</p>
                                <h6>I am a flexible, trustworthy, self-motivated and hardworking person and my education has been excellent since I was a high school student and continues to this day. I want to get the opportunity from this job to develop myself better because my goal is to become the most professional and talented webmaster in the future.</h6>
                            </div>
                            <div class="col-lg-5 col-xl-4 about_me_rigth">
                                <p class="mb-3">Name: Ngoytry Lyhuor</p><hr class="text-secondary mt-3">
                                <p class="mb-3">Email: <a href="mailto:ngoytrylyhuor17@gmail.com"><span>ngoytrylyhuor17@gmail.com</span></a></p><hr class="text-secondary mt-3">
                                <p class="mb-3">Age: 21</p><hr class="text-secondary mt-3">
                                <p class="mb-3">From: Phnom Penh, Cambodia</p>
                                <a class="h6" href="image/cv.jpg" download="resume.jpg"><button>Download CV</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="container mt-5">
                        <div class="row text-center exper">
                            <div class="col-6 col-md-3">
                                <h1>10+</h1>
                                <p class="text-white">Years Experiance</p>
                            </div>
                            <div class="col-6 col-md-3">
                                <h1>250+</h1>
                                <p class="text-white">Happy Clients</p>
                            </div>
                            <div class="col-6 col-md-3">
                                <h1>650+</h1>
                                <p class="text-white">Projects Done</p>
                            </div>
                            <div class="col-6 col-md-3">
                                <h1>30</h1>
                                <p class="text-white">Get Awards</p>
                            </div>
                        </div>
                    </div> -->
                </div>

                {{-- <!-- what i do  --> --}}
                
                <div id="what_i_do" class="lay_5 pb-4">
                    <div class="container-fluid p-0 d-flex justify-content-center position-relative float-left text-center">
                        <h1 class="back_word position-absolute">SERVICES</h1>
                        <h3 class="position-absolute text-white pb-sm-4">What I Do ?</h3>
                    </div>

                    <div class="container-fluid portfolio">
                        <div class="container skill p-0">
                            <div class="row p-0 m-0">
                                <div class="col-md-6 mb-5">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 d-flex justify-content-center">
                                            <div class="box d-flex justify-content-center align-items-center overflow-hidden">
                                                <img src="image/front.jpg" class="w-100 h-100" style="object-fit: cover">
                                            </div>
                                        </div>
                                        <div class="col-lg-9 col-md-9">
                                            <h2 class="text-light text-center text-md-start">Web Frontend</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-5">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 d-flex justify-content-center">
                                            <div class="box d-flex justify-content-center align-items-center overflow-hidden">
                                                <img src="image/back.jpg" class="w-100 h-100" style="object-fit: cover">
                                            </div>
                                        </div>
                                        <div class="col-lg-9 col-md-9">
                                            <h2 class="text-light text-center text-md-start">Web Backend</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-5">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 d-flex justify-content-center">
                                            <div class="box d-flex justify-content-center align-items-center overflow-hidden">
                                                <img src="image/web.jpg" class="w-100 h-100" style="object-fit: cover">
                                            </div>
                                        </div>
                                        <div class="col-lg-9 col-md-9">
                                            <h2 class="text-light text-center text-md-start">Fullstack Web Developer</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                </div>

                {{-- <!-- resume --> --}}
                <div id="resume" class="lay_4 pb-4">
                    <div class="container-fluid p-0 d-flex justify-content-center position-relative float-left text-center">
                        <h1 class="back_word position-absolute">SUMMARY</h1>
                        <h3 class="position-absolute text-white pb-sm-4">Resume</h3>
                    </div>
                    <div class="container-fluid portfolio">
                        <div class="row">
                            <div class="col-sm-6 p-sm-5">
                                <div class="container p-0">
                                    <h4 class="text-light mb-4"><b>My Education</b></h4>
                                    <div class="container-fluid resume_block mb-4">
                                        <div class="container p-0 pb-2">
                                            <p><span>2008 - 2014</span></p>
                                            <h4 class="text-light">Primary School</h4>
                                            <h6>Kampong Chheuteal Primary School</h6>
                                        </div>
                                    </div>
                                    <div class="container-fluid resume_block mb-4">
                                        <div class="container p-0 pb-2">
                                            <p><span>2014 - 2017</span></p>
                                            <h4 class="text-light">Secondary School</h4>
                                            <h6>Brasat Sambor Secondary School</h6>
                                        </div>
                                    </div>
                                    <div class="container-fluid resume_block mb-4">
                                        <div class="container p-0 pb-2">
                                            <p><span>2017 - 2020</span></p>
                                            <h4 class="text-light">High School</h4>
                                            <h6>Kampong Chheuteal High School ( KCIT )</h6>
                                        </div>
                                    </div>
                                    <div class="container-fluid resume_block mb-4">
                                        <div class="container p-0 pb-2">
                                            <p><span>2020 - Present</span></p>
                                            <h4 class="text-light">University</h4>
                                            <h6>Industrial Teachnical Institute ( ITI )</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 p-sm-5">
                                <div class="container p-0">
                                    <h4 class="text-light mb-4"><b>My Experience</b></h4>
                                    <div class="container-fluid resume_block mb-4">
                                        <div class="container p-0 pb-2">
                                            <p><span>2021 - 2022</span></p>
                                            <h4 class="text-light">Online courses teaching</h4>
                                            <h6>Improve on frontend skill ( HTML / CSS / JAVASCRIPT / JQUERY )</h6>
                                        </div>
                                    </div>
                                    <div class="container-fluid resume_block mb-4">
                                        <div class="container p-0 pb-2">
                                            <p><span>Mar 2022 - Mar 2023</span></p>
                                            <h4 class="text-light">Work as Instructor at ETEC CENTER ( IT )</h4>
                                            <h6>Teach and advise at least 100 students (  C / C++ / Frontend / Backend )</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid p-0">
                            <div class="row">
                                <div class="col-sm-6 p-sm-5">
                                    <h4 class="text-light mb-5"><b>My Skills</b></h4>
                                    <div class="">
                                        <div class="card-body p-0">
                                            <div class="p-0">
                                                <h4 class="card-title d-flex justify-content-between text-white"><span>HTML/CSS</span><span>90%</span></h4>
                                                <div class="progress animated-progess mb-4">
                                                    <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <h4 class="card-title d-flex justify-content-between text-white"><span>Bootstrap</span><span>90%</span></h4>
                                                <div class="progress animated-progess mb-4">
                                                    <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <h4 class="card-title d-flex justify-content-between text-white"><span>JavaScript</span><span>80%</span></h4>
                                                <div class="progress animated-progess mb-4">
                                                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <h4 class="card-title d-flex justify-content-between text-white"><span>jQuery</span><span>80%</span></h4>
                                                <div class="progress animated-progess mb-4">
                                                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <h4 class="card-title d-flex justify-content-between text-white"><span>C/C++</span><span>80%</span></h4>
                                                <div class="progress animated-progess mb-4">
                                                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 p-sm-5">
                                    <div class="">
                                        <div class="card-body p-0">
                                            <div class="">
                                                <h4 class="card-title d-flex justify-content-between jus text-white">Vue JS <span>40%</span></h4>
                                                <div class="progress animated-progess mb-4">
                                                    <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <h4 class="card-title d-flex justify-content-between text-white">React JS <span>20%</span></h4>
                                                <div class="progress animated-progess mb-4">
                                                    <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <h4 class="card-title d-flex justify-content-between text-white">PHP <span>80%</span></h4>
                                                <div class="progress animated-progess mb-4">
                                                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <h4 class="card-title d-flex justify-content-between text-white">Laravel <span>80%</span></h4>
                                                <div class="progress animated-progess mb-4">
                                                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <h4 class="card-title d-flex justify-content-between text-white">My SQL <span>70%</span></h4>
                                                <div class="progress animated-progess mb-4">
                                                    <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <h4 class="card-title d-flex justify-content-between text-white">Web Design <span>70%</span></h4>
                                                <div class="progress animated-progess mb-4">
                                                    <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                {{-- <!-- portfolio  --> --}}
                <div id="portfolio" class="lay_5 pb-4">
                    <div class="container-fluid p-0 d-flex justify-content-center position-relative float-left text-center">
                        <h1 class="back_word position-absolute">PORTFOLIO</h1>
                        <h3 class="position-absolute text-white pb-sm-4">My Work</h3>
                    </div>
                    <div class="container-fluid portfolio">
                        <div class="container-fluid d-flex justify-content-center">
                            <ul class="d-flex line list-unstyled">
                                <li id="all" class="p-3 fs-5 text-white border-bottom border-2 transitioning">All</li>
                                <li id="front" class="p-3 fs-5 text-white">Frontend</li>
                                <li id="back" class="p-3 fs-5 text-white">Backend</li>
                            </ul>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 mb-4 front">
                                <div class="container-fluid block d-flex align-items-center justify-content-center p-0 position-relative">
                                    <img class="position-absolute top-0" src="image/p-1.jpg" alt="">
                                    <div class="container-fluid p-0 position-absolute d-flex justify-content-center align-items-center">
                                        <div class="container text-center text">
                                            <h4 class="text-white text-decoration-underline mb-3">Frontend</h4>
                                            <p class="text-white">Business Cambodia clone website.</p>
                                            <a href="https://business-cambodia-test.netlify.app/" target="_blank" ><button type="button" class="btn btn-light waves-effect">Preview</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 mb-4 back">
                                <div class="container-fluid block d-flex align-items-center justify-content-center p-0 position-relative">
                                    <img class="position-absolute top-0" src="image/p-2.jpg" alt="">
                                    <div class="container-fluid p-0 position-absolute d-flex justify-content-center align-items-center">
                                        <div class="container text-center text">
                                            <h4 class="text-white text-decoration-underline mb-3">Backend</h4>
                                            <p class="text-white"></p>
                                            <a href="https://fastidious-medovik-e350a5.netlify.app/" target="_blank" ><button type="button" class="btn btn-light waves-effect">Preview</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 mb-4 front">
                                <div class="container-fluid block d-flex align-items-center justify-content-center p-0 position-relative">
                                    <img class="position-absolute top-0" src="image/p-5.jpg" alt="">
                                    <div class="container-fluid p-0 position-absolute d-flex justify-content-center align-items-center">
                                        <div class="container text-center text">
                                            <h4 class="text-white text-decoration-underline mb-3">Frontend</h4>
                                            <p class="text-white">Business Cambodia clone website new version. No responsive.</p>
                                            <a href="https://fastidious-medovik-e350a5.netlify.app/" target="_blank" ><button type="button" class="btn btn-light waves-effect">Preview</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 mb-4 back">
                                <div class="container-fluid block d-flex align-items-center justify-content-center p-0 position-relative">
                                    <img class="position-absolute top-0" src="image/p-4.jpg" alt="">
                                    <div class="container-fluid p-0 position-absolute d-flex justify-content-center align-items-center">
                                        <div class="container text-center text">
                                            <h4 class="text-white text-decoration-underline mb-3">Backend</h4>
                                            <p class="text-white"></p>
                                            <a href="https://fastidious-medovik-e350a5.netlify.app/" target="_blank" ><button type="button" class="btn btn-light waves-effect">Preview</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 mb-4 front">
                                <div class="container-fluid block d-flex align-items-center justify-content-center p-0 position-relative">
                                    <img class="position-absolute top-0" src="image/p-3.jpg" alt="">
                                    <div class="container-fluid p-0 position-absolute d-flex justify-content-center align-items-center">
                                        <div class="container text-center text">
                                            <h4 class="text-white text-decoration-underline mb-3">Frontend</h4>
                                            <p class="text-white">News Website i design by myself when i'm study in year one at university.</p>
                                            <a href="https://starlit-kulfi-992fe3.netlify.app" target="_blank" ><button type="button" class="btn btn-light waves-effect">Preview</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 mb-4 back">
                                <div class="container-fluid block d-flex align-items-center justify-content-center p-0 position-relative">
                                    <img class="position-absolute top-0" src="image/p-6.jpg" alt="">
                                    <div class="container-fluid p-0 position-absolute d-flex justify-content-center align-items-center">
                                        <div class="container text-center text">
                                            <h4 class="text-white text-decoration-underline mb-3">Backend</h4>
                                            <p class="text-white"></p>
                                            <a href="https://starlit-kulfi-992fe3.netlify.app" target="_blank" ><button type="button" class="btn btn-light waves-effect">Preview</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <!-- contact --> --}}
                <div id="contact" class="lay_6 pb-5">
                    <div class="container-fluid p-0 d-flex justify-content-center position-relative float-left text-center">
                        <h1 class="back_word position-absolute">CONTACT</h1>
                        <h3 class="position-absolute text-white pb-sm-4">Get in Touch</h3>
                    </div>
                    <div class="container-fluid portfolio">
                        <div class="row">
                            <div class="col-md-4 col-xl-3 order-1 order-md-0 text-center text-md-start">
                                <div class="container p-0">
                                    <h4 class="text-light mb-4"><b>ADDRESS</b></h4>
                                    <h5 class="text-white">#48,p8,Borey Peng Huoth The Star Premire,Sangkat Chrang Chamreh Pir,Khan Sen Sok</h5>
                                </div>
                                <div class="container p-0 mt-4">
                                    <ul class="navbar-nav">
                                        <li><i class="ri-phone-fill"></i> <span>086 501 3885</span></li>
                                        <li><i class=" ri-mail-send-fill"></i> <span>ngoytrylyhuor17@gmail.com</span></li>
                                    </ul>
                                </div>
                                <div class="container p-0 mt-4">
                                    <h4 class="text-light mb-4"><b>FOLLOW ME</b></h4>
                                </div>
                                <div class="container-fluid p-0">
                                    <a href="https://web.facebook.com/ngoytry.lyhuor20/" target="_blank"><button class="btn btn-dark p-0"><i style="font-size: 18px" class="ri-facebook-fill p-1"></i></button></a>
                                    <a href="https://t.me/ngoytrylyhuor" target="_blank"><button class="btn btn-dark p-0"><i style="font-size: 18px" class="ri-telegram-fill p-1"></i></button></a>
                                </div>
                            </div>
                            <div class="col-md-8 col-xl-9 order-0 order-md-1 feedback">
                                <div class="container p-0">
                                    <h4 class="text-light mb-4 text-center text-md-start"><b>SEND US A NOTE</b></h4>
                                    <form action="{{ route('feedback') }}" autocomplete="off" enctype="multipart/form-data" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-6">
                                                <input type="text" name="name" required placeholder="Name">
                                            </div>
                                            <div class="col-6">
                                                <input type="email" name="email" required placeholder="Email">
                                            </div>
                                            <div class="col-12 mt-4">
                                                <textarea name="comment" id="" required cols="30" rows="5" placeholder="Tell us more about your needs..."></textarea>
                                            </div>
                                        </div>
                                        <div class="container d-flex justify-content-center mt-4">
                                            <button type="submit" class="mb-4">Send Massage</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<script src="jQuery.js"></script>
<!-- Remix icon js-->
<script src="assets/js/pages/remix-icons-list.js"></script>
<script src="assets/js/app.js"></script>
<script src="assets/libs/metismenu/metisMenu.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>

<script src="https://unpkg.com/typed.js@2.0.15/dist/typed.umd.js"></script>
<script>
    var typed = new  Typed(".auto_typing",{
        strings:["I'm Web Developer.","&#128578;"],
        typeSpeed: 150,
        backSpeed: 50,
        loop: true
    })

    window.addEventListener("load", (event) => {
        $("#load_page").remove();
    });
    var a=0;
    $(document).ready(function(){
        $(window).scroll(function(){
            var scroll = $(window).scrollTop();
            var side_button = $(".side_button").length;
            for(i=0 ; i<side_button ; i++){
                $(".side_button:eq("+i+")").css("color", "#ffffff");
            }
            if (scroll < 711) {
                $(".side_button:eq(0)").css("color", "#ffc107");
                $(".side_button:eq(6)").css("color", "#ffc107");
            }
            else if (scroll >= 712.6 && scroll < 1337 ) {
                $(".side_button:eq(1)").css("color", "#ffc107");
                $(".side_button:eq(7)").css("color", "#ffc107");
            }
            else if (scroll >= 1337 && scroll < 1894) {
                $(".side_button:eq(2)").css("color", "#ffc107");
                $(".side_button:eq(8)").css("color", "#ffc107");
            }
            else if (scroll >= 1894 && scroll < 3496) {
                $(".side_button:eq(3)").css("color", "#ffc107");
                $(".side_button:eq(9)").css("color", "#ffc107");
            }
            else if (scroll >= 3496 && scroll < 4439) {
                $(".side_button:eq(4)").css("color", "#ffc107");
                $(".side_button:eq(10)").css("color", "#ffc107");
            }
            else if (scroll >= 4439) {
                $(".side_button:eq(5)").css("color", "#ffc107");
                $(".side_button:eq(11)").css("color", "#ffc107");
            }



            if(scroll > 100){
                $(".circle").css("display","block");
            }
            else{
                $(".circle").css("display","none");
            }
        })
        $(".re_menu_icon").click(function(){
            if( a==0 ){
                $(".re_menu_bar:eq(0)").css("transform","rotate(45deg)");
                $(".re_menu_bar:eq(2)").css("transform","rotate(-45deg)");
                $(".re_menu_bar:eq(1)").css("background-color", "#111418");
                $(".re_menu_bar:eq(1)").css("margin", "0 0");
                a=1;
                $(".re_slide_menu").slideDown();
            }
            else{
                $(".re_menu_bar:eq(0)").css("transform","rotate(0deg)");
                $(".re_menu_bar:eq(2)").css("transform","rotate(0deg)");
                $(".re_menu_bar:eq(1)").css("background-color", "#fff");
                $(".re_menu_bar:eq(1)").css("margin", "5px 0");
                $(".re_slide_menu").slideUp();
                a=0;
            }
        })
        $(".back-to-top").click(function(){
            $('html, body').animate({
                scrollTop: 0
            }, '3000');
        })
        $(".side_button").click(function(){
            $(".re_menu_bar:eq(0)").css("transform","rotate(0deg)");
            $(".re_menu_bar:eq(2)").css("transform","rotate(0deg)");
            $(".re_menu_bar:eq(1)").css("background-color", "#fff");
            $(".re_menu_bar:eq(1)").css("margin", "5px 0");
            $(".re_slide_menu").slideUp();
            a=0;
        })

        // project
        $("#all").click(function(){
            $(".back").show();
            $(".front").show();
            $("#all").addClass("border-bottom"); 
            $("#all").addClass("border-2"); 
            $("#front").removeClass("border-bottom"); 
            $("#front").removeClass("border-2"); 
            $("#back").removeClass("border-bottom"); 
            $("#back").removeClass("border-2"); 
        })
        $("#front").click(function(){
            $(".back").hide();
            $(".front").show();
            $("#front").addClass("border-bottom"); 
            $("#front").addClass("border-2"); 
            $("#all").removeClass("border-bottom"); 
            $("#all").removeClass("border-2"); 
            $("#back").removeClass("border-bottom"); 
            $("#back").removeClass("border-2"); 
        })
        $("#back").click(function(){
            $(".back").show();
            $(".front").hide();
            $("#back").addClass("border-bottom"); 
            $("#back").addClass("border-2"); 
            $("#front").removeClass("border-bottom"); 
            $("#front").removeClass("border-2"); 
            $("#all").removeClass("border-bottom"); 
            $("#all").removeClass("border-2"); 
        })
    })

</script>