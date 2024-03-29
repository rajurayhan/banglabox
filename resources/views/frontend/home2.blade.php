<?php
    use EasyBanglaDate\Types\BnDateTime;
    use EasyBanglaDate\Types\DateTime as EnDateTime;
    use App\Http\Controllers\HomeController;

    $homeCTRLR      = new HomeController();
    $settingsAttr        = $homeCTRLR->gteSettings();

    function getPublishDateBn($date){
      $bongabda       = new BnDateTime($date, new DateTimeZone('Asia/Dhaka'));
      $published_at   = $bongabda->getDateTime()->format('jS F, Y'). PHP_EOL;

      return $published_at;
    }

    
    
?>
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
 <!-- Toastr --> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
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

    @include('frontend.includes.navigation')
  

    <!-- Trending Now -->
    <div class="container">
      <div class="trending-now">
        <span class="trending-now__label">
          <i class="ui-flash"></i>
        LATEST ARTICLES</span>
        <div class="newsticker">
          <ul class="newsticker__list">
          @foreach($latestPosts as $latest)
            <li class="newsticker__item"><a href="{{ route('singleArticle', [$latest->id, $latest->slug]) }}" class="newsticker__item-url">{{ $latest->title }}</a></li>
          @endforeach
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
                            <a href="{{ route('singleArticle', [$headline->id, $headline->slug]) }}">
                                <img src="{{ route('home') }}/uploads/featured/{{ $headline->image }}" alt="" class="entry__img">
                            </a>
                            <a href="{{ route('categoryArticles', $headline->category->slug) }}" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--green">{{ $headline->category->name }}</a>
                        </div>

                        <div class="entry__body card__body">
                            <h2 class="entry__title">
                                <a href="{{ route('singleArticle', [$headline->id, $headline->slug]) }}">{{ $headline->title }}</a>
                            </h2>
                            <ul class="entry__meta">
                                <li class="entry__meta-author">
                                    <span>by</span>
                                    <a href="#">BanglaBox</a>
                                </li>
                                <li class="entry__meta-date">
                                    {{ getPublishDateBn($headline->created_at) }}
                                </li>
                            </ul>
                        </div>
                    </article>
                </div> <!-- end large post -->
            </div>

          <div class="col-lg-6">

          
            @foreach($featured as $feat)
            <!-- Small post -->
            <div class="featured-posts-grid__item featured-posts-grid__item--sm">
              <article class="entry card post-list featured-posts-grid__entry">
                <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url({{ route('home') }}/uploads/featured/{{ $feat->image }})">
                  <a href="{{ route('singleArticle', [$feat->id, $feat->slug]) }}" class="thumb-url"></a>
                  <img src="{{ route('home') }}/uploads/featured/{{ $feat->image }}" alt="" class="entry__img d-none">
                  <a href="{{ route('categoryArticles', [$feat->category->slug]) }}" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">{{ $feat->category->name }}</a>
                </div>

                <div class="entry__body post-list__body card__body">  
                  <h2 class="entry__title">
                    <a href="{{ route('singleArticle', [$feat->id, $feat->slug]) }}">{{ $feat->title }}</a>
                  </h2>
                  <ul class="entry__meta">
                    <li class="entry__meta-author">
                      <span>by</span>
                      <a href="#">BanglaBox</a>
                    </li>
                    <li class="entry__meta-date">
                    {{ getPublishDateBn($feat->created_at) }}
                    </li>              
                  </ul>
                </div>
              </article>
            </div> 
            @endforeach            
            <!-- end post -->

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
            @foreach($randoms as $random)
            <?php 
                  $bongabda   = new BnDateTime($random->created_at, new DateTimeZone('Asia/Dhaka'));
                  $published  =  $bongabda->getDateTime()->format('jS F, Y'). PHP_EOL;
            ?>
            <article class="entry">
              <div class="entry__img-holder">
                <a href="#">
                  <div class="thumb-container thumb-60">
                    <img data-src="{{ route('home') }}/uploads/featured/{{ $random->image }}" src="{{ route('home') }}/uploads/featured/{{ $random->image }}" class="entry__img lazyload" alt="">
                  </div>
                </a>
              </div>

              <div class="entry__body">
                <div class="entry__header">
                  
                  <h2 class="entry__title">
                    <a href="#">{{ $random->title }}</a>
                  </h2>
                  <ul class="entry__meta">
                    <!-- <li class="entry__meta-author">
                      <span>by</span>
                      <a href="#">BanglaBox</a>
                    </li> -->
                    <li class="entry__meta-date">
                        {{ $published }}
                    </li>
                  </ul>
                  <!-- <ul class="entry__meta">
                    <li class="entry__meta-rating">
                      <i class="ui-star"></i>
                      <i class="ui-star"></i>
                      <i class="ui-star"></i>
                      <i class="ui-star"></i>
                      <i class="ui-star-empty"></i>
                    </li>
                  </ul> -->
                </div>
              </div>
            </article>
            @endforeach
            

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

@include('frontend.includes.footer')

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

  <!-- Toastr --> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

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