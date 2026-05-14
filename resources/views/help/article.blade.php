@extends('layouts.contractors')

@section('title', ($article['title'] ?? 'Artigo de Ajuda') . ' | Central de Ajuda')

@section('content')
<main class="content-wrapper">
  <div class="container pt-4 pt-sm-5 pb-5 mt-2 mt-sm-0">

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="mb-4">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a class="hover-effect-underline text-decoration-none" href="{{ route('help.index') }}">Central de Ajuda</a>
        </li>
        @if(!empty($article['category']))
        <li class="breadcrumb-item">{{ $article['category'] }}</li>
        @endif
        <li class="breadcrumb-item active" aria-current="page">{{ $article['title'] ?? 'Artigo' }}</li>
      </ol>
    </nav>

    <div class="row g-5">
      <!-- Main content -->
      <div class="col-lg-8">
        <article>
          <h1 class="h2 mb-3">{{ $article['title'] ?? 'Artigo de Ajuda' }}</h1>
          <div class="text-body-secondary fs-sm mb-4">
            <i class="fi-calendar me-2"></i>Última atualização: {{ $article['updated_at'] ?? 'Janeiro 2025' }}
          </div>

          <div class="article-content fs-base lh-lg">
            {!! $article['content'] ?? '<p>Este artigo de ajuda estará disponível em breve. Entre em contato com nossa equipe de suporte para assistência.</p>' !!}
          </div>

          <hr class="my-4">

          <h2 class="h5 mb-3">Este artigo foi útil?</h2>
          <div class="d-flex gap-3">
            <button type="button" class="btn btn-outline-secondary">
              <i class="fi-thumbs-up fs-base me-2 ms-n1"></i>
              Sim
            </button>
            <button type="button" class="btn btn-outline-secondary">
              <i class="fi-thumbs-down fs-base me-2 ms-n1"></i>
              Não
            </button>
          </div>
        </article>
      </div>

      <!-- Sidebar -->
      <div class="col-lg-4">
        <div class="sticky-top" style="top: 100px">

          <!-- Related articles -->
          @if(!empty($relatedArticles))
          <div class="card border-0 shadow-sm mb-4">
            <div class="card-body">
              <h3 class="h6 mb-3">Artigos relacionados</h3>
              <ul class="nav flex-column gap-2">
                @foreach($relatedArticles as $related)
                <li>
                  <a class="nav-link hover-effect-underline d-inline p-0 fs-sm"
                    href="{{ route('help.article', $related['slug']) }}">
                    {{ $related['title'] }}
                  </a>
                </li>
                @endforeach
              </ul>
            </div>
          </div>
          @endif

          <!-- Help categories -->
          <div class="card border-0 shadow-sm mb-4">
            <div class="card-body">
              <h3 class="h6 mb-3">Categorias</h3>
              <ul class="nav flex-column gap-2">
                <li>
                  <a class="nav-link hover-effect-underline d-inline p-0 fs-sm" href="{{ route('help.index') }}">
                    <i class="fi-rocket me-2"></i>Primeiros passos
                  </a>
                </li>
                <li>
                  <a class="nav-link hover-effect-underline d-inline p-0 fs-sm" href="{{ route('help.index') }}">
                    <i class="fi-tool me-2"></i>Para profissionais
                  </a>
                </li>
                <li>
                  <a class="nav-link hover-effect-underline d-inline p-0 fs-sm" href="{{ route('help.index') }}">
                    <i class="fi-credit-card me-2"></i>Conta &amp; pagamentos
                  </a>
                </li>
                <li>
                  <a class="nav-link hover-effect-underline d-inline p-0 fs-sm" href="{{ route('help.index') }}">
                    <i class="fi-star me-2"></i>Avaliações &amp; notas
                  </a>
                </li>
              </ul>
            </div>
          </div>

          <!-- Contact support -->
          <div class="card border-0 bg-info text-white shadow-sm" data-bs-theme="dark">
            <div class="card-body">
              <h3 class="h6 text-white mb-2">Precisa de mais ajuda?</h3>
              <p class="fs-sm opacity-75 mb-3">Entre em contato com nossa equipe de suporte e retornaremos assim que possível.</p>
              <a href="mailto:suporte@embralist.com" class="btn btn-sm btn-light">
                <i class="fi-mail me-2 ms-n1"></i>
                Contatar suporte
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
