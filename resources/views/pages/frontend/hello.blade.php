<!DOCTYPE html>
<html lang="en">



<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Brilliance HTML5 Template">

  <title>Brilliance</title>

  <!-- Fav Icon -->
  <link rel="icon" type="image/x-icon" href="{{ asset('frontend/assets/imgs/logo/favicon.png') }}">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">

  <!-- All CSS files -->
  <link rel="stylesheet" href="{{ asset ('frontend/assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset ('frontend/assets/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset ('frontend/assets/css/swiper-bundle.min.css') }}">
  <link rel="stylesheet" href="{{ asset ('frontend/assets/css/progressbar.css') }}">
  <link rel="stylesheet" href="{{ asset ('frontend/assets/css/meanmenu.min.css') }}">
  <link rel="stylesheet" href="{{ asset ('frontend/assets/css/master.css') }}">
  <link rel="stylesheet" href="{{ asset ('frontend/assets/style.css') }}">
</head>


<body class="dark">

  <!-- Cursor Animation -->
  <div class="cursor1"></div>
  <div class="cursor2"></div>


  <!-- Preloader -->
  {{-- <div class="preloader">
    <div class="loading">
      <div class="bar bar1"></div>
      <div class="bar bar2"></div>
      <div class="bar bar3"></div>
      <div class="bar bar4"></div>
      <div class="bar bar5"></div>
      <div class="bar bar6"></div>
      <div class="bar bar7"></div>
      <div class="bar bar8"></div>
    </div>
  </div> --}}


  <!-- Switcher Area Start -->
  <div class="switcher__area">
    <div class="switcher__icon">
      <button id="switcher_open"><i class="fa-solid fa-gear"></i></button>
      <button id="switcher_close"><i class="fa-solid fa-xmark"></i></button>
    </div>

    <div class="switcher__items">
      <div class="switcher__item">
        <div class="switch__title-wrap">
          <h2 class="switcher__title">Cursor</h2>
        </div>
        <div class="switcher__btn">
          <select name="cursor-style" id="cursor_style">
            <option value="1">default</option>
            <option selected value="2">animated</option>
          </select>
        </div>
      </div>

      <div class="switcher__item">
        <div class="switch__title-wrap">
          <h2 class="switcher__title">mode</h2>
        </div>
        <div class="switcher__btn mode-type wc-col-2">
          <button data-mode="light">light</button>
          <button class="active" data-mode="dark">dark</button>
        </div>
      </div>

      <div class="switcher__item">
        <div class="switch__title-wrap">
          <h2 class="switcher__title">Language Support</h2>
        </div>
        <div class="switcher__btn lang_dir wc-col-2">
          <button class="active" data-mode="ltr">LTR</button>
          <button data-mode="rtl">RTL</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Switcher Area End -->



  <!-- Scroll Smoother -->
  <div class="has-smooth" id="has_smooth"></div>


  <!-- Client Cursor -->
  <div class="cursor" id="client_cursor">Play</div>


  <!-- Go Top Button -->
  <button id="scroll_top" class="scroll-top"><i class="fa-solid fa-arrow-up"></i></button>


  <!-- Header area start -->
  <header class="header__area">
    <div class="header__inner">
      <div class="header__logo">
        <a href="index.html">
          <img class="logo-primary" src="{{ asset ('frontend/assets/imgs/logo/brillance_logo1.png') }}" alt="Site Logo">
          <img class="logo-secondary" src="{{ asset ('frontend/assets/imgs/logo/brillance_logo.png') }}" alt="Moibile Logo">
        </a>
      </div>
      <div class="header__nav-icon">
        <button id="open_offcanvas"><img src="{{ asset ('frontend/assets/imgs/icon/menu-white.png') }}" alt="Menubar Icon"></button>
      </div>
      <div class="header__support">
        <p>Support center <a href="tel:+9587325902">+88-01712 725307</a></p>
      </div>
    </div>
  </header>
  <!-- Header area end -->


  <!-- Offcanvas area start -->
  <div class="offcanvas__area">
    <div class="offcanvas__body">
      <div class="offcanvas__left">
        <div class="offcanvas__logo">
          <a href="index.html"><img src="{{ asset ('frontend/assets/imgs/logo/brillance_logo2.png') }}" alt="Brilliance Logo"></a>
        </div>
        <div class="offcanvas__social">
          <h3 class="social-title">Follow Us</h3>
          <ul>
            
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Instagram</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">YouTube</a></li>
          </ul>
        </div>
        <div class="offcanvas__links">
          <ul>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">contact</a></li>
            <li><a href="career.html">Career</a></li>
            <li><a href="blog.html">blog</a></li>
          </ul>
        </div>
      </div>
      <div class="offcanvas__mid">
        <div class="offcanvas__menu-wrapper">
          <nav class="offcanvas__menu">
            <ul class="menu-anim">
              <li><a>home</a>
                <ul>
                   <li><a href="file:///C:/xampp/htdocs/6.Templates/BrillianceWebsite/brilliance_v2.html">Creative Agency</a></li>  
                  
                </ul>

              </li>
              <li>
                <a>About Us</a>
                <ul>
            
                  <li><a href="file:///C:/xampp/htdocs/6.Templates/BrillianceWebsite/about-dark.html">Know Ourself</a></li>
                  <!-- <li><a href="index-woocommerce.html">Know Ourself</a></li> -->                       
                </ul>
              </li>
              <li>
                <a>Service</a>
                <ul>
                  <li><a href="file:///C:/xampp/htdocs/6.Templates/BrillianceWebsite/service-2-dark.html">Our Services</a></li>  
                </ul>
              </li>
              <li><a>pages</a>
                <ul>

                  <!-- <li>
                    <a>Service</a>
                    <ul>
                      <li><a href="service.html">Our Services</a></li>
                    </ul> -->
                  </li>
                  <li>
                    <a>portfolio</a>
                    <ul>
                      <li><a href="file:///C:/xampp/htdocs/6.Templates/BrillianceWebsite/portfolio-dark.html">Portfolio</a></li>
                    </ul>
                  </li>
                  <li>
                    <a>team</a>
                    <ul>
                      <li><a href="file:///C:/xampp/htdocs/6.Templates/BrillianceWebsite/team-dark.html">Our Team Members</a></li>
                    </ul>
                  </li>
                  <!-- <li>
                    <a>blog</a>
                    <ul>
                      <li><a href="blog.html">Our blog</a></li>                
                    </ul>
                  </li> -->
                
                </ul>
              </li>
              <li><a>blog</a>
                <ul>
                  <li><a href="file:///C:/xampp/htdocs/6.Templates/BrillianceWebsite/blog-dark.html">blog</a></li>
                </ul>
              </li>
              <li><a href="file:///C:/xampp/htdocs/6.Templates/BrillianceWebsite/contact-dark.html">contact</a></li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="offcanvas__right">
        <div class="offcanvas__search">
          <form action="#">
            <input type="text" name="search" placeholder="Search keyword">
            <button><i class="fa-solid fa-magnifying-glass"></i></button>
          </form>
        </div>
        <div class="offcanvas__contact">
          <h3>Get in touch</h3>
          <ul>
            <li><a href="tel:02094980547">01712-725307, 01612-725307</a></li>
            <li><a href="mailto:#">info@brilliance.com</a></li>
            <li>Flat # 1-A, House # 342, Av # 3, Mirpur DOHS, Dhaka-1216</li>
          </ul>
        </div>
        <img src="{{ asset ('frontend/assets/imgs/shape/11.png') }}" alt="shape" class="shape-1">
        <img src="{{ asset ('frontend/assets/imgs/shape/12.png') }}" alt="shape" class="shape-2">
      </div>
      <div class="offcanvas__close">
        <button type="button" id="close_offcanvas"><i class="fa-solid fa-xmark"></i></button>
      </div>
    </div>
  </div>
  <!-- Offcanvas area end -->


  <div id="smooth-wrapper">
    <div id="smooth-content">
      <main>

        <!-- Hero area start -->
        <section class="hero__area ">
          <div class="container">
            <div class="row">
              <div class="col-xxl-12">
                <div class="hero__content animation__hero_one">
                  <a href="service.html">Strategy, Design, Solution Development <span><i
                        class="fa-solid fa-arrow-right"></i></span>
                    </a>
                  <div class="hero__title-wrapper">
                    <h1 class="hero__title" >Management Agancy</h1>
                    <p class="hero__sub-title">With every single one of our clients, we
                      bring forth deep passion for
                      <span>creative problem solving</span>
                      which is what we deliver.
                    </p>
                  </div>
                  <img src="{{ asset ('frontend/assets/imgs/icon/arrow-down-big.png') }}" alt="Arrow Down Icon">
                  <div class="experience">
                    <h2 class="title">25k+</h2>
                    <p>Projects completed <br>successfully</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <img src="{{ asset ('frontend/assets/imgs/hero/1/1-bg.png') }}" alt="image" class="hero1_bg">
        </section>
        <!-- Hero area end -->


        <!-- Roll area start -->
        <section class="roll__area">
          <div class="swiper roll__slider">
            <div class="swiper-wrapper roll__wrapper">
              <div class="swiper-slide roll__slide">
                <h2>Development</h2>
              </div>
              <div class="swiper-slide roll__slide">
                <h2>Studio</h2>
              </div>
              <div class="swiper-slide roll__slide">
                <h2>Strategy</h2>
              </div>
              <div class="swiper-slide roll__slide">
                <h2>Branding</h2>
              </div>
              <div class="swiper-slide roll__slide">
                <h2>Agency</h2>
              </div>
              <div class="swiper-slide roll__slide">
                <h2>typhography</h2>
              </div>
              <div class="swiper-slide roll__slide">
                <h2>Design</h2>
              </div>
              <div class="swiper-slide roll__slide">
                <h2>Interaction</h2>
              </div>
              <div class="swiper-slide roll__slide">
                <h2>Element</h2>
              </div>
              <div class="swiper-slide roll__slide">
                <h2>DIgital SOlution</h2>
              </div>
              <div class="swiper-slide roll__slide">
                <h2>Strategy</h2>
              </div>
              <div class="swiper-slide roll__slide">
                <h2>Branding</h2>
              </div>
              <div class="swiper-slide roll__slide">
                <h2>Agency</h2>
              </div>
              <div class="swiper-slide roll__slide">
                <h2>Interaction</h2>
              </div>
              <div class="swiper-slide roll__slide">
                <h2>DIgital SOlution</h2>
              </div>
            </div>
          </div>
        </section>
        <!-- Roll area end -->


        <!-- About area start -->
        <section class="about__area">
          <div class="container line g-0 pt-140 pb-130">
            <span class="line-3"></span>
            <div class="row">
              <div class="col-xxl-12">
                <div class="about__title-wrapper">
                  <h3 class="sec-title title-anim">We unlock the potential of your business
                    with creative design</h3>
                </div>

                <div class="about__content-wrapper">
                  <div class="about__img">
                    <div class="img-anim">
                      <img src="{{ asset ('frontend/assets/imgs/about/boroVai.png') }}" alt="About Image" data-speed="0.3">
                    </div>

                    <div class="about__img-right">
                      <img src="{{ asset ('frontend/assets/imgs/about/1/2.jpg') }}" alt="About Image Right" data-speed="0.5">
                      <div class="shape">
                        <div class="secondary" data-speed="0.9"></div>
                        <div class="primary"></div>
                      </div>
                    </div>
                  </div>

                  <div class="about__content text-anim">
                    <p>From traditional PR and thought leadership campaigns to
                      storytelling and creative social media
                      management we’ve got you covered. Something is not your average order-taking vendor. We are
                      proud to
                      be the go-to partner for some of the world’s biggest agencies and brands because they trust our
                      expertise</p>

                    <div class="cursor-btn btn_wrapper">
                      <a class="btn-item wc-btn-primary btn-hover" href="about.html"><span></span> Explore Us <i
                          class="fa-solid fa-arrow-right"></i></a>

                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </section>
        <!-- About area end -->


        <!-- Service area start -->
        <section class="service__area pt-110 pb-150">
          <div class="container">
            <div class="row">
              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                <div class="sec-title-wrapper wrap">
                  <h2 class="sec-sub-title title-anim">service</h2>
                  <h3 class="sec-title title-anim">Solution we <br>provide</h3>
                </div>
              </div>
              <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                <div class="service__top-text text-anim">
                  <p>With every single one of our clients we bring forth a deep passion
                    for <span>creative problem solving
                      innovations</span> forward thinking
                    brands boundaries</p>
                </div>
              </div>
              <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                <div class="service__top-btn">
                  <div class="btn_wrapper">
                    <a href="service.html" class="btn-item wc-btn-secondary btn-hover"><span></span> View <br>all
                      services <i class="fa-solid fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="service__list-wrapper">
              <div class="row">
                <div class="col-xxl-4 col-xl-4 col-lg-0 col-md-0">
                  <div class="service__img-wrapper">
                    <img src="{{asset ('frontend/assets/imgs/service/1/1.jpg') }}" alt="Service Image" class="service__img img-1 active">
                    <img src="{{ asset ('frontend/assets/imgs/service/1/2.png') }}" alt="Service Image" class="service__img img-2">
                    <img src="{{ asset ('frontend/assets/imgs/service/1/3.png') }}" alt="Service Image" class="service__img img-3">
                    <img src="{{ asset ('frontend/assets/imgs/service/1/4.png') }}" alt="Service Image" class="service__img img-4">

                    <span class="shape-box-1 current"></span>
                    <span class="shape-box-2"></span>
                    <span class="shape-box-3"></span>
                    <span class="shape-box-4"></span>
                  </div>
                </div>
                <div class="col-xxl-8 col-xl-8 col-lg-12 col-md-12">
                  <div class="service__list">
                    <a href="service-details.html">
                      <div class="service__item animation_home1_service" data-service="1">
                        <div class="service__number"><span>01</span></div>
                        <div class="service__title-wrapper">
                          <h4 class="service__title">Web & Mobile
                            Development</h4>
                        </div>
                        <div class="service__text">
                          <p>We create, products, brands, apps & websites for the companies all around the world class
                            digital
                            products</p>
                        </div>
                        <div class="service__link">
                          <p><i class="fa-solid fa-arrow-right"></i></p>
                        </div>
                      </div>
                    </a>

                    <a href="service-details.html">
                      <div class="service__item  animation_home1_service" data-service="2">
                        <div class="service__number"><span>02</span></div>
                        <div class="service__title-wrapper">
                          <h4 class="service__title">Interaction <br>Design</h4>
                        </div>
                        <div class="service__text">
                          <p>We create, products, brands, apps & websites for the companies all around the world class
                            digital
                            products</p>
                        </div>
                        <div class="service__link">
                          <p><i class="fa-solid fa-arrow-right"></i></p>
                        </div>
                      </div>
                    </a>

                    <a href="service-details.html">
                      <div class="service__item  animation_home1_service" data-service="3">
                        <div class="service__number"><span>03</span></div>
                        <div class="service__title-wrapper">
                          <h4 class="service__title">Digital <br>Maketing</h4>
                        </div>
                        <div class="service__text">
                          <p>We create, products, brands, apps & websites for the companies all around the world class
                            digital
                            products</p>
                        </div>
                        <div class="service__link">
                          <p><i class="fa-solid fa-arrow-right"></i></p>
                        </div>
                      </div>
                    </a>

                    <a href="service-details.html">
                      <div class="service__item  animation_home1_service" data-service="4">
                        <div class="service__number"><span>04</span></div>
                        <div class="service__title-wrapper">
                          <h4 class="service__title">Branding and Strategy</h4>
                        </div>
                        <div class="service__text">
                          <p>We create, products, brands, apps & websites for the companies all around the world class
                            digital
                            products</p>
                        </div>
                        <div class="service__link">
                          <p><i class="fa-solid fa-arrow-right"></i></p>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Service area end -->


        <!-- Counter area start -->
        <section class="counter__area">
          <div class="container g-0 line pt-150">
            <span class="line-3"></span>

            <div class="row">
              <div class="col-xxl-12">
                <div class="counter__wrapper counter_animation">
                  <div class="counter__item counter__anim">
                    <h2 class="counter__number">25k+</h2>
                    <p>Project <br>completed</p>
                    <span class="counter__border"></span>
                  </div>
                  <div class="counter__item counter__anim">
                    <h2 class="counter__number">8k+</h2>
                    <p>Happy <br>customers</p>
                    <span class="counter__border"></span>
                  </div>
                  <div class="counter__item counter__anim">
                    <h2 class="counter__number">15</h2>
                    <p>Years <br>experiences</p>
                    <span class="counter__border"></span>
                  </div>
                  <div class="counter__item counter__anim">
                    <h2 class="counter__number">98</h2>
                    <p>Awards <br>achievement</p>
                    <span class="counter__border"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Counter area end -->


        <!-- Workflow area start -->
        <section class="workflow__area">
          <div class="container g-0 line pt-140 pb-140">
            <div class="line-3"></div>
            <div class="row">
              <div class="col-xxl-12">
                <div class="sec-title-wrapper">
                  <h2 class="sec-sub-title title-anim">Workflow</h2>
                  <h3 class="sec-title title-anim">How we work</h3>
                </div>
              </div>

              <div class="col-xxl-12">
                <div class="swiper workflow__slider ">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide workflow__slide fade_left">
                      <h4 class="workflow__step">step 01</h4>
                      <h5 class="workflow__number">01</h5>
                      <h6 class="workflow__title">Audience</h6>
                      <p>Having these the marketplace to your business</p>
                    </div>

                    <div class="swiper-slide workflow__slide fade_left">
                      <h4 class="workflow__step">step 02</h4>
                      <h5 class="workflow__number">02</h5>
                      <h6 class="workflow__title">Plan & Sketch</h6>
                      <p>Delicate and long-lasting with vitamins and nutritions</p>
                    </div>

                    <div class="swiper-slide workflow__slide fade_left">
                      <h4 class="workflow__step">step 03</h4>
                      <h5 class="workflow__number">03</h5>
                      <h6 class="workflow__title">Customize</h6>
                      <p>Creating brand identities for the digital experiences</p>
                    </div>

                    <div class="swiper-slide workflow__slide fade_left">
                      <h4 class="workflow__step">step 04</h4>
                      <h5 class="workflow__number">04</h5>
                      <h6 class="workflow__title">User Testing</h6>
                      <p>We look forward to engage with beyond the conventional</p>
                    </div>

                    <div class="swiper-slide workflow__slide fade_left">
                      <h4 class="workflow__step">step 05</h4>
                      <h5 class="workflow__number">05</h5>
                      <h6 class="workflow__title">User Testing</h6>
                      <p>We look forward to engage with beyond the conventional</p>
                    </div>

                    <div class="swiper-slide workflow__slide fade_left">
                      <h4 class="workflow__step">step 06</h4>
                      <h5 class="workflow__number">06</h5>
                      <h6 class="workflow__title">User Testing</h6>
                      <p>We look forward to engage with beyond the conventional</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Workflow area end -->


        <!-- Portfolio area start -->
        <section class="portfolio__area pb-140">
          <div class="container">
            <div class="row top_row">

              <h2 class="portfolio__text">work</h2>
              <div class="portfolio__list-1">
                <div class="portfolio__item">
                  <a href="portfolio-details.html"><img class="mover" src="{{ asset ('frontend/assets/imgs/portfolio/1/1.jpg') }}"
                      alt="Portfolio Image"></a>
                  <div class="portfolio__info">
                    <h3 class="portfolio__title">Arteck Lyon Conseil</h3>
                    <p>02 May 2021</p>
                  </div>
                </div>
                <div class="portfolio__item">
                  <a href="portfolio-details.html"><img src="{{ asset ('frontend/assets/imgs/portfolio/1/2.jpg') }}" alt="Portfolio Image"></a>
                  <div class="portfolio__info">
                    <h3 class="portfolio__title">Arteck Lyon Conseil</h3>
                    <p>02 May 2021</p>
                  </div>
                </div>
                <div class="portfolio__item">
                  <a href="portfolio-details.html"><img src="{{ asset ('frontend/assets/imgs/portfolio/1/3.jpg') }}" alt="Portfolio Image"></a>
                  <div class="portfolio__info">
                    <h3 class="portfolio__title">Arteck Lyon Conseil</h3>
                    <p>02 May 2021</p>
                  </div>
                </div>
                <div class="portfolio__item">
                  <a href="portfolio-details.html"><img src="{{ asset ('frontend/assets/imgs/portfolio/1/4.jpg') }}" alt="Portfolio Image"></a>
                  <div class="portfolio__info">
                    <h3 class="portfolio__title">Arteck Lyon Conseil</h3>
                    <p>02 May 2021</p>
                  </div>
                </div>
                <div class="portfolio__item">
                  <a href="portfolio-details.html"><img src="{{ asset ('frontend/assets/imgs/portfolio/1/1.jpg') }}" alt="Portfolio Image"></a>
                  <div class="portfolio__info">
                    <h3 class="portfolio__title">Arteck Lyon Conseil</h3>
                    <p>02 May 2021</p>
                  </div>
                </div>
                <div class="portfolio__item">
                  <a href="portfolio-details.html"><img src="{{ asset ('frontend/assets/imgs/portfolio/1/2.jpg') }}" alt="Portfolio Image"></a>
                  <div class="portfolio__info">
                    <h3 class="portfolio__title">Arteck Lyon Conseil</h3>
                    <p>02 May 2021</p>
                  </div>
                </div>

              </div>
            </div>

            <div class="row row_bottom">
              <div class="col-xxl-12">
                <div class="portfolio__btn btn_wrapper" data-speed="1" data-lag="0.2">
                  <a class="wc-btn-secondary btn-hover btn-item" href="portfolio.html"><span></span>View <br>all
                    projects <i class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Portfolio area end -->


        <!-- Brand area start -->
        <section class="brand__area">
          <div class="container g-0 line pt-140 pb-130">
            <span class="line-3"></span>
            <div class="row">
              <div class="col-xxl-12">
                <div class="sec-title-wrapper">
                  <h2 class="sec-sub-title title-anim">Internation Brands</h2>
                  <h3 class="sec-title title-anim">We are happy to work with global <br>
                    largest brands</h3>
                </div>
              </div>

              <div class="col-xxl-12">
                <div class="brand__list">
                  <div class="brand__item fade_bottom">
                    <img src="{{ asset ('frontend/assets/imgs/brand/1.png') }}" alt="Brand Logo">
                  </div>
                  <div class="brand__item fade_bottom">
                    <img src="{{ asset ('frontend/assets/imgs/brand/2.png') }}" alt="Brand Logo">
                  </div>
                  <div class="brand__item fade_bottom">
                    <img src="{{ asset ('frontend/assets/imgs/brand/3.png') }}" alt="Brand Logo">
                  </div>
                  <div class="brand__item fade_bottom">
                    <img src="{{ asset ('frontend/assets/imgs/brand/4.png') }}" alt="Brand Logo">
                  </div>
                  <div class="brand__item fade_bottom">
                    <img src="{{ asset ('frontend/assets/imgs/brand/5.png') }}" alt="Brand Logo">
                  </div>
                  <div class="brand__item fade_bottom">
                    <img src="{{ asset ('frontend/assets/imgs/brand/6.png') }}" alt="Brand Logo">
                  </div>
                  <div class="brand__item fade_bottom">
                    <img src="{{ asset ('frontend/assets/imgs/brand/3.png') }}" alt="Brand Logo">
                  </div>
                  <div class="brand__item fade_bottom">
                    <img src="{{ asset ('frontend/assets/imgs/brand/4.png') }}" alt="Brand Logo">
                  </div>
                  <div class="brand__item fade_bottom">
                    <img src="{{ asset ('frontend/assets/imgs/brand/5.png') }}" alt="Brand Logo">
                  </div>
                  <div class="brand__item fade_bottom">
                    <img src="{{ asset ('frontend/assets/imgs/brand/6.png') }}" alt="Brand Logo">
                  </div>
                  <div class="brand__item fade_bottom">
                    <img src="{{ asset ('frontend/assets/imgs/brand/1.png') }}" alt="Brand Logo">
                  </div>
                  <div class="brand__item fade_bottom">
                    <img src="{{ asset ('frontend/assets/imgs/brand/2.png') }}" alt="Brand Logo">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Brand area end -->


        <!-- Testimonial area start -->
        <section class="testimonial__area">
          <div class="container g-0 line">
            <span class="line-3"></span>
            <div class="row">
              <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8">
                <div class="testimonial__wrapper">
                  <div class="testimonial__item item-1">
                    <div class="button modal-trigger">
                      <div class="testimonial__img b-right">
                        <img src="{{ asset ('frontend/assets/imgs/testimonial/1/1.png') }}" alt="Testimonial Image">
                      </div>

                      <h2 class="testimonial__title">Jessica Sherlock</h2>
                      <h3 class="testimonial__role">Manager, Oitaka</h3>
                    </div>
                  </div>
                  <div class="sec-title-wrapper text-anim">
                    <h4 class="sec-sub-title">Testimonials</h4>
                    <h5 class="sec-title title-anim">Clients <br>feedback</h5>
                    <p>Our happy customers give us impactfull and positive feedback on our services, customer supports
                      &
                      etc.</p>
                  </div>
                </div>

                <div class="testimonial__item item-2">
                  <div class="button modal-trigger-2">
                    <div class="testimonial__img b-left">
                      <img src="{{ asset ('frontend/assets/imgs/testimonial/1/3.png') }}" alt="Testimonial Image">
                    </div>

                    <h2 class="testimonial__title">Jessica Sherlock</h2>
                    <h3 class="testimonial__role">Manager, Oitaka</h3>
                  </div>
                </div>
              </div>
              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                <div class="testimonial__item item-3 img-">
                  <div class="button modal-trigger-3">
                    <div class="testimonial__img b-left">
                      <img src="{{ asset ('frontend/assets/imgs/testimonial/1/2.png') }}" alt="Testimonial Image">
                    </div>

                    <h2 class="testimonial__title">adam Smith</h2>
                    <h3 class="testimonial__role">Manager, Oitaka</h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Testimonial area end -->


        <!-- Blog area start -->
        <section class="blog__area no-pb blog__animation">
          <div class="container g-0 line pt-150 pb-140">
            <span class="line-3"></span>
            <div class="row">
              <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                <div class="sec-title-wrapper">
                  <h2 class="sec-sub-title">recent blog</h2>
                  <h3 class="sec-title">News insignt</h3>
                </div>
              </div>
              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                <article class="blog__item">
                  <div class="blog__img-wrapper">
                    <a href="blog-details.html">
                      <div class="img-box">
                        <img class="image-box__item" src="{{ asset ('frontend/assets/imgs/blog/3.jpg') }}" alt="">
                        <img class="image-box__item" src="{{ asset ('frontend/assets/imgs/blog/3.jpg') }}" alt="">
                      </div>
                    </a>
                  </div>
                  <h4 class="blog__meta"><a href="category.html">UI Design</a> . 02 May 2019</h4>
                  <h5><a href="blog-details.html" class="blog__title">Ways of lying to yourself about your new
                      relationship.</a></h5>
                  <a href="blog-details.html" class="blog__btn">Read More <span><i
                        class="fa-solid fa-arrow-right"></i></span></a>
                </article>
              </div>

              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                <article class="blog__item">
                  <div class="blog__img-wrapper">
                    <a href="blog-details.html">
                      <div class="img-box">
                        <img class="image-box__item" src="{{ asset ('frontend/assets/imgs/blog/1/2.jpg') }}" alt="">
                        <img class="image-box__item" src={{ asset ('frontend/assets/imgs/blog/1/2.jpg') }}" alt="">
                      </div>
                    </a>
                  </div>
                  <h4 class="blog__meta"><a href="category.html">UI Design</a> . 02 May 2019</h4>
                  <h5><a href="blog-details.html" class="blog__title">How to manage a talented and successful de sign
                      team</a></h5>
                  <a href="blog-details.html" class="blog__btn">Read More <span><i
                        class="fa-solid fa-arrow-right"></i></span></a>
                </article>
              </div>

              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                <article class="blog__item">
                  <div class="blog__img-wrapper">
                    <a href="blog-details.html">
                      <div class="img-box">
                        <img class="image-box__item" src="{{ asset ('frontend/assets/imgs/blog/1/3.jpg') }}" alt="Blog Thumbnail">
                        <img class="image-box__item" src="{{ asset ('frontend/assets/imgs/blog/1/3.jpg') }}" alt="BLog Thumbnail">
                      </div>
                    </a>
                  </div>
                  <h4 class="blog__meta"><a href="category.html">UI Design</a> . 02 May 2019</h4>
                  <h5><a href="blog-details.html" class="blog__title">How to bring fold to your startup company with
                      Axtra</a></h5>
                  <a href="blog-details.html" class="blog__btn">Read More <span><i
                        class="fa-solid fa-arrow-right"></i></span></a>
                </article>
              </div>
            </div>
          </div>
        </section>
        <!-- Blog area end -->


        <!-- CTA area start -->
        <section class="cta__area">
          <div class="container line pb-110">
            <div class="line-3"></div>
            <div class="row">
              <div class="col-xxl-12">
                <div class="cta__content">
                  <p class="cta__sub-title">Work with us</p>
                  <h2 class="cta__title title-anim">We would love to hear more about your project</h2>
                  <div class="btn_wrapper">
                    <a href="contact.html" class="wc-btn-primary btn-hover btn-item"><span></span>Let’s talk us <i
                        class="fa-solid fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- CTA area end -->

      </main>


      <!-- Footer area start -->
      <footer class="footer__area">
        <div class="footer__top">
          <div class="container footer-line"></div>
          <img src="{{ asset ('frontend/assets/imgs/thumb/footer.jpg') }}" alt="Footer Image" data-speed="0.75">
        </div>

        <div class="footer__btm">
          <div class="container">
            <div class="row footer__row">
              <div class="col-xxl-12">
                <div class="footer__inner">
                  <div class="footer__widget">
                    <img class="footer__logo" src="{{ asset ('frontend/assets/imgs/logo/brillance_logo2.png') }}" alt="Footer Logo">
                    <p>When do they work well, and when do they on us and finally, when do we actually need how can we
                      avoid
                      them.</p>
                    <ul class="footer__social">
                      <li><a href="#"><span><i class="fa-brands fa-facebook-f"></i></span></a></li>
                      <li><a href="#"><span><i class="fa-brands fa-twitter"></i></span></a></li>
                      <li><a href="#"><span><i class="fa-brands fa-instagram"></i></span></a></li>
                      <li><a href="#"><span><i class="fa-brands fa-linkedin"></i></span></a></li>
                    </ul>
                  </div>

                  <div class="footer__widget-2">
                    <h2 class="footer__widget-title">Information</h2>
                    <ul class="footer__link">
                      <li><a href="about.html">About Company</a></li>
                      <li><a href="portfolio.html">Case Study</a></li>
                      <li><a href="career.html">Career</a></li>
                      <li><a href="blog.html">blog</a></li>
                      <li><a href="contact.html">contact</a></li>
                    </ul>
                  </div>

                  <div class="footer__widget-3">
                    <h2 class="footer__widget-title">Contact Us</h2>
                    <ul class="footer__contact">
                      <li>Flat # 1-A, House # 342, Av # 3, Mirpur DOHS, Dhaka-1216</li>
                      <li><a href="tel:02574328301" class="phone">01712-725307, 01612-725307</a></li>
                      <li><a href="mailto:">info@brilliance.com</a></li>
                    </ul>
                  </div>

                  <div class="footer__widget-4">
                    <h2 class="project-title">Have a project in your mind?</h2>
                    <div class="btn_wrapper">
                      <a href="contact.html" class="wc-btn-primary btn-hover btn-item"><span></span> contact us <i
                          class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    <h3 class="contact-time">09 : 00 AM - 10 : 30 PM</h3>
                    <h4 class="contact-day">Saturday - Thursday</h4>
                  </div>

                  <div class="footer__copyright">
                    <p>© 2022 - 2025 | Alrights reserved by <a href="http://shamim.intels.co/"
                        target="_blank">Shamim</a>
                    </p>
                  </div>

                  <div class="footer__subscribe">
                    <form action="#">
                      <input type="email" name="email" placeholder="Enter your email">
                      <button type="submit" class="subs-btn"><i class="fa-solid fa-paper-plane"></i></button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- Footer area end -->

    </div>
  </div>


  <!-- Modal 1 -->
  <div class="modal__testimonial" id="modal_testimonial">
    <div class="modal__testimonial-content">
      <span class="modal__close" id="modal_close"><i class="fa-solid fa-xmark"></i></span>
      <iframe src="https://www.youtube.com/embed/vZgyWfmw_Kw" title="Testimonial Video"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope;" allowfullscreen>
      </iframe>
    </div>
  </div>

  <!-- Modal 2 -->
  <div class="modal__testimonial" id="modal_testimonial2">
    <div class="modal__testimonial-content">
      <span class="modal__close" id="modal_close2"><i class="fa-solid fa-xmark"></i></span>
      <iframe src="https://www.youtube.com/embed/JulIeG1V8T4" allowfullscreen></iframe>
    </div>
  </div>

  <!-- Modal 3 -->
  <div class="modal__testimonial" id="modal_testimonial3">
    <div class="modal__testimonial-content">
      <span class="modal__close" id="modal_close3"><i class="fa-solid fa-xmark"></i></span>
      <iframe src="https://www.youtube.com/embed/7QkL-40FRfE" allowfullscreen></iframe>
    </div>
  </div>



  <!-- All JS files -->
  <script src="{{ asset ('frontend/assets/js/jquery-3.6.0.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset ('frontend/assets/js/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset ('frontend/assets/js/counter.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/gsap.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/ScrollTrigger.min.js') }}"></script>
  <script src="{{ asset ('frontend/assets/js/ScrollToPlugin.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/ScrollSmoother.min.js') }}"></script>
  <script src="{{ asset ('frontend/assets/js/SplitText.min.js') }}"></script>
  <script src="{{ asset ('frontend/assets/js/chroma.min.js') }}"></script>
  <script src="{{ asset ('frontend/assets/js/mixitup.min.js') }}"></script>
  <script src="{{ asset ('frontend/assets/js/vanilla-tilt.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/jquery.meanmenu.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/main.js') }}"></script>


</body>



</html>