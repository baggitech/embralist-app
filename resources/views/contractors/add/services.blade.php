@extends('layouts.add-contractor')

@section('title', 'Choose Services')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/vendor/choices.js/public/assets/styles/choices.min.css') }}">
@endpush

@section('content')
<main class="content-wrapper">

  @include('partials.add-contractor-steps', ['currentStep' => 2])

  <!-- Services page content -->
  <div class="container py-5 mb-xxl-3">
    <div class="row pt-md-1 pt-lg-2 pt-xl-3 pb-2 pb-sm-3 pb-md-4 pb-lg-5">

      <!-- Inputs -->
      <div class="col-lg-7">
        <h1 class="h3 pb-sm-1 pb-md-2">What services do you provide?</h1>

        <h2 class="h6 pb-1 mb-2">Categories *</h2>
        <select class="form-select form-select-lg" data-select='{
            "classNames": {"containerInner": ["form-select", "form-select-lg"]}
          }' multiple aria-label="Select categories">
          <option value="">Select categories</option>
          <option value="Roofing">Roofing</option>
          <option value="Interior designers">Interior design</option>
          <option value="Flooring">Flooring</option>
          <option value="Carpentry">Carpentry</option>
          <option value="Plumbing">Plumbing</option>
          <option value="Painting">Painting</option>
          <option value="Electrician">Electrician</option>
          <option value="Cleaning">Cleaning</option>
          <option value="Pest control">Pest control</option>
          <option value="Landscaping">Landscaping</option>
        </select>

        <!-- Services (checkboxes) -->
        <h2 class="h6 pt-3 mt-3">I provide these services:</h2>
        <div class="row row-cols-2 row-cols-md-3 gy-3 gx-4">
          <div class="col">
            <div class="form-check mb-0">
              <input type="checkbox" class="form-check-input" id="rendering">
              <label for="rendering" class="form-check-label">3D rendering</label>
            </div>
          </div>
          <div class="col">
            <div class="form-check mb-0">
              <input type="checkbox" class="form-check-input" id="deck-building">
              <label for="deck-building" class="form-check-label">Deck Building</label>
            </div>
          </div>
          <div class="col">
            <div class="form-check mb-0">
              <input type="checkbox" class="form-check-input" id="architectural-design">
              <label for="architectural-design" class="form-check-label">Architectural Design</label>
            </div>
          </div>
          <div class="col">
            <div class="form-check mb-0">
              <input type="checkbox" class="form-check-input" id="bathroom-design">
              <label for="bathroom-design" class="form-check-label">Bathroom Design</label>
            </div>
          </div>
          <div class="col">
            <div class="form-check mb-0">
              <input type="checkbox" class="form-check-input" id="house-remodeling">
              <label for="house-remodeling" class="form-check-label">House Remodeling</label>
            </div>
          </div>
          <div class="col">
            <div class="form-check mb-0">
              <input type="checkbox" class="form-check-input" id="chimney-construction">
              <label for="chimney-construction" class="form-check-label">Chimney Construction</label>
            </div>
          </div>
          <div class="col">
            <div class="form-check mb-0">
              <input type="checkbox" class="form-check-input" id="basement-remodeling">
              <label for="basement-remodeling" class="form-check-label">Basement Remodeling</label>
            </div>
          </div>
          <div class="col">
            <div class="form-check mb-0">
              <input type="checkbox" class="form-check-input" id="home-renovations">
              <label for="home-renovations" class="form-check-label">Home Renovations</label>
            </div>
          </div>
          <div class="col">
            <div class="form-check mb-0">
              <input type="checkbox" class="form-check-input" id="floor-leveling">
              <label for="floor-leveling" class="form-check-label">Floor Leveling</label>
            </div>
          </div>
          <div class="col">
            <div class="form-check mb-0">
              <input type="checkbox" class="form-check-input" id="property-extensions">
              <label for="property-extensions" class="form-check-label">Property Extensions</label>
            </div>
          </div>
          <div class="col">
            <div class="form-check mb-0">
              <input type="checkbox" class="form-check-input" id="custom-home-building">
              <label for="custom-home-building" class="form-check-label">Custom Home Building</label>
            </div>
          </div>
          <div class="col">
            <div class="form-check mb-0">
              <input type="checkbox" class="form-check-input" id="floor-refinishing">
              <label for="floor-refinishing" class="form-check-label">Floor Refinishing</label>
            </div>
          </div>
          <div class="col">
            <div class="form-check mb-0">
              <input type="checkbox" class="form-check-input" id="kitchen-remodeling">
              <label for="kitchen-remodeling" class="form-check-label">Kitchen Remodeling</label>
            </div>
          </div>
          <div class="col">
            <div class="form-check mb-0">
              <input type="checkbox" class="form-check-input" id="bathroom-plumbing">
              <label for="bathroom-plumbing" class="form-check-label">Bathroom Plumbing</label>
            </div>
          </div>
          <div class="col">
            <div class="form-check mb-0">
              <input type="checkbox" class="form-check-input" id="flooring-installation">
              <label for="flooring-installation" class="form-check-label">Flooring Installation</label>
            </div>
          </div>
        </div>

        <!-- Expandable rows -->
        <div class="collapse" id="moreServices">
          <div class="row row-cols-2 row-cols-md-3 gy-3 gx-4 pt-3">
            <div class="col">
              <div class="form-check mb-0">
                <input type="checkbox" class="form-check-input" id="roofing-installation">
                <label for="roofing-installation" class="form-check-label">Roofing Installation</label>
              </div>
            </div>
            <div class="col">
              <div class="form-check mb-0">
                <input type="checkbox" class="form-check-input" id="siding-replacement">
                <label for="siding-replacement" class="form-check-label">Siding Replacement</label>
              </div>
            </div>
            <div class="col">
              <div class="form-check mb-0">
                <input type="checkbox" class="form-check-input" id="window-replacement">
                <label for="window-replacement" class="form-check-label">Window Replacement</label>
              </div>
            </div>
            <div class="col">
              <div class="form-check mb-0">
                <input type="checkbox" class="form-check-input" id="door-installation">
                <label for="door-installation" class="form-check-label">Door Installation</label>
              </div>
            </div>
            <div class="col">
              <div class="form-check mb-0">
                <input type="checkbox" class="form-check-input" id="patio-design">
                <label for="patio-design" class="form-check-label">Patio Design</label>
              </div>
            </div>
            <div class="col">
              <div class="form-check mb-0">
                <input type="checkbox" class="form-check-input" id="landscaping-services">
                <label for="landscaping-services" class="form-check-label">Landscaping Services</label>
              </div>
            </div>
            <div class="col">
              <div class="form-check mb-0">
                <input type="checkbox" class="form-check-input" id="garage-construction">
                <label for="garage-construction" class="form-check-label">Garage Construction</label>
              </div>
            </div>
            <div class="col">
              <div class="form-check mb-0">
                <input type="checkbox" class="form-check-input" id="solar-panel-installation">
                <label for="solar-panel-installation" class="form-check-label">Solar Panel Installation</label>
              </div>
            </div>
            <div class="col">
              <div class="form-check mb-0">
                <input type="checkbox" class="form-check-input" id="fencing-installation">
                <label for="fencing-installation" class="form-check-label">Fencing Installation</label>
              </div>
            </div>
            <div class="col">
              <div class="form-check mb-0">
                <input type="checkbox" class="form-check-input" id="driveway-paving">
                <label for="driveway-paving" class="form-check-label">Driveway Paving</label>
              </div>
            </div>
            <div class="col">
              <div class="form-check mb-0">
                <input type="checkbox" class="form-check-input" id="attic-insulation">
                <label for="attic-insulation" class="form-check-label">Attic Insulation</label>
              </div>
            </div>
            <div class="col">
              <div class="form-check mb-0">
                <input type="checkbox" class="form-check-input" id="swimming-pool-construction">
                <label for="swimming-pool-construction" class="form-check-label">Swimming Pool Construction</label>
              </div>
            </div>
          </div>
        </div>

        <!-- Show more button -->
        <div class="nav">
          <a class="nav-link position-relative px-0 pb-0 collapsed mt-3" href="#moreServices"
            data-bs-toggle="collapse" aria-expanded="false" aria-controls="moreServices"
            aria-label="Show / hide services">
            <span class="hover-effect-underline stretched-link" data-label-collapsed="Show more"
              data-label-expanded="Show less"></span>
            <i class="collapse-toggle-icon fi-chevron-down fs-base mt-1 ms-1"></i>
          </a>
        </div>

        <!-- Next step button -->
        <div class="pt-5">
          <a class="btn btn-lg btn-dark" href="{{ route('contractor.add.profile') }}">
            Go to profile details
            <i class="fi-chevron-right fs-lg ms-1 me-n2"></i>
          </a>
        </div>
      </div>

      <!-- Illustration -->
      <div class="col-lg-5 d-none d-lg-flex align-items-center justify-content-center">
        <div class="text-center text-info" style="max-width: 360px">
          <i class="fi-swatches" style="font-size: 160px; opacity: 0.15;"></i>
          <p class="fs-sm text-body-secondary mt-3">Choose the service categories and specific services you offer to help customers find exactly what they need.</p>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection

@push('scripts')
<script src="{{ asset('assets/vendor/choices.js/public/assets/scripts/choices.min.js') }}"></script>
@endpush
