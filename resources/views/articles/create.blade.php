@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('articles.store') }}" method="POST">
            @csrf
            <h1>Criar Artigo</h1>

            <div class="mb-3">
                <label for="name" class="form-label">Título</label>
                <input type="text" class="form-control" id="title" name="title" value="">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Conteúdo</label>
                <textarea class="form-control" id="content" name="content" rows="3"></textarea>
            </div>


            <a href="{{ route('articles.index') }}" class="btn btn-primary">Voltar</a>
            <button type="submit" class="btn btn-success">Criar</button>
        </form>

    </div>
@endsection
