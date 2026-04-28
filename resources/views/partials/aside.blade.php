        <!-- Sidebar navigation that turns into offcanvas on screens < 992px wide (lg breakpoint) -->
        <aside class="col-lg-3" style="margin-top: -105px">
          <div class="offcanvas-lg offcanvas-start sticky-lg-top pe-lg-3 pe-xl-4" id="accountSidebar">
            <div class="d-none d-lg-block" style="height: 105px"></div>

            <!-- Header -->
            <div class="offcanvas-header d-lg-block py-3 p-lg-0">
              <div class="d-flex flex-row flex-lg-column align-items-center align-items-lg-start">
                <div class="flex-shrink-0 bg-body-secondary border rounded-circle overflow-hidden"
                  style="width: 64px; height: 64px">
                  <img src="{{ asset('assets/img/account/avatar.jpg') }}" alt="Avatar">
                </div>
                <div class="pt-lg-3 ps-3 ps-lg-0">
                  <h6 class="mb-1">{{ request()->user()->name }}</h6>
                  <p class="fs-sm mb-0">{{ request()->user()->email }}</p>
                </div>
              </div>
              <button type="button" class="btn-close d-lg-none" data-bs-dismiss="offcanvas"
                data-bs-target="#accountSidebar" aria-label="Close"></button>
            </div>

            <!-- Body (Navigation) -->
            <div class="offcanvas-body d-block pt-2 pt-lg-4 pb-lg-0">
              <nav class="list-group list-group-borderless">
                <a class="list-group-item list-group-item-action d-flex align-items-center active" aria-current="page"
                  href="{{ route('account.profile.index') }}">
                  <i class="fi-user fs-base opacity-75 me-2"></i>
                  Meu perfil
                </a>
                <a class="list-group-item list-group-item-action d-flex align-items-center"
                  href="{{ route('account.listings.index') }}">
                  <i class="fi-layers fs-base opacity-75 me-2"></i>
                  Meus anúncios
                </a>
                <a class="list-group-item list-group-item-action d-flex align-items-center" href="{{ route('account.reviews.index') }}">
                  <i class="fi-star fs-base opacity-75 me-2"></i>
                  Avaliações
                </a>
                <a class="list-group-item list-group-item-action d-flex align-items-center"
                  href="{{ route('account.favorites.index') }}">
                  <i class="fi-heart fs-base opacity-75 me-2"></i>
                  Favoritos
                </a>
                <a class="list-group-item list-group-item-action d-flex align-items-center" href="{{ route('account.payments.index') }}">
                  <i class="fi-credit-card fs-base opacity-75 me-2"></i>
                  Detalhes de pagamento
                </a>
                <a class="list-group-item list-group-item-action d-flex align-items-center"
                  href="{{ route('account.settings.index') }}">
                  <i class="fi-settings fs-base opacity-75 me-2"></i>
                  Configurações da conta
                </a>
                <a class="list-group-item list-group-item-action d-flex align-items-center" href="{{ route('help.index') }}">
                  <i class="fi-help-circle fs-base opacity-75 me-2"></i>
                  Central de ajuda
                </a>
              </nav>
              <nav class="list-group list-group-borderless pt-3">
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                    <button class="list-group-item list-group-item-action d-flex align-items-center" type="submit">
                      <i class="fi-log-out fs-base opacity-75 me-2"></i>
                        Sair
                    </button>
                </form>
              </nav>
            </div>
          </div>
        </aside>