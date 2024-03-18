<!DOCTYPE html>
<html lang="en">



<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Brilliance HTML5 Template">

  <title>Brilliance</title>

  <!-- Fav Icon -->
  <link rel="icon" type="image/x-icon" href="{{ asset ('frontend/assets/imgs/logo/brillance_logo.png') }}">

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

        <!-- Portfolio area start -->
        <section class="portfolio__area-6">
          <div class="container line pt-100 pb-140">
            <span class="line-3"></span>
            <div class="zi-9">
              <div class="row">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-6">
                  <div class="sec-title-wrapper portfolio__title-wrap-6">
                    <div class="">
                      <h2 class="sec-sub-title animation__char_come">Featured</h2>
                      <h3 class="sec-title animation__char_come_long">Work</h3>
                      <p>View the full case study of our recent featured and awesome works that we created for our
                        clients.
                      </p>
                    </div>
                    <div class="portfolio__pagination-6">
                      <span class="portfolio__current">01</span> / 0<span class="portfolio__total"></span>
                    </div>
                  </div>
                </div>

                <div class="col-xxl-8 col-xl-7 col-lg-7 col-md-6">
                  <div class="portfolio__wrapper-6">
                    <div class="portfolio__list-6">
                      <div class="portfolio__item-6" data-portfitem="1">
                        <a href="{{ route('portfolio-details') }}">
                          <img src="{{ asset ('frontend/assets/imgs/portfolio/6/1.jpg') }}" alt="Portfolio Image" data-speed="0.4">
                          <div class="portfolio__content-6">
                            <h4 class="portfolio__title-6">Lionpro Agency</h4>
                            <h5 class="portfolio__date">02 May 2021</h5>
                          </div>
                        </a>
                      </div>

                      <div class="portfolio__item-6" data-portfitem="2">
                        <a href="{{ route('portfolio-details') }}">
                          <img src="{{ asset ('frontend/assets/imgs/portfolio/6/2.jpg') }}" alt="Portfolio Image" data-speed="0.4">
                          <div class="portfolio__content-6">
                            <h4 class="portfolio__title-6">Lionpro Agency</h4>
                            <h5 class="portfolio__date">02 May 2021</h5>
                          </div>
                        </a>
                      </div>

                      <div class="portfolio__item-6" data-portfitem="3">
                        <a href="{{ route('portfolio-details') }}">
                          <img src="{{ asset ('frontend/assets/imgs/portfolio/6/3.jpg') }}" alt="Portfolio Image" data-speed="0.4">
                          <div class="portfolio__content-6">
                            <h4 class="portfolio__title-6">Lionpro Agency</h4>
                            <h5 class="portfolio__date">02 May 2021</h5>
                          </div>
                        </a>
                      </div>

                      <div class="portfolio__item-6" data-portfitem="4">
                        <a href="{{ route('portfolio-details') }}">
                          <img src="{{ asset ('frontend/assets/imgs/portfolio/6/4.jpg') }}" alt="Portfolio Image" data-speed="0.4">
                          <div class="portfolio__content-6">
                            <h4 class="portfolio__title-6">Lionpro Agency</h4>
                            <h5 class="portfolio__date">02 May 2021</h5>
                          </div>
                        </a>
                      </div>

                      <div class="portfolio__item-6" data-portfitem="5">
                        <a href="{{ route('portfolio-details') }}">
                          <img src="{{ asset ('frontend/assets/imgs/portfolio/6/5.jpg') }}" alt="Portfolio Image" data-speed="0.4">
                          <div class="portfolio__content-6">
                            <h4 class="portfolio__title-6">Lionpro Agency</h4>
                            <h5 class="portfolio__date">02 May 2021</h5>
                          </div>
                        </a>
                      </div>

                      <div class="portfolio__item-6" data-portfitem="6">
                        <a href="{{ route('portfolio-details') }}">
                          <img src="{{ asset ('frontend/assets/imgs/portfolio/6/6.jpg') }}" alt="Portfolio Image" data-speed="0.4">
                          <div class="portfolio__content-6">
                            <h4 class="portfolio__title-6">Lionpro Agency</h4>
                            <h5 class="portfolio__date">02 May 2021</h5>
                          </div>
                        </a>
                      </div>

                      <div class="portfolio__item-6" data-portfitem="7">
                        <a href="{{ route('portfolio-details') }}">
                          <img src="{{ asset('frontend/assets/imgs/portfolio/6/7.jpg')}}" alt="Portfolio Image" data-speed="0.4">
                          <div class="portfolio__content-6">
                            <h4 class="portfolio__title-6">Lionpro Agency</h4>
                            <h5 class="portfolio__date">02 May 2021</h5>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Portfolio area end -->


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
          <img src="{{asset ('frontend/assets/imgs/thumb/footer.jpg') }}" alt="Footer Image" data-speed="0.5">
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
                    <p>© 2024 - 2025 | Alrights reserved by <a href="http://shamim.intels.co/"
                        target="_blank">Shamim Apon</a>
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