@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{ route('article_categories.update', $article->id) }}" method="POST">
            @method('PUT')
            @csrf
            <h1>Editar Categorias do Artigo {{ $article->title }}</h1>

            <div class="card">
                <div class="card-body">
                    @foreach($categories as $category)
                        <div class="form-check mb-3">
                            <input
                                name="categories[]"
                                value="{{ $category->id }}"
                                class="form-check-input"
                                type="checkbox"
                                id="{{ $category->id }}"
                                {{ in_array($category->id, $article->categories->pluck('id')->toArray()) ? 'checked' : '' }}
                            >
                            <label class="form-check-label" for="{{ $category->id }}">
                                {{ $category->name }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="mt-3">
                <a href="{{ route('articles.index') }}" class="btn btn-primary">Voltar</a>
                <button type="submit" class="btn btn-success">Salvar</button>
            </div>
        </form>

    </div>
@endsection
