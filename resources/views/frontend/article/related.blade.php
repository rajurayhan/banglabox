<?php
    use EasyBanglaDate\Types\BnDateTime;
    use EasyBanglaDate\Types\DateTime as EnDateTime;
    
?>
@foreach($relatedArticles as $article)
<?php
    $created_at     = $article->created_at;

    $bongabda   = new BnDateTime($created_at, new DateTimeZone('Asia/Dhaka'));
    $published  =  $bongabda->getDateTime()->format('jS F, Y'). PHP_EOL;

    $colorArray      = ['blue', 'green', 'violet', 'purple', 'cyan', 'red'];
    $randomColor     = array_rand($colorArray);
    $color           = $colorArray[$randomColor];
?>
<div class="col-md-6">
    <article class="entry card">
        <div class="entry__img-holder card__img-holder">
        <a href="{{ route('singleArticle', [$article->id, $article->slug]) }}">
            <div class="thumb-container thumb-70">
            <img data-src="{{ route('home') }}/uploads/featured/{{ $article->image }}" src="{{ route('home') }}/img/logo-footer.png" onerror="this.src='{{ route('home') }}/img/logo-footer.png'" class="entry__img lazyload" alt="" />
            </div>
        </a>
        {{-- <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--purple">fashion</a> --}}
        </div>

        <div class="entry__body card__body">
        <div class="entry__header">
            
            <h2 class="entry__title">
            <a href="{{ route('singleArticle', [$article->id, $article->slug]) }}">{{ $article->title }}</a>
            </h2>
            <ul class="entry__meta">
            <li class="entry__meta-author">
                <span>by</span>
                <a href="#">BanglaBox</a>
            </li>
            <li class="entry__meta-date">
                {{ $published }}
            </li>
            </ul>
        </div>
        <div class="entry__excerpt">
            <p>{{ mb_substr($article->excerpt, 0, 50) }} ...</p>
        </div>
        </div>
    </article>
</div> 
@endforeach