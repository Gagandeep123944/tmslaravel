<div class="body-wrapper  gdlr-icon-dark gdlr-header-transparent" data-home="https://timezonehostel.com">
  <header class="gdlr-header-wrapper">
    <!-- top navigation -->
    <!-- logo -->
    <div class="gdlr-header-inner">
      <div class="gdlr-header-inner-overlay"></div>
      <div class="gdlr-header-container container">
        <!-- logo -->
        <div class="gdlr-logo">
          <div class="gdlr-logo-inner">
            <a href="https://timezonehostel.com">
            <a href="https://timezonehostel.com" class="gdlr-responsive-navigation dl-menuwrapper" id="gdlr-responsive-navigation">
            <button class="dl-trigger">Open Menu</button>
            </a>
          </div>
        </div>
        <!-- navigation -->
        <div class="gdlr-navigation-wrapper">
          <nav class="gdlr-navigation sf-js-enabled sf-arrows" id="gdlr-main-navigation" role="navigation">
            <ul id="menu-main-1" class="sf-menu gdlr-main-menu">
              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-3720 current_page_item menu-item-4245menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-3720 current_page_item menu-item-4245 gdlr-normal-menu"><a href="/">Home</a></li>
              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4247menu-item menu-item-type-post_type menu-item-object-page menu-item-4247 gdlr-normal-menu"><a href="https://timezonehostel.com/rooms/">Rooms</a></li>
              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-4347menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-4347 gdlr-normal-menu">
                <a href="https://timezonehostel.com/services-facilities/" class="sf-with-ul-pre sf-with-ul">Services &amp; Facilities</a>
                <ul class="sub-menu" style="display: none;">
                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4515"><a href="https://timezonehostel.com/cafe/">Cafe</a></li>
                </ul>
              </li>
              @if (!auth()->check())
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4495 gdlr-normal-menu">
                  <a href="/register">Login/Register</a>
                </li>
              @endif

              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4249menu-item menu-item-type-post_type menu-item-object-page menu-item-4249 gdlr-normal-menu"><a href="/about-us">About Us</a></li>
              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4252menu-item menu-item-type-post_type menu-item-object-page menu-item-4252 gdlr-normal-menu"><a href="/contact">Contact Us</a></li>
              <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4510menu-item menu-item-type-custom menu-item-object-custom menu-item-4510 gdlr-normal-menu"><a title="Facebook" href="https://www.facebook.com/Timezonehostelhollywood/"><i class="fa fa-facebook-square"></i>Facebook</a></li>
              <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4511menu-item menu-item-type-custom menu-item-object-custom menu-item-4511 gdlr-normal-menu"><a title="Twitter" href="https://twitter.com/timezonehostel"><i class="fa fa-twitter-square"></i>Twitter</a></li>
              <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4512menu-item menu-item-type-custom menu-item-object-custom menu-item-4512 gdlr-normal-menu"><a title="Instagram" href="https://www.instagram.com/Timezonehostelhollywood/"><i class="fa fa-instagram"></i>Instagram</a></li>
            </ul>

            @if (auth()->check())
          <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">Logout</button>
          </form>
          @endif
          </nav>
          <span class="gdlr-menu-search-button-sep">•</span>
          <i class="fa fa-search icon-search gdlr-menu-search-button" id="gdlr-menu-search-button"></i>
          
          <div class="gdlr-navigation-gimmick " id="gdlr-navigation-gimmick" style="width: 39px; left: 404.703px; top: 80px; overflow: hidden;"></div>
          <div class="clear"></div>
        </div>
        <div class="clear"></div>
      </div>
    </div>
  </header>
  <div id="gdlr-header-substitute"></div>
  <!-- is search -->	
  <div class="content-wrapper">
    <div class="gdlr-content">
      <div class="with-sidebar-wrapper">
        <section id="content-reservations">
          <!--     CONTENT HERE       -->
        </section>
      </div>
    </div>
    <div class="clear"></div>
  </div>
