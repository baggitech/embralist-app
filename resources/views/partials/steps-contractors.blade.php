    <!-- Steps (Navigation) -->
    <div class="sticky-top bg-info pt-3" style="margin-top: -76px">
      <div class="d-block d-md-none" style="height: 62px"></div>
      <div class="d-none d-md-block d-lg-none" style="height: 70px"></div>
      <div class="d-none d-lg-block" style="height: 76px"></div>
      <div class="container pt-md-1">
        <div class="overflow-x-auto">
          <div class="d-flex flex-nowrap align-items-center gap-1 pb-3 mb-md-1">

            <div class="d-flex align-items-center gap-2 gap-sm-3 text-nowrap">
              <div class="d-flex align-items-center justify-content-center border border-white {{ request()->routeIs('contractors/location') ? 'bg-white' : '' }} rounded-circle flex-shrink-0"
                style="width: 44px; height: 44px">
                <i class="fi-map fs-lg {{ request()->routeIs('contractors/location') ? 'text-info' : 'text-white' }}"></i>
              </div>
              <div class="fs-sm fw-semibold text-white">Localização da empresa</div>
            </div>

            <hr class="w-100 text-white opacity-25 my-0 mx-2">

            <div class="d-flex align-items-center gap-2 gap-sm-3 text-nowrap">
              <div class="d-flex align-items-center justify-content-center border border-white {{ request()->routeIs('contractors/services') ? 'bg-white' : '' }} rounded-circle flex-shrink-0"
                style="width: 44px; height: 44px">
                <i class="fi-swatches fs-lg {{ request()->routeIs('contractors/services') ? 'text-info' : 'text-white' }}"></i>
              </div>
              <div class="fs-sm fw-semibold text-white">Escolher serviços</div>
            </div>

            <hr class="w-100 text-white opacity-25 my-0 mx-2">

            <div class="d-flex align-items-center gap-2 gap-sm-3 text-nowrap">
              <div class="d-flex align-items-center justify-content-center border border-white {{ request()->routeIs('contractors/details') ? 'bg-white' : '' }} rounded-circle flex-shrink-0"
                style="width: 44px; height: 44px">
                <i class="fi-user-check fs-lg {{ request()->routeIs('contractors/details') ? 'text-info' : 'text-white' }}"></i>
              </div>
              <div class="fs-sm fw-semibold text-white">Detalhes do perfil</div>
            </div>

            <hr class="w-100 text-white opacity-25 my-0 mx-2">

            <div class="d-flex align-items-center gap-2 gap-sm-3 text-nowrap">
              <div class="d-flex align-items-center justify-content-center border border-white {{ request()->routeIs('contractors/pricing') ? 'bg-white' : '' }} rounded-circle flex-shrink-0"
                style="width: 44px; height: 44px">
                <i class="fi-clock fs-lg {{ request()->routeIs('contractors/pricing') ? 'text-info' : 'text-white' }}"></i>
              </div>
              <div class="fs-sm fw-semibold text-white">Preço e horários</div>
            </div>

            <hr class="w-100 text-white opacity-25 my-0 mx-2">

            <div class="d-flex align-items-center gap-2 gap-sm-3 text-nowrap">
              <div
                class="d-flex align-items-center justify-content-center border border-white {{ request()->routeIs('contractors/projects') ? 'bg-white' : '' }} rounded-circle flex-shrink-0"
                style="width: 44px; height: 44px">
                <i class="fi-grid fs-lg {{ request()->routeIs('contractors/projects') ? 'text-info' : 'text-white' }}"></i>
              </div>
              <div class="fs-sm fw-semibold text-white">Criar primeiro projeto</div>
            </div>

          </div>
        </div>
      </div>
    </div>