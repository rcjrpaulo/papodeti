@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <h1>Criar Categoria</h1>

            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" name="name" value="">
            </div>

            <a href="{{ route('categories.index') }}" class="btn btn-primary">Voltar</a>
            <button submit class="btn btn-success">Criar</button>
        </form>

    </div>
@endsection
