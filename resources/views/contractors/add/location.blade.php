@extends('layouts.add-contractor')

@section('title', 'Business Location')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/vendor/choices.js/public/assets/styles/choices.min.css') }}">
@endpush

@section('content')
<main class="content-wrapper">

  @include('partials.add-contractor-steps', ['currentStep' => 1])

  <!-- Business location page content -->
  <div class="container py-5 mb-xxl-3">
    <div class="row pt-md-1 pt-lg-2 pt-xl-3 pb-2 pb-sm-3 pb-md-4 pb-lg-5">

      <!-- Inputs -->
      <div class="col-lg-7">
        <h1 class="h3 pb-sm-1 pb-md-2">What is your business address?</h1>
        <form class="needs-validation" novalidate>
          @csrf
          <div class="row row-cols-1 row-cols-sm-2 g-3 g-sm-4 mb-3 mb-md-4">
            <div class="col">
              <label class="form-label">Country *</label>
              <select class="form-select form-select-lg" data-select='{
                  "classNames": {"containerInner": ["form-select", "form-select-lg"]},
                  "searchEnabled": true
                }' aria-label="Country select" required>
                <option value="">Select country</option>
                <optgroup label="South America">
                  <option value="Brazil" selected>Brazil</option>
                  <option value="Argentina">Argentina</option>
                  <option value="Colombia">Colombia</option>
                  <option value="Chile">Chile</option>
                  <option value="Peru">Peru</option>
                </optgroup>
                <optgroup label="North America">
                  <option value="United States">United States</option>
                  <option value="Canada">Canada</option>
                  <option value="Mexico">Mexico</option>
                </optgroup>
                <optgroup label="Europe">
                  <option value="Germany">Germany</option>
                  <option value="France">France</option>
                  <option value="United Kingdom">United Kingdom</option>
                  <option value="Italy">Italy</option>
                  <option value="Spain">Spain</option>
                  <option value="Portugal">Portugal</option>
                </optgroup>
              </select>
            </div>
            <div class="col">
              <label class="form-label">City *</label>
              <select class="form-select form-select-lg" data-select='{
                  "classNames": {"containerInner": ["form-select", "form-select-lg"]},
                  "searchEnabled": true
                }' aria-label="City select" required>
                <option value="">Select city</option>
                <option value="São Paulo">São Paulo</option>
                <option value="Rio de Janeiro">Rio de Janeiro</option>
                <option value="Belo Horizonte">Belo Horizonte</option>
                <option value="Brasília">Brasília</option>
                <option value="Salvador">Salvador</option>
                <option value="Fortaleza">Fortaleza</option>
                <option value="Curitiba">Curitiba</option>
                <option value="Manaus">Manaus</option>
                <option value="Recife">Recife</option>
                <option value="Porto Alegre">Porto Alegre</option>
              </select>
            </div>
            <div class="col">
              <label class="form-label">District *</label>
              <select class="form-select form-select-lg" data-select='{
                  "classNames": {"containerInner": ["form-select", "form-select-lg"]}
                }' aria-label="District select" required>
                <option value="">Select district</option>
                <option value="Centro">Centro</option>
                <option value="Jardins">Jardins</option>
                <option value="Pinheiros">Pinheiros</option>
                <option value="Vila Mariana">Vila Mariana</option>
              </select>
            </div>
            <div class="col">
              <label for="zip" class="form-label">Zip code *</label>
              <input type="text" class="form-control form-control-lg" id="zip" placeholder="00000-000" required>
              <div class="invalid-feedback">Please enter your zip code!</div>
            </div>
          </div>
          <div class="mb-3 mb-md-4">
            <label for="address" class="form-label">Address line *</label>
            <input type="text" class="form-control form-control-lg" id="address" placeholder="Street name and number" required>
            <div class="invalid-feedback">Please enter your address!</div>
          </div>

          <h2 class="h3 pt-5 pb-sm-1 pb-md-2">Where do you want to work?</h2>
          <div class="mb-3 mb-md-4">
            <label for="area-search" class="form-label">Where do you offer your services? *</label>
            <div class="position-relative">
              <i class="fi-search position-absolute top-50 start-0 translate-middle-y fs-lg text-body-emphasis ms-3"></i>
              <input type="text" class="form-control form-control-lg form-icon-start" id="area-search"
                placeholder="Search area where you provide your services">
            </div>
          </div>
          <label class="form-label pb-1 pb-md-0 mb-md-3">Selected service areas *</label>
          <div class="d-flex flex-wrap gap-2 mb-4">
            <button type="button" class="btn btn-sm btn-outline-secondary rounded-pill">
              <i class="fi-close fs-sm ms-n1 me-1"></i>Centro
            </button>
            <button type="button" class="btn btn-sm btn-outline-secondary rounded-pill">
              <i class="fi-close fs-sm ms-n1 me-1"></i>Jardins
            </button>
            <button type="button" class="btn btn-sm btn-outline-secondary rounded-pill">
              <i class="fi-close fs-sm ms-n1 me-1"></i>Pinheiros
            </button>
          </div>

          <!-- Next step button -->
          <div class="pt-5">
            <a class="btn btn-lg btn-dark" href="{{ route('contractor.add.services') }}">
              Go to services
              <i class="fi-chevron-right fs-lg ms-1 me-n2"></i>
            </a>
          </div>
        </form>
      </div>

      <!-- Illustration -->
      <div class="col-lg-5 d-none d-lg-flex align-items-center justify-content-center">
        <div class="text-center text-info" style="max-width: 360px">
          <i class="fi-map-pin" style="font-size: 160px; opacity: 0.15;"></i>
          <p class="fs-sm text-body-secondary mt-3">Tell us where you're based and the areas you serve so we can connect you with the right customers.</p>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection

@push('scripts')
<script src="{{ asset('assets/vendor/choices.js/public/assets/scripts/choices.min.js') }}"></script>
@endpush
