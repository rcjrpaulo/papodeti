@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{ route('categories.update', $category->id) }}" method="POST">
            @method('PUT')
            @csrf
            <h1>Editar Categoria</h1>

            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}">
            </div>


            <a href="{{ route('categories.index') }}" class="btn btn-primary">Voltar</a>
            <button submit class="btn btn-success">Salvar</button>
        </form>

    </div>
@endsection
