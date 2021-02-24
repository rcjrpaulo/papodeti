@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{ route('category_articles.update', $category->id) }}" method="POST">
            @method('PUT')
            @csrf
            <h1>Editar Artigos da Categoria {{ $category->name }}</h1>

            <div class="card">
                <div class="card-body">
                    @foreach($articles as $article)
                        <div class="form-check mb-3">
                            <input
                                name="articles[]"
                                value="{{ $article->id }}"
                                class="form-check-input"
                                type="checkbox"
                                id="{{ $article->id }}"
                                {{ in_array($article->id, $category->articles->pluck('id')->toArray()) ? 'checked' : '' }}
                            >
                            <label class="form-check-label" for="{{ $article->id }}">
                                {{ $article->title }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="mt-3">
                <a href="{{ route('categories.index') }}" class="btn btn-primary">Voltar</a>
                <button type="submit" class="btn btn-success">Salvar</button>
            </div>
        </form>

    </div>
@endsection
