    <!-- Footer -->
    <footer class="footer footer--dark">
      <div class="container">
        <div class="footer__widgets">
          <div class="row">

            <div class="col-lg-3 col-md-6">
              <aside class="widget widget-logo">
                <a href="{{ route('home') }}">
                  <img src="img/logo_default_white.png" srcset="img/logo_default_white.png 1x, img/logo_default_white@2x.png 2x" class="logo__img" alt="">
                </a>
                <p class="copyright">
                  &copy; {{ date('Y') }} BanglaBox | Made by <a href="http://adboxbd.com/">Adbox</a>
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
                  <li><a href="{{ route('about') }}">About</a></li>
                  <!-- <li><a href="#">News</a></li>
                  <li><a href="#">Advertise</a></li>
                  <li><a href="#">Support</a></li>
                  <li><a href="#">Features</a></li> -->
                  <li><a href="{{ route('contact') }}">Contact</a></li>
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
                <form class="mc4wp-form" method="post" action="{{ route('subscribe') }}">
                {{ csrf_field() }}
                  <div class="mc4wp-form-fields">
                    <div class="form-group">
                      <input type="email" name="email" placeholder="Your email" required="">
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