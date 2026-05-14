{{-- $currentStep: 1=location, 2=services, 3=profile, 4=price, 5=project --}}
@php $currentStep = $currentStep ?? 1; @endphp

<div class="sticky-top bg-info pt-3" style="margin-top: -76px">
  <div class="d-block d-md-none" style="height: 62px"></div>
  <div class="d-none d-md-block d-lg-none" style="height: 70px"></div>
  <div class="d-none d-lg-block" style="height: 76px"></div>
  <div class="container pt-md-1">
    <div class="overflow-x-auto">
      <div class="d-flex flex-nowrap align-items-center gap-1 pb-3 mb-md-1">

        {{-- Step 1: Business location --}}
        <div class="{{ $currentStep > 1 ? 'position-relative' : '' }} d-flex align-items-center gap-2 gap-sm-3 text-nowrap">
          <div class="d-flex align-items-center justify-content-center {{ $currentStep >= 1 ? 'bg-white' : 'border border-white' }} rounded-circle flex-shrink-0" style="width: 44px; height: 44px">
            @if($currentStep > 1)
              <i class="fi-check-circle fs-lg text-info"></i>
            @else
              <i class="fi-map fs-lg {{ $currentStep == 1 ? 'text-info' : 'text-white' }}"></i>
            @endif
          </div>
          @if($currentStep > 1)
            <a class="hover-effect-underline stretched-link fs-sm fw-semibold text-white text-decoration-none" href="{{ route('contractor.add.location') }}">Business location</a>
          @else
            <div class="fs-sm fw-semibold text-white">Business location</div>
          @endif
        </div>

        <hr class="w-100 text-white opacity-25 my-0 mx-2">

        {{-- Step 2: Choose services --}}
        <div class="{{ $currentStep > 2 ? 'position-relative' : '' }} d-flex align-items-center gap-2 gap-sm-3 text-nowrap">
          <div class="d-flex align-items-center justify-content-center {{ $currentStep >= 2 ? 'bg-white' : 'border border-white' }} rounded-circle flex-shrink-0" style="width: 44px; height: 44px">
            @if($currentStep > 2)
              <i class="fi-check-circle fs-lg text-info"></i>
            @else
              <i class="fi-swatches fs-lg {{ $currentStep == 2 ? 'text-info' : 'text-white' }}"></i>
            @endif
          </div>
          @if($currentStep > 2)
            <a class="hover-effect-underline stretched-link fs-sm fw-semibold text-white text-decoration-none" href="{{ route('contractor.add.services') }}">Choose services</a>
          @else
            <div class="fs-sm fw-semibold text-white">Choose services</div>
          @endif
        </div>

        <hr class="w-100 text-white opacity-25 my-0 mx-2">

        {{-- Step 3: Profile details --}}
        <div class="{{ $currentStep > 3 ? 'position-relative' : '' }} d-flex align-items-center gap-2 gap-sm-3 text-nowrap">
          <div class="d-flex align-items-center justify-content-center {{ $currentStep >= 3 ? 'bg-white' : 'border border-white' }} rounded-circle flex-shrink-0" style="width: 44px; height: 44px">
            @if($currentStep > 3)
              <i class="fi-check-circle fs-lg text-info"></i>
            @else
              <i class="fi-user-check fs-lg {{ $currentStep == 3 ? 'text-info' : 'text-white' }}"></i>
            @endif
          </div>
          @if($currentStep > 3)
            <a class="hover-effect-underline stretched-link fs-sm fw-semibold text-white text-decoration-none" href="{{ route('contractor.add.profile') }}">Profile details</a>
          @else
            <div class="fs-sm fw-semibold text-white">Profile details</div>
          @endif
        </div>

        <hr class="w-100 text-white opacity-25 my-0 mx-2">

        {{-- Step 4: Price and hours --}}
        <div class="{{ $currentStep > 4 ? 'position-relative' : '' }} d-flex align-items-center gap-2 gap-sm-3 text-nowrap">
          <div class="d-flex align-items-center justify-content-center {{ $currentStep >= 4 ? 'bg-white' : 'border border-white' }} rounded-circle flex-shrink-0" style="width: 44px; height: 44px">
            @if($currentStep > 4)
              <i class="fi-check-circle fs-lg text-info"></i>
            @else
              <i class="fi-clock fs-lg {{ $currentStep == 4 ? 'text-info' : 'text-white' }}"></i>
            @endif
          </div>
          @if($currentStep > 4)
            <a class="hover-effect-underline stretched-link fs-sm fw-semibold text-white text-decoration-none" href="{{ route('contractor.add.price') }}">Price and hours</a>
          @else
            <div class="fs-sm fw-semibold text-white">Price and hours</div>
          @endif
        </div>

        <hr class="w-100 text-white opacity-25 my-0 mx-2">

        {{-- Step 5: Create first project --}}
        <div class="d-flex align-items-center gap-2 gap-sm-3 text-nowrap">
          <div class="d-flex align-items-center justify-content-center {{ $currentStep >= 5 ? 'bg-white' : 'border border-white' }} rounded-circle flex-shrink-0" style="width: 44px; height: 44px">
            <i class="fi-grid fs-lg {{ $currentStep == 5 ? 'text-info' : 'text-white' }}"></i>
          </div>
          <div class="fs-sm fw-semibold text-white">Create first project</div>
        </div>

      </div>
    </div>
  </div>
</div>
