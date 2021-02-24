@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalhes do Categoria</h1>

        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}" disabled>
        </div>

        <a href="{{ route('categories.index') }}" class="btn btn-primary">Voltar</a>

    </div>
@endsection
