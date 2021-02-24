@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Artigos</h1>

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
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
