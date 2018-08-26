<!DOCTYPE html>
<html lang="en">
<head>
    <title>BanglaBox</title>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,600,700%7CSource+Sans+Pro:400,600,700' rel='stylesheet'>

  <!-- Css -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/font-icons.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.html">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

  <!-- Lazyload (must be placed in head in order to work) -->
  <script src="{{ asset('js/lazysizes.min.js') }}"></script>
  <style type="text/css">
    body {
      font-family: 'Bangla', Arial, sans-serif !important;
    }
  </style>

</head>

<body class="bg-light style-default style-rounded">

<!-- Preloader -->
<div class="loader-mask">
    <div class="loader">
        <div></div>
    </div>
</div>

<!-- Bg Overlay -->
<div class="content-overlay"></div>

<!-- Sidenav -->
<header class="sidenav" id="sidenav">

    <!-- close -->
    <div class="sidenav__close">
        <button class="sidenav__close-button" id="sidenav__close-button" aria-label="close sidenav">
            <i class="ui-close sidenav__close-icon"></i>
        </button>
    </div>

    <!-- Nav -->
    <!-- <nav class="sidenav__menu-container">
        <ul class="sidenav__menu" role="menubar">
            <li>
                <a href="#" class="sidenav__menu-url">Home</a>
                <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
                <ul class="sidenav__menu-dropdown">
                    <li><a href="index-2.html" class="sidenav__menu-url">Home Default</a></li>
                    <li><a href="index-politics.html" class="sidenav__menu-url">Home Politics</a></li>
                    <li><a href="index-fashion.html" class="sidenav__menu-url">Home Fashion</a></li>
                    <li><a href="index-games.html" class="sidenav__menu-url">Home Games</a></li>
                    <li><a href="index-videos.html" class="sidenav__menu-url">Home Videos</a></li>
                    <li><a href="index-music.html" class="sidenav__menu-url">Home Music</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="sidenav__menu-url">Pages</a>
                <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
                <ul class="sidenav__menu-dropdown">
                    <li><a href="about.html" class="sidenav__menu-url">About</a></li>
                    <li><a href="contact.html" class="sidenav__menu-url">Contact</a></li>
                    <li><a href="search-results.html" class="sidenav__menu-url">Search Results</a></li>
                    <li><a href="categories.html" class="sidenav__menu-url">Categories</a></li>
                    <li><a href="404.html" class="sidenav__menu-url">404</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="sidenav__menu-url">Features</a>
                <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
                <ul class="sidenav__menu-dropdown">
                    <li>
                        <a href="#" class="sidenav__menu-url">Single Post</a>
                        <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
                        <ul class="sidenav__menu-dropdown">
                            <li><a href="single-post.html" class="sidenav__menu-url">Style 1</a></li>
                            <li><a href="single-post-politics.html" class="sidenav__menu-url">Style 2</a></li>
                            <li><a href="single-post-fashion.html" class="sidenav__menu-url">Style 3</a></li>
                            <li><a href="single-post-games.html" class="sidenav__menu-url">Style 4</a></li>
                            <li><a href="single-post-videos.html" class="sidenav__menu-url">Style 5</a></li>
                            <li><a href="single-post-music.html" class="sidenav__menu-url">Style 6</a></li>
                        </ul>
                    </li>
                    <li><a href="shortcodes.html" class="sidenav__menu-url">Shortcodes</a></li>
                </ul>
            </li> -->

            <!-- Categories -->
            <!-- <li>
                <a href="#" class="sidenav__menu-url">World</a>
            </li>
            <li>
                <a href="#" class="sidenav__menu-url">Business</a>
            </li>
            <li>
                <a href="#" class="sidenav__menu-url">Fashion</a>
            </li>
            <li>
                <a href="#" class="sidenav__menu-url">Lifestyle</a>
            </li>
            <li>
                <a href="#" class="sidenav__menu-url">Advertise</a>
            </li>
        </ul>
    </nav> -->
    <!-- Nav -->
    <nav class="sidenav__menu-container">
      <ul class="sidenav__menu" role="menubar">
        <li>
          <a href="{{ route('home') }}" class="sidenav__menu-url">হোম</a>
        </li>
        <!-- Categories -->
        <!-- <li>
          <a href="{{ route('home') }}" class="sidenav__menu-url">জীবনযাত্রা</a>
        </li>
        <li>
          <a href="#" class="sidenav__menu-url">বিস্ময়কর</a>
        </li>
        <li>
          <a href="#" class="sidenav__menu-url">বিনোদন </a>
        </li> -->
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
        <a class="social social-facebook" href="#" target="_blank" aria-label="facebook">
            <i class="ui-facebook"></i>
        </a>
        <a class="social social-twitter" href="#" target="_blank" aria-label="twitter">
            <i class="ui-twitter"></i>
        </a>
        <a class="social social-google-plus" href="#" target="_blank" aria-label="google">
            <i class="ui-google"></i>
        </a>
        <a class="social social-youtube" href="#" target="_blank" aria-label="youtube">
            <i class="ui-youtube"></i>
        </a>
        <a class="social social-instagram" href="#" target="_blank" aria-label="instagram">
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
                    <li><a href="#">About</a></li>
                    <li><a href="#">Advertise</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>

            <!-- Socials -->
            <div class="col-lg-6">
                <div class="socials nav__socials socials--nobase socials--white justify-content-end">
                    <a class="social social-facebook" href="#" target="_blank" aria-label="facebook">
                        <i class="ui-facebook"></i>
                    </a>
                    <a class="social social-twitter" href="#" target="_blank" aria-label="twitter">
                        <i class="ui-twitter"></i>
                    </a>
                    <a class="social social-google-plus" href="#" target="_blank" aria-label="google">
                        <i class="ui-google"></i>
                    </a>
                    <a class="social social-youtube" href="#" target="_blank" aria-label="youtube">
                        <i class="ui-youtube"></i>
                    </a>
                    <a class="social social-instagram" href="#" target="_blank" aria-label="instagram">
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
                    <img class="logo__img" src="{{ route('home') }}/img/logo_default.png" srcset="{{ route('home') }}/img/logo_default.png 1x, img/logo_default@2x.png 2x" alt="logo">
                </a>

                <!-- Nav-wrap -->
                <nav class="flex-child nav__wrap d-none d-lg-block">
                    <ul class="nav__menu">

                        <li class=""><a href="{{ route('home') }}">হোম</a></li>
                        <!-- <li><a href="#">জীবন যাত্রা</a></li>
                        <li><a href="#">বিস্ময়কর</a></li>
                        <li><a href="#">বিনোদন </a></li> -->
                        @foreach($navs as $nav)
                        <li class="@if($slug == $nav->slug){{ 'active' }}@endif">
                        <a href="{{ route('categoryArticles', $nav->slug) }}" class="sidenav__menu-url">{{ $nav->name }} </a>
                        </li>
                        @endforeach


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
                            <form class="nav__search-form">
                                <input type="text" placeholder="Search an article" class="nav__search-input">
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


<div class="main-container container pt-40" id="main-container">

<!-- Content -->
<div class="row">

<!-- Posts -->
<div class="col-lg-8 blog__content mb-72">
    <h1 class="page-title">{{ $category->name }}</h1>

    <!-- <article class="entry card post-list">
        <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url(img/content/list/list_post_1.jpg)">
            <a href="single-post.html" class="thumb-url"></a>
            <img src="img/content/list/list_post_1.jpg" alt="" class="entry__img d-none">
            <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--blue">Business</a>
        </div>

        <div class="entry__body post-list__body card__body">
            <div class="entry__header">
                <h2 class="entry__title">
                    <a href="single-post.html">These Are the 20 Best Places to Work in 2018</a>
                </h2>
                <ul class="entry__meta">
                    <li class="entry__meta-author">
                        <span>by</span>
                        <a href="#">DeoThemes</a>
                    </li>
                    <li class="entry__meta-date">
                        Jan 21, 2018
                    </li>
                </ul>
            </div>
            <div class="entry__excerpt">
                <p>iPrice Group report offers insights on daily e-commerce activity in the ...</p>
            </div>
        </div>
    </article> -->
    @include('frontend.article.data')

    

    <!-- Pagination -->
    <!-- <nav class="pagination">
        <span class="pagination__page pagination__page--current">1</span>
        <a href="#" class="pagination__page">2</a>
        <a href="#" class="pagination__page">3</a>
        <a href="#" class="pagination__page">4</a>
        <a href="#" class="pagination__page pagination__icon pagination__page--next"><i class="ui-arrow-right"></i></a>
    </nav> -->
</div> <!-- end posts -->

<!-- Sidebar -->
<aside class="col-lg-4 sidebar sidebar--right">

    <!-- Widget Popular Posts -->
    <aside class="widget widget-popular-posts">
        <h4 class="widget-title">Popular Posts</h4>
        <ul class="post-list-small">
            <li class="post-list-small__item">
                <article class="post-list-small__entry clearfix">
                    <div class="post-list-small__img-holder">
                        <div class="thumb-container thumb-100">
                            <a href="single-post.html">
                                <img data-src="img/content/post_small/post_small_1.jpg" src="img/empty.png" alt="" class=" lazyload">
                            </a>
                        </div>
                    </div>
                    <div class="post-list-small__body">
                        <h3 class="post-list-small__entry-title">
                            <a href="single-post.html">Follow These Smartphone Habits of Successful Entrepreneurs</a>
                        </h3>
                        <ul class="entry__meta">
                            <li class="entry__meta-author">
                                <span>by</span>
                                <a href="#">DeoThemes</a>
                            </li>
                            <li class="entry__meta-date">
                                Jan 21, 2018
                            </li>
                        </ul>
                    </div>
                </article>
            </li>
            <li class="post-list-small__item">
                <article class="post-list-small__entry clearfix">
                    <div class="post-list-small__img-holder">
                        <div class="thumb-container thumb-100">
                            <a href="single-post.html">
                                <img data-src="img/content/post_small/post_small_2.jpg" src="img/empty.png" alt="" class=" lazyload">
                            </a>
                        </div>
                    </div>
                    <div class="post-list-small__body">
                        <h3 class="post-list-small__entry-title">
                            <a href="single-post.html">Lose These 12 Bad Habits If You're Serious About Becoming a Millionaire</a>
                        </h3>
                        <ul class="entry__meta">
                            <li class="entry__meta-author">
                                <span>by</span>
                                <a href="#">DeoThemes</a>
                            </li>
                            <li class="entry__meta-date">
                                Jan 21, 2018
                            </li>
                        </ul>
                    </div>
                </article>
            </li>
            <li class="post-list-small__item">
                <article class="post-list-small__entry clearfix">
                    <div class="post-list-small__img-holder">
                        <div class="thumb-container thumb-100">
                            <a href="single-post.html">
                                <img data-src="img/content/post_small/post_small_3.jpg" src="img/empty.png" alt="" class=" lazyload">
                            </a>
                        </div>
                    </div>
                    <div class="post-list-small__body">
                        <h3 class="post-list-small__entry-title">
                            <a href="single-post.html">June in Africa: Taxi wars, smarter cities and increased investments</a>
                        </h3>
                        <ul class="entry__meta">
                            <li class="entry__meta-author">
                                <span>by</span>
                                <a href="#">DeoThemes</a>
                            </li>
                            <li class="entry__meta-date">
                                Jan 21, 2018
                            </li>
                        </ul>
                    </div>
                </article>
            </li>
            <li class="post-list-small__item">
                <article class="post-list-small__entry clearfix">
                    <div class="post-list-small__img-holder">
                        <div class="thumb-container thumb-100">
                            <a href="single-post.html">
                                <img data-src="img/content/post_small/post_small_4.jpg" src="img/empty.png" alt="" class=" lazyload">
                            </a>
                        </div>
                    </div>
                    <div class="post-list-small__body">
                        <h3 class="post-list-small__entry-title">
                            <a href="single-post.html">PUBG Desert Map Finally Revealed, Here Are All The Details</a>
                        </h3>
                        <ul class="entry__meta">
                            <li class="entry__meta-author">
                                <span>by</span>
                                <a href="#">DeoThemes</a>
                            </li>
                            <li class="entry__meta-date">
                                Jan 21, 2018
                            </li>
                        </ul>
                    </div>
                </article>
            </li>
        </ul>
    </aside> <!-- end widget popular posts -->

    <!-- Widget Newsletter -->
    <aside class="widget widget_mc4wp_form_widget">
        <h4 class="widget-title">Newsletter</h4>
        <p class="newsletter__text">
            <i class="ui-email newsletter__icon"></i>
            Subscribe for our daily news
        </p>
        <form class="mc4wp-form" method="post">
            <div class="mc4wp-form-fields">
                <div class="form-group">
                    <input type="email" name="EMAIL" placeholder="Your email" required="">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-lg btn-color" value="Sign Up">
                </div>
            </div>
        </form>
    </aside> <!-- end widget newsletter -->

    <!-- Widget Socials -->
    <aside class="widget widget-socials">
        <h4 class="widget-title">Let's hang out on social</h4>
        <div class="socials socials--wide socials--large">
            <div class="row row-16">
                <div class="col">
                    <a class="social social-facebook" href="#" title="facebook" target="_blank" aria-label="facebook">
                        <i class="ui-facebook"></i>
                        <span class="social__text">Facebook</span>
                    </a><!--
                  --><a class="social social-twitter" href="#" title="twitter" target="_blank" aria-label="twitter">
                        <i class="ui-twitter"></i>
                        <span class="social__text">Twitter</span>
                    </a><!--
                  --><a class="social social-youtube" href="#" title="youtube" target="_blank" aria-label="youtube">
                        <i class="ui-youtube"></i>
                        <span class="social__text">Youtube</span>
                    </a>
                </div>
                <div class="col">
                    <a class="social social-google-plus" href="#" title="google" target="_blank" aria-label="google">
                        <i class="ui-google"></i>
                        <span class="social__text">Google+</span>
                    </a><!--
                  --><a class="social social-instagram" href="#" title="instagram" target="_blank" aria-label="instagram">
                        <i class="ui-instagram"></i>
                        <span class="social__text">Instagram</span>
                    </a><!--
                  --><a class="social social-rss" href="#" title="rss" target="_blank" aria-label="rss">
                        <i class="ui-rss"></i>
                        <span class="social__text">Rss</span>
                    </a>
                </div>
            </div>
        </div>
    </aside> <!-- end widget socials -->

</aside> <!-- end sidebar -->

</div> <!-- end content -->
</div> <!-- end main container -->

<!-- Footer -->
<footer class="footer footer--dark">
    <div class="container">
        <div class="footer__widgets">
            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <aside class="widget widget-logo">
                        <a href="index-2.html">
                            <img src="img/logo_default_white.png" srcset="img/logo_default_white.png 1x, img/logo_default_white@2x.png 2x" class="logo__img" alt="">
                        </a>
                        <p class="copyright">
                            © 2018 Deus | Made by <a href="https://deothemes.com/">DeoThemes</a>
                        </p>
                        <div class="socials socials--large socials--rounded mb-24">
                            <a href="#" class="social social-facebook" aria-label="facebook"><i class="ui-facebook"></i></a>
                            <a href="#" class="social social-twitter" aria-label="twitter"><i class="ui-twitter"></i></a>
                            <a href="#" class="social social-google-plus" aria-label="google+"><i class="ui-google"></i></a>
                            <a href="#" class="social social-youtube" aria-label="youtube"><i class="ui-youtube"></i></a>
                            <a href="#" class="social social-instagram" aria-label="instagram"><i class="ui-instagram"></i></a>
                        </div>
                    </aside>
                </div>

                <div class="col-lg-2 col-md-6">
                    <aside class="widget widget_nav_menu">
                        <h4 class="widget-title">Useful Links</h4>
                        <ul>
                            <li><a href="about.html">About</a></li>
                            <li><a href="contact.html">News</a></li>
                            <li><a href="categories.html">Advertise</a></li>
                            <li><a href="shortcodes.html">Support</a></li>
                            <li><a href="shortcodes.html">Features</a></li>
                            <li><a href="shortcodes.html">Contact</a></li>
                        </ul>
                    </aside>
                </div>

                <div class="col-lg-4 col-md-6">
                    <aside class="widget widget-popular-posts">
                        <h4 class="widget-title">Popular Posts</h4>
                        <ul class="post-list-small">
                            <li class="post-list-small__item">
                                <article class="post-list-small__entry clearfix">
                                    <div class="post-list-small__img-holder">
                                        <div class="thumb-container thumb-100">
                                            <a href="single-post.html">
                                                <img data-src="img/content/post_small/post_small_1.jpg" src="img/empty.png" alt="" class="lazyload">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post-list-small__body">
                                        <h3 class="post-list-small__entry-title">
                                            <a href="single-post.html">Follow These Smartphone Habits of Successful Entrepreneurs</a>
                                        </h3>
                                        <ul class="entry__meta">
                                            <li class="entry__meta-author">
                                                <span>by</span>
                                                <a href="#">DeoThemes</a>
                                            </li>
                                            <li class="entry__meta-date">
                                                Jan 21, 2018
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </li>
                            <li class="post-list-small__item">
                                <article class="post-list-small__entry clearfix">
                                    <div class="post-list-small__img-holder">
                                        <div class="thumb-container thumb-100">
                                            <a href="single-post.html">
                                                <img data-src="img/content/post_small/post_small_2.jpg" src="img/empty.png" alt="" class="lazyload">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post-list-small__body">
                                        <h3 class="post-list-small__entry-title">
                                            <a href="single-post.html">Lose These 12 Bad Habits If You're Serious About Becoming a Millionaire</a>
                                        </h3>
                                        <ul class="entry__meta">
                                            <li class="entry__meta-author">
                                                <span>by</span>
                                                <a href="#">DeoThemes</a>
                                            </li>
                                            <li class="entry__meta-date">
                                                Jan 21, 2018
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </li>
                        </ul>
                    </aside>
                </div>

                <div class="col-lg-3 col-md-6">
                    <aside class="widget widget_mc4wp_form_widget">
                        <h4 class="widget-title">Newsletter</h4>
                        <p class="newsletter__text">
                            <i class="ui-email newsletter__icon"></i>
                            Subscribe for our daily news
                        </p>
                        <form class="mc4wp-form" method="post">
                            <div class="mc4wp-form-fields">
                                <div class="form-group">
                                    <input type="email" name="EMAIL" placeholder="Your email" required="">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-lg btn-color" value="Sign Up">
                                </div>
                            </div>
                        </form>
                    </aside>
                </div>

            </div>
        </div>
    </div> <!-- end container -->
</footer> <!-- end footer -->

<div id="back-to-top">
    <a href="#top" aria-label="Go to top"><i class="ui-arrow-up"></i></a>
</div>

</main> <!-- end main-wrapper -->



  <!-- jQuery Scripts -->
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/easing.min.js') }}"></script>
  <script src="{{ asset('js/owl-carousel.min.js') }}"></script>
  <script src="{{ asset('js/flickity.pkgd.min.js') }}"></script>
  <script src="{{ asset('js/twitterFetcher_min.js') }}"></script>
  <script src="{{ asset('js/jquery.newsTicker.min.js') }}"></script>  
  <script src="{{ asset('js/modernizr.min.js') }}"></script>
  <script src="{{ asset('js/scripts.js') }}"></script>

</body>
</html>