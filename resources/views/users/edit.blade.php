@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @method('PUT')
            @csrf
            <h1>Editar Usuário</h1>

            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="{{ $user->email }}">
            </div>

            <div class="form-check mb-3">
                <input type="hidden" name="is_admin" value="0">
                <input name="is_admin" value="1" class="form-check-input" type="checkbox" value="" id="flexCheckChecked" {{ $user->is_admin ? 'checked' : '' }}>
                <label class="form-check-label" for="flexCheckChecked">
                    É admin ?
                </label>
            </div>

            <a href="{{ route('users.index') }}" class="btn btn-primary">Voltar</a>
            <button type="submit" class="btn btn-success">Salvar</button>
        </form>

    </div>
@endsection
