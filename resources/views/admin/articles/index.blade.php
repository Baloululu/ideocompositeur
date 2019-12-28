@extends('admin.default')

@section('content')
    @foreach($catContent as $site => $cats)
        <h1>{{ $site }}</h1>
        <table class="w3-table-all">
            <tr>
                <th>Titre</th>
                <th>Catégorie</th>
                <th>En ligne</th>
                <th>Actions</th>
            </tr>
            @foreach($cats as $cat)
                @foreach($cat->articles as $article)

                    <tr>
                        <td>{{ $article->articleContents[0]->title }}</td>
                        <td>{{ $cat->titles[0]->title }}</td>
                        <td>
                            @if($article->online)
                                <i class="fas fa-check-circle w3-text-green w3-xlarge"></i>
                            @else
                                <i class="fas fa-times-circle w3-text-red w3-xlarge"></i>
                            @endif
                        </td>
                        <td>
                            <div class="w3-bar">
                                {{ Form::open(["route" => ["articles.destroy", $article->id], "method" => "delete", "onsubmit" => 'return confirm("Voulez-vous vraiment supprimer cet article ?");']) }}
                                <a href="{{ route('articles.edit', $article->id) }}" class="w3-button w3-blue w3-round">Modifier</a>
                                {{ Form::button('<i class="fas fa-trash-alt"></i>', ["type" => "submit", "class" => "w3-button w3-red w3-round"]) }}
                                {{ Form::close() }}
                            </div>
                        </td>
                    </tr>

                @endforeach
            @endforeach
        </table>

        <a href="{{ route('articles.create') }}" class="w3-button w3-green w3-round w3-margin-top">Ajouter</a>
    @endforeach
@endsection
