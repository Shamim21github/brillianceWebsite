<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Brilliance HTML5 Template">

    <title>Brilliance</title>

    <!-- Fav Icon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('frontend/assets/imgs/logo/brillance_logo.png') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">

    <!-- All CSS files -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/progressbar.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/meanmenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/master.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
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
                <a href="/">
                    <img class="logo-primary" src="{{ asset('frontend/assets/imgs/logo/brillance_logo1.png') }}"
                        alt="Site Logo">
                    <img class="logo-secondary" src="{{ asset('frontend/assets/imgs/logo/brillance_logo.png') }}"
                        alt="Moibile Logo">
                </a>
            </div>
            <div class="header__nav-icon">
                <button id="open_offcanvas"><img src="{{ asset('frontend/assets/imgs/icon/menu-white.png') }}"
                        alt="Menubar Icon"></button>
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
                    <a href="/"><img src="{{ asset('frontend/assets/imgs/logo/brillance_logo2.png') }}"
                            alt="Brilliance Logo"></a>
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
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('contact') }}">contact</a></li>
                        <li><a href="#">Career</a></li>
                        <li><a href="{{ route('gallery') }}">gallery</a></li>
                    </ul>
                </div>
            </div>
            <div class="offcanvas__mid">
                <div class="offcanvas__menu-wrapper">
                    <nav class="offcanvas__menu">
                        <ul class="menu-anim">
                            <li><a>home</a>
                                <ul>
                                    <li><a href="/">Creative Agency</a></li>

                                </ul>

                            </li>
                            <li>
                                <a>About Us</a>
                                <ul>

                                    <<li><a href="{{ route('about') }}">Know Ourself</a>
                            </li>
                            {{-- <li><a href="http://localhost:8000/about">Know Ourself</a></li> --}}
                            {{-- <li><a href="file:///C:/xampp/htdocs/6.Templates/BrillianceWebsite/about-dark.html">Know Ourself</a></li> --}}
                            <!-- <li><a href="index-woocommerce.html">Know Ourself</a></li> -->
                        </ul>
                        </li>
                        <li>
                            <a>Service</a>
                            <ul>
                                <li><a href="{{ route('services') }}">Our Services</a></li>
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
                                <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                            </ul>
                        </li>
                        <li>
                            <a>team</a>
                            <ul>
                                <li><a href="{{ route('team') }}">Our Team Members</a></li>
                            </ul>
                        </li>
                        <!-- <li>
                    <a>gallery</a>
                    <ul>
                      <li><a href="gallery.html">Our gallery</a></li>
                    </ul>
                  </li> -->

                        </ul>
                        </li>
                        <li><a>gallery</a>
                            <ul>
                                <li><a href="{{ route('gallery') }}">gallery</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('contact') }}">contact</a></li>
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
                <img src="{{ asset('frontend/assets/imgs/shape/11.png') }}" alt="shape" class="shape-1">
                <img src="{{ asset('frontend/assets/imgs/shape/12.png') }}" alt="shape" class="shape-2">
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

                <!-- Service area start -->
                <section class="service__area service-v2 pt-110 pb-150">
                    <div class="container">
                        <div class="row">
                            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                                <div class="sec-title-wrapper wrap">
                                    <h2 class="sec-sub-title title-anim">service</h2>
                                    <h3 class="sec-title title-anim">Solution we <br>provide</h3>
                                </div>
                            </div>
                            <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
                                <div class="service__top-text text-anim">
                                    <p>With every single one of our clients we bring forth a deep passion
                                        for <span>creative problem solving
                                            innovations</span> forward thinking
                                        brands boundaries</p>
                                </div>
                            </div>
                        </div>

                        <div class="service__list-wrapper">
                            <div class="row">
                              <div class="col-xxl-4 col-xl-4 col-lg-0 col-md-0">
                                <div class="service__img-wrapper">
                                  <img src="{{ asset ('frontend/assets/imgs/service/eventManagement.jpg') }}" alt="Service Image" class="service__img img-1 active">
                                  <img src="{{asset ('frontend/assets/imgs/service/Exhibition.jpg') }}" alt="Service Image" class="service__img img-2">
                                  <img src="{{ asset ('frontend/assets/imgs/service/seminar.jpg') }}" alt="Service Image" class="service__img img-3">
                                  <img src="{{asset ('frontend/assets/imgs/service/branding.jpg') }}" alt="Service Image" class="service__img img-4">
              
                                  <span class="shape-box-1 current"></span>
                                  <span class="shape-box-2"></span>
                                  <span class="shape-box-3"></span>
                                  <span class="shape-box-4"></span>
                                </div>
                              </div>
                              <div class="col-xxl-8 col-xl-8 col-lg-12 col-md-12">
                                <div class="service__list">
                                  <a href="{{ route('service-details') }}">
                                    <div class="service__item animation_home1_service" data-service="1">
                                      <div class="service__number"><span>01</span></div>
                                      <div class="service__title-wrapper">
                                        <h4 class="service__title">Campaign Development</h4>
                                      </div>
                                      <div class="service__text">
                                        <p>We meticulously plan and execute tailored campaigns designed to reinforce our clients' presence in the minds of their customers and drive sales growth. By attentively listening to our clients' needs, delving into the heart of each situation, and discerning the unique requirements of their brand, we develop customized solutions that not only address immediate needs but also foster long-term brand growth.
                                        </p>
                                      </div>
                                      <div class="service__link">
                                        <p><i class="fa-solid fa-arrow-right"></i></p>
                                      </div>
                                    </div>
                                  </a>
              
                                  <a href="{{ route('service-details') }}">
                                    <div class="service__item  animation_home1_service" data-service="2">
                                      <div class="service__number"><span>02</span></div>
                                      <div class="service__title-wrapper">
                                        <h4 class="service__title">Experiential Marketingt</h4>
                                      </div>
                                      <div class="service__text">
                                        <p>With a knack for organizing impactful events and activations that elevate brand awareness and engage consumers, we meticulously plan, design, and execute marketing events & activations tailored to meet the unique requirements of each brand.
                                        </p>
                                      </div>
                                      <div class="service__link">
                                        <p><i class="fa-solid fa-arrow-right"></i></p>
                                      </div>
                                    </div>
                                  </a>
              
                                  <a href="{{ route('service-details') }}">
                                    <div class="service__item  animation_home1_service" data-service="3">
                                      <div class="service__number"><span>03</span></div>
                                      <div class="service__title-wrapper">
                                        <h4 class="service__title">Communication Strategy Development </h4>
                                      </div>
                                      <div class="service__text">
                                        <p>We specialize in crafting brand identities, defining communication objectives, and mapping out strategic communication roadmaps, all of which contribute to fostering comprehensive brand development.
                                        </p>
                                      </div>
                                      <div class="service__link">
                                        <p><i class="fa-solid fa-arrow-right"></i></p>
                                      </div>
                                    </div>
                                  </a>
              
                                  <a href="{{ route('service-details') }}">
                                    <div class="service__item  animation_home1_service" data-service="4">
                                      <div class="service__number"><span>04</span></div>
                                      <div class="service__title-wrapper">
                                        <h4 class="service__title">Creative Development</h4>
                                      </div>
                                      <div class="service__text">
                                        <p>Our team prioritizes the creation of communicative and engaging creative solutions that capture the audience's attention and effectively convey the intended message. We do, Newspaper Ad Design, TV Ad Design, Events & Activation Materials Design, Digital Media Ad Designs, etc.
                                        </p>
                                      </div>
                                      <div class="service__link">
                                        <p><i class="fa-solid fa-arrow-right"></i></p>
                                      </div>
                                    </div>
                                  </a>
                                  <a href="{{ route('service-details') }}">
                                    <div class="service__item  animation_home1_service" data-service="4">
                                      <div class="service__number"><span>05</span></div>
                                      <div class="service__title-wrapper">
                                        <h4 class="service__title">ATL Marketing</h4>
                                      </div>
                                      <div class="service__text">
                                        <p>We foster brand development through various communication channels such as newspaper ads, TV ads, magazine ads, radio ads, and more.
                                        </p>
                                      </div>
                                      <div class="service__link">
                                        <p><i class="fa-solid fa-arrow-right"></i></p>
                                      </div>
                                    </div>
                                  </a>
                                  <a href="{{ route('service-details') }}">
                                    <div class="service__item  animation_home1_service" data-service="4">
                                      <div class="service__number"><span>06</span></div>
                                      <div class="service__title-wrapper">
                                        <h4 class="service__title">BTL Marketing</h4>
                                      </div>
                                      <div class="service__text">
                                        <p>We facilitate brand growth through strategic communication across a spectrum of platforms, encompassing poster ads, banner ads, traditional & digital billboard ads, direct marketing initiatives, events & activations, etc.
                                        </p>
                                      </div>
                                      <div class="service__link">
                                        <p><i class="fa-solid fa-arrow-right"></i></p>
                                      </div>
                                    </div>
                                  </a>
                                  <a href="{{ route('service-details') }}">
                                    <div class="service__item  animation_home1_service" data-service="4">
                                      <div class="service__number"><span>07</span></div>
                                      <div class="service__title-wrapper">
                                        <h4 class="service__title">Digital Marketing</h4>
                                      </div>
                                      <div class="service__text">
                                        <p>We prioritize our clients' digital presence, connecting them with their prospects through timely and targeted communication across social media and other digital channels. Our commitment to managing their digital presence ensures their continued growth in the digital landscape.
                                        </p>
                                      </div>
                                      <div class="service__link">
                                        <p><i class="fa-solid fa-arrow-right"></i></p>
                                      </div>
                                    </div>
                                  </a>
                                  <a href="{{ route('service-details') }}">
                                    <div class="service__item  animation_home1_service" data-service="4">
                                      <div class="service__number"><span>08</span></div>
                                      <div class="service__title-wrapper">
                                        <h4 class="service__title">Event Management</h4>
                                      </div>
                                      <div class="service__text">
                                        <p>We specialize in designing, organizing, and executing corporate events that elevate the prestige of our clients and fulfill their objectives. With a passionate approach, we orchestrate corporate, marketing, and business events with meticulous attention to detail.</p>
                                      </div>
                                      <div class="service__link">
                                        <p><i class="fa-solid fa-arrow-right"></i></p>
                                      </div>
                                    </div>
                                  </a>
                                  <a href="{{ route('service-details') }}">
                                    <div class="service__item  animation_home1_service" data-service="4">
                                      <div class="service__number"><span>09</span></div>
                                      <div class="service__title-wrapper">
                                        <h4 class="service__title">Interior Design</h4>
                                      </div>
                                      <div class="service__text">
                                        <p>We are dedicated to bringing the dreams of our esteemed clients to life. By listening to their aspirations, we pledge to design interiors that reflect their desires, ensuring an unforgettable experience through our unparalleled service.
                                        </p>
                                      </div>
                                      <div class="service__link">
                                        <p><i class="fa-solid fa-arrow-right"></i></p>
                                      </div>
                                    </div>
                                  </a>
                                  <a href="{{ route('service-details') }}">
                                    <div class="service__item  animation_home1_service" data-service="4">
                                      <div class="service__number"><span>10</span></div>
                                      <div class="service__title-wrapper">
                                        <h4 class="service__title">Logistics Support</h4>
                                      </div>
                                      <div class="service__text">
                                        <p>We offer comprehensive logistics support for event organization and interior design projects, committed to standing by our clients at every step. From the storage of event materials to providing essential resources for event execution and interior design projects, we ensure seamless service delivery.
                                        </p>
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


                <!-- Brand area start -->
                <section class="brand__area">
                    <div class="container line pt-140 pb-100">
                        <span class="line-3"></span>
                        <div class="row">
                            <div class="col-xxl-12">
                                <h2 class="brand__title-3 title-anim">We are happy to work with global
                                    largest brands</h2>
                                <div class="brand__list brand-gap">
                                    <div class="brand__item-2 fade_bottom">
                                        <img src="{{ asset('frontend/assets/imgs/brand/1.png') }}" alt="Brand Logo">
                                    </div>
                                    <div class="brand__item-2 fade_bottom">
                                        <img src="{{ asset('frontend/assets/imgs/brand/2.png') }}" alt="Brand Logo">
                                    </div>
                                    <div class="brand__item-2 fade_bottom">
                                        <img src="{{ asset('frontend/assets/imgs/brand/3.png') }}" alt="Brand Logo">
                                    </div>
                                    <div class="brand__item-2 fade_bottom">
                                        <img src="{{ asset('frontend/assets/imgs/brand/4.png') }}" alt="Brand Logo">
                                    </div>
                                    <div class="brand__item-2 fade_bottom">
                                        <img src="{{ asset('frontend/assets/imgs/brand/5.png') }}" alt="Brand Logo">
                                    </div>
                                    <div class="brand__item-2 fade_bottom">
                                        <img src="{{ asset('frontend/assets/imgs/brand/6.png') }}" alt="Brand Logo">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Brand area end -->


                <!-- CTA area start -->
                <section class="cta__area">
                    <div class="container line pt-100 pb-110 no-p">
                        <div class="line-3"></div>
                        <div class="row">
                            <div class="col-xxl-12">
                                <div class="cta__content">
                                    <p class="cta__sub-title">Work with us</p>
                                    <h2 class="cta__title title-anim">We would love to hear more about your project
                                    </h2>
                                    <div class="btn_wrapper">
                                        <a href="{{ route('contact') }}"
                                            class="wc-btn-primary btn-item btn-hover"><span></span>Let’s talk us <i
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
                    <img src="{{ asset('frontend/assets/imgs/thumb/footer.jpg') }}" alt="Footer Image"
                        data-speed="0.75">
                </div>

                <div class="footer__btm">
                    <div class="container">
                        <div class="row footer__row">
                            <div class="col-xxl-12">
                                <div class="footer__inner">
                                    <div class="footer__widget">
                                        <img class="footer__logo"
                                            src="{{ asset('frontend/assets/imgs/logo/brillance_logo2.png') }}"
                                            alt="Footer Logo">
                                        <p>When do they work well, and when do they on us and finally, when do we
                                            actually need how can we
                                            avoid
                                            them.</p>
                                        <ul class="footer__social">
                                            <li><a href="#"><span><i
                                                            class="fa-brands fa-facebook-f"></i></span></a></li>
                                            <li><a href="#"><span><i
                                                            class="fa-brands fa-twitter"></i></span></a></li>
                                            <li><a href="#"><span><i
                                                            class="fa-brands fa-instagram"></i></span></a></li>
                                            <li><a href="#"><span><i
                                                            class="fa-brands fa-linkedin"></i></span></a></li>
                                        </ul>
                                    </div>

                                    <div class="footer__widget-2">
                                        <h2 class="footer__widget-title">Information</h2>
                                        <ul class="footer__link">
                                            <li><a href="{{ route('about') }}">About Company</a></li>
                                            <li><a href="{{ route('portfolio') }}">Case Study</a></li>
                                            <li><a href="#">Career</a></li>
                                            <li><a href="{{ route('gallery') }}">gallery</a></li>
                                            <li><a href="{{ route('contact') }}">contact</a></li>
                                        </ul>
                                    </div>

                                    <div class="footer__widget-3">
                                        <h2 class="footer__widget-title">Contact Us</h2>
                                        <ul class="footer__contact">
                                            <li>Flat # 1-A, House # 342, Av # 3, Mirpur DOHS, Dhaka-1216</li>
                                            <li><a href="tel:02574328301" class="phone">01712-725307,
                                                    01612-725307</a></li>
                                            <li><a href="mailto:">info@brilliance.com</a></li>
                                        </ul>
                                    </div>

                                    <div class="footer__widget-4">
                                        <h2 class="project-title">Have a project in your mind?</h2>
                                        <div class="btn_wrapper">
                                            <a href="{{ route('contact') }}"
                                                class="wc-btn-primary btn-hover btn-item"><span></span> contact us <i
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
                                            <button type="submit" class="subs-btn"><i
                                                    class="fa-solid fa-paper-plane"></i></button>
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
    <script src="{{ asset('frontend/assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/counter.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/gsap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/ScrollToPlugin.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/ScrollSmoother.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/SplitText.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/chroma.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vanilla-tilt.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.meanmenu.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>


</body>



</html>
