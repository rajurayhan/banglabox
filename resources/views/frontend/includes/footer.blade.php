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
                  <img src="{{ route('home') }}/img/{{ $settingsAttr->logo }}" srcset="{{ route('home') }}/img/{{ $settingsAttr->logo }}" class="logo__img" alt="">
                </a>
                <p class="copyright">
                  &copy; {{ date('Y') }} BanglaBox | Made by <a href="http://adboxbd.com/">Adbox</a>
                </p>
                <div class="socials socials--large socials--rounded mb-24">
                  <a href="https://facebook.com/{{ $settingsAttr->facebook }}" class="social social-facebook" aria-label="facebook"><i class="ui-facebook"></i></a>
                  <a href="https://twitter.com/{{ $settingsAttr->twitter }}" class="social social-twitter" aria-label="twitter"><i class="ui-twitter"></i></a>
                  <a href="https://plus.google.com/+{{ $settingsAttr->google_plus }}" class="social social-google-plus" aria-label="google+"><i class="ui-google"></i></a>
                  <a href="https://youtube.com/channel/{{ $settingsAttr->youtube }}" class="social social-youtube" aria-label="youtube"><i class="ui-youtube"></i></a>
                  <a href="https://instagram.com/{{ $settingsAttr->instagram }}" class="social social-instagram" aria-label="instagram"><i class="ui-instagram"></i></a>
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

            <?php
                use App\Http\Controllers\HomeController;
                $homeCTRLR      = new HomeController();

                $popularArticles  = $homeCTRLR->getFooterArticles();
            ?>

            <div class="col-lg-4 col-md-6">
              <aside class="widget widget-popular-posts">
                <h4 class="widget-title">Popular Posts</h4>
                <ul class="post-list-small">
                @foreach($popularArticles as $popular)

                <?php

                  $bongabda       = new BnDateTime($popular->created_at, new DateTimeZone('Asia/Dhaka'));
                  $published_at   = $bongabda->getDateTime()->format('jS F, Y'). PHP_EOL;
                ?>
                  <li class="post-list-small__item">
                    <article class="post-list-small__entry clearfix">
                      <div class="post-list-small__img-holder">
                        <div class="thumb-container thumb-100">
                          <a href="{{ route('singleArticle', [$popular->id, $popular->slug]) }}">
                            <img data-src="{{ route('home') }}/uploads/featured/{{ $popular->image }}" src="{{ route('home') }}/uploads/featured/{{ $popular->image }}" alt="" class="post-list-small__img--rounded lazyload">
                          </a>
                        </div>
                      </div>
                      <div class="post-list-small__body">
                        <h3 class="post-list-small__entry-title">
                          <a href="{{ route('singleArticle', [$popular->id, $popular->slug]) }}">{{ $popular->title }}</a>
                        </h3>
                        <ul class="entry__meta">
                          <li class="entry__meta-author">
                            <span>by</span>
                            <a href="#">BanglaBox</a>
                          </li>
                          <li class="entry__meta-date">
                            {{ $published_at }}
                          </li>
                        </ul>
                      </div>                  
                    </article>
                  </li>
                @endforeach  
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