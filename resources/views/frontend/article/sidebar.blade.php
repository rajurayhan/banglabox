<?php
    use App\Http\Controllers\ArticleController;
    use EasyBanglaDate\Types\BnDateTime;
    use EasyBanglaDate\Types\DateTime as EnDateTime;

    $articleCtrle   = new ArticleController();

    $popularArticles        = $articleCtrle->popularArticles();

    // var_dump($popularArticles);
?>
<!-- Sidebar -->
<aside class="col-lg-4 sidebar sidebar--right">

    <!-- Widget Popular Posts -->
    <aside class="widget widget-popular-posts">
        <h4 class="widget-title">Popular Posts</h4>
        <ul class="post-list-small">
        @foreach($popularArticles as $popArticle)
        <?php
            $bongabda = new BnDateTime($popArticle->created_at, new DateTimeZone('Asia/Dhaka'));

            $published =  $bongabda->getDateTime()->format('jS F, Y'). PHP_EOL;
        ?>
            <li class="post-list-small__item">
                <article class="post-list-small__entry clearfix">
                    <div class="post-list-small__img-holder">
                        <div class="thumb-container thumb-100">
                            <a href="{{ route('singleArticle',[$popArticle->id, $popArticle->slug]) }}">
                                <img data-src="{{ route('home') }}/uploads/featured/{{ $popArticle->image }}" src="{{ route('home') }}/uploads/featured/{{ $popArticle->image }}" alt="" class="post-list-small__img--rounded lazyload">
                            </a>
                        </div>
                    </div>
                    <div class="post-list-small__body">
                        <h3 class="post-list-small__entry-title">
                        <a href="{{ route('singleArticle',[$popArticle->id, $popArticle->slug]) }}">{{ $popArticle->title }}</a>
                        </h3>
                        <ul class="entry__meta">
                            <!-- <li class="entry__meta-author">
                                <span>by</span>
                                <a href="#">DeoThemes</a>
                            </li> -->
                            <li class="entry__meta-date">
                                {{ $published }}
                            </li>
                        </ul>
                    </div>
                </article>
            </li>
        @endforeach
        </ul>
    </aside> <!-- end widget popular posts -->

    <!-- Widget Newsletter -->
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
    </aside> <!-- end widget newsletter -->

    <!-- Widget Socials -->
    <aside class="widget widget-socials">
        <h4 class="widget-title">Let's hang out on social</h4>
        <div class="socials socials--wide socials--large">
            <div class="row row-16">
                <div class="col">
                    <a class="social social-facebook" href="https://facebook.com/{{ $settingsAttr->facebook }}" title="facebook" target="_blank" aria-label="facebook">
                        <i class="ui-facebook"></i>
                        <span class="social__text">Facebook</span>
                    </a><!--
                  --><a class="social social-twitter" href="https://twitter.com/{{ $settingsAttr->twitter }}" title="twitter" target="_blank" aria-label="twitter">
                        <i class="ui-twitter"></i>
                        <span class="social__text">Twitter</span>
                    </a><!--
                  --><a class="social social-youtube" href="https://youtube.com/channel/{{ $settingsAttr->youtube }}" title="youtube" target="_blank" aria-label="youtube">
                        <i class="ui-youtube"></i>
                        <span class="social__text">Youtube</span>
                    </a>
                </div>
                <div class="col">
                    <a class="social social-google-plus" href="https://plus.google.com/+{{ $settingsAttr->google_plus }}" title="google" target="_blank" aria-label="google">
                        <i class="ui-google"></i>
                        <span class="social__text">Google+</span>
                    </a><!--
                  --><a class="social social-instagram" href="https://instagram.com/{{ $settingsAttr->instagram }}" title="instagram" target="_blank" aria-label="instagram">
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