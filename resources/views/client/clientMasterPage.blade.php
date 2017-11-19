<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Unishop | Universal E-Commerce Template
    </title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Unishop - Universal E-Commerce Template">
    <meta name="keywords" content="shop, e-commerce, modern, flat style, responsive, online store, business, mobile, blog, bootstrap 4, html5, css3, jquery, js, gallery, slider, touch, creative, clean">
    <meta name="author" content="Rokaux">
    <!-- Mobile Specific Meta Tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Favicon and Apple Icons-->
    <link rel="icon" type="image/x-icon" href="http://themes.rokaux.com/unishop/v1.4/favicon.ico">
    <link rel="icon" type="image/png" href="http://themes.rokaux.com/unishop/v1.4/favicon.png">
    <link rel="apple-touch-icon" href="http://themes.rokaux.com/unishop/v1.4/touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="152x152" href="http://themes.rokaux.com/unishop/v1.4/touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="180x180" href="http://themes.rokaux.com/unishop/v1.4/touch-icon-iphone-retina.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="apple-touch-icon" sizes="167x167" href="http://themes.rokaux.com/unishop/v1.4/touch-icon-ipad-retina.png">
    <!-- Vendor Styles including: Bootstrap, Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="/css/client/vendor.min.css">
    <!-- Main Template Styles-->
    <link id="mainStyles" rel="stylesheet" media="screen" href="/css/client/styles.min.css">
    <!-- Customizer Styles-->
    <link rel="stylesheet" media="screen" href="/css/client/customizer.min.css">
    <!-- Google Tag Manager-->
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script>
      (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-T4DJFPZ');
      
    </script>
    <!-- Modernizr-->
    <script src="/js/client/modernizr.min.js"></script>
  </head>
  <!-- Body-->
  <body>
      @yield('navMenu')
    <div class="offcanvas-wrapper">

      @yield('content')
    
      @yield('footer')

    </div>

 <!-- Back To Top Button--><a class="scroll-to-top-btn" href="#"><i class="icon-arrow-up"></i></a>
    <!-- Backdrop-->
    <div class="site-backdrop"></div>
    <!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
    <script src="/js/client/vendor.min.js"></script>
    <script src="/js/client/scripts.min.js"></script>
    <!-- Customizer scripts-->
    <script src="/js/client/customizer.min.js"></script>
  </body>
</html>