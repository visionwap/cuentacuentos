<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="content/buddy/images/favicon.ico">

    <!-- FONTS -->
    <link rel='stylesheet' id='Roboto-css' href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,700'>
    <link rel='stylesheet' id='Patua+One-css' href='http://fonts.googleapis.com/css?family=Patua+One:100,300,400,400italic,700'>
    <link rel='stylesheet' id='Lato-css' href='http://fonts.googleapis.com/css?family=Lato:300,400,400italic,500,700'>

    <!-- CSS -->
    <link rel='stylesheet' id='global-css' href='css/global.css'>
    <link rel='stylesheet' id='structure-css' href='content/buddy/css/structure.css'>
    <link rel='stylesheet' id='local-css' href='content/buddy/css/buddy.css'>
    <link rel='stylesheet' id='custom-css' href='content/buddy/css/custom.css'>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css">

    <!-- Revolution Slider -->
    <link rel="stylesheet" href="plugins/rs-plugin/css/settings.css">

    @yield('styles')
  </head>
</head>
<body class="home-page home template-slider style-simple layout-full-width mobile-tb-left mobile-wide header-classic header-fw minimalist-header sticky-header sticky-white ab-hide subheader-title-left menuo-right menuo-no-borders footer-copy-center no-js">
  <!-- Main Theme Wrapper -->
  <div id="Wrapper">
    <!-- Header Wrapper -->
    <div id="Header_wrapper">
      <!-- Header -->
      <header id="Header">

        <!-- Header -  Logo and Menu area -->
        <div id="Top_bar">
          <div class="container">
            <div class="column one">
              <div class="top_bar_left clearfix">
                <!-- Logo-->
                <div class="logo">
                  <a id="logo" href="" title="Cuenta cuentos club"> <img class=" scale-with-grid" src="content/buddy/images/buddy.png" alt="Cuenta cuentos club" /> </a>
                </div>
                <!-- Main menu-->
                <div class="menu_wrapper">
                  <nav id="menu" class="menu-main-menu-container">
                    <ul id="menu-main-menu" class="menu">
                      <li id="menu-item-18" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-2 current_page_item">
                        <a href="{{ route('home') }}"><span>Inicio</span></a>
                      </li>
                      <li>
                          <a href="#"><span>Cuentos</span></a>
                          <ul class="sub-menu mfn-megamenu mfn-megamenu-3">
                              <li class="mfn-megamenu-cols-3">
                                  <ul class="sub-menu mfn-megamenu mfn-megamenu-3">
                                      <li>
                                          <a href="{{ route('tails', ['category' => 'mis_cuentos']) }}"><span><i class="icon-picture"></i> Mis cuentos</span></a>
                                      </li>
                                      <li>
                                          <a href="{{ route('tails', ['category' => 'favoritos']) }}"><span><i class="icon-heart-empty-fa"></i> Mis favoritos</span></a>
                                      </li>
                                      <li>
                                          <a href="{{ route('tails', ['category' => 'amigos']) }}"><span><i class="icon-users"></i> De mis amigos</span></a>
                                      </li>
                                      <li>
                                          <a href="{{ route('tails', ['category' => 'mis_revisiones']) }}"><span><i class="icon-check"></i> Mis revisiones</span></a>
                                      </li>
                                  </ul>
                              </li>
                              <li class="mfn-megamenu-cols-3">
                                  <ul class="sub-menu mfn-megamenu mfn-megamenu-3">
                                      <li>
                                          <a href="{{ route('tails', ['category' => 'terror']) }}"><span><i class="icon-traffic-cone"></i> Terror</span></a>
                                      </li>
                                      <li>
                                          <a href="{{ route('tails', ['category' => 'infantil']) }}"><span><i class="icon-star-empty"></i> Infantil</span></a>
                                      </li>
                                      <li>
                                          <a href="{{ route('tails', ['category' => 'suspenso']) }}"><span><i class="icon-picture"></i> Suspenso</span></a>
                                      </li>
                                      <li>
                                          <a href="{{ route('tails', ['category' => 'romance']) }}"><span><i class="icon-doc"></i> Romance</span></a>
                                      </li>
                                  </ul>
                              </li>
                              <li class="mfn-megamenu-cols-3">
                                  <ul class="sub-menu mfn-megamenu mfn-megamenu-3">
                                      <li>
                                          <a href="{{ route('tails', ['category' => 'aventura']) }}"><span><i class="icon-lifebuoy"></i> Aventura</span></a>
                                      </li>
                                      <li>
                                          <a href="{{ route('tails', ['category' => 'fantasticos']) }}"><span><i class="icon-graduation-cap"></i> Fantasticos</span></a>
                                      </li>
                                      <li>
                                          <a href="{{ route('tails', ['category' => 'historicos']) }}"><span><i class="icon-users"></i> Historicos</span></a>
                                      </li>
                                      <li>
                                          <a href="{{ route('tails', ['category' => 'animales']) }}"><span><i class="icon-comment-fa"></i> Animales</span></a>
                                      </li>
                                  </ul>
                              </li>
                          </ul>
                      </li>
                      <li>
                        <a href="#"><span>Comunidad</span></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{ route('members', ['category' => 'mas_seguidos']) }}"><span><i class="icon-comment-fa"></i> Los mas seguidos</span></a>
                            </li>
                            <li>
                                <a href="{{ route('home') }}"><span><i class="icon-comment-fa"></i> Los mas recientes</span></a>
                            </li>
                            <li>
                                <a href="{{ route('home') }}"><span><i class="icon-comment-fa"></i> En línea</span></a>
                            </li>
                            <li>
                                <a href="{{ route('home') }}"><span><i class="icon-comment-fa"></i> Mis amigos</span></a>
                            </li>
                            <li>
                                <a href="{{ route('home') }}"><span><i class="icon-comment-fa"></i> Siguiendo</span></a>
                            </li>
                            <li>
                                <a href="{{ route('home') }}"><span><i class="icon-find-fa"></i> Buscar</span></a>
                            </li>
                        </ul>

                      </li>
                    </ul>
                  </nav><a class="responsive-menu-toggle " href="#"><i class="icon-menu"></i></a>
                </div>
                <!-- Secondary menu area - only for certain pages -->
                <div class="secondary_menu_wrapper"></div>
                <!-- Banner area - only for certain pages-->
                <div class="banner_wrapper"></div>
                <!-- Header Searchform area-->
                <div class="search_wrapper">
                  <form method="get" id="searchform" action="#">
                    <input type="text" class="field" name="s" id="s" placeholder="Enter your search" />
                    <input type="submit" class="submit flv_disp_none" value="" />
                  </form>
                </div>
              </div>
              <div class="top_bar_right">
                <div class="top_bar_right_wrapper">
                  <a id="search_button" class="text_on_menu" href="#"><i class="icon-search"></i></a>
                  <a id="signin" href="#" data-toggle="modal" data-target="#login-modal">
                    <i class="icon-login"></i>
                  </a>
                  <a id="signup" href="#"  data-toggle="modal" data-target="#signup-modal">
                    <i class="icon-user-add"></i>
                  </a>
                  <div id="languages_selector" class="wpml-languages enabled">
                  <a class="active tooltip" href="#" data-tooltip="No translations available for this page"><img src="images/flags/en.png" alt="English"><i class="icon-down-open-mini"></i>
                  </a>
                  <ul class="wpml-lang-dropdown">
                      <li>
                          <a href="#"><img src="images/flags/fr.png" alt="French">
                          </a>
                      </li>
                      <li>
                          <a href="#"><img src="images/flags/de.png" alt="German">
                          </a>
                      </li>
                      <li>
                          <a href="#"><img src="images/flags/pl.png" alt="Polish">
                          </a>
                      </li>
                  </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @yield('slider')
      </header>
    </div>
    @include('partials.login')
    @include('partials.signup')
    <!-- Main Content -->
    @yield('content')
    <!-- JS -->
    <!-- Footer-->
    <footer id="Footer" class="clearfix">
      <div class="widgets_wrapper">
        <div class="container">
          <div class="column one">
            <!-- Text Area -->
            <aside id="text-3" class="widget widget_text">
              <div class="textwidget">
                <p style="margin: 0 15%; text-align: center; color: #b3b2b7;">
                  Mauris suscipit velit in egestas finibus. Aenean vehicula facilisis turpis, quis mattis urna. Fusce ornare rhoncus mauris id fermentum. Sed sollicitudin tellus ut purus viverra, placerat pulvinar diam fermentum. Donec porta fringilla nunc nec suscipit.
                </p>
              </div>
            </aside>
          </div>
        </div>
      </div>
      <!-- Footer copyright-->
      <div class="footer_copy">
        <div class="container">
          <div class="column one">
            <a id="back_to_top" class="button button_left button_js hide" href="#"><span class="button_icon"><i class="icon-up-open-big"></i></span></a>
            <div class="copyright">
              &copy; 2017 Todos los derechos reservados - Una obra social de <a target="_blank" rel="nofollow" href="http://visionwap.com">VisionWap</a>
            </div>
            <!--Social info area-->
            <ul class="social"></ul>
          </div>
        </div>
      </div>
    </footer>
  </div>

    @yield('libraries')
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

    <script type="text/javascript" src="js/mfn.menu.js"></script>
    <script type="text/javascript" src="js/jquery.plugins.js"></script>
    <script type="text/javascript" src="js/jquery.jplayer.min.js"></script>
    <script type="text/javascript" src="js/animations/animations.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>

    <script type="text/javascript" src="plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="plugins/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>
    <script type="text/javascript" src="plugins/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="plugins/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="plugins/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="plugins/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="plugins/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="plugins/rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="plugins/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>

    <script type="text/javascript" src="bower_components/bootstrap/dist/js/bootstrap.js"/>

    <script type="text/javascript">
    function revslider_showDoubleJqueryError(sliderID) {
      var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
      errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
      errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option: <strong><b>Put JS Includes To Body</b></strong> option to true.";
      errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
      errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>"
      jQuery(sliderID).show().html(errorMessage);
    }

    var tpj = jQuery;
    var revapi1;
    tpj(document).ready(function() {
      if (tpj("#rev_slider_1_2").revolution == undefined) {
        revslider_showDoubleJqueryError("#rev_slider_1_2");
      } else {
        revapi1 = tpj("#rev_slider_1_2").show().revolution({
          sliderType: "hero",
          sliderLayout: "fullwidth",
          dottedOverlay: "none",
          delay: 9000,
          navigation: {},
          responsiveLevels: [1240, 1024, 778, 480],
          gridwidth: [1400, 1024, 778, 480],
          gridheight: [680, 700, 500, 500],
          lazyType: "smart",
          parallax: {
            type: "mouse",
            origo: "slidercenter",
            speed: 2000,
            levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
          },
          shadow: 0,
          spinner: "off",
          autoHeight: "off",
          disableProgressBar: "on",
          hideThumbsOnMobile: "on",
          hideSliderAtLimit: 0,
          hideCaptionAtLimit: 0,
          hideAllCaptionAtLilmit: 0,
          debugMode: false,
          fallbacks: {
            simplifyAll: "off",
            disableFocusListener: false,
          }
        });
      }
    });
    /*]]>*/
    </script>
    <script>
    jQuery(window).load(function() {
      var retina = window.devicePixelRatio > 1 ? true : false;
      if (retina) {
        var retinaEl = jQuery("#logo img.logo-main");
        var retinaLogoW = retinaEl.width();
        var retinaLogoH = retinaEl.height();
        retinaEl.attr("src", "content/buddy/images/retina-buddy.png").width(retinaLogoW).height(retinaLogoH);
        var stickyEl = jQuery("#logo img.logo-sticky");
        var stickyLogoW = stickyEl.width();
        var stickyLogoH = stickyEl.height();
        stickyEl.attr("src", "content/buddy/images/retina-buddy.png").width(stickyLogoW).height(stickyLogoH);
        var mobileEl = jQuery("#logo img.logo-mobile");
        var mobileLogoW = mobileEl.width();
        var mobileLogoH = mobileEl.height();
        mobileEl.attr("src", "content/buddy/images/retina-buddy.png").width(mobileLogoW).height(mobileLogoH);
      }
    });
    </script>

  </body>
</html>
