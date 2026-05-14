@extends('layouts.add-contractor')

@section('title', 'Create First Project')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/vendor/choices.js/public/assets/styles/choices.min.css') }}">
@endpush

@section('content')
<main class="content-wrapper">

  @include('partials.add-contractor-steps', ['currentStep' => 5])

  <!-- Project page content -->
  <div class="container py-5 mb-xxl-3">
    <div class="row pt-md-1 pt-lg-2 pt-xl-3 pb-2 pb-sm-3 pb-md-4 pb-lg-5">

      <!-- Inputs -->
      <div class="col-lg-7">
        <h1 class="h3">Create your first project</h1>
        <p class="pb-2 pb-md-3">A project is a compilation of photos showcasing your work. These photos help
          homeowners discover and hire your business on Embralist.</p>

        <div class="mb-3 mb-md-4">
          <label for="project-name" class="form-label">Project name *</label>
          <input type="text" class="form-control form-control-lg" id="project-name"
            placeholder="e.g. Kitchen Remodel in Brooklyn" required>
        </div>
        <div class="mb-3 mb-md-4">
          <label for="project-description" class="form-label">Describe your work for the project *</label>
          <textarea class="form-control form-control-lg" rows="6" id="project-description"
            placeholder="Tell potential customers about the project" required></textarea>
        </div>

        <label for="project-price" class="form-label">Approximate price *</label>
        <div class="d-flex gap-2" style="max-width: 430px">
          <div class="position-relative">
            <i class="fi-dollar-sign fs-lg position-absolute top-50 start-0 translate-middle-y ms-3"></i>
            <input type="number" class="form-control form-control-lg form-icon-start" id="project-price" min="5"
              placeholder="Set a fair price" required>
          </div>
          <div style="width: 160px">
            <select class="form-select form-select-lg" data-select='{
                "classNames": {"containerInner": ["form-select", "form-select-lg"]}
              }' aria-label="Select per period">
              <option value="">Per period</option>
              <option value="hour" selected>per hour</option>
              <option value="day">per day</option>
              <option value="week">per week</option>
              <option value="month">per month</option>
            </select>
          </div>
        </div>

        <!-- Project photos and videos -->
        <div class="pt-3 mt-3">
          <h2 class="h6 mb-2">Add photos and videos</h2>
          <p class="fs-sm mb-0">The maximum photo size is 8 MB. Formats: jpeg, jpg, png. Put the main picture first.</p>
          <p class="fs-sm">The maximum video size is 10 MB. Formats: mp4, mov.</p>
          <div class="border rounded p-3">
            <div class="row row-cols-2 row-cols-sm-3 g-2">

              <!-- Sample uploaded images -->
              @for($i = 1; $i <= 4; $i++)
              <div class="col">
                <div class="hover-effect-opacity position-relative overflow-hidden rounded">
                  @if($i === 1)
                  <span class="badge text-bg-light position-absolute top-0 start-0 z-3 mt-2 ms-2">Cover</span>
                  @endif
                  <div class="ratio bg-body-secondary" style="--fn-aspect-ratio: calc(180 / 268 * 100%)">
                    <img src="{{ asset('assets/img/add-item/contractor/0'.$i.'.jpg') }}" alt="Project image {{ $i }}">
                  </div>
                  <div class="hover-effect-target position-absolute top-0 start-0 d-flex align-items-center justify-content-center w-100 h-100 opacity-0">
                    <button type="button" class="btn btn-icon btn-sm btn-light position-relative z-2" aria-label="Remove">
                      <i class="fi-trash fs-base"></i>
                    </button>
                    <span class="position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 z-1"></span>
                  </div>
                </div>
              </div>
              @endfor

              <!-- Upload button -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-center position-relative h-100 cursor-pointer bg-body-tertiary border border-2 border-dotted rounded p-3">
                  <div class="text-center">
                    <i class="fi-plus-circle fs-4 text-secondary-emphasis mb-2"></i>
                    <div class="hover-effect-underline stretched-link fs-sm fw-medium">Upload photos / videos</div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="pt-4">
            <label for="video-link" class="form-label">Link to the video</label>
            <div class="position-relative">
              <i class="fi-link position-absolute top-50 start-0 translate-middle-y fs-lg ms-3"></i>
              <input type="url" class="form-control form-control-lg form-icon-start" id="video-link"
                placeholder="www.youtube.com/...">
            </div>
          </div>
        </div>

        <!-- Complete button + Skip step button -->
        <div class="d-flex flex-column flex-sm-row align-items-sm-center gap-3 pt-5">
          <button type="button" class="btn btn-lg btn-primary">
            Save project and become a pro
            <i class="fi-chevron-right fs-lg ms-1 me-n2"></i>
          </button>
          <div class="nav">
            <a class="nav-link hover-effect-underline fs-base" href="{{ route('contractors.index') }}">Add project later</a>
          </div>
        </div>
      </div>

      <!-- Illustration -->
      <div class="col-lg-5 d-none d-lg-flex align-items-start justify-content-center pt-4">
        <div class="text-center text-info" style="max-width: 360px">
          <i class="fi-grid" style="font-size: 160px; opacity: 0.15;"></i>
          <p class="fs-sm text-body-secondary mt-3">Projects with photos are 3x more likely to receive inquiries. Showcase your best work to attract the right clients.</p>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection

@push('scripts')
<script src="{{ asset('assets/vendor/choices.js/public/assets/scripts/choices.min.js') }}"></script>
@endpush
