<?php
use EasyBanglaDate\Types\BnDateTime;
use EasyBanglaDate\Types\DateTime as EnDateTime;
?>

<!-- Footer -->
<footer class="footer footer--dark">
<div class="container">
<div class="footer__widgets">
<div class="row">

<div class="col-lg-3 col-md-6">
<aside class="widget widget-logo">
<a href="{{ route('home') }}">
<img src="{{ route('home') }}/img/logo-footer.png" srcset="{{ route('home') }}/img/logo-footer.png" class="logo__img" alt="">
</a>                


{{-- <p class="copyright">
&copy; {{ date('Y') }} BanglaBox
</p> --}}
</aside>
</div>

<div class="col-lg-3 col-md-6">
<aside class="widget widget_nav_menu">
<h4 class="widget-title">Contact</h4>
<ul>
<li><a href="mailto:info@banglabox.net" style="color: #808080">info@banglabox.net</a></li>
</ul>
</aside>
</div>  

<?php
use App\Http\Controllers\HomeController;
$homeCTRLR      = new HomeController();

$popularArticles  = $homeCTRLR->getFooterArticles();
?>

<div class="col-lg-3 col-md-6">
<aside class="widget widget-popular-posts">
<h4 class="widget-title">Let's Be Social</h4>
<div class="socials socials--medium socials--rounded mb-24">
<a href="https://facebook.com/{{ $settingsAttr->facebook }}" class="social social-facebook" aria-label="facebook"><i class="ui-facebook"></i></a>
<a href="https://twitter.com/{{ $settingsAttr->twitter }}" class="social social-twitter" aria-label="twitter"><i class="ui-twitter"></i></a>
<a href="https://plus.google.com/+{{ $settingsAttr->google_plus }}" class="social social-google-plus" aria-label="google+"><i class="ui-google"></i></a>
<a href="https://youtube.com/channel/{{ $settingsAttr->youtube }}" class="social social-youtube" aria-label="youtube"><i class="ui-youtube"></i></a>
<a href="https://instagram.com/{{ $settingsAttr->instagram }}" class="social social-instagram" aria-label="instagram"><i class="ui-instagram"></i></a>
</div>
</aside>              
</div>

<div class="col-lg-3 col-md-6">
<aside class="widget widget_mc4wp_form_widget">
<h4 class="widget-title">Subscribe</h4>
{{-- <p class="newsletter__text">
<i class="ui-email newsletter__icon"></i>
Subscribe for our daily news
</p> --}}
<form class="mc4wp-form" method="post" action="{{ route('subscribe') }}">
{{ csrf_field() }}
<div class="mc4wp-form-fields">
<div class="form-group">
<input style="height: 35px;" type="email" name="email" placeholder="Your email" required="">
</div>
<div class="form-group">
<input  type="submit" class="btn btn-lg btn-color" style="background-color: #808080; height: 35px;" value="Sign Up">
</div>
</div>
</form>
                
</aside>
</div>

</div>
<div class="row">
  <div class="col-md-3">
  </div>
  <div class="col-md-6">
    <p style="text-align: center;">&copy; {{ date('Y') }} BanglaBox || Powered by <a href="http://adboxbd.com/" target="_blank" style="color: #f37545">Adbox Bangladesh</a><a target="_blank" style="color: #171821" href='http://m.me/raju.rayhan'>Raju Rayhan</a></p>
  </div>
  <div class="col-md-3">
  </div>
</div>
</div>    
</div> <!-- end container -->
</footer> <!-- end footer -->