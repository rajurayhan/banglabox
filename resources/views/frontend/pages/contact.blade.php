<?php
    use App\Http\Controllers\HomeController;
    $homeCTRLR      = new HomeController();
    $settingsAttr        = $homeCTRLR->gteSettings();

    // var_dump($settingsAttr);
?>
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
    .modal-backdrop.in {
        opacity: 0.9;
      }

    .modal {
        text-align: center;
        outline-width: 0px !important;
      }

      @media screen and (min-width: 768px) { 
        .modal:before {
          display: inline-block;
          vertical-align: middle;
          content: " ";
          height: 100%;
          outline-width: 0px !important;
        }
      }

      .modal-dialog {
        display: inline-block;
        text-align: left;
        vertical-align: middle;
        outline-width: 0px !important;
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
          <a href="{{ route('home') }}" class="breadcrumbs__url">হোম</a>
        </li>
        <!-- <li class="breadcrumbs__item">
          <a href="index-2.html" class="breadcrumbs__url">News</a>
        </li> -->
        <li class="breadcrumbs__item breadcrumbs__item--current">
          যোগাযোগ
        </li>
      </ul>
    </div>

    <div class="main-container container" id="main-container">            
      <!-- post content -->
      <div class="blog__content mb-72">
        <h1 class="page-title">যোগাযোগ</h1>
        
        <!-- Google Map -->
        <div id="google-map" class="gmap" data-address="Adbox Bangladesh, Dhaka, Bangladesh"></div>

        <div class="row justify-content-center">
          <div class="col-lg-8">
            <h4>Drop Us a Message</h4>
            <p>Don't hesitate to get in touch. We will reply you as soon as possible.</p>
            <ul class="contact-items">
              <li class="contact-item"><address>{{ $settingsAttr->address }}</address></li>
              <li class="contact-item"><a href="{{ $settingsAttr->contact }}">{{ $settingsAttr->contact }}</a></li>
              <li class="contact-item"><a href="mailto:{{ $settingsAttr->email }}">{{ $settingsAttr->email }}</a></li>
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
            <div class="row">
                <div class="col-md-12 center">
                  <div id="result">
                    
                  </div>
                </div>
            </div>
            <form onsubmit="return false" method="POST" id="contactForm">
            {{ csrf_field() }}
              <div class="form-group">
                <label for="name">Name: *</label>
                <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
              </div>

              <div class="form-group">
                <label for="email">Email: *</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
              </div>
              <div class="form-group">
                <label for="phone">Phone: *</label>
                <input type="text" class="form-control" id="phone" placeholder="Enter Phone" name="phone">
              </div>

              <div class="form-group">
                <label for="subject">Subject: *</label>
                <input type="text" class="form-control" id="subject" placeholder="Enter Subject" name="subject">
              </div>

              <div class="form-group">
                <label for="message">Message: *</label>
                <textarea name="message" id="message" class="form-controll" rows="7" width="100%"></textarea>
              </div>

              <button type="submit" class="btn btn-success" id="submit_btn">Submit</button>
            </form>

          </div>
        </div>
      </div> <!-- end post content -->
    </div> <!-- end main container -->

    <!-- Loader Modal -->
    <div class="modal" id="AjaxLoader">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <!-- <div class="modal-header">
            <h4 class="modal-title">Modal Heading</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div> -->

          <!-- Modal body -->
          <div class="modal-body">
            <img src='https://loading.io/spinners/double-ring/lg.double-ring-spinner.gif' style="max-width: 150px;" />
          </div>

          <!-- Modal footer -->
          <!-- <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div> -->

        </div>
      </div>
    </div>

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

  <!-- Toastr -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

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

    //Contact Us
    $("#submit_btn").click(function() {
          //get input field values
          var user_name       = $('input[name=name]').val();
          var user_email      = $('input[name=email]').val();
          var user_telephone      = $('input[name=phone]').val();
          var user_subject      = $('input[name=subject]').val();
          var user_message    = $('textarea[name=message]').val();

          //simple validation at client's end
          var post_data, output;
          var proceed = true;
          if(user_name==""){
              proceed = false;
          }
          if(user_email==""){
              proceed = false;
          }
          if(user_message=="") {
              proceed = false;
          }

          //everything looks good! proceed...
          if(proceed)
          {
                // Preloader
              $('#AjaxLoader').modal('show');

              $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': '<?= csrf_token() ?>'
                  }
              });
              $.ajax({
                  url: "{{ route('contactUs') }}",
                  type: 'GET',
                  datatype: 'JSON',
                  data: {user_name, user_email, user_telephone, user_subject, user_message},
              })
              .done(function(response) {
                  $('#AjaxLoader').modal('hide');
                  // var output = '<div class="alert-success" style="padding:10px; margin-bottom:25px;">'+response+'</div>';
                  var text    = response;
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

                  $("#contactForm").find("input, textarea").val("");
                  console.log(response);
              })
              .fail(function() {
                  // var output = '<div class="alert-danger" style="padding:10px; margin-bottom:25px;">Whoops! Something Wrong. Try Again!</div>';
                  var text    = response;
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
                  toastr.success(text, 'Error');
                  console.log(output);
              })

          }
      });

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