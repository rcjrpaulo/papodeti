@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{ route('comments.update', $comment->id) }}" method="POST">
            @method('PUT')
            @csrf
            <h1>Editar Comentário</h1>

            <div class="mb-3">
                <label for="name" class="form-label">Comentário</label>
                <input type="text" class="form-control" id="content" name="content" value="{{ $comment->content }}">
            </div>

            <div class="mb-3">
                <label for="user_id" class="form-label">Autor</label>
                <input type="text" class="form-control" id="user_id" name="user_id" value="{{ $comment->user->name ?? '' }}" disabled>
            </div>

            <div class="mb-3">
                <label for="article_id" class="form-label">Artigo</label>
                <select name="article_id" class="form-select">
                    @foreach($articles as $article)
                        <option {{ $article->id == $comment->article_id ? 'selected' : '' }} value="{{ $article->id }}">{{ $article->title }}</option>
                    @endforeach
                </select>
            </div>

            <a href="{{ route('comments.index') }}" class="btn btn-primary">Voltar</a>
            <button submit class="btn btn-success">Salvar</button>
        </form>

    </div>
@endsection
