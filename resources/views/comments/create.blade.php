@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('comments.store') }}" method="POST">
            @csrf
            <h1>Criar Comentário</h1>

            <div class="mb-3">
                <label for="content" class="form-label">Comentário</label>
                <input type="text" class="form-control" id="content" name="content" value="">
            </div>

            <div class="mb-3">
                <label for="article_id" class="form-label">Artigo</label>
                <select name="article_id" class="form-select">
                    @foreach($articles as $article)
                        <option value="{{ $article->id }}">{{ $article->title }}</option>
                    @endforeach
                </select>
            </div>

            <a href="{{ route('comments.index') }}" class="btn btn-primary">Voltar</a>
            <button submit class="btn btn-success">Criar</button>
        </form>

    </div>
@endsection
