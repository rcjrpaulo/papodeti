@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalhes do Artigo</h1>

        <div class="mb-3">
            <label for="name" class="form-label">Título</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $article->title }}" disabled>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Conteúdo</label>
            <textarea class="form-control" id="content" name="content" rows="3" disabled>{{ $article->content }}</textarea>
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Autor</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $article->title }}" disabled>
        </div>

        <a href="{{ route('articles.index') }}" class="btn btn-primary">Voltar</a>

    </div>
@endsection
