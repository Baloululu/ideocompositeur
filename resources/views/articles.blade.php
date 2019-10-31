<div class="text-content">
    @foreach($catContent as $cat)
        @foreach($cat->articles as $article)
            <img src="/storage/{{ $article->image }}/small.jpg" alt="">
            <h1>{{ $article->articleContents[0]->title }}</h1>

            <p>{{ $article->articleContents[0]->content }}</p>
        @endforeach
    @endforeach
</div>
