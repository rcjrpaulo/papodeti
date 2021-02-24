@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Comentários</h1>
        <h4>Total: {{ count($comments) }}</h4>

        <a href="{{ route('comments.create') }}" class="btn btn-primary my-3">Criar</a>

        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Autor</th>
                <th scope="col">Artigo</th>
                <th scope="col">Comentário</th>
                <th scope="col">Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($comments as $comment)
                <tr>
                    <td>{{ $comment->id }}</td>
                    <td>{{ $comment->user->name ?? '' }}</td>
                    <td>{{ $comment->article->title ?? '' }}</td>
                    <td>{{ \Illuminate\Support\Str::limit($comment->content, 30) }}</td>
                    <td>
                        <a href="{{ route('comments.show', $comment->id) }}" class="btn btn-primary">Ver</a>
                        <a href="{{ route('comments.edit', $comment->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('comments.destroy', $comment->id) }}" method="POST" class="d-inline">
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
