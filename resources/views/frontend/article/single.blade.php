<?php
    use EasyBanglaDate\Types\BnDateTime;
    use EasyBanglaDate\Types\DateTime as EnDateTime;
    use App\Http\Controllers\HomeController;

    $created_at     = $article->created_at;

    $bongabda = new BnDateTime($created_at, new DateTimeZone('Asia/Dhaka'));
    // $bongabda->setDate(1398, 1, 1);

    // echo $bongabda->format('l jS F Y b h:i:s') . PHP_EOL ;
    // echo $bongabda->enFormat('l jS F Y h:i:s a') . PHP_EOL;
    // echo $bongabda->getDateTime()->format('l jS F Y b h:i:s'). PHP_EOL;
    $published =  $bongabda->getDateTime()->format('l, jS F, Y'). PHP_EOL;
    // echo $bongabda->getDateTime()->enFormat('l jS F Y h:i:s A') . PHP_EOL;
    // echo $created_at;

    $colorArray      = ['green', 'violet', 'purple', 'blue', 'red', 'cyan'];
    $randomColor     = array_rand($colorArray);
    $color           = $colorArray[$randomColor];

    
    $homeCTRLR      = new HomeController();
    $settingsAttr        = $homeCTRLR->gteSettings();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>BanglaBox || {{ $article->title }}</title>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="">
    <meta property="og:url"                content="{{ route('singleArticle', [$article->id, $article->slug]) }}" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="{{ $article->title }}" />
    <meta property="og:description"        content="{{ $article->excerpt }}" />
    <meta property="og:image"              content="{{ route('home') }}/uploads/featured/{{ $article->image }}" />

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,600,700%7CSource+Sans+Pro:400,600,700' rel='stylesheet'>

    <!-- Css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/font-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ route('home') }}/img/favicon.ico">
    <link rel="apple-touch-icon" href="{{ route('home') }}/img/apple-touch-icon.html">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ route('home') }}/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ route('home') }}/img/apple-touch-icon-114x114.png">

    <!-- Lazyload (must be placed in head in order to work) -->
    <script src="{{ route('home') }}/js/lazysizes.min.js"></script>

    <!-- Toastr --> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!-- <style type="text/css">
        body {
        font-family: 'Bangla', Arial, sans-serif !important;
        }
    </style> -->

</head>

<body class="bg-light single-post style-default style-rounded">
<div id="fb-root"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1&appId=940628459465939&autoLogAppEvents=1';
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<!-- Preloader -->
<div class="loader-mask">
    <div class="loader">
        <div></div>
    </div>
</div>

<!-- Bg Overlay -->
<div class="content-overlay"></div>

@include('frontend.includes.navigation')

<!-- Breadcrumbs -->
<div class="container">
    <ul class="breadcrumbs">
        <li class="breadcrumbs__item">
            <a href="{{ route('home') }}" class="breadcrumbs__url">হোম</a>
        </li>
        <li class="breadcrumbs__item">
            <a href="{{ route('categoryArticles', $article->category->slug) }}" class="breadcrumbs__url">{{ $article->category->name }}</a>
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
    {{-- <a href="{{ route('categoryArticles', $article->category->slug) }}" class="entry__meta-category entry__meta-category--label entry__meta-category--{{ $color }}">{{ $article->category->name }}</a> --}}
    <h1 class="single-post__entry-title">
        {{ $article->title }}
    </h1>

    <div class="entry__meta-holder">
        <ul class="entry__meta">
            <!-- <li class="entry__meta-author">
                <span>by</span>
                <a href="#">DeoThemes</a>
            </li> -->
            <li class="entry__meta-date">
                <!-- {{ date('d M, Y', strtotime($article->created_at)) }} -->
                {{ $published }}
                
            </li>
        </ul>

        <ul class="entry__meta">
            {{-- <li class="entry__meta-views">
                <i class="ui-eye"></i>
                <span>{{ $article->read_count }}</span>
            </li> --}}
            <!-- <li class="entry__meta-comments">
                <a href="#">
                    <i class="ui-chat-empty"></i>13
                </a>
            </li> -->
            <div class="fb-save" data-uri="{{ route('singleArticle', [$article->id, $article->slug]) }}" data-size="small"></div>
        </ul>
    </div>

    {{-- <div class="entry__meta-holder">
        <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{ route('singleArticle',[$article->id, $article->slug]) }}"><button class="btn btn-large singleShare shareFacebook">Share on Facebook</button></a>
        <a target="_blank" href="https://twitter.com/intent/tweet?text={{ $article->title }}&url={{ route("singleArticle", [$article->id, $article->slug]) }}&via=raju_rayhan"><button class="btn btn-large singleShare shareTwitter">Share on Twitter</button></a>
        <a target="_blank" href="https://pinterest.com/pin/create/button/?url=BanglaBox&media={{ route('home') }}/uploads/featured/{{ $article->image }}&description={{ $article->title }}"><button class="btn btn-large singleShare sharePinterest">Share on Pinterest</button></a>
    </div> --}}
</div> <!-- end entry header -->



<!-- <div class="entry__img-holder">
    <img src="{{ route('home') }}/uploads/featured/{{ $article->image }}" alt="" class="entry__img">
</div> -->

<div class="entry__article-wrap">

    <!-- Share -->
    <div class="entry__share">
        <div class="sticky-col">
            <div class="socials socials--rounded socials--small">
                <a class="social social-facebook" href="https://www.facebook.com/sharer/sharer.php?u={{ route('singleArticle',[$article->id, $article->slug]) }}" title="facebook" target="_blank" aria-label="facebook">
                    <i class="ui-facebook"></i>
                </a>
                <a class="social social-twitter" href='https://twitter.com/intent/tweet?text={{ $article->title }}&url={{ route("singleArticle", [$article->id, $article->slug]) }}&via=raju_rayhan' title="twitter" target="_blank" aria-label="twitter">
                    <i class="ui-twitter"></i>
                </a>
                <a class="social social-google-plus" href="https://plus.google.com/share?url={{ route('singleArticle', [$article->id, $article->slug]) }}" title="google" target="_blank" aria-label="google">
                    <i class="ui-google"></i>
                </a>
                <a class="social social-pinterest" href="https://pinterest.com/pin/create/button/?url=BanglaBox&media={{ route('home') }}/uploads/featured/{{ $article->image }}&description={{ $article->title }}" title="pinterest" target="_blank" aria-label="pinterest">
                    <i class="ui-pinterest"></i>
                </a>
            </div>
        </div>
    </div> <!-- share -->

    <div class="entry__article">
        {!! $article->description !!}

        <!-- tags -->
        <?php 
            $tagString  = $article->tags;
            $tags       = explode(',', $tagString);
        ?>
        {{-- <div class="entry__tags">
            <i class="ui-tags"></i>
            <span class="entry__tags-label">Tags:</span>
            <!-- <a href="#" rel="tag">mobile</a><a href="#" rel="tag">gadgets</a><a href="#" rel="tag">satelite</a> -->
            @foreach($tags as $tag)
            <a href="#" rel="tag">{{ $tag }}</a>
            @endforeach
            
            
        </div>  --}}
        <!-- end tags -->

    </div> <!-- end entry article -->
</div> <!-- end entry article wrap -->

<div class="entry__meta-holder">
    <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{ route('singleArticle',[$article->id, $article->slug]) }}"><button class="btn btn-large singleShare shareFacebook">Share on Facebook</button></a>
    <a target="_blank" href="https://twitter.com/intent/tweet?text={{ $article->title }}&url={{ route("singleArticle", [$article->id, $article->slug]) }}&via=raju_rayhan"><button class="btn btn-large singleShare shareTwitter">Share on Twitter</button></a>
    <a target="_blank" href="https://pinterest.com/pin/create/button/?url=BanglaBox&media={{ route('home') }}/uploads/featured/{{ $article->image }}&description={{ $article->title }}"><button class="btn btn-large singleShare sharePinterest">Share on Pinterest</button></a>
</div>


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
                <!-- <form class="mc4wp-form" method="post"> -->
                <form class="mc4wp-form" method="post" action="{{ route('subscribe') }}">
                {{ csrf_field() }}
                    <div class="mc4wp-form-fields">
                        <div class="form-group">
                            <input style="height: 35px;" type="email" name="email" placeholder="Your email" required="">
                        </div>
                        <div class="form-group">
                            <input style="height: 35px;" type="submit" class="btn btn-lg btn-color" value="Sign Up">
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
            <span class="entry-navigation__label">পূর্ববর্তী</span>
            @if (isset($previous))
            <div class="entry-navigation__link">
                <a href="{{ route('singleArticle',[$previous->id, $previous->slug]) }}" rel="next">{{ $previous->title }}</a>
            </div>
            @endif
        </div>
        <div class="entry-navigation--right">
            <span class="entry-navigation__label">পরবর্তী</span>
            <i class="ui-arrow-right"></i>
            @if (isset($next))
            <div class="entry-navigation__link">
                <a href="{{ route('singleArticle',[$next->id, $next->slug]) }}" rel="prev">{{ $next->title }}</a>
            </div>
            @endif
        </div>
    </div>
</nav>

<!-- Author -->
<!-- <div class="entry-author clearfix">
    <img alt="" data-src="img/content/single/author.jpg" src="img/empty.png" class="avatar lazyload">
    <div class="entry-author__info">
        <h6 class="entry-author__name">
            <a href="#">John Carpet</a>
        </h6>
        <p class="mb-0">But unfortunately for most of us our role as gardener has never been explained to us. And in misunderstanding our role, we have allowed seeds of all types, both good and bad, to enter our inner garden.</p>
    </div>
</div> -->

<!-- Related Posts -->
<section class="section related-posts mt-40 mb-0">
    <div class="title-wrap title-wrap--line title-wrap--pr">
        <h3 class="section-title">Related Articles</h3>
    </div>

    <!-- Slider -->
    <div id="owl-posts-3-items" class="owl-carousel owl-theme owl-carousel--arrows-outside">
    @foreach($relatedArticles as $related)
        <article class="entry thumb thumb--size-1">
            <div class="entry__img-holder thumb__img-holder" style="background-image: url('{{ route('home') }}/uploads/featured/{{ $related->image }}');">
                <div class="bottom-gradient"></div>
                <div class="thumb-text-holder">
                    <h2 class="thumb-entry-title">
                        <a href="{{ route('singleArticle',[$related->id, $related->slug]) }}">{{ $related->title }}</a>
                    </h2>
                </div>
                <a href="{{ route('singleArticle',[$related->id, $related->slug]) }}" class="thumb-url"></a>
            </div>
        </article>
    @endforeach
    </div> <!-- end slider -->

</section> <!-- end related posts -->

</article> <!-- end standard post -->

<!-- Comments -->
<div class="entry-comments">
    <div class="title-wrap title-wrap--line">
        <h3 class="section-title">comments</h3>
    </div>
    <div class="fb-comments" data-href="{{ route('singleArticle',[$article->id, $article->slug]) }}" data-numposts="5" data-width="100%"></div>
</div> <!-- end comments -->

<!-- Comment Form -->
<!-- <div id="respond" class="comment-respond">
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
</div>  -->
<!-- end comment form -->

</div> <!-- end content box -->
</div> <!-- end post content -->

@include('frontend.article.sidebar')

</div> <!-- end content -->
</div> <!-- end main container -->

@include('frontend.includes.footer')

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

    <!-- Toastr --> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
   
</script>

@if(session()->has('message'))
<script>
        var text    = '{{ session()->get("message") }}';
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-bottom-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
            }
        toastr.success(text, 'Success');
</script>
@endif

@if(count($errors)>0)
   @foreach($errors->all() as $error)
        <script>
            var text = '{{ $error }}';
            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-bottom-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
                }
            toastr.error(text, 'Error');
        </script>
   @endforeach
@endif

</body>

</html>