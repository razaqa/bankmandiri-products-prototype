<?php setlocale(LC_TIME, 'id_ID'); ?>
<!DOCTYPE html>
<html lang="id" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta name="description" content="Bank Mandiri adalah Bank Terbaik di Indonesia. Terdepan, Terpercaya, Tumbuh Bersama Anda. Apapun keinginan Anda, Bank Mandiri Saja." />
    <meta content="text/html; charset=UTF-8" name="Content-Type" />
    
    @yield('extra-meta')
    
    <title>Bank Mandiri - @yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}" />
    <link rel="stylesheet" href="{{ asset('lib/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" />
    <link rel="stylesheet" href="https://npmcdn.com/basscss@8.0.0/css/basscss.min.css" />

    <link rel="stylesheet" href="{{ asset('css/animation.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/base.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">

    <script src="{{ asset('lib/jquery-3.3.1.min.js') }}"></script>

    @yield('extra-fonts')
    @yield('prerender-js')
    @yield('extra-css')

  </head>
  <body>
    @include('_nav')
    @yield('content')
    @include('_footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/web-animations/2.3.1/web-animations.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scrollbar/8.3.1/smooth-scrollbar.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="{{ asset('lib/popper.min.js') }}"></script>
    <script src="{{ asset('lib/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/base.js') }}"></script>
    @yield('extra-js')

  </body>
</html>
