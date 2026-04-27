@extends('layouts.auth')

@section('content')

<h1 class="h2 mt-auto">Redefinir senha</h1>

<div class="nav fs-sm mb-3 mb-lg-4">
    Já tenho uma conta
    <a class="nav-link text-decoration-underline p-0 ms-2" href="{{ route('login') }}">Entrar</a>
</div>

<!-- Form -->
<form class="needs-validation" novalidate action="{{ route('password.update') }}" method="POST">
    @csrf

    <input type="hidden" name="token" value="{{ request()->token }}">

    <div class="position-relative mb-4">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" id="email" name="email" value="{{ request()->email }}" required readonly>
        <div class="invalid-tooltip bg-transparent py-0">Digite um endereço de email válido!</div>
        @error('email')
        <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-4">
        <label for="password" class="form-label">Senha</label>
        <div class="password-toggle">
            <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" id="password" name="password" minlength="8" placeholder="Mínimo 8 caracteres" required>
            <div class="invalid-tooltip bg-transparent py-0">A senha não atende aos critérios exigidos!</div>
            @error('password')
            <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
            <label class="password-toggle-button fs-lg" aria-label="Mostrar/ocultar senha">
                <input type="checkbox" class="btn-check">
            </label>
        </div>
    </div>

    <div class="mb-4">
        <label for="password_confirmation" class="form-label">Confirmar Senha</label>
        <div class="password-toggle">
            <input type="password" class="form-control form-control-lg @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation" minlength="8" placeholder="Mínimo 8 caracteres" required>
            <div class="invalid-tooltip bg-transparent py-0">A senha não atende aos critérios exigidos!</div>
            @error('password_confirmation')
            <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
            <label class="password-toggle-button fs-lg" aria-label="Mostrar/ocultar senha">
                <input type="checkbox" class="btn-check">
            </label>
        </div>
    </div>

    <button type="submit" class="btn btn-lg btn-primary w-100">
        Criar nova senha
        <i class="fi-chevron-right fs-lg ms-1 me-n1"></i>
    </button>

</form>

@endsection
