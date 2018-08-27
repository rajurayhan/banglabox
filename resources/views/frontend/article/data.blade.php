<?php
    use EasyBanglaDate\Types\BnDateTime;
    use EasyBanglaDate\Types\DateTime as EnDateTime;
    
?>
@foreach($articles as $article)
<?php
    $created_at     = $article->created_at;

    $bongabda   = new BnDateTime($created_at, new DateTimeZone('Asia/Dhaka'));
    $published  =  $bongabda->getDateTime()->format('jS F, Y'). PHP_EOL;

    $colorArray      = ['green', 'violet', 'purple', 'blue', 'red', 'cyan'];
    $randomColor     = array_rand($colorArray);
    $color           = $colorArray[$randomColor];
?>

    <article class="entry card post-list">
        <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url({{ route('home') }}/uploads/featured/{{ $article->image }})">
        <a href="{{ route('singleArticle',[$article->id, $article->slug]) }}" class="thumb-url"></a>
        <img src="img/content/list/list_post_1.jpg" alt="" class="entry__img d-none">
        <a href="{{ route('categoryArticles', $article->category->slug) }}" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--{{$color}}">{{ $article->category->name }}</a>
        </div>

        <div class="entry__body post-list__body card__body">
        <div class="entry__header">
            <h2 class="entry__title">
            <a href="{{ route('singleArticle',[$article->id, $article->slug]) }}">{{ $article->title }}</a>
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
        </div>        
        <div class="entry__excerpt">
            <p>{{ $article->excerpt }} ...</p>
        </div>
        </div>
    </article>
@endforeach