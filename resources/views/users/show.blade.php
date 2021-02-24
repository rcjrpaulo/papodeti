@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalhes do Usuário</h1>

        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" disabled>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" value="{{ $user->email }}" disabled>
        </div>

        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" {{ $user->is_admin ? 'checked' : '' }}>
            <label class="form-check-label" for="flexCheckChecked">
                É admin ?
            </label>
        </div>

        <a href="{{ route('users.index') }}" class="btn btn-primary">Voltar</a>

    </div>
@endsection
