<!DOCTYPE html>
<html lang="en">
<head>
    <title>BanglaBox || {{ $category->name }}</title>

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

@include('frontend.article.sidebar')

</div> <!-- end content -->
</div> <!-- end main container -->

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