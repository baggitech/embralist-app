@extends('layouts.auth')

@section('content')
        <h1 class="h2 mt-auto">Esqueceu sua senha?</h1>
        <p class="pb-2 pb-md-3">Digite o endereço de email que você usou ao se cadastrar e nós enviaremos instruções para
          redefinir sua senha</p>


        @if (session('status'))
        <div class="alert alert-success" role="alert">
          {{ session('status') }}
        </div>
        @endif

        <!-- Form -->
        <form class="needs-validation pb-4 mb-3 mb-lg-4" novalidate action="{{ route('password.email') }}" method="POST">
          @csrf
          <div class="position-relative mb-4">
            <i class="fi-mail position-absolute top-50 start-0 translate-middle-y fs-lg ms-3"></i>
            <input type="email" class="form-control form-control-lg form-icon-start" placeholder="Endereço de email"
              name="email" value="{{ old('email') }}" required>
            <div class="invalid-tooltip bg-transparent py-0">Por favor, insira um endereço de email válido!</div>
            @error('email')
            <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
          </div>
          <button type="submit" class="btn btn-lg btn-primary w-100">Redefinir senha</button>
        </form>
@endsection