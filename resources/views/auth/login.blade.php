@extends('layouts.auth')

@section('content')

<h1 class="h2 mt-auto">Bem vindo de volta</h1>

<div class="nav fs-sm mb-4">
    Não tem uma conta?
    <a class="nav-link text-decoration-underline p-0 ms-2" href="{{ route('register') }}">Crie uma conta</a>
</div>

        @if (session('status'))
        <div class="alert alert-success" role="alert">
          {{ session('status') }}
        </div>
        @endif

<!-- Form -->
<form class="needs-validation" novalidate action="{{ route('login') }}" method="POST">
    @csrf
    <div class="position-relative mb-4">
        <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Email" required>
        <div class="invalid-tooltip bg-transparent py-0">Digite um endereço de email válido!</div>
        @error('email')
        <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-4">
        <div class="password-toggle">
            <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" id="password" name="password" placeholder="Senha" required>
            <div class="invalid-tooltip bg-transparent py-0">Senha incorreta!</div>
            @error('password')
            <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
            <label class="password-toggle-button fs-lg" aria-label="Mostrar/ocultar senha">
                <input type="checkbox" class="btn-check">
            </label>
        </div>
    </div>
    <div class="d-flex align-items-center justify-content-between mb-4">
        <div class="form-check me-2">
            <input type="checkbox" class="form-check-input" id="remember-30">
            <label for="remember-30" class="form-check-label">Lembrar por 30 dias</label>
        </div>
        <div class="nav">
            <a class="nav-link animate-underline p-0" href="{{ route('password.request') }}">
                <span class="animate-target">Esqueceu sua senha?</span>
            </a>
        </div>
    </div>
    <button type="submit" class="btn btn-lg btn-primary w-100">Entrar</button>
</form>

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

@endsection
