<!DOCTYPE html>
<html lang="en">
<head>
    <title>BanglaBox || Contact</title>

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

<body class="style-default style-rounded">

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
          <a href="{{ route('home') }}" class="breadcrumbs__url">Home</a>
        </li>
        <!-- <li class="breadcrumbs__item">
          <a href="index-2.html" class="breadcrumbs__url">News</a>
        </li> -->
        <li class="breadcrumbs__item breadcrumbs__item--current">
          Contact
        </li>
      </ul>
    </div>

    <div class="main-container container" id="main-container">            
      <!-- post content -->
      <div class="blog__content mb-72">
        <h1 class="page-title">Contact Us</h1>
        
        <!-- Google Map -->
        <div id="google-map" class="gmap" data-address="Adbox Bangladesh, Dhaka, Bangladesh"></div>

        <div class="row justify-content-center">
          <div class="col-lg-8">
            <h4>Drop Us a Message</h4>
            <p>Don't hesitate to get in touch. We will reply you as soon as possible.</p>
            <ul class="contact-items">
              <li class="contact-item"><address>Centre Inc. CA 48792 Star Apple ave. 54</address></li>
              <li class="contact-item"><a href="tel:+1-800-1554-456-123">+ 1 (800) 155 4561</a></li>
              <li class="contact-item"><a href="mailto:themesupport@gmail.com">themesupport@gmail.com</a></li>
            </ul>            

            <!-- Contact Form -->
            <!-- <form id="contact-form" class="contact-form mt-30 mb-30" method="post" action="{{ route('contactUs') }}">
            {{ csrf_field() }}
              <div class="contact-name">
                <label for="name">Name <abbr title="required" class="required">*</abbr></label>
                <input name="name" id="name" type="text" class="form-control">
              </div>
              <div class="contact-email">
                <label for="email">Email <abbr title="required" class="required">*</abbr></label>
                <input name="email" id="email" type="email">
              </div>
              <div class="contact-subject">
                <label for="email">Subject</label>
                <input name="subject" id="subject" type="text">
              </div>
              <div class="contact-message">
                <label for="message">Message <abbr title="required" class="required">*</abbr></label>
                <textarea id="message" name="message" rows="7" required="required"></textarea>
              </div>

              <input type="submit" class="btn btn-lg btn-color btn-button" value="Send Message" id="submit-message">
              <div id="msg" class="message"></div>
            </form> -->
            <form action="{{ route('contactUs') }}" method="POST">
            {{ csrf_field() }}
              <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
              </div>

              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
              </div>
              <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" class="form-control" id="phone" placeholder="Enter Phone" name="phone">
              </div>

              <div class="form-group">
                <label for="message">Message:</label>
                <textarea names="message" id="message" class="form-controll" rows="7" width="100%"></textarea>
              </div>

              <button type="submit" class="btn btn-success">Submit</button>
            </form>

          </div>
        </div>
      </div> <!-- end post content -->
    </div> <!-- end main container -->

    @include('frontend.includes.footer')

    <div id="back-to-top">
      <a href="#top" aria-label="Go to top"><i class="ui-arrow-up"></i></a>
    </div>

  </main> <!-- end main-wrapper -->

  
  <!-- jQuery Scripts -->

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


  <script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>
  <script type="text/javascript" src="{{ asset('js/gmap3.min.js') }}"></script>

  <script src="{{ asset('js/scripts.js') }}"></script>

  <!-- Google Map -->
  <script type="text/javascript">
    $(document).ready( function(){

      var gmapDiv = $("#google-map");
      var gmapMarker = gmapDiv.attr("data-address");

      gmapDiv.gmap3({
        zoom: 16,
        address: gmapMarker,
        oomControl: true,
        navigationControl: true,
        scrollwheel: false,
        styles: [
          {
          "featureType":"all",
          "elementType":"all",
            "stylers":[
              { "saturation":"0" }
            ]
        }]
      })
      .marker({
        address: gmapMarker,
        icon: "img/map_pin.png"
      })
      .infowindow({
        content: "Adbox Bangladesh, Dhaka, Bangladesh"
      })
      .then(function (infowindow) {
        var map = this.get(0);
        var marker = this.get(1);
        marker.addListener('click', function() {
          infowindow.open(map, marker);
        });
      });
    });
  </script>

</body>
</html>