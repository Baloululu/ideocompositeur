<div class="text-content">
    <div id="articles">
        @foreach($catContent as $cat)
            <div id="cat{{ $cat->id }}">
                @foreach($cat->articles as $article)

                    <Article-title title="{{ $article->articleContents[0]->title }}" image="{{ $article->image }}"></Article-title>

                    {{--<img src="{{ Storage::url($article->image) }}/small.jpg" alt="">--}}

                    <div class="w3-container">
                        <p>{{ $article->articleContents[0]->content }}</p>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
</div>
