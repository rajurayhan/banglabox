<!DOCTYPE html>
<html lang="en">
<head>
    <title>BanglaBox || {{ $article->title }}</title>

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
    <script src="js/lazysizes.min.js"></script>

</head>

<body class="bg-light single-post style-default style-rounded">

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
            </li>

            <!-- Categories -->
            <li>
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
                <a href="index-2.html" class="logo">
                    <img class="logo__img" src="img/logo_default.png" srcset="img/logo_default.png 1x, img/logo_default@2x.png 2x" alt="logo">
                </a>

                <!-- Nav-wrap -->
                <nav class="flex-child nav__wrap d-none d-lg-block">
                    <ul class="nav__menu">

                        <li class="nav__dropdown active">
                            <a href="index-2.html">Home</a>
                            <ul class="nav__dropdown-menu">
                                <li><a href="index-2.html">Home Default</a></li>
                                <li><a href="index-politics.html">Home Politics</a></li>
                                <li><a href="index-fashion.html">Home Fashion</a></li>
                                <li><a href="index-games.html">Home Games</a></li>
                                <li><a href="index-videos.html">Home Videos</a></li>
                                <li><a href="index-music.html">Home Music</a></li>
                            </ul>
                        </li>

                        <li class="nav__dropdown">
                            <a href="#">Posts</a>
                            <ul class="nav__dropdown-menu nav__megamenu">
                                <li>
                                    <div class="nav__megamenu-wrap">
                                        <div class="row">

                                            <div class="col nav__megamenu-item">
                                                <article class="entry">
                                                    <div class="entry__img-holder">
                                                        <a href="single-post.html">
                                                            <img src="img/content/grid/grid_post_1.jpg" alt="" class="entry__img">
                                                        </a>
                                                        <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">world</a>
                                                    </div>

                                                    <div class="entry__body">
                                                        <h2 class="entry__title">
                                                            <a href="single-post.html">Follow These Smartphone Habits of Successful Entrepreneurs</a>
                                                        </h2>
                                                    </div>
                                                </article>
                                            </div>

                                            <div class="col nav__megamenu-item">
                                                <article class="entry">
                                                    <div class="entry__img-holder">
                                                        <a href="single-post.html">
                                                            <img src="img/content/grid/grid_post_2.jpg" alt="" class="entry__img">
                                                        </a>
                                                        <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--purple">fashion</a>
                                                    </div>

                                                    <div class="entry__body">
                                                        <h2 class="entry__title">
                                                            <a href="single-post.html">3 Things You Can Do to Get Your Customers Talking About Your Business</a>
                                                        </h2>
                                                    </div>
                                                </article>
                                            </div>

                                            <div class="col nav__megamenu-item">
                                                <article class="entry">
                                                    <div class="entry__img-holder">
                                                        <a href="single-post.html">
                                                            <img src="img/content/grid/grid_post_3.jpg" alt="" class="entry__img">
                                                        </a>
                                                        <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--blue">business</a>
                                                    </div>

                                                    <div class="entry__body">
                                                        <h2 class="entry__title">
                                                            <a href="single-post.html">Lose These 12 Bad Habits If You're Serious About Becoming a Millionaire</a>
                                                        </h2>
                                                    </div>
                                                </article>
                                            </div>

                                            <div class="col nav__megamenu-item">
                                                <article class="entry">
                                                    <div class="entry__img-holder">
                                                        <a href="single-post.html">
                                                            <img src="img/content/grid/grid_post_4.jpg" alt="" class="entry__img">
                                                        </a>
                                                        <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--green">lifestyle</a>
                                                    </div>

                                                    <div class="entry__body">
                                                        <h2 class="entry__title">
                                                            <a href="single-post.html">10 Horrible Habits You're Doing Right Now That Are Draining Your Energy</a>
                                                        </h2>
                                                    </div>
                                                </article>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                            </ul> <!-- end megamenu -->
                        </li>

                        <li class="nav__dropdown">
                            <a href="#">Pages</a>
                            <ul class="nav__dropdown-menu">
                                <li><a href="about.html">About</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="search-results.html">Search Results</a></li>
                                <li><a href="categories.html">Categories</a></li>
                                <li><a href="404.html">404</a></li>
                            </ul>
                        </li>

                        <li class="nav__dropdown">
                            <a href="#">Features</a>
                            <ul class="nav__dropdown-menu">
                                <li><a href="shortcodes.html">Shortcodes</a></li>
                                <li class="nav__dropdown">
                                    <a href="#">Single Post</a>
                                    <ul class="nav__dropdown-menu">
                                        <li><a href="single-post.html">Style 1</a></li>
                                        <li><a href="single-post-politics.html">Style 2</a></li>
                                        <li><a href="single-post-fashion.html">Style 3</a></li>
                                        <li><a href="single-post-games.html">Style 4</a></li>
                                        <li><a href="single-post-videos.html">Style 5</a></li>
                                        <li><a href="single-post-music.html">Style 6</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#">Purchase</a>
                        </li>


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

<!-- Breadcrumbs -->
<div class="container">
    <ul class="breadcrumbs">
        <li class="breadcrumbs__item">
            <a href="index-2.html" class="breadcrumbs__url">Home</a>
        </li>
        <li class="breadcrumbs__item">
            <a href="index-2.html" class="breadcrumbs__url">News</a>
        </li>
        <li class="breadcrumbs__item breadcrumbs__item--current">
            World
        </li>
    </ul>
</div>

<div class="main-container container" id="main-container">

<!-- Content -->
<div class="row">

<!-- post content -->
<div class="col-lg-8 blog__content mb-72">
<div class="content-box">

<!-- standard post -->
<article class="entry mb-0">

<div class="single-post__entry-header entry__header">
    <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--green">{{ $article->category->name }}</a>
    <h1 class="single-post__entry-title">
        {{ $article->title }}
    </h1>

    <div class="entry__meta-holder">
        <ul class="entry__meta">
            <li class="entry__meta-author">
                <span>by</span>
                <a href="#">DeoThemes</a>
            </li>
            <li class="entry__meta-date">
                {{ date('d M, Y', strtotime($article->created_at)) }}
            </li>
        </ul>

        <ul class="entry__meta">
            <li class="entry__meta-views">
                <i class="ui-eye"></i>
                <span>{{ $article->read_count }}</span>
            </li>
            <!-- <li class="entry__meta-comments">
                <a href="#">
                    <i class="ui-chat-empty"></i>13
                </a>
            </li> -->
        </ul>
    </div>
</div> <!-- end entry header -->

<!-- <div class="entry__img-holder">
    <img src="{{ route('home') }}/uploads/featured/{{ $article->image }}" alt="" class="entry__img">
</div> -->

<div class="entry__article-wrap">

    <!-- Share -->
    <div class="entry__share">
        <div class="sticky-col">
            <div class="socials socials--rounded socials--large">
                <a class="social social-facebook" href="#" title="facebook" target="_blank" aria-label="facebook">
                    <i class="ui-facebook"></i>
                </a>
                <a class="social social-twitter" href="#" title="twitter" target="_blank" aria-label="twitter">
                    <i class="ui-twitter"></i>
                </a>
                <a class="social social-google-plus" href="#" title="google" target="_blank" aria-label="google">
                    <i class="ui-google"></i>
                </a>
                <a class="social social-pinterest" href="#" title="pinterest" target="_blank" aria-label="pinterest">
                    <i class="ui-pinterest"></i>
                </a>
            </div>
        </div>
    </div> <!-- share -->

    <div class="entry__article">
        {!! $article->description !!}

        <!-- tags -->
        <div class="entry__tags">
            <i class="ui-tags"></i>
            <span class="entry__tags-label">Tags:</span>
            <a href="#" rel="tag">mobile</a><a href="#" rel="tag">gadgets</a><a href="#" rel="tag">satelite</a>
        </div> <!-- end tags -->

    </div> <!-- end entry article -->
</div> <!-- end entry article wrap -->


<!-- Newsletter Wide -->
<div class="newsletter-wide">
    <div class="widget widget_mc4wp_form_widget">
        <div class="newsletter-wide__container">
            <div class="newsletter-wide__text-holder">
                <p class="newsletter-wide__text">
                    <i class="ui-email newsletter__icon"></i>
                    Subscribe for our daily news
                </p>
            </div>
            <div class="newsletter-wide__form">
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
            </div>
        </div>
    </div>
</div> <!-- end newsletter wide -->

<!-- Prev / Next Post -->
<nav class="entry-navigation">
    <div class="clearfix">
        <div class="entry-navigation--left">
            <i class="ui-arrow-left"></i>
            <span class="entry-navigation__label">Previous Post</span>
            <div class="entry-navigation__link">
                <a href="#" rel="next">How to design your first mobile app</a>
            </div>
        </div>
        <div class="entry-navigation--right">
            <span class="entry-navigation__label">Next Post</span>
            <i class="ui-arrow-right"></i>
            <div class="entry-navigation__link">
                <a href="#" rel="prev">Video Youtube format post. Made with WordPress</a>
            </div>
        </div>
    </div>
</nav>

<!-- Author -->
<div class="entry-author clearfix">
    <img alt="" data-src="img/content/single/author.jpg" src="img/empty.png" class="avatar lazyload">
    <div class="entry-author__info">
        <h6 class="entry-author__name">
            <a href="#">John Carpet</a>
        </h6>
        <p class="mb-0">But unfortunately for most of us our role as gardener has never been explained to us. And in misunderstanding our role, we have allowed seeds of all types, both good and bad, to enter our inner garden.</p>
    </div>
</div>

<!-- Related Posts -->
<section class="section related-posts mt-40 mb-0">
    <div class="title-wrap title-wrap--line title-wrap--pr">
        <h3 class="section-title">Related Articles</h3>
    </div>

    <!-- Slider -->
    <div id="owl-posts-3-items" class="owl-carousel owl-theme owl-carousel--arrows-outside">
        <article class="entry thumb thumb--size-1">
            <div class="entry__img-holder thumb__img-holder" style="background-image: url('img/content/carousel/carousel_post_1.jpg');">
                <div class="bottom-gradient"></div>
                <div class="thumb-text-holder">
                    <h2 class="thumb-entry-title">
                        <a href="single-post.html">9 Things to Consider Before Accepting a New Job</a>
                    </h2>
                </div>
                <a href="single-post.html" class="thumb-url"></a>
            </div>
        </article>
        <article class="entry thumb thumb--size-1">
            <div class="entry__img-holder thumb__img-holder" style="background-image: url('img/content/carousel/carousel_post_2.jpg');">
                <div class="bottom-gradient"></div>
                <div class="thumb-text-holder">
                    <h2 class="thumb-entry-title">
                        <a href="single-post.html">Gov’t Toughens Rules to Ensure 3rd Telco Player Doesn’t Slack Off</a>
                    </h2>
                </div>
                <a href="single-post.html" class="thumb-url"></a>
            </div>
        </article>
        <article class="entry thumb thumb--size-1">
            <div class="entry__img-holder thumb__img-holder" style="background-image: url('img/content/carousel/carousel_post_3.jpg');">
                <div class="bottom-gradient"></div>
                <div class="thumb-text-holder">
                    <h2 class="thumb-entry-title">
                        <a href="single-post.html">(Infographic) Is Work-Life Balance Even Possible?</a>
                    </h2>
                </div>
                <a href="single-post.html" class="thumb-url"></a>
            </div>
        </article>
        <article class="entry thumb thumb--size-1">
            <div class="entry__img-holder thumb__img-holder" style="background-image: url('img/content/carousel/carousel_post_4.jpg');">
                <div class="bottom-gradient"></div>
                <div class="thumb-text-holder">
                    <h2 class="thumb-entry-title">
                        <a href="single-post.html">Is Uber Considering To Sell its Southeast Asia Business to Grab?</a>
                    </h2>
                </div>
                <a href="single-post.html" class="thumb-url"></a>
            </div>
        </article>
        <article class="entry thumb thumb--size-1">
            <div class="entry__img-holder thumb__img-holder" style="background-image: url('img/content/carousel/carousel_post_2.jpg');">
                <div class="bottom-gradient"></div>
                <div class="thumb-text-holder">
                    <h2 class="thumb-entry-title">
                        <a href="single-post.html">Gov’t Toughens Rules to Ensure 3rd Telco Player Doesn’t Slack Off</a>
                    </h2>
                </div>
                <a href="single-post.html" class="thumb-url"></a>
            </div>
        </article>
    </div> <!-- end slider -->

</section> <!-- end related posts -->

</article> <!-- end standard post -->

<!-- Comments -->
<div class="entry-comments">
    <div class="title-wrap title-wrap--line">
        <h3 class="section-title">3 comments</h3>
    </div>
    <ul class="comment-list">
        <li class="comment">
            <div class="comment-body">
                <div class="comment-avatar">
                    <img alt="" src="img/content/single/comment_1.jpg">
                </div>
                <div class="comment-text">
                    <h6 class="comment-author">Joeby Ragpa</h6>
                    <div class="comment-metadata">
                        <a href="#" class="comment-date">July 17, 2017 at 12:48 pm</a>
                    </div>
                    <p>This template is so awesome. I didn’t expect so many features inside. E-commerce pages are very useful, you can launch your online store in few seconds. I will rate 5 stars.</p>
                    <a href="#" class="comment-reply">Reply</a>
                </div>
            </div>

            <ul class="children">
                <li class="comment">
                    <div class="comment-body">
                        <div class="comment-avatar">
                            <img alt="" src="img/content/single/comment_2.jpg">
                        </div>
                        <div class="comment-text">
                            <h6 class="comment-author">Alexander Samokhin</h6>
                            <div class="comment-metadata">
                                <a href="#" class="comment-date">July 17, 2017 at 12:48 pm</a>
                            </div>
                            <p>This template is so awesome. I didn’t expect so many features inside. E-commerce pages are very useful, you can launch your online store in few seconds. I will rate 5 stars.</p>
                            <a href="#" class="comment-reply">Reply</a>
                        </div>
                    </div>
                </li> <!-- end reply comment -->
            </ul>

        </li> <!-- end 1-2 comment -->

        <li>
            <div class="comment-body">
                <div class="comment-avatar">
                    <img alt="" src="img/content/single/comment_3.jpg">
                </div>
                <div class="comment-text">
                    <h6 class="comment-author">Chris Root</h6>
                    <div class="comment-metadata">
                        <a href="#" class="comment-date">July 17, 2017 at 12:48 pm</a>
                    </div>
                    <p>This template is so awesome. I didn’t expect so many features inside. E-commerce pages are very useful, you can launch your online store in few seconds. I will rate 5 stars.</p>
                    <a href="#" class="comment-reply">Reply</a>
                </div>
            </div>
        </li> <!-- end 3 comment -->

    </ul>
</div> <!-- end comments -->

<!-- Comment Form -->
<div id="respond" class="comment-respond">
    <div class="title-wrap">
        <h5 class="comment-respond__title section-title">Leave a Reply</h5>
    </div>
    <form id="form" class="comment-form" method="post" action="#">
        <p class="comment-form-comment">
            <label for="comment">Comment</label>
            <textarea id="comment" name="comment" rows="5" required="required"></textarea>
        </p>

        <div class="row row-20">
            <div class="col-lg-4">
                <label for="name">Name: *</label>
                <input name="name" id="name" type="text">
            </div>
            <div class="col-lg-4">
                <label for="comment">Email: *</label>
                <input name="email" id="email" type="email">
            </div>
            <div class="col-lg-4">
                <label for="comment">Website:</label>
                <input name="website" id="website" type="text">
            </div>
        </div>

        <p class="comment-form-submit">
            <input type="submit" class="btn btn-lg btn-color btn-button" value="Post Comment" id="submit-message">
        </p>

    </form>
</div> <!-- end comment form -->

</div> <!-- end content box -->
</div> <!-- end post content -->

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
                                <img data-src="img/content/post_small/post_small_1.jpg" src="img/empty.png" alt="" class="post-list-small__img--rounded lazyload">
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
                                <img data-src="img/content/post_small/post_small_2.jpg" src="img/empty.png" alt="" class="post-list-small__img--rounded lazyload">
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
                                <img data-src="img/content/post_small/post_small_3.jpg" src="img/empty.png" alt="" class="post-list-small__img--rounded lazyload">
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
                                <img data-src="img/content/post_small/post_small_4.jpg" src="img/empty.png" alt="" class="post-list-small__img--rounded lazyload">
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
                                                <img data-src="img/content/post_small/post_small_1.jpg" src="img/empty.png" alt="" class="post-list-small__img--rounded lazyload">
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
                                                <img data-src="img/content/post_small/post_small_2.jpg" src="img/empty.png" alt="" class="post-list-small__img--rounded lazyload">
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
<script src="{{ asset('js/twitterFetcher_min.js') }}"></script>
<script src="{{ asset('js/jquery.sticky-kit.min.js') }}"></script>

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