@extends('layouts.add-contractor')

@section('title', 'Price and Hours')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/vendor/choices.js/public/assets/styles/choices.min.css') }}">
@endpush

@section('content')
<main class="content-wrapper">

  @include('partials.add-contractor-steps', ['currentStep' => 4])

  <!-- Price and hours page content -->
  <div class="container py-5 mb-xxl-3">
    <div class="row pt-md-1 pt-lg-2 pt-xl-3 pb-2 pb-sm-3 pb-md-4 pb-lg-5">

      <!-- Inputs -->
      <div class="col-lg-7">

        <!-- Price and payment method -->
        <h1 class="h3 pb-sm-1 pb-md-2">Add price and payment method</h1>
        <label for="price" class="form-label">Price *</label>
        <div class="d-flex gap-2" style="max-width: 430px">
          <div class="position-relative">
            <i class="fi-dollar-sign fs-lg position-absolute top-50 start-0 translate-middle-y ms-3"></i>
            <input type="number" class="form-control form-control-lg form-icon-start" id="price" min="5"
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

        <h2 class="h6 pt-3 mt-3">Get paid quickly and securely online</h2>
        <p class="fs-sm">Enable clients to pay instantly via credit card, so you'll never have to wait for another
          check to clear.</p>

        <!-- Add payment card placeholder -->
        <div class="position-relative" style="max-width: 335px">
          <div class="position-absolute top-0 start-0 d-flex align-items-center justify-content-center w-100 h-100">
            <button type="button" class="btn btn-sm btn-light stretched-link" data-bs-toggle="modal"
              data-bs-target="#addPayment">
              <i class="fi-plus fs-sm me-1 ms-n1"></i>
              Add card
            </button>
          </div>
          <div class="ratio" style="--fn-aspect-ratio: calc(185 / 335 * 100%)">
            <div class="bg-warning rounded-4 w-100 h-100"></div>
          </div>
        </div>

        <!-- Working hours -->
        <div class="pt-5">
          <h2 class="h3 pb-sm-2 pb-lg-3">Add working hours</h2>
          <div class="vstack gap-3">

            @php
            $days = [
              ['id' => 'monday',    'label' => 'Monday',    'checked' => true,  'open' => '09:00', 'close' => '17:00'],
              ['id' => 'tuesday',   'label' => 'Tuesday',   'checked' => true,  'open' => '09:00', 'close' => '17:00'],
              ['id' => 'wednesday', 'label' => 'Wednesday', 'checked' => true,  'open' => '09:00', 'close' => '17:00'],
              ['id' => 'thursday',  'label' => 'Thursday',  'checked' => true,  'open' => '11:00', 'close' => '16:00'],
              ['id' => 'friday',    'label' => 'Friday',    'checked' => true,  'open' => '11:00', 'close' => '16:00'],
              ['id' => 'saturday',  'label' => 'Saturday',  'checked' => false, 'open' => '',      'close' => ''],
              ['id' => 'sunday',    'label' => 'Sunday',    'checked' => false, 'open' => '',      'close' => ''],
            ];
            @endphp

            @foreach($days as $day)
            <div class="d-flex align-items-center gap-3 gap-sm-5">
              <div class="form-check form-switch w-100 m-0"
                data-bs-toggle="collapse" data-bs-target="#{{ $day['id'] }}Hours"
                aria-controls="{{ $day['id'] }}Hours" style="max-width: 132px">
                <input type="checkbox" class="form-check-input" role="switch"
                  id="{{ $day['id'] }}" {{ $day['checked'] ? 'checked' : '' }}>
                <label for="{{ $day['id'] }}" class="form-check-label w-100 fw-medium">{{ $day['label'] }}</label>
              </div>
              <div class="position-relative d-flex align-items-center w-100" style="max-width: 238px; height: 40px">
                <div class="position-absolute top-0 start-0 w-100 h-100">
                  <div class="collapse bg-body transition-none {{ $day['checked'] ? 'show' : '' }}" id="{{ $day['id'] }}Hours">
                    <div class="d-flex align-items-center gap-2 gap-sm-3">
                      <input type="text" class="form-control"
                        data-input-format='{"time": true, "timePattern": ["h", "m"]}'
                        placeholder="hh:mm" {{ $day['open'] ? 'value="'.$day['open'].'"' : '' }}>
                      <div class="fs-sm">to</div>
                      <input type="text" class="form-control"
                        data-input-format='{"time": true, "timePattern": ["h", "m"]}'
                        placeholder="hh:mm" {{ $day['close'] ? 'value="'.$day['close'].'"' : '' }}>
                    </div>
                  </div>
                </div>
                <div class="fs-sm">Closed</div>
              </div>
            </div>
            @endforeach
          </div>
        </div>

        <!-- Next step button -->
        <div class="pt-5">
          <a class="btn btn-lg btn-dark" href="{{ route('contractor.add.project') }}">
            Go to first project
            <i class="fi-chevron-right fs-lg ms-1 me-n2"></i>
          </a>
        </div>
      </div>

      <!-- Illustration -->
      <div class="col-lg-5 d-none d-lg-flex align-items-start justify-content-center pt-4">
        <div class="text-center text-info" style="max-width: 360px">
          <i class="fi-clock" style="font-size: 160px; opacity: 0.15;"></i>
          <p class="fs-sm text-body-secondary mt-3">Set your hourly rate and let customers know when you're available to take on new projects.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Add payment modal -->
  <div class="modal fade" id="addPayment" tabindex="-1" aria-labelledby="addPaymentLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addPaymentLabel">Add payment card</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="cardNumber" class="form-label">Card number</label>
            <input type="text" class="form-control" id="cardNumber" placeholder="0000 0000 0000 0000">
          </div>
          <div class="row g-3">
            <div class="col-6">
              <label for="cardExpiry" class="form-label">Expiry date</label>
              <input type="text" class="form-control" id="cardExpiry" placeholder="MM/YY">
            </div>
            <div class="col-6">
              <label for="cardCvc" class="form-label">CVC</label>
              <input type="text" class="form-control" id="cardCvc" placeholder="000">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary">Save card</button>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection

@push('scripts')
<script src="{{ asset('assets/vendor/choices.js/public/assets/scripts/choices.min.js') }}"></script>
@endpush
