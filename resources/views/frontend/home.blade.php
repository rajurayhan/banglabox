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

  {{-- Bangla Fonts --}}
      {{-- Siyam Rupali --}}
      {{-- https://fonts.maateen.me/ --}}
  <link href="https://fonts.maateen.me/siyam-rupali/font.css" rel="stylesheet">  
  <link href="https://fonts.maateen.me/bangla/font.css" rel="stylesheet">

  <!-- Css -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/font-icons.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

  <!-- Favicons -->
  <link rel="shortcut icon" href="img/f_icon.png">
  <link rel="apple-touch-icon" href="img/f_icon.png">
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
    <nav class="sidenav__menu-container">
      <ul class="sidenav__menu" role="menubar">
        <li>
          <a href="{{ route('home') }}" class="sidenav__menu-url">হোম</a>
        </li>
        <!-- Categories -->
        <li>
          <a href="{{ route('home') }}" class="sidenav__menu-url">জীবনযাত্রা</a>
        </li>
        <li>
          <a href="#" class="sidenav__menu-url">বিস্ময়কর</a>
        </li>
        <li>
          <a href="#" class="sidenav__menu-url">বিনোদন </a>
        </li>
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
              <li><a href="about.php">About</a></li>
              <li><a href="contact.php">Contact</a></li>
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
              <img class="logo__img" src="img/logo_default.png" srcset="img/logo_default.png 1x, img/logo_default@2x.png 2x" alt="logo">
            </a>

            <!-- Nav-wrap -->
            <nav class="flex-child nav__wrap d-none d-lg-block">              
              <ul class="nav__menu">

                <li class="active"><a href="{{ route('home') }}">হোম</a></li>
                <li><a href="#">জীবন যাত্রা</a></li>
                <li><a href="#">বিস্ময়কর</a></li>
                <li><a href="#">বিনোদন </a></li>


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
  

    <!-- Trending Now -->
    <div class="container">
      <div class="trending-now">
        <span class="trending-now__label">
          <i class="ui-flash"></i>
        LATEST POST</span>
        <div class="newsticker">
          <ul class="newsticker__list">
            <li class="newsticker__item"><a href="#" class="newsticker__item-url">কফি কেন খেতে ইচ্ছা করে?</a></li>
            <li class="newsticker__item"><a href="#" class="newsticker__item-url">১ মিনিটে ১ কেজি রসুনের খোসা ছারিয়ে নিন</a></li>
            <li class="newsticker__item"><a href="#" class="newsticker__item-url">বিখ্যাত এই ৫ ব্যক্তি কত ঘণ্টা ঘুমান</a></li>
          </ul>
        </div>
        <div class="newsticker-buttons">
          <button class="newsticker-button newsticker-button--prev" id="newsticker-button--prev" aria-label="next article"><i class="ui-arrow-left"></i></button>
          <button class="newsticker-button newsticker-button--next" id="newsticker-button--next" aria-label="previous article"><i class="ui-arrow-right"></i></button>
        </div>
      </div>
    </div>

    <!-- Featured Posts Grid -->      
    <section class="featured-posts-grid">
      <div class="container">
        <div class="row row-8">

            <div class="col-lg-6">

                <!-- Large post -->
                <div class="featured-posts-grid__item featured-posts-grid__item--lg">
                    <article class="entry card featured-posts-grid__entry">
                        <div class="entry__img-holder card__img-holder">
                            <a href="#">
                                <img src="img/content/hero/hero_post_4.jpg" alt="" class="entry__img">
                            </a>
                            <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--green">বিস্ময়কর</a>
                        </div>

                        <div class="entry__body card__body">
                            <h2 class="entry__title">
                                <a href="#">বন ম্যান অব ইন্ডিয়া'  যাদব পায়েং ( ভারতের বন রক্ষক ) !!</a>
                            </h2>
                            <ul class="entry__meta">
                                <li class="entry__meta-author">
                                    <span>by</span>
                                    <a href="#">BanglaBox</a>
                                </li>
                                <li class="entry__meta-date">
                                    July 16, 2018
                                </li>
                            </ul>
                        </div>
                    </article>
                </div> <!-- end large post -->
            </div>

          <div class="col-lg-6">

            <!-- Small post -->
            <div class="featured-posts-grid__item featured-posts-grid__item--sm">
              <article class="entry card post-list featured-posts-grid__entry">
                <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url(img/content/hero/hero_post_1.jpg)">
                  <a href="#" class="thumb-url"></a>
                  <img src="img/content/hero/hero_post_1.jpg" alt="" class="entry__img d-none">
                  <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">বিস্ময়কর</a>
                </div>

                <div class="entry__body post-list__body card__body">  
                  <h2 class="entry__title">
                    <a href="#">বর্তমান বিশ্বের দামি গাড়ির শীর্ষ স্থানে রয়েছে ১ কোটি ১ লাখ মার্কিন ডলার মূল্যের.... </a>
                  </h2>
                  <ul class="entry__meta">
                    <li class="entry__meta-author">
                      <span>by</span>
                      <a href="#">BanglaBox</a>
                    </li>
                    <li class="entry__meta-date">
                      July 16, 2018
                    </li>              
                  </ul>
                </div>
              </article>
            </div> <!-- end post -->

            <!-- Small post -->
            <div class="featured-posts-grid__item featured-posts-grid__item--sm">
              <article class="entry card post-list featured-posts-grid__entry">
                <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url(img/content/hero/hero_post_2.jpg)">
                  <a href="#" class="thumb-url"></a>
                  <img src="img/content/hero/hero_post_2.jpg" alt="" class="entry__img d-none">
                  <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--purple">জীবন যাত্রা</a>
                </div>

                <div class="entry__body post-list__body card__body">  
                  <h2 class="entry__title">
                    <a href="#">যে ৯টি টিপস জানলে গৃহকর্মী ছাড়াই আপনার ঘরদোর থাকবে পরিচ্ছন্ন...</a>
                  </h2>
                  <ul class="entry__meta">
                    <li class="entry__meta-author">
                      <span>by</span>
                      <a href="#">BanglaBox</a>
                    </li>
                    <li class="entry__meta-date">
                        July 16, 2018
                    </li>              
                  </ul>
                </div>
              </article>
            </div> <!-- end post -->

            <!-- Small post -->
            <div class="featured-posts-grid__item featured-posts-grid__item--sm">
              <article class="entry card post-list featured-posts-grid__entry">
                <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url(img/content/hero/hero_post_3.jpg)">
                  <a href="#" class="thumb-url"></a>
                  <img src="img/content/hero/hero_post_3.jpg" alt="" class="entry__img d-none">
                  <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--blue">বিনোদন</a>
                </div>

                <div class="entry__body post-list__body card__body">  
                  <h2 class="entry__title">
                    <a href="#">বাংলাদেশের প্রথম পূর্ণ দৈর্ঘ্য চলচিত্রের নাম “দ্য লাস্ট কিস”। ঢাকার নবাব পরিবারের পৃষ্ঠপোষকতায় এই ছবি নির্মাণ...</a>
                  </h2>
                  <ul class="entry__meta">
                    <li class="entry__meta-author">
                      <span>by</span>
                      <a href="#">BanglaBox</a>
                    </li>
                    <li class="entry__meta-date">
                        July 16, 2018
                    </li>              
                  </ul>
                </div>
              </article>
            </div> <!-- end post -->

          </div> <!-- end col -->



        </div>
      </div>
    </section> <!-- end featured posts grid -->

    <div class="text-center pb-48">
        <a href="#">
            <img src="img/content/ads.jpg" alt="">
        </a>
    </div>

    <div class="main-container container pt-24" id="main-container">         


      <!-- Content Secondary -->
      <div class="row">

        <!-- Posts -->
        <div class="col-lg-8 blog__content mb-72">

          <!-- Worldwide News -->
          <section class="section">
          @include('frontend.article.data')
          </section> <!-- end worldwide news -->

          <!-- Pagination -->
          <!-- <nav class="pagination">
            <span class="pagination__page pagination__page--current">1</span>
            <a href="#" class="pagination__page">2</a>
            <a href="#" class="pagination__page">3</a>
            <a href="#" class="pagination__page">4</a>
            <a href="#" class="pagination__page pagination__icon pagination__page--next"><i class="ui-arrow-right"></i></a>
          </nav> -->
          <div class="ajax-load text-center" style="display:none">
            <p><img src="http://demo.itsolutionstuff.com/plugin/loader.gif">Loading More Articles</p>
          </div>

        </div> <!-- end posts -->

        <!-- Sidebar 1 -->
        <aside class="col-lg-4 sidebar sidebar--1 sidebar--right">

          <!-- Widget Ad 300 -->
          <aside class="widget widget_media_image">
            <a href="#">
              <img src="img/content/placeholder_336.jpg" alt="">
            </a>
          </aside> <!-- end widget ad 300 -->
          


          <!-- Widget Recommended (Rating) -->
          <aside class="widget widget-rating-posts">
            <h4 class="widget-title">Recommended</h4>
            <article class="entry">
              <div class="entry__img-holder">
                <a href="#">
                  <div class="thumb-container thumb-60">
                    <img data-src="img/content/hero/hero_post_1.jpg" src="img/content/hero/hero_post_1.jpg" class="entry__img lazyload" alt="">
                  </div>
                </a>
              </div>

              <div class="entry__body">
                <div class="entry__header">
                  
                  <h2 class="entry__title">
                    <a href="#">বর্তমান বিশ্বের দামি গাড়ির শীর্ষ স্থানে রয়েছে ১ কোটি ১ লাখ মার্কিন ডলার মূল্যের.... </a>
                  </h2>
                  <ul class="entry__meta">
                    <li class="entry__meta-author">
                      <span>by</span>
                      <a href="#">BanglaBox</a>
                    </li>
                    <li class="entry__meta-date">
                        July 16, 2018
                    </li>
                  </ul>
                  <ul class="entry__meta">
                    <li class="entry__meta-rating">
                      <i class="ui-star"></i><!--
                      --><i class="ui-star"></i><!--
                      --><i class="ui-star"></i><!--
                      --><i class="ui-star"></i><!--
                      --><i class="ui-star-empty"></i>
                    </li>
                  </ul>
                </div>
              </div>
            </article>
            <article class="entry">
              <div class="entry__img-holder">
                <a href="#">
                  <div class="thumb-container thumb-60">
                    <img data-src="img/content/hero/hero_post_2.jpg" src="img/content/hero/hero_post_2.jpg" class="entry__img lazyload" alt="">
                  </div>
                </a>
              </div>

              <div class="entry__body">
                <div class="entry__header">
                  
                  <h2 class="entry__title">
                    <a href="#">যে ৯টি টিপস জানলে গৃহকর্মী ছাড়াই আপনার ঘরদোর থাকবে পরিচ্ছন্ন...</a>
                  </h2>
                  <ul class="entry__meta">
                    <li class="entry__meta-author">
                      <span>by</span>
                      <a href="#">BanglaBox</a>
                    </li>
                    <li class="entry__meta-date">
                        July 16, 2018
                    </li>
                  </ul>
                  <ul class="entry__meta">
                    <li class="entry__meta-rating">
                      <i class="ui-star"></i><!--
                      --><i class="ui-star"></i><!--
                      --><i class="ui-star"></i><!--
                      --><i class="ui-star"></i><!--
                      --><i class="ui-star-empty"></i>
                    </li>
                  </ul>
                </div>
              </div>
            </article>

              <aside class="widget widget_media_image">
                  <a href="#">
                      <img src="img/content/placeholder_336.jpg" alt="">
                  </a>
              </aside>

          </aside> <!-- end widget recommended (rating) -->
        </aside> <!-- end sidebar 1 -->
      </div> <!-- content secondary -->
      <!-- Carousel posts -->
      <section class="section mb-0">
          <div class="title-wrap title-wrap--line title-wrap--pr">
              <h3 class="section-title">videos</h3>
          </div>

          <!-- Slider -->
          <div id="owl-posts" class="owl-carousel owl-theme owl-carousel--arrows-outside">
              <article class="entry thumb thumb--size-1">
                  <iframe width="282" height="197" src="https://www.youtube.com/embed/DQBuuu4Aor0">
                  </iframe>
              </article>
              <article class="entry thumb thumb--size-1">
                  <iframe width="282" height="197" src="https://www.youtube.com/embed/ngQzvNOZQ_U">
                  </iframe>
              </article>
              <article class="entry thumb thumb--size-1">
                  <iframe width="282" height="197" src="https://www.youtube.com/embed/lWKoFjR0GgU">
                  </iframe>
              </article>
              <article class="entry thumb thumb--size-1">
                  <iframe width="282" height="197" src="https://www.youtube.com/embed/b1vh-XMx95Q">
                  </iframe>
              </article>
              <article class="entry thumb thumb--size-1">
                  <iframe width="282" height="197" src="https://www.youtube.com/embed/qD7h1OIXqao">
                  </iframe>
              </article>
          </div> <!-- end slider -->

      </section> <!-- end carousel posts -->

      
      

    </div> <!-- end main container -->

    <div class="text-center pb-48">
        <a href="#">
            <img src="img/content/ads.jpg" alt="">
        </a>
    </div>

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
                  © 2018 BanglaBox | Made by <a href="http://adboxbd.com/">Adbox</a>
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
                  <li><a href="#">About</a></li>
                  <li><a href="#">News</a></li>
                  <li><a href="#">Advertise</a></li>
                  <li><a href="#">Support</a></li>
                  <li><a href="#">Features</a></li>
                  <li><a href="#">Contact</a></li>
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
                          <a href="#">
                            <img data-src="img/content/post_small/post_small_1.jpg" src="img/empty.png" alt="" class="post-list-small__img--rounded lazyload">
                          </a>
                        </div>
                      </div>
                      <div class="post-list-small__body">
                        <h3 class="post-list-small__entry-title">
                          <a href="#">Follow These Smartphone Habits of Successful Entrepreneurs</a>
                        </h3>
                        <ul class="entry__meta">
                          <li class="entry__meta-author">
                            <span>by</span>
                            <a href="#">BanglaBox</a>
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
                          <a href="#">
                            <img data-src="img/content/post_small/post_small_2.jpg" src="img/empty.png" alt="" class="post-list-small__img--rounded lazyload">
                          </a>
                        </div>
                      </div>
                      <div class="post-list-small__body">
                        <h3 class="post-list-small__entry-title">
                          <a href="#">Lose These 12 Bad Habits If You're Serious About Becoming a Millionaire</a>
                        </h3>
                        <ul class="entry__meta">
                          <li class="entry__meta-author">
                            <span>by</span>
                            <a href="#">BanglaBox</a>
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

  <script type="text/javascript">
    var page = 1;
    $(window).scroll(function() {
        if($(window).scrollTop() + $(window).height() >= $(document).height()) {
            page++;
            loadMoreData(page);
        }
    });


    function loadMoreData(page){
      $.ajax(
            {
                url: '?page=' + page,
                type: "get",
                beforeSend: function()
                {
                    $('.ajax-load').show();
                }
            })
            .done(function(data)
            {
                if(data.html == " "){
                    $('.ajax-load').html("No more records found");
                    return;
                }
                $('.ajax-load').hide();
                $(".blog__content").append(data.html);
            })
            .fail(function(jqXHR, ajaxOptions, thrownError)
            {
                  // alert('server not responding...');
                  console.log('server not responding...');
            });
    }
  </script>

</body>

</html>