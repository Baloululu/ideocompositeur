<div class="text-content">
    <div id="articles">
        @foreach($catContent as $cat)
            <div id="cat{{ $cat->id }}">
                @foreach($cat->articles as $article)

                    <Article-title title="{{ $article->articleContents[0]->title }}" image="{{ Storage::url($article->image) }}/small.jpg"></Article-title>

                    <div class="w3-container">
                        {!! $article->articleContents[0]->content !!}
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
</div>
