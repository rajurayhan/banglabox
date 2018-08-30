
  
  <!-- Sidenav -->    
  <header class="sidenav" id="sidenav">

    <!-- close -->
    <div class="sidenav__close">
      <button class="sidenav__close-button" id="sidenav__close-button" aria-label="close sidenav">
        <i class="ui-close sidenav__close-icon"></i>
      </button>
    </div>
    
    <!-- Nav -->
    <nav class="sidenav__menu-container">
      <ul class="sidenav__menu" role="menubar">
        <li>
          <a href="{{ route('home') }}" class="sidenav__menu-url">হোম</a>
        </li>
        <!-- Categories -->
        <?php
          use App\Category;
          $navObj  = new Category();
          $navs    = $navObj->get();

          $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        //   echo $actual_link;
          $parts = explode("/", $actual_link);
          $slug  =  end($parts);
        ?>
        @foreach($navs as $nav)
        <li>
          <a href="{{ route('categoryArticles', $nav->slug) }}" class="sidenav__menu-url">{{ $nav->name }} </a>
        </li>
        @endforeach
      </ul>
    </nav>

    <div class="socials sidenav__socials"> 
      <a class="social social-facebook" href="https://facebook.com/{{ $settingsAttr->facebook }}" target="_blank" aria-label="facebook">
        <i class="ui-facebook"></i>
      </a>
      <a class="social social-twitter" href="https://twitter.com/{{ $settingsAttr->twitter }}" target="_blank" aria-label="twitter">
        <i class="ui-twitter"></i>
      </a>
      <a class="social social-google-plus" href="https://plus.google.com/+{{ $settingsAttr->google_plus }}" target="_blank" aria-label="google">
        <i class="ui-google"></i>
      </a>
      <a class="social social-youtube" href="https://youtube.com/channel/{{ $settingsAttr->youtube }}" target="_blank" aria-label="youtube">
        <i class="ui-youtube"></i>
      </a>
      <a class="social social-instagram" href="https://instagram.com/{{ $settingsAttr->instagram }}" target="_blank" aria-label="instagram">
        <i class="ui-instagram"></i>
      </a>
    </div>
  </header> <!-- end sidenav -->

  <main class="main oh" id="main">

    <!-- Top Bar -->
    <div class="top-bar d-none d-lg-block">
      <div class="container">
        <div class="row">

          <!-- Top menu -->
          <div class="col-lg-6">
            <ul class="top-menu">
              <li><a href="{{ route('about') }}">About</a></li>
              <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
          </div>
          
          <!-- Socials -->
          <div class="col-lg-6">
            <div class="socials nav__socials socials--nobase socials--white justify-content-end"> 
              <a class="social social-facebook" href="https://facebook.com/{{ $settingsAttr->facebook }}" target="_blank" aria-label="facebook">
                <i class="ui-facebook"></i>
              </a>
              <a class="social social-twitter" href="https://twitter.com/{{ $settingsAttr->twitter }}" target="_blank" aria-label="twitter">
                <i class="ui-twitter"></i>
              </a>
              <a class="social social-google-plus" href="https://plus.google.com/+{{ $settingsAttr->google_plus }}" target="_blank" aria-label="google">
                <i class="ui-google"></i>
              </a>
              <a class="social social-youtube" href="https://youtube.com/channel/{{ $settingsAttr->youtube }}" target="_blank" aria-label="youtube">
                <i class="ui-youtube"></i>
              </a>
              <a class="social social-instagram" href="https://instagram.com/{{ $settingsAttr->instagram }}" target="_blank" aria-label="instagram">
                <i class="ui-instagram"></i>
              </a>
            </div>
          </div>

        </div>
      </div>
    </div> <!-- end top bar -->        

    <!-- Navigation -->
    <header class="nav">

      <div class="nav__holder nav--sticky">
        <div class="container relative">
          <div class="flex-parent">

            <!-- Side Menu Button -->
            <button class="nav-icon-toggle" id="nav-icon-toggle" aria-label="Open side menu">
              <span class="nav-icon-toggle__box">
                <span class="nav-icon-toggle__inner"></span>
              </span>
            </button> 

            <!-- Logo -->
            <a href="{{ route('home') }}" class="logo">
              <img class="logo__img" src="{{ route('home') }}/img/{{ $settingsAttr->logo }}" srcset="{{ route('home') }}/img/{{ $settingsAttr->logo }}" alt="logo">
            </a>

            <!-- Nav-wrap -->
            <nav class="flex-child nav__wrap d-none d-lg-block">              
              <ul class="nav__menu">

                <li class="@if($slug == ''){{ 'active' }}@endif"><a href="{{ route('home') }}">হোম</a></li>
                @foreach($navs as $nav)
                    <li class="@if($slug == $nav->slug){{ 'active' }}@endif">
                        <a href="{{ route('categoryArticles', $nav->slug) }}" class="sidenav__menu-url">{{ $nav->name }} </a>
                    </li>
                @endforeach
                <!-- <li>{{ $slug }}</li> -->


              </ul> <!-- end menu -->
            </nav> <!-- end nav-wrap -->

            <!-- Nav Right -->
            <div class="nav__right">

              <!-- Search -->
              <div class="nav__right-item nav__search">
                <a href="#" class="nav__search-trigger" id="nav__search-trigger">
                  <i class="ui-search nav__search-trigger-icon"></i>
                </a>
                <div class="nav__search-box" id="nav__search-box">
                  <form class="nav__search-form" action="{{ route('search') }}">
                    <input type="text" placeholder="Search an article" class="nav__search-input" name="term" value="@if(isset($query)){{ $query }}@endif">
                    <button type="submit" class="search-button btn btn-lg btn-color btn-button">
                      <i class="ui-search nav__search-icon"></i>
                    </button>
                  </form>
                </div>                
              </div>             

            </div> <!-- end nav right -->            
        
          </div> <!-- end flex-parent -->
        </div> <!-- end container -->

      </div>
    </header> <!-- end navigation -->