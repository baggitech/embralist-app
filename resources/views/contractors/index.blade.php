@extends('layouts.contractors')

@section('title', 'Contractors')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/vendor/choices.js/public/assets/styles/choices.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/simplebar/dist/simplebar.min.css') }}">
@endpush

@section('modal')
<!-- Connect form modal -->
<div class="modal fade" id="connectModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Contact a specialist</h5>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="modal-body needs-validation" novalidate>
        <div class="mb-3">
          <input type="text" class="form-control" placeholder="Name *" required>
          <div class="invalid-feedback">Please enter your name!</div>
        </div>
        <div class="mb-3">
          <input type="tel" class="form-control"
            data-input-format='{"numericOnly": true, "delimiters": ["+1 ", " ", " "], "blocks": [0, 3, 3, 2]}'
            placeholder="Phone number *" required>
          <div class="invalid-feedback">Please enter your phone number!</div>
        </div>
        <div class="mb-3">
          <input type="text" class="form-control" placeholder="Zip code">
        </div>
        <div class="mb-4">
          <textarea class="form-control" rows="5" placeholder="Message *" required></textarea>
          <div class="invalid-feedback">Please write your message!</div>
        </div>
        <button type="submit" class="btn btn-lg btn-primary w-100">Send message</button>
      </form>
    </div>
  </div>
</div>
@endsection

@section('content')
<main class="content-wrapper">
  <div class="container pt-4 pb-5 mb-xxl-3">

    <!-- Breadcrumb -->
    <nav class="pb-2 pb-md-3" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Contractors</li>
      </ol>
    </nav>

    <!-- Filter sidebar + Listings grid view -->
    <div class="row pb-2 pb-sm-3 pb-md-4 pb-lg-5">

      <!-- Filter sidebar that turns into offcanvas on screens < 992px wide (lg breakpoint) -->
      <aside class="col-lg-3">
        <div class="offcanvas-lg offcanvas-start pe-lg-2 pe-xl-3 pe-xxl-4" id="filterSidebar">
          <div class="offcanvas-header border-bottom py-3">
            <h3 class="h5 offcanvas-title">Filters</h3>
            <button type="button" class="btn-close d-lg-none" data-bs-dismiss="offcanvas"
              data-bs-target="#filterSidebar" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body d-block">

            <!-- Location -->
            <div class="pb-4 mb-2 mb-xl-3">
              <h4 class="h6">Location and radius</h4>
              <div class="vstack gap-3">
                <div class="position-relative">
                  <i class="fi-map-pin position-absolute top-50 start-0 translate-middle-y z-1 ms-3"></i>
                  <select class="form-select form-icon-start" data-select='{
                      "classNames": {"containerInner": ["form-select", "form-icon-start"]},
                      "searchEnabled": true
                    }' aria-label="Location select">
                    <option value="">Any location</option>
                    <option value="New York" selected>New York</option>
                    <option value="Los Angeles">Los Angeles</option>
                    <option value="Chicago">Chicago</option>
                    <option value="Houston">Houston</option>
                    <option value="Phoenix">Phoenix</option>
                    <option value="Philadelphia">Philadelphia</option>
                    <option value="San Antonio">San Antonio</option>
                    <option value="San Diego">San Diego</option>
                    <option value="Dallas">Dallas</option>
                    <option value="San Jose">San Jose</option>
                  </select>
                </div>
                <div class="position-relative">
                  <i class="fi-navigation position-absolute top-50 start-0 translate-middle-y z-1 ms-3"></i>
                  <select class="form-select form-icon-start" data-select='{
                      "classNames": {"containerInner": ["form-select", "form-icon-start"]}
                    }' aria-label="Radius select">
                    <option value="">Any radius</option>
                    <option value="10 mi">10 mi</option>
                    <option value="20 mi">20 mi</option>
                    <option value="30 mi">30 mi</option>
                    <option value="40 mi">40 mi</option>
                    <option value="50 mi" selected>50 mi</option>
                    <option value="60 mi">60 mi</option>
                  </select>
                </div>
              </div>
            </div>

            <!-- Project type -->
            <div class="pb-4 mb-2 mb-xl-3">
              <h4 class="h6">Project type</h4>
              <div data-filter-list='{"searchClass": "project-search", "listClass": "project-list", "valueNames": ["form-check-label"]}'>
                <div class="position-relative mb-3">
                  <i class="fi-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                  <input type="search" class="project-search form-control form-icon-start" placeholder="Search">
                </div>
                <div style="height: 215px" data-simplebar data-simplebar-auto-hide="false">
                  <div class="project-list d-flex flex-column gap-2">
                    <div class="form-check mb-0">
                      <input type="checkbox" class="form-check-input" id="appliance-installation" checked>
                      <label for="appliance-installation" class="form-check-label">Appliance installation</label>
                    </div>
                    <div class="form-check mb-0">
                      <input type="checkbox" class="form-check-input" id="bathtub-repair">
                      <label for="bathtub-repair" class="form-check-label">Bathtub repair</label>
                    </div>
                    <div class="form-check mb-0">
                      <input type="checkbox" class="form-check-input" id="door-repair">
                      <label for="door-repair" class="form-check-label">Door repair</label>
                    </div>
                    <div class="form-check mb-0">
                      <input type="checkbox" class="form-check-input" id="heating" checked>
                      <label for="heating" class="form-check-label">Heating &amp; furnace</label>
                    </div>
                    <div class="form-check mb-0">
                      <input type="checkbox" class="form-check-input" id="locksmith">
                      <label for="locksmith" class="form-check-label">Locksmith</label>
                    </div>
                    <div class="form-check mb-0">
                      <input type="checkbox" class="form-check-input" id="small-appliance-repair">
                      <label for="small-appliance-repair" class="form-check-label">Small appliance repair</label>
                    </div>
                    <div class="form-check mb-0">
                      <input type="checkbox" class="form-check-input" id="smoke-detector">
                      <label for="smoke-detector" class="form-check-label">Smoke detector installation</label>
                    </div>
                    <div class="form-check mb-0">
                      <input type="checkbox" class="form-check-input" id="electrical-work">
                      <label for="electrical-work" class="form-check-label">Electrical work</label>
                    </div>
                    <div class="form-check mb-0">
                      <input type="checkbox" class="form-check-input" id="plumbing">
                      <label for="plumbing" class="form-check-label">Plumbing</label>
                    </div>
                    <div class="form-check mb-0">
                      <input type="checkbox" class="form-check-input" id="hvac-maintenance">
                      <label for="hvac-maintenance" class="form-check-label">HVAC maintenance</label>
                    </div>
                    <div class="form-check mb-0">
                      <input type="checkbox" class="form-check-input" id="painting">
                      <label for="painting" class="form-check-label">Painting</label>
                    </div>
                    <div class="form-check mb-0">
                      <input type="checkbox" class="form-check-input" id="roofing" checked>
                      <label for="roofing" class="form-check-label">Roofing</label>
                    </div>
                    <div class="form-check mb-0">
                      <input type="checkbox" class="form-check-input" id="flooring-installation">
                      <label for="flooring-installation" class="form-check-label">Flooring installation</label>
                    </div>
                    <div class="form-check mb-0">
                      <input type="checkbox" class="form-check-input" id="carpentry" checked>
                      <label for="carpentry" class="form-check-label">Carpentry</label>
                    </div>
                    <div class="form-check mb-0">
                      <input type="checkbox" class="form-check-input" id="landscaping">
                      <label for="landscaping" class="form-check-label">Landscaping</label>
                    </div>
                    <div class="form-check mb-0">
                      <input type="checkbox" class="form-check-input" id="window-installation">
                      <label for="window-installation" class="form-check-label">Window installation</label>
                    </div>
                    <div class="form-check mb-0">
                      <input type="checkbox" class="form-check-input" id="home-security-systems">
                      <label for="home-security-systems" class="form-check-label">Home security systems</label>
                    </div>
                    <div class="form-check mb-0">
                      <input type="checkbox" class="form-check-input" id="drywall-repair">
                      <label for="drywall-repair" class="form-check-label">Drywall repair</label>
                    </div>
                    <div class="form-check mb-0">
                      <input type="checkbox" class="form-check-input" id="gutter-cleaning">
                      <label for="gutter-cleaning" class="form-check-label">Gutter cleaning</label>
                    </div>
                    <div class="form-check mb-0">
                      <input type="checkbox" class="form-check-input" id="insulation-installation">
                      <label for="insulation-installation" class="form-check-label">Insulation installation</label>
                    </div>
                    <div class="form-check mb-0">
                      <input type="checkbox" class="form-check-input" id="kitchen-remodeling">
                      <label for="kitchen-remodeling" class="form-check-label">Kitchen remodeling</label>
                    </div>
                    <div class="form-check mb-0">
                      <input type="checkbox" class="form-check-input" id="bathroom-remodeling">
                      <label for="bathroom-remodeling" class="form-check-label">Bathroom remodeling</label>
                    </div>
                    <div class="form-check mb-0">
                      <input type="checkbox" class="form-check-input" id="pest-control">
                      <label for="pest-control" class="form-check-label">Pest control</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Budget -->
            <div class="pb-4 mb-2 mb-xl-3">
              <h4 class="h6">Budget</h4>
              <div class="d-flex flex-column gap-2">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="budget-4">
                  <label class="form-check-label fs-sm" for="budget-4">$$$$</label>
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="budget-3">
                  <label class="form-check-label fs-sm" for="budget-3">$$$</label>
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="budget-2" checked>
                  <label class="form-check-label fs-sm" for="budget-2">$$</label>
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="budget-1">
                  <label class="form-check-label fs-sm" for="budget-1">$</label>
                </div>
              </div>
            </div>

            <!-- Features -->
            <div class="pb-4 mb-2 mb-xl-3">
              <h4 class="h6">Features</h4>
              <div class="d-flex flex-column gap-2">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="eco-friendly" checked>
                  <label class="form-check-label fs-sm" for="eco-friendly">Eco-friendly</label>
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="free-consultation">
                  <label class="form-check-label fs-sm" for="free-consultation">Free consultation</label>
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="online-consultation">
                  <label class="form-check-label fs-sm" for="online-consultation">Online consultation</label>
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="free-estimate">
                  <label class="form-check-label fs-sm" for="free-estimate">Free estimate</label>
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="verified-hires" checked>
                  <label class="form-check-label fs-sm" for="verified-hires">Verified hires</label>
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="weekend-consultations">
                  <label class="form-check-label fs-sm" for="weekend-consultations">Weekend consultations</label>
                </div>
              </div>
            </div>

            <!-- Availability -->
            <div class="pb-4 mb-2 mb-xl-3">
              <h4 class="h6">Availability</h4>
              <div class="d-flex flex-column gap-2">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="now">
                  <label class="form-check-label fs-sm" for="now">Available now</label>
                </div>
              </div>
            </div>

            <!-- Average rating -->
            <div class="pb-2 pb-lg-0">
              <h4 class="h6">Average rating</h4>
              <div class="d-flex flex-column gap-2">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="star-5" checked>
                  <label class="form-check-label d-flex align-items-center fs-sm" for="star-5">
                    5 <i class="fi-star-filled text-warning ms-1"></i>
                  </label>
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="star-4" checked>
                  <label class="form-check-label d-flex align-items-center fs-sm" for="star-4">
                    4 <i class="fi-star-filled text-warning ms-1"></i>
                  </label>
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="star-3">
                  <label class="form-check-label d-flex align-items-center fs-sm" for="star-3">
                    3 <i class="fi-star-filled text-warning ms-1"></i>
                  </label>
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="star-2">
                  <label class="form-check-label d-flex align-items-center fs-sm" for="star-2">
                    2-1 <i class="fi-star-filled text-warning ms-1"></i>
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </aside>


      <!-- Listings grid view -->
      <div class="col-lg-9">

        <!-- Active filters -->
        <div class="d-flex align-items-center gap-3 pb-sm-2">
          <div class="w-100 pb-3 overflow-x-auto">
            <div class="d-flex gap-2">
              <button type="button" class="btn btn-sm btn-secondary rounded-pill">
                <i class="fi-close fs-sm me-1 ms-n1"></i>New York
              </button>
              <button type="button" class="btn btn-sm btn-secondary rounded-pill">
                <i class="fi-close fs-sm me-1 ms-n1"></i>50 mi
              </button>
              <button type="button" class="btn btn-sm btn-secondary rounded-pill">
                <i class="fi-close fs-sm me-1 ms-n1"></i>Heating &amp; furnace
              </button>
              <button type="button" class="btn btn-sm btn-secondary rounded-pill">
                <i class="fi-close fs-sm me-1 ms-n1"></i>Roofing
              </button>
              <button type="button" class="btn btn-sm btn-secondary rounded-pill">
                <i class="fi-close fs-sm me-1 ms-n1"></i>$$
              </button>
              <button type="button" class="btn btn-sm btn-secondary rounded-pill">
                <i class="fi-close fs-sm me-1 ms-n1"></i>Eco-friendly
              </button>
              <button type="button" class="btn btn-sm btn-secondary rounded-pill">
                <i class="fi-close fs-sm me-1 ms-n1"></i>5 <i class="fi-star-filled text-warning ms-1"></i>
              </button>
            </div>
          </div>
          <div class="nav pb-3">
            <a class="nav-link fs-xs text-decoration-underline text-nowrap p-0" href="#!">Clear all</a>
          </div>
        </div>

        <!-- Sort selector -->
        <div class="d-flex align-items-center gap-2 gap-sm-3 pb-3 mb-2">
          <div class="fs-sm text-nowrap">Showing 48 results</div>
          <div class="position-relative ms-auto" style="width: 125px">
            <i class="fi-sort position-absolute top-50 start-0 translate-middle-y z-2"></i>
            <select class="form-select border-0 rounded-0 ps-4 pe-1" data-select='{
                "removeItemButton": false,
                "classNames": {"containerInner": ["form-select", "border-0", "rounded-0", "ps-4", "pe-1"]}
              }'>
              <option value="Popular">Popular</option>
              <option value="Newest">Newest</option>
              <option value="Rating">Rating</option>
            </select>
          </div>
        </div>

        <!-- List of items -->
        <div class="vstack gap-4">

          <!-- Listing 1 -->
          <article class="card hover-effect-opacity overflow-hidden">
            <div class="row g-0">
              <div class="col-sm-4 position-relative bg-body-tertiary" style="min-height: 220px">
                <div class="d-flex flex-column gap-2 align-items-start position-absolute top-0 start-0 z-3 mt-2 mt-sm-3 ms-2 ms-sm-3">
                  <span class="badge text-bg-info d-inline-flex align-items-center">Verified <i class="fi-shield ms-1"></i></span>
                </div>
                <div class="swiper h-100 z-2" data-swiper='{"pagination":{"el":".swiper-pagination"},"navigation":{"prevEl":".btn-prev","nextEl":".btn-next"},"breakpoints":{"991":{"allowTouchMove":false}}}'>
                  <a class="swiper-wrapper h-100" href="{{ route('contractors.show', 1) }}">
                    <div class="swiper-slide">
                      <img src="{{ asset('assets/img/listings/contractors/01.jpg') }}" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Image">
                    </div>
                    <div class="swiper-slide">
                      <img src="{{ asset('assets/img/listings/contractors/01.jpg') }}" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Image">
                    </div>
                  </a>
                  <div class="position-absolute top-50 start-0 z-1 translate-middle-y d-none d-lg-block hover-effect-target opacity-0 ms-3">
                    <button type="button" class="btn btn-sm btn-prev btn-icon btn-light bg-light rounded-circle animate-slide-start" aria-label="Prev"><i class="fi-chevron-left fs-lg animate-target"></i></button>
                  </div>
                  <div class="position-absolute top-50 end-0 z-1 translate-middle-y d-none d-lg-block hover-effect-target opacity-0 me-3">
                    <button type="button" class="btn btn-sm btn-next btn-icon btn-light bg-light rounded-circle animate-slide-end" aria-label="Next"><i class="fi-chevron-right fs-lg animate-target"></i></button>
                  </div>
                  <div class="swiper-pagination bottom-0 z-1 mb-2" data-bs-theme="light"></div>
                </div>
              </div>
              <div class="col-sm-8 d-flex p-3 p-sm-4" style="min-height: 255px">
                <div class="row flex-lg-nowrap g-0 position-relative pt-1 pt-sm-0">
                  <button type="button" class="btn btn-icon btn-outline-secondary rounded-circle position-absolute top-0 end-0 z-2" data-bs-toggle="tooltip" title="Bookmark" aria-label="Bookmark">
                    <i class="fi-bookmark fs-base"></i>
                  </button>
                  <div class="col-lg-8 pe-lg-4">
                    <div class="d-flex align-items-center pe-5 pe-lg-0 pb-2 mb-1">
                      <div class="ratio ratio-1x1 me-3" style="width: 48px">
                        <img src="{{ asset('assets/img/listings/contractors/ava01.jpg') }}" class="bg-body-secondary rounded-circle" alt="Avatar">
                      </div>
                      <h3 class="h6 mb-0">
                        <a class="hover-effect-underline stretched-link" href="{{ route('contractors.show', 1) }}">Samantha Donovan</a>
                      </h3>
                    </div>
                    <div class="fs-sm mb-2 mb-lg-3">
                      <span class="fw-medium text-dark-emphasis">Water softener installation</span>
                      <i class="fi-bullet fs-base align-middle"></i>
                      <span class="fw-medium text-dark-emphasis">Water heater repair</span>
                    </div>
                    <p class="fs-sm mb-0">I'm Samantha, your licensed, insured plumber in NYC. Specializing in servicing residential buildings, high rises, offices, and eateries.</p>
                  </div>
                  <hr class="vr flex-shrink-0 d-none d-lg-block m-0">
                  <div class="col-lg-4 d-flex flex-column pt-3 pt-lg-5 ps-lg-4">
                    <ul class="list-unstyled pb-2 pb-lg-4 mb-3">
                      <li class="d-flex align-items-center gap-1">
                        <i class="fi-star-filled text-warning"></i>
                        <span class="fs-sm text-secondary-emphasis">4.7</span>
                        <span class="fs-xs text-body-secondary align-self-end">(26)</span>
                      </li>
                      <li class="d-flex align-items-center gap-1 fs-sm"><i class="fi-thumbs-up"></i> Listing of the month</li>
                      <li class="d-flex align-items-center gap-1 fs-sm"><i class="fi-leaf"></i> Eco-friendly</li>
                    </ul>
                    <button type="button" class="btn btn-outline-dark position-relative z-2 mt-auto" data-bs-toggle="modal" data-bs-target="#connectModal">
                      <i class="fi-mail me-2"></i>Connect
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </article>

          <!-- Listing 2 -->
          <article class="card hover-effect-opacity overflow-hidden">
            <div class="row g-0">
              <div class="col-sm-4 position-relative bg-body-tertiary" style="min-height: 220px">
                <div class="d-flex flex-column gap-2 align-items-start position-absolute top-0 start-0 z-3 mt-2 mt-sm-3 ms-2 ms-sm-3">
                  <span class="badge text-bg-primary d-inline-flex align-items-center">Top</span>
                </div>
                <div class="swiper h-100 z-2" data-swiper='{"pagination":{"el":".swiper-pagination"},"navigation":{"prevEl":".btn-prev","nextEl":".btn-next"},"breakpoints":{"991":{"allowTouchMove":false}}}'>
                  <a class="swiper-wrapper h-100" href="{{ route('contractors.show', 2) }}">
                    <div class="swiper-slide">
                      <img src="{{ asset('assets/img/listings/contractors/02.jpg') }}" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Image">
                    </div>
                    <div class="swiper-slide">
                      <img src="{{ asset('assets/img/listings/contractors/02.jpg') }}" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Image">
                    </div>
                  </a>
                  <div class="position-absolute top-50 start-0 z-1 translate-middle-y d-none d-lg-block hover-effect-target opacity-0 ms-3">
                    <button type="button" class="btn btn-sm btn-prev btn-icon btn-light bg-light rounded-circle animate-slide-start" aria-label="Prev"><i class="fi-chevron-left fs-lg animate-target"></i></button>
                  </div>
                  <div class="position-absolute top-50 end-0 z-1 translate-middle-y d-none d-lg-block hover-effect-target opacity-0 me-3">
                    <button type="button" class="btn btn-sm btn-next btn-icon btn-light bg-light rounded-circle animate-slide-end" aria-label="Next"><i class="fi-chevron-right fs-lg animate-target"></i></button>
                  </div>
                  <div class="swiper-pagination bottom-0 z-1 mb-2" data-bs-theme="light"></div>
                </div>
              </div>
              <div class="col-sm-8 d-flex p-3 p-sm-4" style="min-height: 255px">
                <div class="row flex-lg-nowrap g-0 position-relative pt-1 pt-sm-0">
                  <button type="button" class="btn btn-icon btn-outline-secondary rounded-circle position-absolute top-0 end-0 z-2" data-bs-toggle="tooltip" title="Bookmark" aria-label="Bookmark">
                    <i class="fi-bookmark fs-base"></i>
                  </button>
                  <div class="col-lg-8 pe-lg-4">
                    <div class="d-flex align-items-center pe-5 pe-lg-0 pb-2 mb-1">
                      <div class="ratio ratio-1x1 me-3" style="width: 48px">
                        <img src="{{ asset('assets/img/listings/contractors/ava02.jpg') }}" class="bg-body-secondary rounded-circle" alt="Avatar">
                      </div>
                      <h3 class="h6 mb-0">
                        <a class="hover-effect-underline stretched-link" href="{{ route('contractors.show', 2) }}">Easy Handy Services</a>
                      </h3>
                    </div>
                    <div class="fs-sm mb-2 mb-lg-3">
                      <span class="fw-medium text-dark-emphasis">Appliance installation</span>
                    </div>
                    <p class="fs-sm mb-0">We offer reliable and professional appliance installation services, ensuring your home is equipped with expertly installed, ready-to-use appliances.</p>
                  </div>
                  <hr class="vr flex-shrink-0 d-none d-lg-block m-0">
                  <div class="col-lg-4 d-flex flex-column pt-3 pt-lg-5 ps-lg-4">
                    <ul class="list-unstyled pb-2 pb-lg-4 mb-3">
                      <li class="d-flex align-items-center gap-1">
                        <i class="fi-star-filled text-warning"></i>
                        <span class="fs-sm text-secondary-emphasis">4.9</span>
                        <span class="fs-xs text-body-secondary align-self-end">(38)</span>
                      </li>
                      <li class="d-flex align-items-center gap-1 fs-sm"><i class="fi-thumbs-up"></i> Listing of the month</li>
                    </ul>
                    <button type="button" class="btn btn-outline-dark position-relative z-2 mt-auto" data-bs-toggle="modal" data-bs-target="#connectModal">
                      <i class="fi-mail me-2"></i>Connect
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </article>

          <!-- Listing 3 -->
          <article class="card hover-effect-opacity overflow-hidden">
            <div class="row g-0">
              <div class="col-sm-4 position-relative bg-body-tertiary" style="min-height: 220px">
                <div class="swiper h-100 z-2" data-swiper='{"pagination":{"el":".swiper-pagination"},"navigation":{"prevEl":".btn-prev","nextEl":".btn-next"},"breakpoints":{"991":{"allowTouchMove":false}}}'>
                  <a class="swiper-wrapper h-100" href="{{ route('contractors.show', 3) }}">
                    <div class="swiper-slide">
                      <img src="{{ asset('assets/img/listings/contractors/03.jpg') }}" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Image">
                    </div>
                    <div class="swiper-slide">
                      <img src="{{ asset('assets/img/listings/contractors/03.jpg') }}" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Image">
                    </div>
                  </a>
                  <div class="position-absolute top-50 start-0 z-1 translate-middle-y d-none d-lg-block hover-effect-target opacity-0 ms-3">
                    <button type="button" class="btn btn-sm btn-prev btn-icon btn-light bg-light rounded-circle animate-slide-start" aria-label="Prev"><i class="fi-chevron-left fs-lg animate-target"></i></button>
                  </div>
                  <div class="position-absolute top-50 end-0 z-1 translate-middle-y d-none d-lg-block hover-effect-target opacity-0 me-3">
                    <button type="button" class="btn btn-sm btn-next btn-icon btn-light bg-light rounded-circle animate-slide-end" aria-label="Next"><i class="fi-chevron-right fs-lg animate-target"></i></button>
                  </div>
                  <div class="swiper-pagination bottom-0 z-1 mb-2" data-bs-theme="light"></div>
                </div>
              </div>
              <div class="col-sm-8 d-flex p-3 p-sm-4" style="min-height: 255px">
                <div class="row flex-lg-nowrap g-0 position-relative pt-1 pt-sm-0">
                  <button type="button" class="btn btn-icon btn-outline-secondary rounded-circle position-absolute top-0 end-0 z-2" data-bs-toggle="tooltip" title="Bookmark" aria-label="Bookmark">
                    <i class="fi-bookmark fs-base"></i>
                  </button>
                  <div class="col-lg-8 pe-lg-4">
                    <div class="d-flex align-items-center pe-5 pe-lg-0 pb-2 mb-1">
                      <div class="ratio ratio-1x1 me-3" style="width: 48px">
                        <img src="{{ asset('assets/img/listings/contractors/ava03.jpg') }}" class="bg-body-secondary rounded-circle" alt="Avatar">
                      </div>
                      <h3 class="h6 mb-0">
                        <a class="hover-effect-underline stretched-link" href="{{ route('contractors.show', 3) }}">Alex Rodriguez</a>
                      </h3>
                    </div>
                    <div class="fs-sm mb-2 mb-lg-3">
                      <span class="fw-medium text-dark-emphasis">Carpentry</span>
                      <i class="fi-bullet fs-base align-middle"></i>
                      <span class="fw-medium text-dark-emphasis">Custom kitchen cabinets</span>
                    </div>
                    <p class="fs-sm mb-0">With an unwavering commitment to excellence, I bring dreams to life with woodwork. Each stroke of skilled hands transforms timber into masterpieces.</p>
                  </div>
                  <hr class="vr flex-shrink-0 d-none d-lg-block m-0">
                  <div class="col-lg-4 d-flex flex-column pt-3 pt-lg-5 ps-lg-4">
                    <ul class="list-unstyled pb-2 pb-lg-4 mb-3">
                      <li class="d-flex align-items-center gap-1">
                        <i class="fi-star-filled text-warning"></i>
                        <span class="fs-sm text-secondary-emphasis">5.0</span>
                        <span class="fs-xs text-body-secondary align-self-end">(13)</span>
                      </li>
                      <li class="d-flex align-items-center gap-1 fs-sm"><i class="fi-leaf"></i> Eco-friendly</li>
                    </ul>
                    <button type="button" class="btn btn-outline-dark position-relative z-2 mt-auto" data-bs-toggle="modal" data-bs-target="#connectModal">
                      <i class="fi-mail me-2"></i>Connect
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </article>

          <!-- Listing 4 -->
          <article class="card hover-effect-opacity overflow-hidden">
            <div class="row g-0">
              <div class="col-sm-4 position-relative bg-body-tertiary" style="min-height: 220px">
                <div class="d-flex flex-column gap-2 align-items-start position-absolute top-0 start-0 z-3 mt-2 mt-sm-3 ms-2 ms-sm-3">
                  <span class="badge text-bg-info d-inline-flex align-items-center">Verified <i class="fi-shield ms-1"></i></span>
                </div>
                <div class="swiper h-100 z-2" data-swiper='{"pagination":{"el":".swiper-pagination"},"navigation":{"prevEl":".btn-prev","nextEl":".btn-next"},"breakpoints":{"991":{"allowTouchMove":false}}}'>
                  <a class="swiper-wrapper h-100" href="{{ route('contractors.show', 4) }}">
                    <div class="swiper-slide">
                      <img src="{{ asset('assets/img/listings/contractors/04.jpg') }}" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Image">
                    </div>
                    <div class="swiper-slide">
                      <img src="{{ asset('assets/img/listings/contractors/04.jpg') }}" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Image">
                    </div>
                  </a>
                  <div class="position-absolute top-50 start-0 z-1 translate-middle-y d-none d-lg-block hover-effect-target opacity-0 ms-3">
                    <button type="button" class="btn btn-sm btn-prev btn-icon btn-light bg-light rounded-circle animate-slide-start" aria-label="Prev"><i class="fi-chevron-left fs-lg animate-target"></i></button>
                  </div>
                  <div class="position-absolute top-50 end-0 z-1 translate-middle-y d-none d-lg-block hover-effect-target opacity-0 me-3">
                    <button type="button" class="btn btn-sm btn-next btn-icon btn-light bg-light rounded-circle animate-slide-end" aria-label="Next"><i class="fi-chevron-right fs-lg animate-target"></i></button>
                  </div>
                  <div class="swiper-pagination bottom-0 z-1 mb-2" data-bs-theme="light"></div>
                </div>
              </div>
              <div class="col-sm-8 d-flex p-3 p-sm-4" style="min-height: 255px">
                <div class="row flex-lg-nowrap g-0 position-relative pt-1 pt-sm-0">
                  <button type="button" class="btn btn-icon btn-outline-secondary rounded-circle position-absolute top-0 end-0 z-2" data-bs-toggle="tooltip" title="Bookmark" aria-label="Bookmark">
                    <i class="fi-bookmark fs-base"></i>
                  </button>
                  <div class="col-lg-8 pe-lg-4">
                    <div class="d-flex align-items-center pe-5 pe-lg-0 pb-2 mb-1">
                      <div class="ratio ratio-1x1 me-3" style="width: 48px">
                        <img src="{{ asset('assets/img/listings/contractors/ava04.jpg') }}" class="bg-body-secondary rounded-circle" alt="Avatar">
                      </div>
                      <h3 class="h6 mb-0">
                        <a class="hover-effect-underline stretched-link" href="{{ route('contractors.show', 4) }}">Roofing &amp; Construction</a>
                      </h3>
                    </div>
                    <div class="fs-sm mb-2 mb-lg-3">
                      <span class="fw-medium text-dark-emphasis">Roof repair</span>
                      <i class="fi-bullet fs-base align-middle"></i>
                      <span class="fw-medium text-dark-emphasis">Asphalt roofing</span>
                      <i class="fi-bullet fs-base align-middle"></i>
                      <span class="fw-medium text-dark-emphasis">Flat foam roofing</span>
                    </div>
                    <p class="fs-sm mb-0">With extensive experience in roofing and construction, we focus on both residential and commercial roofing solutions.</p>
                  </div>
                  <hr class="vr flex-shrink-0 d-none d-lg-block m-0">
                  <div class="col-lg-4 d-flex flex-column pt-3 pt-lg-5 ps-lg-4">
                    <ul class="list-unstyled pb-2 pb-lg-4 mb-3">
                      <li class="d-flex align-items-center gap-1">
                        <i class="fi-star-filled text-warning"></i>
                        <span class="fs-sm text-secondary-emphasis">4.6</span>
                        <span class="fs-xs text-body-secondary align-self-end">(97)</span>
                      </li>
                      <li class="d-flex align-items-center gap-1 fs-sm"><i class="fi-shield"></i> Verified hires</li>
                      <li class="d-flex align-items-center gap-1 fs-sm"><i class="fi-leaf"></i> Eco-friendly</li>
                    </ul>
                    <button type="button" class="btn btn-outline-dark position-relative z-2 mt-auto" data-bs-toggle="modal" data-bs-target="#connectModal">
                      <i class="fi-mail me-2"></i>Connect
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </article>

          <!-- Listing 5 -->
          <article class="card hover-effect-opacity overflow-hidden">
            <div class="row g-0">
              <div class="col-sm-4 position-relative bg-body-tertiary" style="min-height: 220px">
                <div class="swiper h-100 z-2" data-swiper='{"pagination":{"el":".swiper-pagination"},"navigation":{"prevEl":".btn-prev","nextEl":".btn-next"},"breakpoints":{"991":{"allowTouchMove":false}}}'>
                  <a class="swiper-wrapper h-100" href="{{ route('contractors.show', 5) }}">
                    <div class="swiper-slide">
                      <img src="{{ asset('assets/img/listings/contractors/05.jpg') }}" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Image">
                    </div>
                    <div class="swiper-slide">
                      <img src="{{ asset('assets/img/listings/contractors/05.jpg') }}" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Image">
                    </div>
                  </a>
                  <div class="position-absolute top-50 start-0 z-1 translate-middle-y d-none d-lg-block hover-effect-target opacity-0 ms-3">
                    <button type="button" class="btn btn-sm btn-prev btn-icon btn-light bg-light rounded-circle animate-slide-start" aria-label="Prev"><i class="fi-chevron-left fs-lg animate-target"></i></button>
                  </div>
                  <div class="position-absolute top-50 end-0 z-1 translate-middle-y d-none d-lg-block hover-effect-target opacity-0 me-3">
                    <button type="button" class="btn btn-sm btn-next btn-icon btn-light bg-light rounded-circle animate-slide-end" aria-label="Next"><i class="fi-chevron-right fs-lg animate-target"></i></button>
                  </div>
                  <div class="swiper-pagination bottom-0 z-1 mb-2" data-bs-theme="light"></div>
                </div>
              </div>
              <div class="col-sm-8 d-flex p-3 p-sm-4" style="min-height: 255px">
                <div class="row flex-lg-nowrap g-0 position-relative pt-1 pt-sm-0">
                  <button type="button" class="btn btn-icon btn-outline-secondary rounded-circle position-absolute top-0 end-0 z-2" data-bs-toggle="tooltip" title="Bookmark" aria-label="Bookmark">
                    <i class="fi-bookmark fs-base"></i>
                  </button>
                  <div class="col-lg-8 pe-lg-4">
                    <div class="d-flex align-items-center pe-5 pe-lg-0 pb-2 mb-1">
                      <div class="ratio ratio-1x1 me-3" style="width: 48px">
                        <img src="{{ asset('assets/img/listings/contractors/ava05.jpg') }}" class="bg-body-secondary rounded-circle" alt="Avatar">
                      </div>
                      <h3 class="h6 mb-0">
                        <a class="hover-effect-underline stretched-link" href="{{ route('contractors.show', 5) }}">Sam Jackson</a>
                      </h3>
                    </div>
                    <div class="fs-sm mb-2 mb-lg-3">
                      <span class="fw-medium text-dark-emphasis">Bathroom remodeling</span>
                      <i class="fi-bullet fs-base align-middle"></i>
                      <span class="fw-medium text-dark-emphasis">Bathtub installation</span>
                    </div>
                    <p class="fs-sm mb-0">I provide all types of plumbing service work, repairs and installations. I offer full service remodeling.</p>
                  </div>
                  <hr class="vr flex-shrink-0 d-none d-lg-block m-0">
                  <div class="col-lg-4 d-flex flex-column pt-3 pt-lg-5 ps-lg-4">
                    <ul class="list-unstyled pb-2 pb-lg-4 mb-3">
                      <li class="d-flex align-items-center gap-1">
                        <i class="fi-star-filled text-warning"></i>
                        <span class="fs-sm text-secondary-emphasis">5.0</span>
                        <span class="fs-xs text-body-secondary align-self-end">(21)</span>
                      </li>
                      <li class="d-flex align-items-center gap-1 fs-sm"><i class="fi-leaf"></i> Eco-friendly</li>
                    </ul>
                    <button type="button" class="btn btn-outline-dark position-relative z-2 mt-auto" data-bs-toggle="modal" data-bs-target="#connectModal">
                      <i class="fi-mail me-2"></i>Connect
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </article>
        </div>

        <!-- Pagination -->
        <nav class="pt-3 mt-3" aria-label="Listings pagination">
          <ul class="pagination pagination-lg">
            <li class="page-item active" aria-current="page">
              <span class="page-link">1<span class="visually-hidden">(current)</span></span>
            </li>
            <li class="page-item"><a class="page-link" href="#!">2</a></li>
            <li class="page-item"><a class="page-link" href="#!">3</a></li>
            <li class="page-item"><a class="page-link" href="#!">4</a></li>
            <li class="page-item"><a class="page-link" href="#!">5</a></li>
            <li class="page-item"><span class="page-link px-2 pe-none">...</span></li>
            <li class="page-item"><a class="page-link" href="#!">10</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</main>

<!-- Filter sidebar offcanvas toggle (mobile) -->
<button type="button"
  class="fixed-bottom z-sticky w-100 btn btn-lg btn-dark border-0 border-top border-light border-opacity-10 rounded-0 pb-4 d-lg-none"
  data-bs-toggle="offcanvas" data-bs-target="#filterSidebar" aria-controls="filterSidebar" data-bs-theme="light">
  <i class="fi-sidebar fs-base me-2"></i>
  Filters
</button>
@endsection

@push('scripts')
<script src="{{ asset('assets/vendor/choices.js/public/assets/scripts/choices.min.js') }}"></script>
<script src="{{ asset('assets/vendor/simplebar/dist/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/vendor/cleave.js/dist/cleave.min.js') }}"></script>
@endpush
