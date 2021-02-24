@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalhes do Comentário</h1>

        <div class="mb-3">
            <label for="content" class="form-label">Comentário</label>
            <input type="text" class="form-control" id="content" name="content" value="{{ $comment->content }}" disabled>
        </div>

        <div class="mb-3">
            <label for="user_id" class="form-label">Autor</label>
            <input type="text" class="form-control" id="user_id" name="user_id" value="{{ $comment->user->name ?? '' }}" disabled>
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Artigo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $comment->article->title ?? '' }}" disabled>
        </div>

        <a href="{{ route('comments.index') }}" class="btn btn-primary">Voltar</a>

    </div>
@endsection
