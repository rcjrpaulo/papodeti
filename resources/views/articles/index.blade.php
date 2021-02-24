@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Artigos</h1>
        <h4>Total: {{ count($articles) }}</h4>

        <a href="{{ route('articles.create') }}" class="btn btn-primary my-3">Criar</a>

        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Título</th>
                <th scope="col">Autor</th>
                <th scope="col">Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($articles as $article)
                <tr>
                    <td>{{ $article->id }}</td>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->user->name ?? '' }}</td>
                    <td>
                        <a href="{{ route('articles.show', $article->id) }}" class="btn btn-primary">Ver</a>
                        <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('articles.destroy', $article->id) }}" method="POST" class="d-inline">
                            @method('DELETE')
                            @csrf

                            <button class="btn btn-danger" type="submit">Apagar</button>
                        </form>
                        <a href="{{ route('article_categories.edit', $article->id) }}" class="btn btn-primary">
                            Categorias
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
