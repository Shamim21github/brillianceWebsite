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

                <!-- Contact area start -->
                <section class="contact__area-6">
                    <div class="container g-0 line pt-120 pb-110">
                        <span class="line-3"></span>
                        <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                <div class="sec-title-wrapper">
                                    <h2 class="sec-title-2 animation__char_come">Let’s get in touch</h2>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                <div class="contact__text">
                                    <p>Great! We're excited to hear from you and let's start
                                        something special togerter. call us for any inquery.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row contact__btm">
                            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                                <div class="contact__info">
                                    <h3 class="sub-title-anim-top animation__word_come">Let's enjoy everyday & <br>say
                                        hello</h3>
                                    <ul>
                                        <li><a href="tel:02574328301" class="phone">01712-725307, 01612-725307</a>
                                        </li>
                                        <li><a href="mailto:hello@example.com">info@brilliance.com</a></li>
                                        <li><a href="#">Flat # 1-A, House # 342, Av # 3, Mirpur DOHS,
                                                Dhaka-1216</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
                                <div class="contact__form">
                                    <form action="#" method="POST" id="myForm">


                                        {{-- <form action="https://wealcoder.com/dev/html/axtra/assets/mail.php" method="POST"> --}}
                                        <div class="row g-3">
                                            <div class="col-xxl-6 col-xl-6 col-12">
                                                <input type="text" name="name" placeholder="Name *" required>
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-12">
                                                <input type="email" name="email" placeholder="Email *" required>
                                            </div>
                                        </div>
                                        <div class="row g-3">
                                            <div class="col-xxl-6 col-xl-6 col-12">
                                                <input type="tel" name="phone" placeholder="Phone" required>
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-12">
                                                <input type="text" name="subject" placeholder="Subject *"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <textarea name="message" placeholder="Messages *" required></textarea>
                                            </div>
                                        </div>
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <div class="btn_wrapper">
                                                    <button class="wc-btn-primary btn-hover btn-item"><span></span>
                                                        Send <br>Messages <i
                                                            class="fa-solid fa-arrow-right"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div id="success-message" style="display: none; color:white;">Message sent successfully!</div> --}}
                </section>
                <!-- Contact area end -->
                <!-- Success message container -->

                <script>
                    document.getElementById("myForm").addEventListener("submit", function(event) {
                        event.preventDefault(); // Prevent the form from submitting normally

                        // Display success message using Toastr
                        toastr.success('Message sent successfully!');

                        // Clear all input fields
                        document.getElementById("myForm").reset();
                    });
                    'use strict';
                    window.onload = function() {
                        // Globals
                        var random = Math.random,
                            cos = Math.cos,
                            sin = Math.sin,
                            PI = Math.PI,
                            PI2 = PI * 2,
                            timer = undefined,
                            frame = undefined,
                            confetti = [];

                        var particles = 10,
                            spread = 40,
                            sizeMin = 3,
                            sizeMax = 12 - sizeMin,
                            eccentricity = 10,
                            deviation = 100,
                            dxThetaMin = -.1,
                            dxThetaMax = -dxThetaMin - dxThetaMin,
                            dyMin = .13,
                            dyMax = .18,
                            dThetaMin = .4,
                            dThetaMax = .7 - dThetaMin;

                        var colorThemes = [
                            function() {
                                return color(200 * random() | 0, 200 * random() | 0, 200 * random() | 0);
                            },
                            function() {
                                var black = 200 * random() | 0;
                                return color(200, black, black);
                            },
                            function() {
                                var black = 200 * random() | 0;
                                return color(black, 200, black);
                            },
                            function() {
                                var black = 200 * random() | 0;
                                return color(black, black, 200);
                            },
                            function() {
                                return color(200, 100, 200 * random() | 0);
                            },
                            function() {
                                return color(200 * random() | 0, 200, 200);
                            },
                            function() {
                                var black = 256 * random() | 0;
                                return color(black, black, black);
                            },
                            function() {
                                return colorThemes[random() < .5 ? 1 : 2]();
                            },
                            function() {
                                return colorThemes[random() < .5 ? 3 : 5]();
                            },
                            function() {
                                return colorThemes[random() < .5 ? 2 : 4]();
                            }
                        ];

                        function color(r, g, b) {
                            return 'rgb(' + r + ',' + g + ',' + b + ')';
                        }

                        // Cosine interpolation
                        function interpolation(a, b, t) {
                            return (1 - cos(PI * t)) / 2 * (b - a) + a;
                        }

                        // Create a 1D Maximal Poisson Disc over [0, 1]
                        var radius = 1 / eccentricity,
                            radius2 = radius + radius;

                        function createPoisson() {
                            // domain is the set of points which are still available to pick from
                            // D = union{ [d_i, d_i+1] | i is even }
                            var domain = [radius, 1 - radius],
                                measure = 1 - radius2,
                                spline = [0, 1];
                            while (measure) {
                                var dart = measure * random(),
                                    i, l, interval, a, b, c, d;

                                // Find where dart lies
                                for (i = 0, l = domain.length, measure = 0; i < l; i += 2) {
                                    a = domain[i], b = domain[i + 1], interval = b - a;
                                    if (dart < measure + interval) {
                                        spline.push(dart += a - measure);
                                        break;
                                    }
                                    measure += interval;
                                }
                                c = dart - radius, d = dart + radius;

                                // Update the domain
                                for (i = domain.length - 1; i > 0; i -= 2) {
                                    l = i - 1, a = domain[l], b = domain[i];
                                    // c---d          c---d  Do nothing
                                    //   c-----d  c-----d    Move interior
                                    //   c--------------d    Delete interval
                                    //         c--d          Split interval
                                    //       a------b
                                    if (a >= c && a < d)
                                        if (b > d) domain[l] = d; // Move interior (Left case)
                                        else domain.splice(l, 2); // Delete interval
                                    else if (a < c && b > c)
                                        if (b <= d) domain[i] = c; // Move interior (Right case)
                                        else domain.splice(i, 0, c, d); // Split interval
                                }

                                // Re-measure the domain
                                for (i = 0, l = domain.length, measure = 0; i < l; i += 2)
                                    measure += domain[i + 1] - domain[i];
                            }

                            return spline.sort();
                        }

                        // Create the overarching container
                        var container = document.createElement('div');
                        container.style.position = 'fixed';
                        container.style.top = '0';
                        container.style.left = '0';
                        container.style.width = '100%';
                        container.style.height = '0';
                        container.style.overflow = 'visible';
                        container.style.zIndex = '9999';

                        // Confetto constructor
                        function Confetto(theme) {
                            this.frame = 0;
                            this.outer = document.createElement('div');
                            this.inner = document.createElement('div');
                            this.outer.appendChild(this.inner);

                            var outerStyle = this.outer.style,
                                innerStyle = this.inner.style;
                            outerStyle.position = 'absolute';
                            outerStyle.width = (sizeMin + sizeMax * random()) + 'px';
                            outerStyle.height = (sizeMin + sizeMax * random()) + 'px';
                            innerStyle.width = '100%';
                            innerStyle.height = '100%';
                            innerStyle.backgroundColor = theme();

                            outerStyle.perspective = '50px';
                            outerStyle.transform = 'rotate(' + (360 * random()) + 'deg)';
                            this.axis = 'rotate3D(' +
                                cos(360 * random()) + ',' +
                                cos(360 * random()) + ',0,';
                            this.theta = 360 * random();
                            this.dTheta = dThetaMin + dThetaMax * random();
                            innerStyle.transform = this.axis + this.theta + 'deg)';

                            this.x = window.innerWidth * random();
                            this.y = -deviation;
                            this.dx = sin(dxThetaMin + dxThetaMax * random());
                            this.dy = dyMin + dyMax * random();
                            outerStyle.left = this.x + 'px';
                            outerStyle.top = this.y + 'px';

                            // Create the periodic spline
                            this.splineX = createPoisson();
                            this.splineY = [];
                            for (var i = 1, l = this.splineX.length - 1; i < l; ++i)
                                this.splineY[i] = deviation * random();
                            this.splineY[0] = this.splineY[l] = deviation * random();

                            this.update = function(height, delta) {
                                this.frame += delta;
                                this.x += this.dx * delta;
                                this.y += this.dy * delta;
                                this.theta += this.dTheta * delta;

                                // Compute spline and convert to polar
                                var phi = this.frame % 7777 / 7777,
                                    i = 0,
                                    j = 1;
                                while (phi >= this.splineX[j]) i = j++;
                                var rho = interpolation(
                                    this.splineY[i],
                                    this.splineY[j],
                                    (phi - this.splineX[i]) / (this.splineX[j] - this.splineX[i])
                                );
                                phi *= PI2;

                                outerStyle.left = this.x + rho * cos(phi) + 'px';
                                outerStyle.top = this.y + rho * sin(phi) + 'px';
                                innerStyle.transform = this.axis + this.theta + 'deg)';
                                return this.y > height + deviation;
                            };
                        }

                        function poof() {
                            if (!frame) {
                                // Append the container
                                document.body.appendChild(container);

                                // Add confetti
                                var theme = colorThemes[0],
                                    count = 0;
                                (function addConfetto() {
                                    var confetto = new Confetto(theme);
                                    confetti.push(confetto);
                                    container.appendChild(confetto.outer);
                                    timer = setTimeout(addConfetto, spread * random());
                                })(0);

                                // Start the loop
                                var prev = undefined;
                                requestAnimationFrame(function loop(timestamp) {
                                    var delta = prev ? timestamp - prev : 0;
                                    prev = timestamp;
                                    var height = window.innerHeight;

                                    for (var i = confetti.length - 1; i >= 0; --i) {
                                        if (confetti[i].update(height, delta)) {
                                            container.removeChild(confetti[i].outer);
                                            confetti.splice(i, 1);
                                        }
                                    }

                                    if (timer || confetti.length)
                                        return frame = requestAnimationFrame(loop);

                                    // Cleanup
                                    document.body.removeChild(container);
                                    frame = undefined;
                                });
                            }
                        }

                        poof();
                    };
                </script>


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


            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    // Get the form and the email input element
                    const form = document.getElementById('subscribeForm');
                    const emailInput = document.getElementById('emailInput');

                    // Add event listener for form submission
                    form.addEventListener('submit', function(event) {
                        event.preventDefault(); // Prevent default form submission behavior

                        // Here, you can add code to submit the form data using AJAX if needed

                        // Display success message
                        displaySuccessMessage();
                    });

                    // Function to display success message
                    function displaySuccessMessage() {
                        // Create a new element for the message
                        const successMessage = document.createElement('p');
                        successMessage.textContent = 'Form submitted successfully';

                        // Append the message to the form
                        form.appendChild(successMessage);

                        // Clear the input field after submission (optional)
                        emailInput.value = '';
                    }
                });
            </script>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.0.1/dist/canvas-confetti.min.js"></script>

</body>



</html>
