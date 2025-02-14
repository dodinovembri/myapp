@extends('layouts.public')

@section('content')
        <div class="body">
            <header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
                <div class="header-body">
                    <div class="header-container container">
                        <div class="header-row">
                            <div class="header-column">
                                <div class="header-row">
                                    <div class="header-logo">
                                        <a href="index.html">
                                            <img alt="Porto" width="100" height="48" data-sticky-width="82" data-sticky-height="40" src="img/logo.png">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="header-column justify-content-end">
                                <div class="header-row">
                                    <div class="header-nav header-nav-line header-nav-top-line header-nav-top-line-with-border order-2 order-lg-1">
                                        <div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                            <nav class="collapse">
                                                <ul class="nav nav-pills" id="mainNav">
                                                    <li class="dropdown">
                                                        <a class="dropdown-item dropdown-toggle" href="index.html">
                                                            About
                                                        </a>
                                                    </li>
                                                    <li class="dropdown dropdown-mega">
                                                        <a class="dropdown-item dropdown-toggle" href="elements.html">
                                                            Experience
                                                        </a>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a class="dropdown-item dropdown-toggle active" href="#">
                                                            Education
                                                        </a>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a class="dropdown-item dropdown-toggle" href="#">
                                                            Skill
                                                        </a>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a class="dropdown-item dropdown-toggle" href="#">
                                                            Portfolio
                                                        </a>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a class="dropdown-item dropdown-toggle" href="#">
                                                            Blog
                                                        </a>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a class="dropdown-item dropdown-toggle" href="#">
                                                            Shop
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                        <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                            <i class="fas fa-bars"></i>
                                        </button>
                                    </div>
                                    <div class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
                                        <div class="header-nav-feature header-nav-features-user d-inline-flex mx-2 pr-2 signin" id="headerAccount">
                                            <a href="#" class="header-nav-features-toggle">
                                                <i class="far fa-user"></i> Sign In
                                            </a>
                                            <div class="header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed header-nav-features-dropdown-force-right" id="headerTopUserDropdown">
                                                <div class="signin-form">
                                                    <h5 class="text-uppercase mb-4 font-weight-bold text-3">Sign In</h5>
                                                    <form  method="POST" action="{{ route('login') }}">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label class="mb-1 text-2 opacity-8">Email address* </label>
                                                            <input type="email" name="email" class="form-control form-control-lg">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="mb-1 text-2 opacity-8">Password *</label>
                                                            <input type="password" name="password" class="form-control form-control-lg">
                                                        </div>
                                                        <div class="form-row pb-2">
                                                            <div class="form-group form-check col-lg-6 pl-1">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="rememberMeCheck">
                                                                    <label class="custom-control-label text-2" for="rememberMeCheck">Remember Me</label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-lg-6 text-right">
                                                                <a class="text-uppercase text-1 font-weight-bold text-color-dark" id="headerRecover" href="#">LOST YOUR PASSWORD?</a>
                                                            </div>
                                                        </div>
                                                        <div class="actions">
                                                            <div class="form-row">
                                                                <div class="col d-flex justify-content-end">
                                                                    <button type="submit" class="btn btn-primary">Login</button>        
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="extra-actions">
                                                            <p>Don't have an account yet? <a href="#" id="headerSignUp" class="text-uppercase text-1 font-weight-bold text-color-dark">Sign Up</a></p>
                                                        </div>
                                                    </form>
                                                </div>

                                                <div class="signup-form">
                                                    <h5 class="text-uppercase mb-4 font-weight-bold text-3">Sign Up</h5>
                                                    <form>
                                                        <div class="form-group">
                                                            <label class="mb-1 text-2 opacity-8">Email address* </label>
                                                            <input type="email" class="form-control form-control-lg">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="mb-1 text-2 opacity-8">Password *</label>
                                                            <input type="password" class="form-control form-control-lg">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="mb-1 text-2 opacity-8">Re-enter Password *</label>
                                                            <input type="password" class="form-control form-control-lg">
                                                        </div>
                                                        <div class="actions">
                                                            <div class="form-row">
                                                                <div class="col d-flex justify-content-end">
                                                                    <a class="btn btn-primary" href="#">Register</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="extra-actions">
                                                            <p>Already have an account? <a href="#" id="headerSignIn" class="text-uppercase text-1 font-weight-bold text-color-dark">Log In</a></p>
                                                        </div>
                                                    </form>
                                                </div>

                                                <div class="recover-form">
                                                    <h5 class="text-uppercase mb-2 pb-1 font-weight-bold text-3">Reset My Password</h5>
                                                    <p class="text-2 mb-4">Complete the form below to receive an email with the authorization code needed to reset your password.</p>

                                                    <form>
                                                        <div class="form-group">
                                                            <label class="mb-1 text-2 opacity-8">Email address* </label>
                                                            <input type="email" class="form-control form-control-lg">
                                                        </div>
                                                        <div class="actions">
                                                            <div class="form-row">
                                                                <div class="col d-flex justify-content-end">
                                                                    <a class="btn btn-primary" href="#">Reset</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="extra-actions">
                                                            <p>Already have an account? <a href="#" id="headerRecoverCancel" class="text-uppercase text-1 font-weight-bold text-color-dark">Log In</a></p>
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
                </div>
            </header>

            <div role="main" class="main">

            <section id="about-me" class="section section-no-border section-parallax custom-section-padding-1 custom-position-1 custom-xs-bg-size-cover parallax-no-overflow m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="{{ asset('img') }}/{{ $user->background_picture }}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 custom-sm-margin-bottom-1">
                            <img src="{{ asset('img') }}/{{ $user->profile_picture }}" class="img-fluid custom-border custom-image-position-2 custom-box-shadow-4" alt />
                        </div>
                        <div class="col-lg-6 col-xl-5">
                            <h1 class="text-color-primary custom-font-size-1">{{ $user->full_name }}</h1>
                            <p class="text-color-light font-weight-normal custom-font-size-2 custom-margin-bottom-1">{{ $user->profession }}</p>
                            <span class="custom-about-me-infos">
                                <span class="custom-text-color-1 text-uppercase">{{ $user->location }}</span>
                                <span class="custom-text-color-1 text-uppercase mb-3">{{ $user->job_departemen }}</span>
                                <span class="custom-text-color-1 text-uppercase">
                                    <strong class="text-color-light">Previous: </strong>
                                    Front-End Developer at Porto
                                    <a data-hash href="#experience" class="btn btn-tertiary text-uppercase custom-btn-style-1 text-1 ml-2">View More</a>
                                </span>
                                <span class="custom-text-color-1 text-uppercase">
                                    <strong class="text-color-light">Education: </strong>
                                    Porto School
                                    <a data-hash href="#education" class="btn btn-tertiary text-uppercase custom-btn-style-1 text-1 ml-2">View More</a>
                                </span>
                            </span>
                        </div>
                        <div class="col-lg-2 col-xl-3 d-none d-lg-block">
                            <img src="img/demos/resume/about-me/mouse.png" custom-anim class="img-fluid custom-image-pos-1" alt />
                        </div>
                    </div>
                </div>
                <ul class="social-icons custom-social-icons">
                    <li class="social-icons-facebook">
                        <a href="{{ $user->fb_url }}" target="_blank" title="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="social-icons-twitter">
                        <a href="http://www.twitter.com/" target="_blank" title="Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="social-icons-youtube">
                        <a href="http://www.youtube.com/" target="_blank" title="Youtube">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                </ul>
            </section>

            <div class="custom-about-me-links bg-color-light">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-lg-3 text-center custom-xs-border-bottom p-0">
                            <a data-hash href="#say-hello" class="text-decoration-none">
                                <span class="custom-nav-button text-color-dark">
                                    <i class="icon-earphones-alt icons text-color-primary"></i>
                                    Contact Information 
                                </span>
                            </a>
                        </div>
                        <div class="col-lg-2 text-center custom-xs-border-bottom p-0">
                            <a data-hash href="#say-hello" class="text-decoration-none">
                                <span class="custom-nav-button custom-divisors text-color-dark">
                                    <i class="icon-envelope-open icons text-color-primary"></i>
                                    Send Message    
                                </span>
                            </a>
                        </div>
                        <div class="col-lg-3 text-center p-0">
                            <a href="#" class="text-decoration-none">
                                <span class="custom-nav-button text-color-dark">
                                    <i class="icon-cloud-download icons text-color-primary"></i>
                                    Download Resume 
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <section class="section section-no-border bg-color-light m-0">
                <div class="container">
                    <div class="row">
                        <div class="col">

                            <div class="custom-box-details bg-color-light custom-box-shadow-1 col-lg-6 ml-5 mb-5 mb-lg-4 float-right clearfix">
                                <h4>Personal Details</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul class="custom-list-style-1 p-0 mb-0">
                                            <li>
                                                <span class="text-color-dark">Birthday:</span>
                                                <span class="custom-text-color-2">{{ $user->birthday }}</span>
                                            </li>
                                            <li>
                                                <span class="text-color-dark">Marital:</span>
                                                <span class="custom-text-color-2">{{ $user->marital }}</span>
                                            </li>
                                            <li>
                                                <span class="text-color-dark">Nationality:</span>
                                                <span class="custom-text-color-2">{{ $user->nationality }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="custom-list-style-1 p-0 mb-0">
                                            <li>
                                                <span class="text-color-dark">Skype:</span>
                                                <span class="custom-text-color-2"><a class="custom-text-color-2" href="skype:yourskype?chat">yourskype</a></span>
                                            </li>
                                            <li>
                                                <span class="text-color-dark">PHONE:</span>
                                                <span class="custom-text-color-2"><a class="custom-text-color-2" href="tel:{{ $user->phone_number }}">{{ $user->phone_number }}</a></span>
                                            </li>
                                            <li>
                                                <!-- <span class="text-color-dark">EMAIL:</span> -->
                                                <span class="custom-text-color-2"><a class="custom-text-color-2" href="mailto:{{ $user->email }}">{{ $user->email }}</a></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <h2 class="text-color-quaternary font-weight-extra-bold text-uppercase">About Me</h2>

                            <p class="custom-text-color-2">{{ $user->description }}</p>

                            <div class="about-me-more" id="aboutMeMore">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt nulla tortor, a imperdiet enim tristique nec. Nulla lobortis leo eget metus dapibus sodales. Sed placerat vitae dui vitae vehicula. Quisque in tincidunt ligula, nec dignissim arcu. Praesent aliquam velit vel libero dictum, non sollicitudin lectus mollis. Morbi sollicitudin auctor gravida. Vivamus vitae dui non lorem euismod pretium. Morbi congue sem sed ex iaculis, nec mattis felis pretium. Nullam molestie libero id odio blandit sodales. Suspendisse non mauris et felis molestie placerat aliquet a risus. Aliquam ac leo tempus, hendrerit eros mollis, gravida est.</p>

                                <p>Proin euismod ipsum a tellus condimentum dapibus. Integer porttitor felis elit, eget rutrum ligula commodo quis. Praesent ultricies neque eu mi congue blandit. Nulla feugiat feugiat aliquet. Morbi sed mattis erat. Nullam scelerisque molestie eros, id tristique felis iaculis non. Duis pellentesque neque eget iaculis varius. Donec at nisl semper, aliquam est id, tincidunt lacus. Donec at erat purus.</p>

                                <p>Morbi tincidunt nunc non diam porta, at fermentum orci bibendum. Donec arcu nisi, ornare nec commodo vitae, sollicitudin sed magna. Cras sit amet justo et nulla pulvinar laoreet. Phasellus scelerisque, metus id posuere vulputate, diam tellus iaculis sapien, eget scelerisque ipsum libero convallis velit. Duis lorem ligula, faucibus quis tellus nec, fringilla ultricies leo. Etiam tempus congue magna. Suspendisse porta dictum tortor, eu volutpat ipsum eleifend nec. Aliquam dapibus lorem luctus, cursus libero imperdiet, mattis nunc. Sed in ipsum diam. Quisque efficitur metus purus, vitae fermentum lacus venenatis id.</p>
                            </div>

                            <a id="aboutMeMoreBtn" class="btn btn-tertiary text-uppercase custom-btn-style-1 text-1" href="#">View More</a>

                        </div>
                    </div>
                </div>
            </section>

            <section id="experience" class="section section-secondary section-no-border m-0">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h2 class="text-color-quaternary text-uppercase font-weight-extra-bold">Experience</h2>
                            <section class="timeline custom-timeline" id="timeline">
                                <div class="timeline-body">
                                    <?php foreach ($experience as $key => $value) { ?>
                                        <article class="timeline-box right custom-box-shadow-2">
                                            <div class="row">
                                                <div class="experience-info col-lg-3 col-sm-5 bg-color-primary">
                                                    <span class="from text-color-dark text-uppercase">
                                                        From
                                                        <span class="font-weight-semibold">{{ $value->from_date }}</span>
                                                    </span>
                                                    <span class="to text-color-dark text-uppercase">
                                                        To
                                                        <span class="font-weight-semibold">{{ $value->to_date }}</span>
                                                    </span>
                                                    <p class="text-color-dark">(3 Years 9 Months)</p>
                                                    <span class="company text-color-dark font-weight-semibold">
                                                        {{ $value->company }}
                                                        <span class="company-location text-color-dark font-weight-normal text-uppercase">{{ $value->location }}</span>
                                                    </span>
                                                </div>
                                                <div class="experience-description col-lg-9 col-sm-7 bg-color-light">
                                                    <h4 class="text-color-dark font-weight-semibold">{{ $value->position }}</h4>
                                                    <p class="custom-text-color-2">{{ $value->description }}</p>
                                                </div>
                                            </div>
                                        </article>
                                    <?php } ?>
                                    <div class="timeline-bar"></div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>

            <section id="education" class="section section-no-border custom-bg-color-1 m-0">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h2 class="text-color-quaternary text-uppercase font-weight-extra-bold m-0">Education</h2>
                            <div class="owl-carousel nav-bottom custom-dots-style-1 mb-0" data-plugin-options="{'items': 1, 'loop': false, 'dots': true, 'nav': false}">
                                <?php foreach ($education as $key => $value) { ?>
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12 pb-4">
                                            <div class="custom-box-details-2 bg-color-light custom-box-shadow-3">
                                                <i class="icon-graduation icons text-color-primary"></i>
                                                <h4 class="font-weight-semibold text-color-dark m-0">{{ $value->university }}</h4>
                                                <p class="custom-text-color-2 mb-1">{{ $value->jurusan }}</p>
                                                <strong class="text-color-primary">{{ $value->from_date }} - {{ $value->to_date }}</strong>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="skills" class="section section-no-border bg-color-light m-0">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-lg-8 mb-4 mb-md-0">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h2 class="text-color-quaternary text-uppercase font-weight-extra-bold">Skills & Language</h2>
                                    <div class="progress-bars custom-progress-bars">
                                        <?php foreach ($skill as $key => $value) { ?>                                        
                                            <div class="progress-label text-color-dark font-weight-semibold text-uppercase text-2">
                                                <span>{{ $value->skill_name }}</span>
                                            </div>
                                            <div class="progress mb-2">
                                                <div class="progress-bar" data-appear-progress-animation="{{ $value->percent }}%"></div>
                                            </div>                                            
                                        <?php } ?>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="row">
                                <div class="col">
                                    <div class="custom-box-details bg-color-light custom-box-shadow-1">
                                        <h4 class="text-color-dark">Languages</h4>
                                        <ul class="custom-list-style-1 p-0">
                                            <li>
                                                <span class="font-weight-semibold custom-max-width-1 text-color-dark">English:</span>
                                                <span class="custom-text-color-2">Advanced</span>
                                            </li>
                                            <li>
                                                <span class="font-weight-semibold custom-max-width-1 text-color-dark"><img src="img/blank.gif" class="flag flag-es mr-1" alt="Spanish">Spanish:</span>
                                                <span class="custom-text-color-2">Advanced</span>
                                            </li>
                                            <li>
                                                <span class="font-weight-semibold custom-max-width-1 text-color-dark"><img src="img/blank.gif" class="flag flag-fr mr-1" alt="Française">French:</span>
                                                <span class="custom-text-color-2">Basic</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="portfolio" class="section section-no-border bg-color-secondary m-0">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h2 class="text-color-quaternary font-weight-extra-bold text-uppercase">Portfolio</h2>
                            <ul class="nav nav-pills sort-source custom-nav-sort mb-4" data-sort-id="portfolio" data-option-key="filter">
                                <li class="nav-item active" data-option-value="*"><a class="nav-link text-dark active" href="#">Show All</a></li>
                                <li class="nav-item" data-option-value=".websites"><a class="nav-link text-dark" href="#">Websites</a></li>
                                <li class="nav-item" data-option-value=".logos"><a class="nav-link text-dark" href="#">Logos</a></li>
                                <li class="nav-item" data-option-value=".brands"><a class="nav-link text-dark" href="#">Brands</a></li>
                            </ul>
                            <div class="sort-destination-loader sort-destination-loader-showing">
                                <div class="row image-gallery sort-destination lightbox" data-sort-id="portfolio" data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">
                                    <div class="col-12 col-sm-6 col-lg-3 isotope-item websites">
                                        <div class="image-gallery-item mb-4 pb-3">
                                            <a href="img/demos/resume/portfolio/portfolio-1.jpg" class="lightbox-portfolio">
                                                <span class="thumb-info custom-thumb-info-1">
                                                    <span class="thumb-info-wrapper">
                                                        <span class="thumb-info-plus"></span>
                                                        <img src="img/demos/resume/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-3 isotope-item logos">
                                        <div class="image-gallery-item mb-4 pb-3">
                                            <a href="img/demos/resume/portfolio/portfolio-2.jpg" class="lightbox-portfolio">
                                                <span class="thumb-info custom-thumb-info-1">
                                                    <span class="thumb-info-wrapper">
                                                        <span class="thumb-info-plus"></span>
                                                        <img src="img/demos/resume/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-3 isotope-item brands">
                                        <div class="image-gallery-item mb-4 pb-3">
                                            <a href="img/demos/resume/portfolio/portfolio-3.jpg" class="lightbox-portfolio">
                                                <span class="thumb-info custom-thumb-info-1">
                                                    <span class="thumb-info-wrapper">
                                                        <span class="thumb-info-plus"></span>
                                                        <img src="img/demos/resume/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-3 isotope-item websites">
                                        <div class="image-gallery-item mb-4 pb-3">
                                            <a href="img/demos/resume/portfolio/portfolio-4.jpg" class="lightbox-portfolio">
                                                <span class="thumb-info custom-thumb-info-1">
                                                    <span class="thumb-info-wrapper">
                                                        <span class="thumb-info-plus"></span>
                                                        <img src="img/demos/resume/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-3 isotope-item websites">
                                        <div class="image-gallery-item mb-4 pb-3">
                                            <a href="img/demos/resume/portfolio/portfolio-5.jpg" class="lightbox-portfolio">
                                                <span class="thumb-info custom-thumb-info-1">
                                                    <span class="thumb-info-wrapper">
                                                        <span class="thumb-info-plus"></span>
                                                        <img src="img/demos/resume/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-3 isotope-item websites">
                                        <div class="image-gallery-item mb-4 pb-3">
                                            <a href="img/demos/resume/portfolio/portfolio-6.jpg" class="lightbox-portfolio">
                                                <span class="thumb-info custom-thumb-info-1">
                                                    <span class="thumb-info-wrapper">
                                                        <span class="thumb-info-plus"></span>
                                                        <img src="img/demos/resume/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-3 isotope-item websites">
                                        <div class="image-gallery-item mb-4 pb-3">
                                            <a href="img/demos/resume/portfolio/portfolio-7.jpg" class="lightbox-portfolio">
                                                <span class="thumb-info custom-thumb-info-1">
                                                    <span class="thumb-info-wrapper">
                                                        <span class="thumb-info-plus"></span>
                                                        <img src="img/demos/resume/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-3 isotope-item websites">
                                        <div class="image-gallery-item mb-4 pb-3">
                                            <a href="img/demos/resume/portfolio/portfolio-8.jpg" class="lightbox-portfolio">
                                                <span class="thumb-info custom-thumb-info-1">
                                                    <span class="thumb-info-wrapper">
                                                        <span class="thumb-info-plus"></span>
                                                        <img src="img/demos/resume/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="recommendations" class="section section-no-border bg-color-primary m-0">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h2 class="text-color-quaternary font-weight-extra-bold text-uppercase">Recommendations</h2>
                        </div>
                        <div class="col-lg-12 p-0">
                            <div class="owl-carousel custom-dots-style-1 custom-dots-color-1 custom-dots-position-1 mb-0" data-plugin-options="{'items': 1, 'autoHeight': true, 'loop': false, 'nav': false, 'dots': true}">
                                <div>
                                    <div class="col">
                                        <div class="testimonial custom-testimonial-style-1 testimonial-with-quotes mb-0">
                                            <blockquote class="pb-2">
                                                <p class="custom-text-color-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt nulla tortor, a imperdiet enim tristique nec. Nulla lobortis leo eget metus dapibus sodales. Sed placerat vitae dui vitae vehicula. Quisque in tincidunt ligula, nec dignissim arcu. Praesent aliquam velit vel libero dictum, non sollicitudin lectus mollis. Morbi sollicitudin auctor gravida.</p>
                                            </blockquote>
                                            <div class="testimonial-author float-left">
                                                <p><strong class="text-uppercase">Bob Doe</strong><span class="custom-text-color-3">Director of Engineering</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="col">
                                        <div class="testimonial custom-testimonial-style-1 testimonial-with-quotes mb-0">
                                            <blockquote class="pb-2">
                                                <p class="custom-text-color-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt nulla tortor, a imperdiet enim tristique nec. Nulla lobortis leo eget metus dapibus sodales. Sed placerat vitae dui vitae vehicula. Quisque in tincidunt ligula, nec dignissim arcu. Praesent aliquam velit vel libero dictum, non sollicitudin lectus mollis. Morbi sollicitudin auctor gravida.</p>
                                            </blockquote>
                                            <div class="testimonial-author float-left">
                                                <p><strong class="text-uppercase">Bob Doe</strong><span class="custom-text-color-3">Director of Engineering</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <section id="blog" class="section section-no-border bg-color-light m-0">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h2 class="text-color-quaternary font-weight-extra-bold text-uppercase">My Blog</h2>

                            <div class="row">
                                <div class="col-lg-6 mb-5 mb-lg-0">
                                    <article class="thumb-info custom-thumb-info-2 custom-box-shadow-1 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="0" data-appear-animation-duration="1s">
                                        <div class="thumb-info-wrapper">
                                            <a href="#">
                                                <img src="img/demos/resume/blog/blog-1.jpg" alt class="img-fluid" />
                                            </a>
                                        </div>
                                        <div class="thumb-info-caption">
                                            <div class="thumb-info-caption-text">
                                                <h4 class="mb-2">
                                                    <a href="#" class="text-decoration-none text-color-dark font-weight-semibold">
                                                        Design Driven
                                                    </a>
                                                </h4>
                                                <p class="custom-text-color-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt nulla tortor, a imperdiet enim tristique nec. Nulla lobortis leo eget metus dapib...</p>
                                            </div>
                                            <hr class="solid m-0 mt-4 mb-2">
                                            <div class="row justify-content-between">
                                                <div class="col-auto custom-blog-post-date text-uppercase font-weight-semibold text-color-dark text-2">
                                                    July 12-2017
                                                </div>
                                                <div class="col-auto custom-blog-post-share text-uppercase font-weight-semibold text-color-dark text-2">
                                                    Share:
                                                    <ul class="mb-0">
                                                        <li>
                                                            <a class="item-facebook text-decoration-none text-uppercase" href="#" title="Share on Facebook">Facebook</a>
                                                        </li>
                                                        <li>
                                                            <a class="item-twitter text-decoration-none text-uppercase" href="#" title="Share on Twitter">Twitter</a>
                                                        </li>
                                                        <li>
                                                            <a class="item-google-plus text-decoration-none text-uppercase" href="#" title="Share on Google Plus">Google Plus</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-lg-6">
                                    <article class="thumb-info custom-thumb-info-2 custom-box-shadow-1 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="0" data-appear-animation-duration="1s">
                                        <div class="thumb-info-wrapper">
                                            <a href="#">
                                                <img src="img/demos/resume/blog/blog-2.jpg" alt class="img-fluid" />
                                            </a>
                                        </div>
                                        <div class="thumb-info-caption">
                                            <div class="thumb-info-caption-text">
                                                <h4 class="mb-2">
                                                    <a href="#" class="text-decoration-none text-color-dark font-weight-semibold">
                                                        UI, UX Concepts
                                                    </a>
                                                </h4>
                                                <p class="custom-text-color-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt nulla tortor, a imperdiet enim tristique...</p>
                                            </div>
                                            <hr class="solid m-0 mt-4 mb-2">
                                            <div class="row justify-content-between">
                                                <div class="col-auto custom-blog-post-date text-uppercase font-weight-semibold text-color-dark text-2">
                                                    July 12-2017
                                                </div>
                                                <div class="col-auto custom-blog-post-share text-uppercase font-weight-semibold text-color-dark text-2">
                                                    Share:
                                                    <ul class="mb-0">
                                                        <li>
                                                            <a class="item-facebook text-decoration-none text-uppercase" href="#" title="Share on Facebook">Facebook</a>
                                                        </li>
                                                        <li>
                                                            <a class="item-twitter text-decoration-none text-uppercase" href="#" title="Share on Twitter">Twitter</a>
                                                        </li>
                                                        <li>
                                                            <a class="item-google-plus text-decoration-none text-uppercase" href="#" title="Share on Google Plus">Google Plus</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-12 pt-4 mt-4 text-center">
                            <a class="btn btn-primary btn-outline text-color-dark custom-btn-style-2 font-weight-bold custom-border-radius-1 text-uppercase">View All</a>
                        </div>
                    </div>
                </div>
            </section>

            <div id="say-hello" class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 p-0">
                        <section class="section section-no-border bg-color-primary h-100 m-0">
                            <div class="row justify-content-end m-0">
                                <div class="col-half-section col-half-section-right mr-3">
                                    
                                    <h2 class="text-color-quaternary text-uppercase font-weight-extra-bold">Say Hello</h2>
                                    <form id="contactForm" class="contact-form custom-form-style" action="php/contact-form.php" method="post">
                                        <div class="contact-form-success alert alert-success d-none mt-4" id="contactSuccess">
                                            <strong>Success!</strong> Your message has been sent to us.
                                        </div>
                                        <div class="contact-form-error alert alert-danger d-none mt-4" id="contactError">
                                            <strong>Error!</strong> There was an error sending your message.
                                            <span class="mail-error-message text-1 d-block" id="mailErrorMessage"></span>
                                        </div>
                                        
                                        <div class="form-content">
                                            <div class="form-control-custom">
                                                <input type="text" class="form-control" name="name" placeholder="Your Name *" data-msg-required="This field is required." id="name" required="" />
                                            </div>
                                            <div class="form-control-custom">
                                                <input type="text" class="form-control" name="subject" placeholder="Subject *" data-msg-required="This field is required." id="subject" required="" />
                                            </div>
                                            <div class="form-control-custom">
                                                <textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" placeholder="Message*" id="message" required="" aria-required="true"></textarea>
                                            </div>
                                            <input type="submit" class="btn btn-quaternary text-color-light text-uppercase font-weight-semibold outline-none custom-btn-style-2 custom-border-radius-1" value="Submit" />
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-6 p-0">
                        <section class="section section-no-border h-100 m-0" style="background: url(img/demos/resume/contact/contact-bg-1.jpg); background-size: cover;">
                            <div class="row m-0">
                                <div class="col-half-section col-half-section-left ml-3">
                                    <a href="mailto:you@domain.com" class="text-decoration-none">
                                        <span class="feature-box custom-feature-box align-items-center mb-4">
                                            <span class="custom-feature-box-icon">
                                                <i class="icon-envelope icons text-color-light"></i>
                                            </span>
                                            <span class="feature-box-info">
                                                <span class="custom-label font-weight-semibold text-uppercase custom-text-color-1">Email</span>
                                                <strong class="font-weight-light text-color-light custom-opacity-effect-1">you@domain.com</strong>
                                            </span>
                                        </span>
                                    </a>
                                    <a href="tel:+1234657890" class="text-decoration-none">
                                        <span class="feature-box custom-feature-box align-items-center mb-4">
                                            <span class="custom-feature-box-icon">
                                                <i class="icon-phone icons text-color-light"></i>
                                            </span>
                                            <span class="feature-box-info">
                                                <span class="custom-label font-weight-semibold text-uppercase custom-text-color-1">Phone</span>
                                                <strong class="font-weight-light text-color-light custom-opacity-effect-1">123-456-7890</strong>
                                            </span>
                                        </span>
                                    </a>
                                    <a href="skype:yourskype?chat" class="text-decoration-none">
                                        <span class="feature-box custom-feature-box align-items-center mb-4">
                                            <span class="custom-feature-box-icon">
                                                <i class="icon-social-skype icons text-color-light"></i>
                                            </span>
                                            <span class="feature-box-info">
                                                <span class="custom-label font-weight-semibold text-uppercase custom-text-color-1">Skype</span>
                                                <strong class="font-weight-light text-color-light custom-opacity-effect-1">yourskype</strong>
                                            </span>
                                        </span>
                                    </a>
                                    <span class="feature-box custom-feature-box align-items-center">
                                        <span class="custom-feature-box-icon">
                                            <i class="icon-share icons text-color-light"></i>
                                        </span>
                                        <a href="http://www.facebook.com" class="d-flex text-decoration-none">
                                            <span class="feature-box-info">
                                                <span class="custom-label font-weight-semibold text-uppercase custom-text-color-1">Follow me</span>
                                                <strong class="font-weight-light text-color-light custom-opacity-effect-1">Facebook</strong>
                                            </span>
                                        </a>
                                        <a href="http://www.twitter.com" class="d-flex text-decoration-none">
                                            <span class="feature-box-info custom-both-side-border mt-2">
                                                <strong class="font-weight-light text-color-light custom-opacity-effect-1">Twitter</strong>
                                            </span>
                                        </a>
                                        <a href="http://www.linkedin.com" class="d-flex text-decoration-none">
                                            <span class="feature-box-info p-0 mt-2">
                                                <strong class="font-weight-light text-color-light custom-opacity-effect-1">Linkedin</strong>
                                            </span>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>

            <footer id="footer" class="m-0 p-0">
                <div class="footer-copyright bg-color-light m-0">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 m-0">
                                <p class="custom-text-color-2">© Copyright 2019. All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>            
        </div>

@endsection        