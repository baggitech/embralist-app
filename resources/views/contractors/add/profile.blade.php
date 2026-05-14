@extends('layouts.add-contractor')

@section('title', 'Profile Details')

@section('content')
<main class="content-wrapper">

  @include('partials.add-contractor-steps', ['currentStep' => 3])

  <!-- Profile page content -->
  <div class="container py-5 mb-xxl-3">
    <div class="row pt-md-1 pt-lg-2 pt-xl-3 pb-2 pb-sm-3 pb-md-4 pb-lg-5">

      <!-- Inputs -->
      <div class="col-lg-7">
        <h1 class="h3 pb-sm-1 pb-md-2">Your profile details</h1>

        <!-- Profile photo -->
        <div class="d-flex align-items-center mb-2">
          <div class="ratio ratio-1x1 hover-effect-opacity bg-body-tertiary border rounded-circle overflow-hidden"
            style="width: 160px">
            <img src="{{ asset('assets/img/account/avatar-lg.jpg') }}" alt="Avatar">
            <div class="hover-effect-target position-absolute top-0 start-0 d-flex align-items-center justify-content-center w-100 h-100 opacity-0">
              <button type="button" class="btn btn-icon btn-sm btn-light position-relative z-2" aria-label="Remove">
                <i class="fi-trash fs-base"></i>
              </button>
              <span class="position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 z-1"></span>
            </div>
          </div>
          <div class="ps-3 ps-sm-4">
            <p class="fs-sm" style="max-width: 440px">Your profile photo will appear on your profile and directory
              listing. PNG or JPG no bigger than 1000px wide and tall.</p>
            <button type="button" class="btn btn-sm btn-outline-secondary">
              <i class="fi-refresh-ccw fs-sm ms-n1 me-2"></i>
              Update photo
            </button>
          </div>
        </div>

        <!-- Request reviews -->
        <div class="pt-5">
          <div class="fs-sm mb-2">New here?</div>
          <h2 class="h5 mb-2">Request reviews from past clients and colleagues</h2>
          <p class="fs-sm mb-sm-4">Professionals with at least 3 reviews are 15 times more likely to be contacted.</p>
          <button type="button" class="btn btn-warning">
            <i class="fi-star me-2 ms-n1"></i>
            Request reviews
          </button>
        </div>

        <!-- About -->
        <div class="pt-5">
          <label for="about" class="form-label">About you and your business</label>
          <textarea class="form-control form-control-lg" rows="6" id="about"
            placeholder="Tell potential customers about yourself and your business"></textarea>
          <label for="website" class="form-label mt-3 mt-md-4">Have a website?</label>
          <div class="position-relative">
            <i class="fi-link position-absolute top-50 start-0 translate-middle-y fs-lg ms-3"></i>
            <input type="url" class="form-control form-control-lg form-icon-start" id="website"
              placeholder="https://">
          </div>
        </div>

        <!-- Next step button -->
        <div class="pt-5">
          <a class="btn btn-lg btn-dark" href="{{ route('contractor.add.price') }}">
            Go to price and hours
            <i class="fi-chevron-right fs-lg ms-1 me-n2"></i>
          </a>
        </div>
      </div>

      <!-- Illustration -->
      <div class="col-lg-5 d-none d-lg-flex align-items-start justify-content-center pt-4">
        <div class="text-center text-info" style="max-width: 360px">
          <i class="fi-user-check" style="font-size: 160px; opacity: 0.15;"></i>
          <p class="fs-sm text-body-secondary mt-3">A complete profile with a photo and description gets significantly more views and contact requests.</p>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
