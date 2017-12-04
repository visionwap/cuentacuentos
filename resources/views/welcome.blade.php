@extends('layouts.app')
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

  <!-- Revolution Slider -->
  <link rel="stylesheet" href="plugins/rs-plugin/css/settings.css">

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
                  <a id="logo" href="" title="BeBuddy - BeTheme"> <img class=" scale-with-grid" src="content/buddy/images/buddy.png" alt="BeBuddy - BeTheme" /> </a>
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
                                          <a href="{{ route('home') }}"><span><i class="icon-picture"></i> Mis cuentos</span></a>
                                      </li>
                                      <li>
                                          <a href="{{ route('home') }}"><span><i class="icon-heart-empty-fa"></i> Mis favoritos</span></a>
                                      </li>
                                      <li>
                                          <a href="{{ route('home') }}"><span><i class="icon-users"></i> De mis amigos</span></a>
                                      </li>
                                      <li>
                                          <a href="{{ route('home') }}"><span><i class="icon-check"></i> Mis revisiones</span></a>
                                      </li>
                                  </ul>
                              </li>
                              <li class="mfn-megamenu-cols-3">
                                  <ul class="sub-menu mfn-megamenu mfn-megamenu-3">
                                      <li>
                                          <a href="{{ route('home') }}"><span><i class="icon-traffic-cone"></i> Terror</span></a>
                                      </li>
                                      <li>
                                          <a href="features.html"><span><i class="icon-star-empty"></i> Infantil</span></a>
                                      </li>
                                      <li>
                                          <a href="gallery.html"><span><i class="icon-picture"></i> Suspenso</span></a>
                                      </li>
                                      <li>
                                          <a href="blank-page.html"><span><i class="icon-doc"></i> Romance</span></a>
                                      </li>
                                  </ul>
                              </li>
                              <li class="mfn-megamenu-cols-3">
                                  <ul class="sub-menu mfn-megamenu mfn-megamenu-3">
                                      <li>
                                          <a href="help-center.html"><span><i class="icon-lifebuoy"></i> Aventura</span></a>
                                      </li>
                                      <li>
                                          <a href="how-it-works.html"><span><i class="icon-graduation-cap"></i> Fantasticos</span></a>
                                      </li>
                                      <li>
                                          <a href="our-team.html"><span><i class="icon-users"></i> Historicos</span></a>
                                      </li>
                                      <li>
                                          <a href="blog-sidebar-classic.html"><span><i class="icon-comment-fa"></i> Animales</span></a>
                                      </li>
                                  </ul>
                              </li>
                          </ul>
                      </li>
                      <li>
                        <a href="#"><span>Comunidad</span></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{ route('home') }}"><span><i class="icon-follow"></i> Los mas seguidos</span></a>
                            </li>
                            <li>
                                <a href="{{ route('home') }}"><span>Los mas recientes</span></a>
                            </li>
                            <li>
                                <a href="{{ route('home') }}"><span>En línea</span></a>
                            </li>
                            <li>
                                <a href="{{ route('home') }}"><span>Mis amigos</span></a>
                            </li>
                            <li>
                                <a href="{{ route('home') }}"><span>Siguiendo</span></a>
                            </li>
                            <li>
                                <a href="{{ route('home') }}"><span>Buscar</span></a>
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
                  <a id="search_button" href="#"><i class="icon-search"></i></a><a href="#" class="button button_theme button_js action_button "><span class="button_label">Sign in</span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Revolution slider area-->
        <div class="mfn-main-slider" id="mfn-rev-slider">
          <div id="rev_slider_1_2_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
            <div id="rev_slider_1_2" class="rev_slider fullwidthabanner" data-version="5.0.6">
              <ul>
                <li data-index="rs-2" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="content/buddy/images/home_buddy_slider-100x50.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-description="">
                  <img src="plugins/rs-plugin/assets/images/dummy.png " alt="" width="1920" height="710" data-lazyload="content/buddy/images/home_buddy_slider.jpg" data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                  <div class="tp-caption mfnrs_buddy_large_dark tp-resizeme rs-parallaxlevel-0" id="slide-2-layer-1" data-x="['center','center','center','center']" data-hoffset="['310','238','0','0']" data-y="['middle','middle','top','top']" data-voffset="['-121','-137','80','80']" data-fontsize="['70','50','50','50']" data-lineheight="['70','50','50','50']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: nowrap;">
                    Welcome
                    <br /> to our society
                  </div>
                  <div class="tp-caption mfnrs_buddy_medium_dark tp-resizeme rs-parallaxlevel-0" id="slide-2-layer-2" data-x="['center','center','center','center']" data-hoffset="['381','244','0','0']" data-y="['middle','middle','top','top']" data-voffset="['39','6','200','200']" data-fontsize="['22','18','18','18']" data-lineheight="['36','28','28','28']" data-width="['550','300','300','300']" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; min-width: 550px; max-width: 550px; white-space: normal;">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                  </div>
                  <div class="tp-caption mfnrs_buddy_button tp-resizeme rs-parallaxlevel-0" id="slide-2-layer-3" data-x="['center','center','center','center']" data-hoffset="['212','206','-39','-39']" data-y="['middle','middle','top','top']" data-voffset="['167','136','360','360']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:0;e:Linear.easeNone;" data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(66, 169, 80, 1.00);" data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="500" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"simplelink","target":"_self","url":"#"}]' data-responsive_offset="on" style="z-index: 7; white-space: nowrap;border-width:0px;">
                    Sign up for free
                  </div>
                  <div class="tp-caption tp-resizeme rs-parallaxlevel-0" id="slide-2-layer-4" data-x="['center','center','center','center']" data-hoffset="['-340','-340','0','0']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['-100','-100','-190','-190']" data-width="none" data-height="none" data-whitespace="nowrap" data-visibility="['on','on','off','off']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="500" data-responsive_offset="on" style="z-index: 8;"><img src="plugins/rs-plugin/assets/images/dummy.png " alt="" width="706" height="750" data-ww="['706px','706px','706px','706px']" data-hh="['750px','750px','750px','750px']" data-lazyload="content/buddy/images/home_buddy_slider_pic.png" data-no-retina>
                  </div>
                </li>
              </ul>
              <div class="tp-bannertimer tp-bottom flv_viz_hid"></div>
            </div>
          </div>
        </div>
      </header>
    </div>
    <!-- Main Content -->
    <div id="Content">
      <div class="content_wrapper clearfix">
        <div class="sections_group">
          <div class="entry-content">
            <div class="section section-border-bottom " style="padding-top:60px; padding-bottom:20px; background-color:#f2f5f7">
              <div class="section_wrapper clearfix">
                <div class="items_group clearfix">
                  <!-- One Third (1/3) Column -->
                  <div class="column one-third column_icon_box buddy_icon_box">
                    <div class="icon_box icon_position_left no_border">
                      <a class="" href="#">
                        <div class="image_wrapper"><img src="content/buddy/images/home_buddy_iconbox1.png" alt="Manage your profile" class="scale-with-grid" width="80" height="80" />
                        </div>
                        <div class="desc_wrapper">
                          <h4>Manage your profile</h4>
                          <div class="desc">
                            Nam finibus mauris erat ac dapibus
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <!-- One Third (1/3) Column -->
                  <div class="column one-third column_icon_box buddy_icon_box">
                    <div class="icon_box icon_position_left no_border">
                      <a class="" href="#">
                        <div class="image_wrapper"><img src="content/buddy/images/home_buddy_iconbox2.png" alt="Share your pashion" class="scale-with-grid" width="80" height="80" />
                        </div>
                        <div class="desc_wrapper">
                          <h4>Share your pashion</h4>
                          <div class="desc">
                            Cras eleifend dignissim mauris non
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <!-- One Third (1/3) Column -->
                  <div class="column one-third column_icon_box buddy_icon_box">
                    <div class="icon_box icon_position_left no_border">
                      <a class="" href="#">
                        <div class="image_wrapper"><img src="content/buddy/images/home_buddy_iconbox3.png" alt="Create new things" class="scale-with-grid" width="80" height="80" />
                        </div>
                        <div class="desc_wrapper">
                          <h4>Create new things</h4>
                          <div class="desc">
                            Maecenas purus massa dictum
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="section sections_style_3">
              <div class="section_wrapper clearfix">
                <div class="items_group clearfix">
                  <!-- One Fourth (1/4) Column -->
                  <div class="column one-fourth column_sidebar_widget ">
                    <aside id="bp_core_login_widget-5" class="widget widget_bp_core_login_widget buddypress widget">
                      <h3>Login</h3>
                      <form name="bp-login-form" id="bp-login-widget-form" class="standard-form" action="#">
                        <label for="bp-login-widget-user-login">Username</label>
                        <input type="text" name="log" id="bp-login-widget-user-login" class="input" value="" />
                        <label for="bp-login-widget-user-pass">Password</label>
                        <input type="password" name="pwd" id="bp-login-widget-user-pass" class="input" value="" spellcheck="false" autocomplete="off" />
                        <div class="forgetmenot">
                          <label>
                            <input name="rememberme" type="checkbox" id="bp-login-widget-rememberme" value="forever" /> Remember Me</label>
                          </div>
                          <input type="submit" name="wp-submit" id="bp-login-widget-submit" value="Log In" />
                        </form>
                      </aside>
                      <aside id="bp_core_members_widget-4" class="widget widget_bp_core_members_widget buddypress widget">
                        <h3>Members</h3>
                        <div class="item-options" id="members-list-options">
                          <a href="content/buddy/members.html" id="newest-members">Newest</a> | <a href="content/buddy/members.html" id="recently-active-members" class="selected">Active</a>
                        </div>
                        <ul id="members-list" class="item-list">
                          <li class="vcard">
                            <div class="item-avatar">
                              <a href="content/buddy/member-activity.html" title="admin"><img src="content/buddy/images/avatar.jpg" class="avatar user-1-avatar avatar-50 photo" width="50" height="50" alt="Profile picture of admin" />
                              </a>
                            </div>
                            <div class="item">
                              <div class="item-title fn">
                                <a href="content/buddy/member-activity.html" title="admin">admin</a>
                              </div>
                              <div class="item-meta">
                                <span class="activity">active 19 minutes ago</span>
                              </div>
                            </div>
                          </li>
                          <li class="vcard">
                            <div class="item-avatar">
                              <a href="content/buddy/member-profile.html" title="Wynonna Judd"><img src="content/buddy/images/avatar.jpg" class="avatar user-16-avatar avatar-50 photo" width="50" height="50" alt="Profile picture of Wynonna Judd" />
                              </a>
                            </div>
                            <div class="item">
                              <div class="item-title fn">
                                <a href="content/buddy/member-profile.html" title="Wynonna Judd">Wynonna Judd</a>
                              </div>
                              <div class="item-meta">
                                <span class="activity">active 1 month, 1 week ago</span>
                              </div>
                            </div>
                          </li>
                          <li class="vcard">
                            <div class="item-avatar">
                              <a href="content/buddy/member-profile.html" title="Monta Ellis"><img src="content/buddy/images/avatar.jpg" class="avatar user-9-avatar avatar-50 photo" width="50" height="50" alt="Profile picture of Monta Ellis" />
                              </a>
                            </div>
                            <div class="item">
                              <div class="item-title fn">
                                <a href="content/buddy/member-profile.html" title="Monta Ellis">Monta Ellis</a>
                              </div>
                              <div class="item-meta">
                                <span class="activity">active 1 month, 1 week ago</span>
                              </div>
                            </div>
                          </li>
                          <li class="vcard">
                            <div class="item-avatar">
                              <a href="content/buddy/member-profile.html" title="Kiki Cuyler"><img src="content/buddy/images/avatar.jpg" class="avatar user-4-avatar avatar-50 photo" width="50" height="50" alt="Profile picture of Kiki Cuyler" />
                              </a>
                            </div>
                            <div class="item">
                              <div class="item-title fn">
                                <a href="content/buddy/member-profile.html" title="Kiki Cuyler">Kiki Cuyler</a>
                              </div>
                              <div class="item-meta">
                                <span class="activity">active 1 month, 1 week ago</span>
                              </div>
                            </div>
                          </li>
                          <li class="vcard">
                            <div class="item-avatar">
                              <a href="content/buddy/member-profile.html" title="Ron Faucheux"><img src="content/buddy/images/avatar.jpg" class="avatar user-7-avatar avatar-50 photo" width="50" height="50" alt="Profile picture of Ron Faucheux" />
                              </a>
                            </div>
                            <div class="item">
                              <div class="item-title fn">
                                <a href="content/buddy/member-profile.html" title="Ron Faucheux">Ron Faucheux</a>
                              </div>
                              <div class="item-meta">
                                <span class="activity">active 1 month, 1 week ago</span>
                              </div>
                            </div>
                          </li>
                        </ul>
                        <input type="hidden" id="_wpnonce-members" name="_wpnonce-members" value="743b80a2cf" />
                        <input type="hidden" name="members_widget_max" id="members_widget_max" value="5" />
                      </aside>
                      <aside id="bp_core_recently_active_widget-4" class="widget widget_bp_core_recently_active_widget buddypress widget">
                        <h3>Recently Active Members</h3>
                        <div class="avatar-block">
                          <div class="item-avatar">
                            <a href="content/buddy/member-activity.html" title="admin"><img src="content/buddy/images/avatar.jpg" class="avatar user-1-avatar avatar-50 photo" width="50" height="50" alt="Profile picture of admin" />
                            </a>
                          </div>
                          <div class="item-avatar">
                            <a href="content/buddy/member-profile.html" title="Wynonna Judd"><img src="content/buddy/images/avatar.jpg" class="avatar user-16-avatar avatar-50 photo" width="50" height="50" alt="Profile picture of Wynonna Judd" />
                            </a>
                          </div>
                          <div class="item-avatar">
                            <a href="content/buddy/member-profile.html" title="Monta Ellis"><img src="content/buddy/images/avatar.jpg" class="avatar user-9-avatar avatar-50 photo" width="50" height="50" alt="Profile picture of Monta Ellis" />
                            </a>
                          </div>
                          <div class="item-avatar">
                            <a href="content/buddy/member-profile.html" title="Kiki Cuyler"><img src="content/buddy/images/avatar.jpg" class="avatar user-4-avatar avatar-50 photo" width="50" height="50" alt="Profile picture of Kiki Cuyler" />
                            </a>
                          </div>
                          <div class="item-avatar">
                            <a href="content/buddy/member-profile.html" title="Ron Faucheux"><img src="content/buddy/images/avatar.jpg" class="avatar user-7-avatar avatar-50 photo" width="50" height="50" alt="Profile picture of Ron Faucheux" />
                            </a>
                          </div>
                          <div class="item-avatar">
                            <a href="content/buddy/member-profile.html" title="Thomas Carew"><img src="content/buddy/images/avatar.jpg" class="avatar user-18-avatar avatar-50 photo" width="50" height="50" alt="Profile picture of Thomas Carew" />
                            </a>
                          </div>
                          <div class="item-avatar">
                            <a href="content/buddy/member-profile.html" title="Jason Chaffetz"><img src="content/buddy/images/avatar.jpg" class="avatar user-19-avatar avatar-50 photo" width="50" height="50" alt="Profile picture of Jason Chaffetz" />
                            </a>
                          </div>
                          <div class="item-avatar">
                            <a href="content/buddy/member-profile.html" title="Andre Dubus"><img src="content/buddy/images/avatar.jpg" class="avatar user-24-avatar avatar-50 photo" width="50" height="50" alt="Profile picture of Andre Dubus" />
                            </a>
                          </div>
                          <div class="item-avatar">
                            <a href="content/buddy/member-profile.html" title="Ralph Fiennes"><img src="content/buddy/images/avatar.jpg" class="avatar user-11-avatar avatar-50 photo" width="50" height="50" alt="Profile picture of Ralph Fiennes" />
                            </a>
                          </div>
                          <div class="item-avatar">
                            <a href="content/buddy/member-profile.html" title="Dan Cortese"><img src="content/buddy/images/avatar.jpg" class="avatar user-22-avatar avatar-50 photo" width="50" height="50" alt="Profile picture of Dan Cortese" />
                            </a>
                          </div>
                          <div class="item-avatar">
                            <a href="content/buddy/member-profile.html" title="Shan Foster"><img src="content/buddy/images/avatar.jpg" class="avatar user-13-avatar avatar-50 photo" width="50" height="50" alt="Profile picture of Shan Foster" />
                            </a>
                          </div>
                          <div class="item-avatar">
                            <a href="content/buddy/member-profile.html" title="MaliVai Washington"><img src="content/buddy/images/avatar.jpg" class="avatar user-5-avatar avatar-50 photo" width="50" height="50" alt="Profile picture of MaliVai Washington" />
                            </a>
                          </div>
                          <div class="item-avatar">
                            <a href="content/buddy/member-profile.html" title="Michellie Jones"><img src="content/buddy/images/avatar.jpg" class="avatar user-8-avatar avatar-50 photo" width="50" height="50" alt="Profile picture of Michellie Jones" />
                            </a>
                          </div>
                          <div class="item-avatar">
                            <a href="content/buddy/member-profile.html" title="Picabo Street"><img src="content/buddy/images/avatar.jpg" class="avatar user-10-avatar avatar-50 photo" width="50" height="50" alt="Profile picture of Picabo Street" />
                            </a>
                          </div>
                          <div class="item-avatar">
                            <a href="content/buddy/member-profile.html" title="Stephen Curry"><img src="content/buddy/images/avatar.jpg" class="avatar user-15-avatar avatar-50 photo" width="50" height="50" alt="Profile picture of Stephen Curry" />
                            </a>
                          </div>
                        </div>
                      </aside>
                    </div>
                    <!-- One Second (1/2) Column -->
                    <div class="column one-second column_column ">
                      <div class="column_attr">
                        <h2 class="hrmargin_b_30">See the latest activity</h2>
                        <div class="my_activity">
                          <ul class="my_activity-ul">
                            <li>
                              <div class="bc_avatar">
                                <a href="content/buddy/member-profile.html"><img src="content/buddy/images/avatar.jpg" class="avatar user-3-avatar avatar-50 photo" width="50" height="50" alt="Profile Photo" />
                                </a>
                              </div>
                              <div class="activity-infos">
                                <div class="activity-action">
                                  <p>
                                    <a href="content/buddy/member-profile.html" title="Chynna Phillips">Chynna Phillips</a> posted an update <a href="content/buddy/member-activity.html" class="view activity-time-since" title="View Discussion"><span class="time-since">1 month, 1 week ago</span></a>
                                  </p>
                                </div>
                                <div class="activity-content">
                                  <p>
                                    I think &#8216;Hail to the Chief&#8217; has a nice ring to it. (John F. Kennedywhen asked what is his favorite song)
                                  </p>
                                  <p>&nbsp;

                                  </p>
                                  <p><img class="scale-with-grid" src="content/buddy/images/home_buddy_activity1.jpg" alt="" />
                                  </p>
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="bc_avatar">
                                <a href="content/buddy/member-profile.html"><img src="content/buddy/images/avatar.jpg" class="avatar user-18-avatar avatar-50 photo" width="50" height="50" alt="Profile Photo" />
                                </a>
                              </div>
                              <div class="activity-infos">
                                <div class="activity-action">
                                  <p>
                                    <a href="content/buddy/member-profile.html" title="Thomas Carew">Thomas Carew</a> posted an update <a href="content/buddy/member-activity.html" class="view activity-time-since" title="View Discussion"><span class="time-since">1 month, 1 week ago</span></a>
                                  </p>
                                </div>
                                <div class="activity-content">
                                  <p>
                                    The fundamental cause of trouble in the world is that the stupid are cocksure while the intelligent are full of doubt. (Bertrand Russell)
                                  </p>
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="bc_avatar">
                                <a href="content/buddy/member-profile.html"><img src="content/buddy/images/avatar.jpg" class="avatar user-5-avatar avatar-50 photo" width="50" height="50" alt="Profile Photo" />
                                </a>
                              </div>
                              <div class="activity-infos">
                                <div class="activity-action">
                                  <p>
                                    <a href="content/buddy/member-profile.html" title="MaliVai Washington">MaliVai Washington</a> posted an update <a href="content/buddy/member-activity.html" class="view activity-time-since" title="View Discussion"><span class="time-since">1 month, 1 week ago</span></a>
                                  </p>
                                </div>
                                <div class="activity-content">
                                  <p>&nbsp;

                                  </p>
                                  <p><img class="scale-with-grid" src="content/buddy/images/home_buddy_activity2.jpg" alt="" />
                                  </p>
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="bc_avatar">
                                <a href="content/buddy/member-profile.html"><img src="content/buddy/images/avatar.jpg" class="avatar user-17-avatar avatar-50 photo" width="50" height="50" alt="Profile Photo" />
                                </a>
                              </div>
                              <div class="activity-infos">
                                <div class="activity-action">
                                  <p>
                                    <a href="content/buddy/member-profile.html" title="John Caius">John Caius</a> posted an update <a href="content/buddy/member-activity.html" class="view activity-time-since" title="View Discussion"><span class="time-since">1 month, 1 week ago</span></a>
                                  </p>
                                </div>
                                <div class="activity-content">
                                  <p>
                                    Women might be able to fake orgasms. But men can fake a whole relationship. (Sharon Stone)
                                  </p>
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="bc_avatar">
                                <a href="content/buddy/member-profile.html"><img src="content/buddy/images/avatar.jpg" class="avatar user-26-avatar avatar-50 photo" width="50" height="50" alt="Profile Photo" />
                                </a>
                              </div>
                              <div class="activity-infos">
                                <div class="activity-action">
                                  <p>
                                    <a href="content/buddy/member-profile.html" title="Keir Dullea">Keir Dullea</a> posted an update <a href="content/buddy/member-activity.html" class="view activity-time-since" title="View Discussion"><span class="time-since">1 month, 1 week ago</span></a>
                                  </p>
                                </div>
                                <div class="activity-content">
                                  <p>
                                    Everybody pities the weak; jealousy you have to earn. (Arnold Schwarzenegger)
                                  </p>
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="bc_avatar">
                                <a href="content/buddy/member-profile.html"><img src="content/buddy/images/avatar.jpg" class="avatar user-21-avatar avatar-50 photo" width="50" height="50" alt="Profile Photo" />
                                </a>
                              </div>
                              <div class="activity-infos">
                                <div class="activity-action">
                                  <p>
                                    <a href="content/buddy/member-profile.html" title="Cecelia Cichan">Cecelia Cichan</a> posted an update <a href="content/buddy/member-activity.html" class="view activity-time-since" title="View Discussion"><span class="time-since">1 month, 1 week ago</span></a>
                                  </p>
                                </div>
                                <div class="activity-content">
                                  <p>
                                    <iframe src="https://player.vimeo.com/video/139601645" width="1200" height="675" title="De Jeugd Van Tegenwoordig - Manon" allowfullscreen></iframe>
                                  </p>
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="bc_avatar">
                                <a href="content/buddy/member-profile.html"><img src="content/buddy/images/avatar.jpg" class="avatar user-12-avatar avatar-50 photo" width="50" height="50" alt="Profile Photo" />
                                </a>
                              </div>
                              <div class="activity-infos">
                                <div class="activity-action">
                                  <p>
                                    <a href="content/buddy/member-profile.html" title="Seamus">Seamus</a> posted an update <a href="content/buddy/member-activity.html" class="view activity-time-since" title="View Discussion"><span class="time-since">1 month, 1 week ago</span></a>
                                  </p>
                                </div>
                                <div class="activity-content">
                                  <p>
                                    If a man does his best, what else is there? (General George S. Patton)
                                  </p>
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="bc_avatar">
                                <a href="content/buddy/member-profile.html"><img src="content/buddy/images/avatar.jpg" class="avatar user-6-avatar avatar-50 photo" width="50" height="50" alt="Profile Photo" />
                                </a>
                              </div>
                              <div class="activity-infos">
                                <div class="activity-action">
                                  <p>
                                    <a href="content/buddy/member-profile.html" title="Matraca Berg">Matraca Berg</a> posted an update <a href="content/buddy/member-activity.html" class="view activity-time-since" title="View Discussion"><span class="time-since">1 month, 1 week ago</span></a>
                                  </p>
                                </div>
                                <div class="activity-content">
                                  <p>
                                    <iframe src="https://player.vimeo.com/video/135249727" width="1200" height="675" title="Le petit cordonnier (2015)" allowfullscreen></iframe>
                                  </p>
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="bc_avatar">
                                <a href="content/buddy/member-profile.html"><img src="content/buddy/images/avatar.jpg" class="avatar user-4-avatar avatar-50 photo" width="50" height="50" alt="Profile Photo" />
                                </a>
                              </div>
                              <div class="activity-infos">
                                <div class="activity-action">
                                  <p>
                                    <a href="content/buddy/member-profile.html" title="Kiki Cuyler">Kiki Cuyler</a> posted an update <a href="content/buddy/member-activity.html" class="view activity-time-since" title="View Discussion"><span class="time-since">1 month, 1 week ago</span></a>
                                  </p>
                                </div>
                                <div class="activity-content">
                                  <p>
                                    The power of accurate observation is frequently called cynicism by those who don&#8217;t have it. (George Bernard Shaw)
                                  </p>
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="bc_avatar">
                                <a href="content/buddy/member-profile.html"><img src="content/buddy/images/avatar.jpg" class="avatar user-9-avatar avatar-50 photo" width="50" height="50" alt="Profile Photo" />
                                </a>
                              </div>
                              <div class="activity-infos">
                                <div class="activity-action">
                                  <p>
                                    <a href="content/buddy/member-profile.html" title="Monta Ellis">Monta Ellis</a> posted an update <a href="content/buddy/member-activity.html" class="view activity-time-since" title="View Discussion"><span class="time-since">1 month, 1 week ago</span></a>
                                  </p>
                                </div>
                                <div class="activity-content">
                                  <p>
                                    There are no facts, only interpretations. (Friedrich Nietzsche)
                                  </p>
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="bc_avatar">
                                <a href="content/buddy/member-activity.html"><img src="content/buddy/images/avatar.jpg" class="avatar user-1-avatar avatar-50 photo" width="50" height="50" alt="Profile Photo" />
                                </a>
                              </div>
                              <div class="activity-infos">
                                <div class="activity-action">
                                  <p>
                                    <a href="content/buddy/member-activity.html" title="admin">admin</a> posted an update <a href="content/buddy/member-activity.html" class="view activity-time-since" title="View Discussion"><span class="time-since">1 month, 1 week ago</span></a>
                                  </p>
                                </div>
                                <div class="activity-content">
                                  <p>
                                    Life is pleasant.Death is peaceful.It&#8217;s the transition that&#8217;s troublesome. (Isaac Asimov)
                                  </p>
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="bc_avatar">
                                <a href="content/buddy/member-profile.html"><img src="content/buddy/images/avatar.jpg" class="avatar user-24-avatar avatar-50 photo" width="50" height="50" alt="Profile Photo" />
                                </a>
                              </div>
                              <div class="activity-infos">
                                <div class="activity-action">
                                  <p>
                                    <a href="content/buddy/member-profile.html" title="Andre Dubus">Andre Dubus</a> posted an update <a href="content/buddy/member-activity.html" class="view activity-time-since" title="View Discussion"><span class="time-since">1 month, 1 week ago</span></a>
                                  </p>
                                </div>
                                <div class="activity-content">
                                  <p>
                                    I can write better than anybody who can write faster, and I can write faster than anybody who can write better. (A. J. Liebling)
                                  </p>
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="bc_avatar">
                                <a href="content/buddy/member-profile.html"><img src="content/buddy/images/avatar.jpg" class="avatar user-22-avatar avatar-50 photo" width="50" height="50" alt="Profile Photo" />
                                </a>
                              </div>
                              <div class="activity-infos">
                                <div class="activity-action">
                                  <p>
                                    <a href="content/buddy/member-profile.html" title="Dan Cortese">Dan Cortese</a> posted an update <a href="content/buddy/member-activity.html" class="view activity-time-since" title="View Discussion"><span class="time-since">1 month, 1 week ago</span></a>
                                  </p>
                                </div>
                                <div class="activity-content">
                                  <p>
                                    <iframe src="https://player.vimeo.com/video/128947850" width="1200" height="675" title="Opiuo - Quack Fat" allowfullscreen></iframe>
                                  </p>
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="bc_avatar">
                                <a href="content/buddy/member-profile.html"><img src="content/buddy/images/avatar.jpg" class="avatar user-11-avatar avatar-50 photo" width="50" height="50" alt="Profile Photo" />
                                </a>
                              </div>
                              <div class="activity-infos">
                                <div class="activity-action">
                                  <p>
                                    <a href="content/buddy/member-profile.html" title="Ralph Fiennes">Ralph Fiennes</a> posted an update <a href="content/buddy/member-activity.html" class="view activity-time-since" title="View Discussion"><span class="time-since">1 month, 1 week ago</span></a>
                                  </p>
                                </div>
                                <div class="activity-content">
                                  <p>
                                    Many wealthy people are little more than janitors of their possessions. (Frank Lloyd Wright)
                                  </p>
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="bc_avatar">
                                <a href="content/buddy/member-profile.html"><img src="content/buddy/images/avatar.jpg" class="avatar user-24-avatar avatar-50 photo" width="50" height="50" alt="Profile Photo" />
                                </a>
                              </div>
                              <div class="activity-infos">
                                <div class="activity-action">
                                  <p>
                                    <a href="content/buddy/member-profile.html" title="Andre Dubus">Andre Dubus</a> posted an update <a href="content/buddy/member-activity.html" class="view activity-time-since" title="View Discussion"><span class="time-since">1 month, 1 week ago</span></a>
                                  </p>
                                </div>
                                <div class="activity-content">
                                  <p>
                                    Whether you think that you can, or that you can&#8217;t, you are usually right. (Henry Ford)
                                  </p>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!-- One Fourth (1/4) Column -->
                    <div class="column one-fourth column_sidebar_widget ">
                      <!-- Text Area -->
                      <aside id="text-2" class="widget widget_text">
                        <div class="textwidget">
                          <div style="text-align: center;">
                            <a href="#"><img src="content/buddy/images/home_buddy_join.png" class="scale-with-grid" alt="" />
                            </a>
                          </div>
                        </div>
                      </aside>
                      <!-- Text Area -->
                      <aside id="text-4" class="widget widget_text">
                        <div class="textwidget">
                          <div style="text-align: center;">
                            <a href="#"><img src="content/buddy/images/home_buddy_banner.png" class="scale-with-grid" alt="" />
                            </a>
                          </div>
                        </div>
                      </aside>
                    </div>
                  </div>
                </div>
              </div>
              <div class="section " style="padding-top:120px; padding-bottom:70px; background-color:; background-image:url(content/buddy/images/home_buddy_footer.jpg); background-repeat:no-repeat; background-position:center; ">
                <div class="section_wrapper clearfix">
                  <div class="items_group clearfix">
                    <!-- One full width row-->
                    <div class="column one column_column ">
                      <div class="column_attr align_center">
                        <h2 style="color: #fff; font-size: 65px; line-height: 65px;">Join over 1 000 000 members</h2>
                        <hr class="no_line hrmargin_b_30" />
                        <a class="button button_large button_js" href="#" style=" background-color:#55bf64 !important; color:#ffffff;"><span class="button_label">Sign up for free</span></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="section the_content no_content">
                <div class="section_wrapper">
                  <div class="the_content_wrapper"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
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
                &copy; 2015 BeBuddy - BeTheme. Muffin group - HTML by <a target="_blank" rel="nofollow" href="http://themeforest.net/item/betheme-html-responsive-multipurpose-template/13925633?ref=beantownthemes">BeantownThemes</a>
              </div>
              <!--Social info area-->
              <ul class="social"></ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- JS -->

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
