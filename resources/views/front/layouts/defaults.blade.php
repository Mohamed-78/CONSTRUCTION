<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta property="og:type" content="website" />
  <title>{{page_title($title) ?? ''}}</title>
  <meta property="og:image" content="{{ URL::asset('assets/images/logo/logo-white.png') }}" />
  @yield('meta')
  <meta name="author" content="Soft-Univers">
  <meta name="robots" content="all">
  <meta name="copyright" content="Mgimmobilier"/>
  
  <link rel="shortcut icon" href="{{ asset('front/images/favicon.png') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('front/css/bootstrap.min.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('front/css/animate.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('front/css/owl.carousel.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('front/css/font-awesome.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('front/css/themify-icons.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('front/css/flaticon.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('front/revolution/css/layers.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('front/revolution/css/settings.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('front/css/prettyPhoto.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('front/css/shortcodes.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('front/css/main.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('front/css/responsive.css') }}"/>
  
</head>
<body>

  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>

  @include('front.nav.header')
  @yield('content')
  <script src="//code.jquery.com/jquery.js"></script>
  <script src="{{ asset('front/js/jquery.min.js') }}"></script>
  @include('flashy::message')
  @include('front.nav.footer')

  <script src="{{ asset('front/js/jquery.min.js') }}"></script>
  <script src="{{ asset('front/js/tether.min.js') }}"></script>
  <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('front/js/jquery.easing.js') }}"></script>    
  <script src="{{ asset('front/js/jquery-waypoints.js') }}"></script>    
  <script src="{{ asset('front/js/jquery-validate.js') }}"></script> 
  <script src="{{ asset('front/js/owl.carousel.js') }}"></script>
  <script src="{{ asset('front/js/jquery.prettyPhoto.js') }}"></script>
  <script src="{{ asset('front/js/numinate.min6959.js?ver=4.9.3') }}"></script>
  <script src="{{ asset('front/js/main.js') }}"></script>
  <script src="{{ asset('front/js/chart.js') }}"></script>
  <script src="{{ asset('front/revolution/js/jquery.themepunch.tools.min.js') }}">
  </script>
  <script src="{{ asset('front/revolution/js/jquery.themepunch.revolution.min.js') }}">
  </script>
  <script src="{{ asset('front/revolution/js/slider.js') }}"></script>
  <script src="{{ asset('front/revolution/js/extensions/revolution.extension.actions.min.js') }}">
  </script>
  <script src="{{ asset('front/revolution/js/extensions/revolution.extension.carousel.min.js') }}">
  </script>
  <script src="{{ asset('front/revolution/js/extensions/revolution.extension.kenburn.min.js') }}">
  </script>
  <script src="{{ asset('front/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
  <script src="{{ asset('front/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
  <script src="{{ asset('front/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
  <script src="{{ asset('front/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
  <script src="{{ asset('front/revolution/js/extensions/revolution.extension.slideanims.min.js') }}">
  </script>
  <script>
    $('.cache').hide();
    $('.plus').click(function(e) {
      e.preventDefault();
      $('.cache').show();
      $('.plus').hide();
    });

    $('.Reduire').click(function(e) {
      e.preventDefault();
      $('.cache').hide();
      $('.plus').show();
    });
    
  </script> 

  <script>
    $('.cachee').hide();
    $('.pluss').click(function(e) {
      e.preventDefault();
      $('.cachee').show();
      $('.pluss').hide();
    });

    $('.Reduiree').click(function(e) {
      e.preventDefault();
      $('.cachee').hide();
      $('.pluss').show();
    });
    
  </script>

  @stack('script.footer')
</body>
</html>


