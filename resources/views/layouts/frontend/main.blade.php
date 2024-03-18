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
  <div class="preloader">
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
  </div>


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
   @include('layouts.frontend.header')
  <!-- Header area end -->


  <!-- Offcanvas area start -->
  @include('layouts.frontend.navbar')
  <!-- Offcanvas area end -->


 <div >
    @yield('content')
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