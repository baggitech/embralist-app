@extends('layouts.auth')

@section('content')

<h1 class="h2 mt-auto">Criar uma conta</h1>

<div class="nav fs-sm mb-3 mb-lg-4">
    Já tenho uma conta
    <a class="nav-link text-decoration-underline p-0 ms-2" href="{{ route('login') }}">Entrar</a>
</div>

<!-- Form -->
<form class="needs-validation" novalidate action="{{ route('register') }}" method="POST">
    @csrf

    <div class="position-relative mb-4">
        <label for="name" class="form-label">Nome</label>
        <input type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
        <div class="invalid-tooltip bg-transparent py-0">Digite seu nome!</div>
        @error('name')
        <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
    </div>

    <div class="position-relative mb-4">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
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

    <div class="d-flex flex-column gap-2 mb-4">
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="save-pass">
            <label for="save-pass" class="form-check-label">Salvar a senha</label>
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="privacy" required>
            <label for="privacy" class="form-check-label">Li e aceito a <a class="text-dark-emphasis" href="#!">Política de Privacidade</a></label>
        </div>
    </div>

    <button type="submit" class="btn btn-lg btn-primary w-100">
        Criar uma conta
        <i class="fi-chevron-right fs-lg ms-1 me-n1"></i>
    </button>

    <!-- Divider -->
    <div class="d-flex align-items-center my-4">
        <hr class="w-100 m-0">
        <span class="text-body-emphasis fw-medium text-nowrap mx-4">ou continue com</span>
        <hr class="w-100 m-0">
    </div>

    <!-- Social login -->
    <div class="d-flex flex-column flex-sm-row gap-3 pb-4 mb-3 mb-lg-4">
        <button type="button" class="btn btn-lg btn-outline-secondary w-100 px-2">
            <i class="fi-google ms-1 me-1"></i>
            Google
        </button>
        <button type="button" class="btn btn-lg btn-outline-secondary w-100 px-2">
            <i class="fi-facebook ms-1 me-1"></i>
            Facebook
        </button>
        <button type="button" class="btn btn-lg btn-outline-secondary w-100 px-2">
            <i class="fi-apple ms-1 me-1"></i>
            Apple
        </button>
    </div>

</form>

@endsection
