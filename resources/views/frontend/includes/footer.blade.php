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
                

                <p class="copyright">
                    &copy; {{ date('Y') }} BanglaBox
                  </p>
              </aside>
            </div>

            <div class="col-lg-3 col-md-6">
              <aside class="widget widget_nav_menu">
                <h4 class="widget-title">Contact</h4>
                <ul>
                  <li><a href="mailto:info@banglabox.net">info@banglabox.net</a></li>
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
                <div class="socials socials--large socials--rounded mb-24">
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
                      <input type="email" name="email" placeholder="Your email" required="">
                    </div>
                    <div class="form-group">
                      <input type="submit" class="btn btn-lg btn-color" style="background-color: #808080" value="Sign Up">
                    </div>
                  </div>
                </form>
                <p style="margin-top: 63px;">Powered by <a href="http://adboxbd.com/" target="_blank">Adbox Bangladesh</a></p>                
              </aside>
            </div>

          </div>
        </div>    
      </div> <!-- end container -->
    </footer> <!-- end footer -->