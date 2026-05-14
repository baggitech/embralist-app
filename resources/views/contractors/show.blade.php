@extends('layouts.contractors')

@section('title', 'Mike Gardner - Contractor')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/vendor/glightbox/dist/css/glightbox.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/choices.js/public/assets/styles/choices.min.css') }}">
@endpush

@section('modal')
<!-- Review form modal -->
<div class="modal fade" id="reviewForm" data-bs-backdrop="static" tabindex="-1" aria-labelledby="reviewFormLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <form class="modal-content needs-validation" novalidate>
      <div class="modal-header border-0">
        <h5 class="modal-title" id="reviewFormLabel">Leave a review</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body pb-3 pt-0">
        <div class="mb-3">
          <label for="review-name" class="form-label">Your name <span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="review-name" required>
          <div class="invalid-feedback">Please enter your name!</div>
          <small class="form-text">Will be displayed on the comment.</small>
        </div>
        <div class="mb-3">
          <label for="review-email" class="form-label">Your email <span class="text-danger">*</span></label>
          <input type="email" class="form-control" id="review-email" required>
          <div class="invalid-feedback">Please provide valid email address!</div>
          <small class="form-text">Authentication only - we won't spam you.</small>
        </div>
        <div class="mb-3">
          <label class="form-label">Rating <span class="text-danger">*</span></label>
          <select class="form-select" data-select='{
              "placeholderValue": "Select rating",
              "choices": [
                {"value": "", "label": "Select rating", "placeholder": true},
                {"value": "5", "label": "<span class=\"visually-hidden\">5 stars</span>", "customProperties": {"icon": "<span class=\"d-flex gap-1 py-1\"><i class=\"fi-star-filled text-warning\"></i><i class=\"fi-star-filled text-warning\"></i><i class=\"fi-star-filled text-warning\"></i><i class=\"fi-star-filled text-warning\"></i><i class=\"fi-star-filled text-warning\"></i></span>", "selected": "5 stars"}},
                {"value": "4", "label": "<span class=\"visually-hidden\">4 stars</span>", "customProperties": {"icon": "<span class=\"d-flex gap-1 py-1\"><i class=\"fi-star-filled text-warning\"></i><i class=\"fi-star-filled text-warning\"></i><i class=\"fi-star-filled text-warning\"></i><i class=\"fi-star-filled text-warning\"></i></span>", "selected": "4 stars"}},
                {"value": "3", "label": "<span class=\"visually-hidden\">3 stars</span>", "customProperties": {"icon": "<span class=\"d-flex gap-1 py-1\"><i class=\"fi-star-filled text-warning\"></i><i class=\"fi-star-filled text-warning\"></i><i class=\"fi-star-filled text-warning\"></i></span>", "selected": "3 stars"}},
                {"value": "2", "label": "<span class=\"visually-hidden\">2 stars</span>", "customProperties": {"icon": "<span class=\"d-flex gap-1 py-1\"><i class=\"fi-star-filled text-warning\"></i><i class=\"fi-star-filled text-warning\"></i></span>", "selected": "2 stars"}},
                {"value": "1", "label": "<span class=\"visually-hidden\">1 star</span>", "customProperties": {"icon": "<span class=\"d-flex gap-1 py-1\"><i class=\"fi-star-filled text-warning\"></i></span>", "selected": "1 star"}}
              ]
            }' data-select-template="true" aria-label="Rating select" required></select>
          <div class="invalid-feedback">Please select your rating!</div>
        </div>
        <div>
          <label class="form-label" for="review-text">Review <span class="text-danger">*</span></label>
          <textarea class="form-control" rows="4" id="review-text" required></textarea>
          <div class="invalid-feedback">Please write a review!</div>
          <small class="form-text">Your review must be at least 50 characters.</small>
        </div>
      </div>
      <div class="modal-footer flex-nowrap gap-3 border-0 px-4">
        <button type="reset" class="btn btn-secondary w-100 m-0" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary w-100 m-0">Submit review</button>
      </div>
    </form>
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
        <li class="breadcrumb-item"><a href="{{ route('contractors.index') }}">Contractors</a></li>
        <li class="breadcrumb-item active" aria-current="page">Mike Gardner</li>
      </ol>
    </nav>

    <!-- Contractor info + Bookmark button -->
    <div class="d-flex align-items-start align-items-sm-center justify-content-between pb-3 mb-3">
      <div class="d-sm-flex align-items-center me-4">
        <div class="ratio ratio-1x1 flex-shrink-0 bg-body-secondary rounded-circle overflow-hidden mb-2 mb-sm-0" style="width: 72px">
          <img src="{{ asset('assets/img/listings/contractors/single/avatar.jpg') }}" alt="Avatar">
        </div>
        <div class="ps-sm-3 ps-md-4">
          <div class="d-flex align-items-center pb-1 mb-2">
            <h1 class="h5 pe-1 mb-0 me-2">Mike Gardner</h1>
            <span class="badge text-bg-info d-inline-flex">Verified <i class="fi-shield ms-1"></i></span>
          </div>
          <ul class="list-inline gap-2 fs-sm ms-n2 mb-0">
            <li class="d-flex align-items-center gap-1 ms-2">
              <i class="fi-star-filled text-warning"></i>
              <span class="fs-sm text-secondary-emphasis">4.7</span>
              <span class="fs-xs text-body-secondary align-self-end">(26)</span>
            </li>
            <li class="d-flex align-items-center gap-1 ms-2"><i class="fi-credit-card"></i> $500 - $2,000</li>
            <li class="d-flex align-items-center gap-1 ms-2"><i class="fi-leaf"></i> Eco-friendly</li>
            <li class="d-flex align-items-center gap-1 ms-2"><i class="fi-thumbs-up"></i> Listing of the month</li>
          </ul>
        </div>
      </div>
      <button type="button" class="btn btn-icon btn-outline-secondary rounded-circle" data-bs-toggle="tooltip" title="Bookmark" aria-label="Bookmark">
        <i class="fi-bookmark fs-base"></i>
      </button>
    </div>

    <!-- Gallery -->
    <div class="row g-3 g-sm-4 g-md-3 g-xl-4 pb-sm-2 mb-5">
      <div class="col-md-8">
        <a class="hover-effect-scale hover-effect-opacity position-relative d-flex rounded overflow-hidden"
          href="{{ asset('assets/img/listings/contractors/single/01.jpg') }}" data-glightbox data-gallery="image-gallery">
          <i class="fi-zoom-in hover-effect-target fs-3 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
          <span class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
          <div class="ratio hover-effect-target bg-body-tertiary rounded" style="--fn-aspect-ratio: calc(432 / 856 * 100%)">
            <img src="{{ asset('assets/img/listings/contractors/single/01.jpg') }}" alt="Image">
          </div>
        </a>
      </div>
      <div class="col-md-4">
        <div class="row row-cols-2 g-3 g-sm-4 g-md-3 g-xl-4">
          @foreach(['02','03','04','05'] as $i)
          <div class="col">
            <a class="hover-effect-scale hover-effect-opacity position-relative d-flex rounded overflow-hidden"
              href="{{ asset('assets/img/listings/contractors/single/0'.$i.'.jpg') }}" data-glightbox data-gallery="image-gallery">
              <i class="fi-zoom-in hover-effect-target fs-3 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
              <span class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
              <div class="ratio hover-effect-target bg-body-tertiary rounded" style="--fn-aspect-ratio: calc(204 / 196 * 100%)">
                <img src="{{ asset('assets/img/listings/contractors/single/th0'.$i.'.jpg') }}" alt="Image">
              </div>
            </a>
          </div>
          @endforeach
        </div>
      </div>
    </div>

    <!-- Page content + Sidebar -->
    <div class="row pb-2 pb-sm-3 pb-md-4 pb-lg-5">

      <!-- Page content sections -->
      <div class="col-lg-8 col-xl-7">

        <!-- About -->
        <section class="pb-sm-2 pb-lg-3 mb-5">
          <h2 class="h4 mb-lg-4">About</h2>
          <p class="fs-sm mb-0">I'm a skilled handyperson adept at various maintenance, repair, and installation tasks. With a keen eye for detail and a wide range of skills, I tackle diverse projects, from fixing leaky faucets and repairing electrical issues to assembling furniture and conducting minor renovations. I bring expertise and efficiency to every job, ensuring homes and spaces remain functional, safe, and aesthetically pleasing.</p>
        </section>

        <!-- Services -->
        <section class="pb-sm-2 pb-lg-3 mb-5">
          <h2 class="h4 mb-4">Services offered</h2>
          <div class="row row-cols-2 row-cols-sm-3 gy-3 fs-sm">
            <div class="col d-flex"><i class="fi-box fs-xl me-2"></i>3D rendering</div>
            <div class="col d-flex"><i class="fi-bed-double fs-xl me-2"></i>Bedroom design</div>
            <div class="col d-flex"><i class="fi-oven fs-xl me-2"></i>Kitchen design</div>
            <div class="col d-flex"><i class="fi-shower fs-xl me-2"></i>Bathroom design</div>
            <div class="col d-flex"><i class="fi-dresser fs-xl me-2"></i>Closet design</div>
            <div class="col d-flex"><i class="fi-washing-machine fs-xl me-2"></i>Laundry room design</div>
            <div class="col d-flex"><i class="fi-baby fs-xl me-2"></i>Kids bedroom design</div>
            <div class="col d-flex"><i class="fi-lamp-pendant fs-xl me-2"></i>Interior design</div>
            <div class="col d-flex"><i class="fi-swatches fs-xl me-2"></i>Color consulting</div>
          </div>
        </section>

        <!-- Projects -->
        <section class="pb-sm-2 pb-lg-3 mb-5">
          <h2 class="h4 mb-sm-4">8 Projects</h2>
          <ul class="nav nav-pills flex-nowrap gap-2 overflow-x-auto text-nowrap pb-3 mb-2 mb-sm-3">
            <li class="nav-item me-1"><a class="nav-link active" aria-current="page" href="#">All</a></li>
            <li class="nav-item me-1"><a class="nav-link" href="#">Kitchen</a></li>
            <li class="nav-item me-1"><a class="nav-link" href="#">Living room</a></li>
            <li class="nav-item me-1"><a class="nav-link" href="#">Pool</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Dining room</a></li>
          </ul>
          <div class="row row-cols-2 gy-4 gx-3 gx-sm-4">
            <div class="col mb-2">
              <article class="card hover-effect-scale bg-transparent border-0">
                <div class="bg-body-tertiary rounded overflow-hidden">
                  <div class="ratio hover-effect-target" style="--fn-aspect-ratio: calc(240 / 360 * 100%)">
                    <img src="{{ asset('assets/img/listings/contractors/single/projects/01.jpg') }}" alt="Image">
                  </div>
                </div>
                <div class="card-body pt-3 pt-sm-4 pb-2 px-0">
                  <h3 class="h5 mb-0"><a class="hover-effect-underline stretched-link" href="#!">Bel Air - French Inspired Kitchen</a></h3>
                </div>
                <div class="card-footer d-flex gap-1 fs-sm bg-transparent border-0 p-0">
                  <i class="fi-map-pin mt-1"></i>845 West 53rd Street, Ap. 7B, NY 10019
                </div>
              </article>
            </div>
            <div class="col mb-2">
              <article class="card hover-effect-scale bg-transparent border-0">
                <div class="bg-body-tertiary rounded overflow-hidden">
                  <div class="ratio hover-effect-target" style="--fn-aspect-ratio: calc(240 / 360 * 100%)">
                    <img src="{{ asset('assets/img/listings/contractors/single/projects/02.jpg') }}" alt="Image">
                  </div>
                </div>
                <div class="card-body pt-3 pt-sm-4 pb-2 px-0">
                  <h3 class="h5 mb-0"><a class="hover-effect-underline stretched-link" href="#!">Mid Century Open Floor Kitchen</a></h3>
                </div>
                <div class="card-footer d-flex gap-1 fs-sm bg-transparent border-0 p-0">
                  <i class="fi-map-pin mt-1"></i>929 Hart St, Brooklyn, NY 11237
                </div>
              </article>
            </div>
            <div class="col mb-2">
              <article class="card hover-effect-scale bg-transparent border-0">
                <div class="bg-body-tertiary rounded overflow-hidden">
                  <div class="ratio hover-effect-target" style="--fn-aspect-ratio: calc(240 / 360 * 100%)">
                    <img src="{{ asset('assets/img/listings/contractors/single/projects/03.jpg') }}" alt="Image">
                  </div>
                </div>
                <div class="card-body pt-3 pt-sm-4 pb-2 px-0">
                  <h3 class="h5 mb-0"><a class="hover-effect-underline stretched-link" href="#!">Studio City - Cape Cod New Construction</a></h3>
                </div>
                <div class="card-footer d-flex gap-1 fs-sm bg-transparent border-0 p-0">
                  <i class="fi-map-pin mt-1"></i>219 East 78th Street, Suite 3A, NY 10075
                </div>
              </article>
            </div>
            <div class="col mb-2">
              <article class="card hover-effect-scale bg-transparent border-0">
                <div class="bg-body-tertiary rounded overflow-hidden">
                  <div class="ratio hover-effect-target" style="--fn-aspect-ratio: calc(240 / 360 * 100%)">
                    <img src="{{ asset('assets/img/listings/contractors/single/projects/04.jpg') }}" alt="Image">
                  </div>
                </div>
                <div class="card-body pt-3 pt-sm-4 pb-2 px-0">
                  <h3 class="h5 mb-0"><a class="hover-effect-underline stretched-link" href="#!">Encino Scandinavian Living Room</a></h3>
                </div>
                <div class="card-footer d-flex gap-1 fs-sm bg-transparent border-0 p-0">
                  <i class="fi-map-pin mt-1"></i>3811 Ditmars Blvd Astoria, NY 11105
                </div>
              </article>
            </div>
          </div>
          <button type="button" class="btn btn-lg btn-outline-secondary w-100 mt-4">Load more projects</button>
        </section>

        <!-- Business details -->
        <section class="pb-sm-2 pb-lg-3 mb-5">
          <h2 class="h4 mb-4">Business details</h2>
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
            <div class="col">
              <h5 class="h6 fs-sm pb-1 mb-2">General info</h5>
              <ul class="list-unstyled fs-sm mb-0">
                <li>Business name: <span class="fw-medium text-dark-emphasis">Mike Gardner</span></li>
                <li>License: <span class="fw-medium text-dark-emphasis">65IA02277532</span></li>
                <li>Typical job cost: <span class="fw-medium text-dark-emphasis">$500 - $2,000</span></li>
              </ul>
            </div>
            <div class="col">
              <h5 class="h6 fs-sm pb-1 mb-2">Contacts</h5>
              <ul class="list-unstyled fs-sm mb-0">
                <li>New York</li>
                <li>(973) 742-9571</li>
                <li>www.mikegardner.com</li>
              </ul>
            </div>
            <div class="col">
              <h5 class="h6 fs-sm pb-1 mb-2">Working hours</h5>
              <ul class="list-unstyled fs-sm mb-0">
                <li>Monday-Friday: 9 AM - 6 PM</li>
                <li>Saturday: 10 AM - 3 PM</li>
                <li>Sunday: Closed</li>
              </ul>
            </div>
          </div>
        </section>

        <!-- Reviews -->
        <section class="pt-sm-1 pt-md-3 pt-lg-4">
          <div class="d-flex align-items-center justify-content-between mb-4">
            <h2 class="h4 mb-0">Reviews</h2>
            <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#reviewForm">
              <i class="fi-edit-3 fs-base ms-n1 me-2"></i>Add review
            </button>
          </div>

          <!-- Rating breakdown -->
          <div class="row g-4 pb-3 mb-3">
            <div class="col-sm-5 col-md-3 col-lg-4">
              <div class="d-flex flex-column align-items-center justify-content-center h-100 bg-body-tertiary rounded p-4">
                <div class="h1 pb-2 mb-1">4.5</div>
                <div class="hstack justify-content-center gap-1 fs-sm mb-2">
                  <i class="fi-star-filled text-warning"></i>
                  <i class="fi-star-filled text-warning"></i>
                  <i class="fi-star-filled text-warning"></i>
                  <i class="fi-star-filled text-warning"></i>
                  <i class="fi-star-half text-warning"></i>
                </div>
                <div class="fs-sm">76 reviews</div>
              </div>
            </div>
            <div class="col-sm-7 col-md-9 col-lg-8">
              <div class="vstack gap-3">
                <div class="hstack gap-2">
                  <div class="hstack fs-sm gap-1">5<i class="fi-star-filled text-warning"></i></div>
                  <div class="progress w-100" role="progressbar" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100" style="height: 4px">
                    <div class="progress-bar bg-warning rounded-pill" style="width: 58%"></div>
                  </div>
                  <div class="fs-sm text-nowrap text-end" style="width: 40px;">44</div>
                </div>
                <div class="hstack gap-2">
                  <div class="hstack fs-sm gap-1">4<i class="fi-star-filled text-warning"></i></div>
                  <div class="progress w-100" role="progressbar" aria-valuenow="22.4" aria-valuemin="0" aria-valuemax="100" style="height: 4px">
                    <div class="progress-bar bg-warning rounded-pill" style="width: 22.4%"></div>
                  </div>
                  <div class="fs-sm text-nowrap text-end" style="width: 40px;">17</div>
                </div>
                <div class="hstack gap-2">
                  <div class="hstack fs-sm gap-1">3<i class="fi-star-filled text-warning"></i></div>
                  <div class="progress w-100" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100" style="height: 4px">
                    <div class="progress-bar bg-warning rounded-pill" style="width: 12%"></div>
                  </div>
                  <div class="fs-sm text-nowrap text-end" style="width: 40px;">9</div>
                </div>
                <div class="hstack gap-2">
                  <div class="hstack fs-sm gap-1">2<i class="fi-star-filled text-warning"></i></div>
                  <div class="progress w-100" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" style="height: 4px">
                    <div class="progress-bar bg-warning rounded-pill" style="width: 5%"></div>
                  </div>
                  <div class="fs-sm text-nowrap text-end" style="width: 40px;">4</div>
                </div>
                <div class="hstack gap-2">
                  <div class="hstack fs-sm gap-1">1<i class="fi-star-filled text-warning"></i></div>
                  <div class="progress w-100" role="progressbar" aria-valuenow="2.6" aria-valuemin="0" aria-valuemax="100" style="height: 4px">
                    <div class="progress-bar bg-warning rounded-pill" style="width: 2.6%"></div>
                  </div>
                  <div class="fs-sm text-nowrap text-end" style="width: 40px;">2</div>
                </div>
              </div>
            </div>
          </div>

          <!-- Reviews list -->
          <div class="vstack gap-4">
            <div class="vstack gap-2 mb-sm-2">
              <div class="d-flex align-items-center gap-3 mb-1">
                <h6 class="mb-0">Randy W.</h6>
                <span class="fs-xs text-body-secondary">November 19, 2024</span>
              </div>
              <div class="d-flex gap-1 fs-sm mb-1">
                <i class="fi-star-filled text-warning"></i><i class="fi-star-filled text-warning"></i><i class="fi-star-filled text-warning"></i><i class="fi-star-filled text-warning"></i><i class="fi-star-filled text-warning"></i>
              </div>
              <p class="fs-sm mb-1">From start to finish, his cooperation was incredibly smooth. The pricing was quite reasonable, and the task was completed efficiently and with a high level of cleanliness. I'm delighted that we chose Mike over the other companies we considered based on quotes.</p>
              <div class="nav align-items-center">
                <button type="button" class="nav-link text-body-secondary animate-scale px-0 me-n1"><i class="fi-thumbs-up fs-base animate-target me-1"></i>6</button>
                <hr class="vr my-2 mx-3">
                <button type="button" class="nav-link text-body-secondary animate-scale px-0 ms-n1"><i class="fi-thumbs-down fs-base animate-target me-1"></i>0</button>
              </div>
            </div>
            <div class="vstack gap-2 mb-sm-2">
              <div class="d-flex align-items-center gap-3 mb-1">
                <h6 class="mb-0">Melissa Smith</h6>
                <span class="fs-xs text-body-secondary">November 5, 2024</span>
              </div>
              <div class="d-flex gap-1 fs-sm mb-1">
                <i class="fi-star-filled text-warning"></i><i class="fi-star-filled text-warning"></i><i class="fi-star-filled text-warning"></i><i class="fi-star-filled text-warning"></i><i class="fi-star-filled text-warning"></i>
              </div>
              <p class="fs-sm mb-1">Mike delivered exceptional work at an excellent price. I highly recommend him. They completed the job in just four days, and after a full year, there have been no issues.</p>
              <div class="nav align-items-center">
                <button type="button" class="nav-link text-body-secondary animate-scale px-0 me-n1"><i class="fi-thumbs-up fs-base animate-target me-1"></i>8</button>
                <hr class="vr my-2 mx-3">
                <button type="button" class="nav-link text-body-secondary animate-scale px-0 ms-n1"><i class="fi-thumbs-down fs-base animate-target me-1"></i>0</button>
              </div>
            </div>
            <div class="vstack gap-2 mb-sm-2">
              <div class="d-flex align-items-center gap-3 mb-1">
                <h6 class="mb-0">Alice Cooper</h6>
                <span class="fs-xs text-body-secondary">October 23, 2024</span>
              </div>
              <div class="d-flex gap-1 fs-sm mb-1">
                <i class="fi-star-filled text-warning"></i><i class="fi-star-filled text-warning"></i><i class="fi-star-filled text-warning"></i><i class="fi-star-filled text-warning"></i><i class="fi-star-filled text-warning"></i>
              </div>
              <p class="fs-sm mb-1">Mike's service was exceptional, he is true professional. Discovered him on the website, took a chance, and without a doubt, he not only met but exceeded our expectations.</p>
              <div class="nav align-items-center">
                <button type="button" class="nav-link text-body-secondary animate-scale px-0 me-n1"><i class="fi-thumbs-up fs-base animate-target me-1"></i>27</button>
                <hr class="vr my-2 mx-3">
                <button type="button" class="nav-link text-body-secondary animate-scale px-0 ms-n1"><i class="fi-thumbs-down fs-base animate-target me-1"></i>3</button>
              </div>
            </div>
            <div class="vstack gap-2 mb-sm-2">
              <div class="d-flex align-items-center gap-3 mb-1">
                <h6 class="mb-0">Natalia D.</h6>
                <span class="fs-xs text-body-secondary">October 7, 2024</span>
              </div>
              <div class="d-flex gap-1 fs-sm mb-1">
                <i class="fi-star-filled text-warning"></i><i class="fi-star-filled text-warning"></i><i class="fi-star-filled text-warning"></i><i class="fi-star-filled text-warning"></i><i class="fi-star text-warning"></i>
              </div>
              <p class="fs-sm mb-1">Mike exhibited great professionalism and politeness. I hired him to replace the door springs, which he did efficiently in a short amount of time. I would wholeheartedly recommend his services to anyone.</p>
              <div class="nav align-items-center">
                <button type="button" class="nav-link text-body-secondary animate-scale px-0 me-n1"><i class="fi-thumbs-up fs-base animate-target me-1"></i>15</button>
                <hr class="vr my-2 mx-3">
                <button type="button" class="nav-link text-body-secondary animate-scale px-0 ms-n1"><i class="fi-thumbs-down fs-base animate-target me-1"></i>0</button>
              </div>
            </div>
          </div>

          <!-- Reviews pagination -->
          <nav class="pt-4 mt-1 mt-sm-0" aria-label="Reviews pagination">
            <ul class="pagination">
              <li class="page-item active" aria-current="page"><span class="page-link">1<span class="visually-hidden">(current)</span></span></li>
              <li class="page-item"><a class="page-link" href="#!">2</a></li>
              <li class="page-item"><a class="page-link" href="#!">3</a></li>
              <li class="page-item"><a class="page-link" href="#!">4</a></li>
              <li class="page-item"><span class="page-link pe-none">...</span></li>
              <li class="page-item"><a class="page-link" href="#!">16</a></li>
            </ul>
          </nav>
        </section>
      </div>

      <!-- Sidebar with contact form -->
      <aside class="col-lg-4 offset-xl-1" style="margin-top: -105px">
        <div class="offcanvas-lg offcanvas-end sticky-lg-top" id="contactForm">
          <div class="d-none d-lg-block" style="height: 105px"></div>
          <div class="offcanvas-header border-bottom py-3">
            <h3 class="h5 offcanvas-title">Contact Mike Gardner</h3>
            <button type="button" class="btn-close d-lg-none" data-bs-dismiss="offcanvas" data-bs-target="#contactForm" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body d-block position-relative p-lg-4">
            <div class="position-relative z-1 py-lg-2 px-xl-2">
              <h4 class="h5 text-center d-none d-lg-block pb-1 mb-2">Contact Mike Gardner</h4>
              <p class="fs-sm text-lg-center mb-4">Please fill out the form to contact a specialist</p>
              <form class="needs-validation" novalidate>
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
            <span class="position-absolute top-0 start-0 w-100 h-100 bg-body-tertiary rounded d-none d-lg-block"></span>
          </div>
        </div>
      </aside>
    </div>
  </div>
</main>

<!-- Contact form offcanvas toggle (mobile) -->
<button type="button"
  class="fixed-bottom z-sticky w-100 btn btn-lg btn-dark border-0 border-top border-light border-opacity-10 rounded-0 pb-4 d-lg-none"
  data-bs-toggle="offcanvas" data-bs-target="#contactForm" aria-controls="contactForm" data-bs-theme="light">
  <i class="fi-mail fs-base me-2"></i>
  Connect
</button>
@endsection

@push('scripts')
<script src="{{ asset('assets/vendor/glightbox/dist/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/cleave.js/dist/cleave.min.js') }}"></script>
<script src="{{ asset('assets/vendor/choices.js/public/assets/scripts/choices.min.js') }}"></script>
@endpush
