@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('articles.update', $article->id) }}" method="POST">
            @csrf
            <h1>Editar Artigo</h1>

            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $article->name }}">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="{{ $article->email }}">
            </div>

            <div class="form-check mb-3">
                <input type="hidden" name="is_admin" value="0">
                <input name="is_admin" value="1" class="form-check-input" type="checkbox" value="" id="flexCheckChecked" {{ $article->is_admin ? 'checked' : '' }}>
                <label class="form-check-label" for="flexCheckChecked">
                    É admin ?
                </label>
            </div>

            <a href="{{ route('articles.index') }}" class="btn btn-primary">Voltar</a>
            <button submit class="btn btn-success">Criar</button>
        </form>

    </div>
@endsection
