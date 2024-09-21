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

                <!-- Portfolio area start -->
                <section class="portfolio__detail">
                    <div class="portfolio__detail-top">
                        <div class="container g-0 line pt-110 pb-130">
                            <span class="line-3"></span>

                            <div class="row">
                                <div class="col-xxl-8 col-xl-8 col-lg-7 col-md-7">
                                    <div class="sec-title-wrapper">
                                        <h2 class="sec-title animation__char_come">Brilliance <br>BD <br> Agency </h2>
                                    </div>
                                </div>

                                <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-5">
                                    <div class="portfolio__detail-info">
                                        <ul>
                                            <li>Category <a href="category.html">Development</a></li>
                                            <li>Client <span>Webflow</span></li>
                                            <li>Start Date <span>23 January 2021</span></li>
                                            <li>Handover <span>05 March 2021</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="portfolio__detail-thumb">
                        <img src="{{ asset('frontend/assets/imgs/work/2.Activation/1.jpg') }}"
                            alt="Portfolio Thumbnail" data-speed="auto">
                    </div>

                    <div class="portfolio__detail-content">
                        <div class="container g-0 line pt-140">
                            <span class="line-3"></span>

                            <div class="block-content">
                                <div class="row">
                                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                                        <h2 class="portfolio__detail-title title-anim">Build, streamline and
                                            evolve together with
                                            solution</h2>
                                    </div>

                                    <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
                                        <div class="portfolio__detail-text">
                                            <p>Always ready to push the boundaries, especially when it comes to our own
                                                platform, Our
                                                analytical
                                                eye
                                                to create a site that was visually engaging and also optimised for
                                                maximum performance. It
                                                also
                                                perfectly reflects the journey to help it tell a story to increase its
                                                understanding and drive
                                                action.
                                                To create a site that was visually engaging for maximum performance.</p>

                                            <ul>
                                                <li>+ Brand Development</li>
                                                <li>+ UX/UI Design</li>
                                                <li>+ Front-end Development</li>
                                                <li>+ Copywriting</li>
                                                <li>+ Shopify Development</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="block-thumb">
                                <img src="{{ asset('frontend/assets/imgs/work/2.Activation/2.jpg') }}"
                                    alt="Portfolio Image" data-speed="0.5">
                            </div>



                            <div class="block-content  pt-140">
                                <div class="row">
                                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                                        <h2 class="portfolio__detail-title title-anim">Visual and typograpy
                                            hierarchy</h2>
                                    </div>

                                    <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
                                        <div class="portfolio__detail-text">
                                            <p>Visual hierarchy is the principle of arranging elements to show
                                                their order of importance.
                                                Designers
                                                structure visual characteristics—e.g., menu icons—so users can
                                                understand information easily.
                                                By
                                                laying out elements logically and strategically, designers influence
                                                users’ perceptions and
                                                guide
                                                them
                                                to desired actions. Users notice larger elements more easily can
                                                convert.
                                            </p>

                                            <div class="fonts">
                                                <img src="{{ asset('frontend/assets/imgs/portfolio/detail/shape.png') }}"
                                                    alt="Font Style">
                                                <ul>
                                                    <li class="regular"><span>regular</span> This is text message</li>
                                                    <li class="medium"><span>Medium</span> Medium typography</li>
                                                    <li class="semibold"><span>SemiBold</span> Just Amazing</li>
                                                    <li class="blod"><span>Blod</span> Awesome</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="block-gallery">
                                <img src="{{ asset('frontend/assets/imgs/work/2.Activation/3.jpg') }}"
                                    alt="Portfolio Image">
                                <img src="{{ asset('frontend/assets/imgs/work/2.Activation/4.jpg') }}"
                                    alt="Portfolio Image">
                            </div>

                            <div class="block-thumb">
                                <img src="{{ asset('frontend/assets/imgs/work/2.Activation/5.jpg') }}"
                                    alt="Portfolio Image" data-speed="0.5">
                            </div>

                            <div class="block-img-text">
                                <img src="{{ asset('frontend/assets/imgs/work/2.Activation/6.jpg') }}"
                                    alt="Portfolio Image">
                                <img src="{{ asset('frontend/assets/imgs/work/2.Activation/7.jpg') }}"
                                    alt="Portfolio Image">
                                <p>For those of us who are blessed with good sight. So we seldom consider
                                    it. That’s why going off to
                                    investigate the whys and hows involved is a little like trying to get behind the
                                    wind </p>
                            </div>

                            <div class="row">
                                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                                    <div class="portfolio__detail-btns pt-140 pb-140">
                                        <a href="{{ route('portfolio-details') }}"
                                            class="wc-btn-primary btn-hover"><span></span> Prev Work</a>
                                        <a href="{{ route('portfolio-details') }}"
                                            class="wc-btn-primary btn-hover"><span></span> Next Work</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
                <!-- Portfolio area end -->

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
                                                class="wc-btn-primary btn-hover btn-item text-white"><span></span> contact us <i
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
