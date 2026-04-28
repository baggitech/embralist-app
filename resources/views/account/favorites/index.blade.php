@extends('layouts.app')

@section('content')

    <div class="container pt-4 pt-sm-5 pb-5 mb-xxl-3">
      <div class="row pt-2 pt-sm-0 pt-lg-2 pb-2 pb-sm-3 pb-md-4 pb-lg-5">


        @include('partials.aside')


        <!-- Account favorites content -->
        <div class="col-lg-9">

          <!-- Heading + Action buttons -->
          <div class="d-flex align-items-center justify-content-between pb-2 pb-lg-3 mb-3">
            <h1 class="h2 mb-0 me-3">Favorites</h1>
            <div class="nav flex-row flex-nowrap gap-4">
              <a class="nav-link position-relative px-0 me-sm-2" href="#!">
                <i class="fi-share-2 fs-base me-2"></i>
                <span class="hover-effect-underline stretched-link">Share <span
                    class="d-none d-sm-inline">favorites</span></span>
              </a>
              <a class="nav-link position-relative text-danger px-0" href="#!">
                <i class="fi-trash fs-base me-2"></i>
                <span class="hover-effect-underline stretched-link">Remove all</span>
              </a>
            </div>
          </div>


          <!-- Listings (Grid) -->
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4 g-md-3 g-lg-4">

            <!-- Item -->
            <div class="col">
              <article class="card hover-effect-opacity h-100">
                <div class="card-img-top position-relative bg-body-tertiary overflow-hidden">
                  <div class="swiper z-2" data-swiper='{
                      "pagination": {
                        "el": ".swiper-pagination"
                      },
                      "navigation": {
                        "prevEl": ".btn-prev",
                        "nextEl": ".btn-next"
                      },
                      "breakpoints": {
                        "991": {
                          "allowTouchMove": false
                        }
                      }
                    }'>
                    <a class="swiper-wrapper" href="#!">
                      <div class="swiper-slide">
                        <div class="ratio d-block" style="--fn-aspect-ratio: calc(248 / 362 * 100%)">
                          <img src="assets/img/listings/real-estate/06.jpg" alt="Image">
                          <span class="position-absolute top-0 start-0 w-100 h-100 z-1"
                            style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .11) 100%)"></span>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="ratio d-block" style="--fn-aspect-ratio: calc(248 / 362 * 100%)">
                          <img src="assets/img/listings/real-estate/06.jpg" alt="Image">
                          <span class="position-absolute top-0 start-0 w-100 h-100 z-1"
                            style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .11) 100%)"></span>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="ratio d-block" style="--fn-aspect-ratio: calc(248 / 362 * 100%)">
                          <img src="assets/img/listings/real-estate/06.jpg" alt="Image">
                          <span class="position-absolute top-0 start-0 w-100 h-100 z-1"
                            style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .11) 100%)"></span>
                        </div>
                      </div>
                    </a>
                    <div
                      class="d-flex flex-column gap-2 align-items-start position-absolute top-0 start-0 z-1 pt-1 pt-sm-0 ps-1 ps-sm-0 mt-2 mt-sm-3 ms-2 ms-sm-3">
                      <span class="badge text-bg-primary">New</span>
                    </div>
                    <div class="position-absolute top-0 end-0 z-1 pt-1 pt-sm-0 pe-1 pe-sm-0 mt-2 mt-sm-3 me-2 me-sm-3">
                      <button type="button"
                        class="btn btn-sm btn-icon btn-light bg-light border-0 rounded-circle animate-pulse"
                        aria-label="Remove from wishlist">
                        <i class="fi-heart-filled text-danger animate-target fs-sm"></i>
                      </button>
                    </div>
                    <div
                      class="position-absolute top-50 start-0 z-1 translate-middle-y d-none d-lg-block hover-effect-target opacity-0 ms-3">
                      <button type="button"
                        class="btn btn-sm btn-prev btn-icon btn-light bg-light rounded-circle animate-slide-start"
                        aria-label="Prev">
                        <i class="fi-chevron-left fs-lg animate-target"></i>
                      </button>
                    </div>
                    <div
                      class="position-absolute top-50 end-0 z-1 translate-middle-y d-none d-lg-block hover-effect-target opacity-0 me-3">
                      <button type="button"
                        class="btn btn-sm btn-next btn-icon btn-light bg-light rounded-circle animate-slide-end"
                        aria-label="Next">
                        <i class="fi-chevron-right fs-lg animate-target"></i>
                      </button>
                    </div>
                    <div class="swiper-pagination bottom-0 mb-2" data-bs-theme="light"></div>
                  </div>
                </div>
                <div class="card-body p-3">
                  <div class="pb-1 mb-2">
                    <span class="badge text-body-emphasis bg-body-secondary">For sale</span>
                  </div>
                  <div class="h5 mb-2">$375,000</div>
                  <h3 class="fs-sm fw-normal text-body mb-2">
                    <a class="stretched-link text-body" href="#!">929 Hart St, Brooklyn, NY 11237</a>
                  </h3>
                  <div class="h6 fs-sm mb-0">108 sq.m</div>
                </div>
                <div class="card-footer d-flex gap-2 border-0 bg-transparent pt-0 pb-3 px-3 mt-n1">
                  <div class="d-flex align-items-center fs-sm gap-1 me-1">
                    3<i class="fi-bed-single fs-base text-secondary-emphasis"></i>
                  </div>
                  <div class="d-flex align-items-center fs-sm gap-1 me-1">
                    2<i class="fi-shower fs-base text-secondary-emphasis"></i>
                  </div>
                  <div class="d-flex align-items-center fs-sm gap-1 me-1">
                    1<i class="fi-car-garage fs-base text-secondary-emphasis"></i>
                  </div>
                </div>
              </article>
            </div>

            <!-- Item -->
            <div class="col">
              <article class="card hover-effect-opacity h-100">
                <div class="card-img-top position-relative bg-body-tertiary overflow-hidden">
                  <div class="swiper z-2" data-swiper='{
                      "pagination": {
                        "el": ".swiper-pagination"
                      },
                      "navigation": {
                        "prevEl": ".btn-prev",
                        "nextEl": ".btn-next"
                      },
                      "breakpoints": {
                        "991": {
                          "allowTouchMove": false
                        }
                      }
                    }'>
                    <a class="swiper-wrapper" href="#!">
                      <div class="swiper-slide">
                        <div class="ratio d-block" style="--fn-aspect-ratio: calc(248 / 362 * 100%)">
                          <img src="assets/img/listings/real-estate/03.jpg" alt="Image">
                          <span class="position-absolute top-0 start-0 w-100 h-100 z-1"
                            style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .11) 100%)"></span>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="ratio d-block" style="--fn-aspect-ratio: calc(248 / 362 * 100%)">
                          <img src="assets/img/listings/real-estate/03.jpg" alt="Image">
                          <span class="position-absolute top-0 start-0 w-100 h-100 z-1"
                            style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .11) 100%)"></span>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="ratio d-block" style="--fn-aspect-ratio: calc(248 / 362 * 100%)">
                          <img src="assets/img/listings/real-estate/03.jpg" alt="Image">
                          <span class="position-absolute top-0 start-0 w-100 h-100 z-1"
                            style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .11) 100%)"></span>
                        </div>
                      </div>
                    </a>
                    <div
                      class="d-flex flex-column gap-2 align-items-start position-absolute top-0 start-0 z-1 pt-1 pt-sm-0 ps-1 ps-sm-0 mt-2 mt-sm-3 ms-2 ms-sm-3">
                      <span class="badge text-bg-info">Featured</span>
                      <span class="badge text-bg-primary">New</span>
                    </div>
                    <div class="position-absolute top-0 end-0 z-1 pt-1 pt-sm-0 pe-1 pe-sm-0 mt-2 mt-sm-3 me-2 me-sm-3">
                      <button type="button"
                        class="btn btn-sm btn-icon btn-light bg-light border-0 rounded-circle animate-pulse"
                        aria-label="Remove from wishlist">
                        <i class="fi-heart-filled text-danger animate-target fs-sm"></i>
                      </button>
                    </div>
                    <div
                      class="position-absolute top-50 start-0 z-1 translate-middle-y d-none d-lg-block hover-effect-target opacity-0 ms-3">
                      <button type="button"
                        class="btn btn-sm btn-prev btn-icon btn-light bg-light rounded-circle animate-slide-start"
                        aria-label="Prev">
                        <i class="fi-chevron-left fs-lg animate-target"></i>
                      </button>
                    </div>
                    <div
                      class="position-absolute top-50 end-0 z-1 translate-middle-y d-none d-lg-block hover-effect-target opacity-0 me-3">
                      <button type="button"
                        class="btn btn-sm btn-next btn-icon btn-light bg-light rounded-circle animate-slide-end"
                        aria-label="Next">
                        <i class="fi-chevron-right fs-lg animate-target"></i>
                      </button>
                    </div>
                    <div class="swiper-pagination bottom-0 mb-2" data-bs-theme="light"></div>
                  </div>
                </div>
                <div class="card-body p-3">
                  <div class="pb-1 mb-2">
                    <span class="badge text-body-emphasis bg-body-secondary">For rent</span>
                  </div>
                  <div class="h5 mb-2">$1,890</div>
                  <h3 class="fs-sm fw-normal text-body mb-2">
                    <a class="stretched-link text-body" href="#!">3811 Ditmars Blvd Astoria, NY 11105</a>
                  </h3>
                  <div class="h6 fs-sm mb-0">75 sq.m</div>
                </div>
                <div class="card-footer d-flex gap-2 border-0 bg-transparent pt-0 pb-3 px-3 mt-n1">
                  <div class="d-flex align-items-center fs-sm gap-1 me-1">
                    2<i class="fi-bed-single fs-base text-secondary-emphasis"></i>
                  </div>
                  <div class="d-flex align-items-center fs-sm gap-1 me-1">
                    1<i class="fi-shower fs-base text-secondary-emphasis"></i>
                  </div>
                  <div class="d-flex align-items-center fs-sm gap-1 me-1">
                    1<i class="fi-car-garage fs-base text-secondary-emphasis"></i>
                  </div>
                </div>
              </article>
            </div>

            <!-- Item -->
            <div class="col">
              <article class="card hover-effect-opacity h-100">
                <div class="card-img-top position-relative bg-body-tertiary overflow-hidden">
                  <div class="swiper z-2" data-swiper='{
                      "pagination": {
                        "el": ".swiper-pagination"
                      },
                      "navigation": {
                        "prevEl": ".btn-prev",
                        "nextEl": ".btn-next"
                      },
                      "breakpoints": {
                        "991": {
                          "allowTouchMove": false
                        }
                      }
                    }'>
                    <a class="swiper-wrapper" href="#!">
                      <div class="swiper-slide">
                        <div class="ratio d-block" style="--fn-aspect-ratio: calc(248 / 362 * 100%)">
                          <img src="assets/img/listings/real-estate/05.jpg" alt="Image">
                          <span class="position-absolute top-0 start-0 w-100 h-100 z-1"
                            style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .11) 100%)"></span>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="ratio d-block" style="--fn-aspect-ratio: calc(248 / 362 * 100%)">
                          <img src="assets/img/listings/real-estate/05.jpg" alt="Image">
                          <span class="position-absolute top-0 start-0 w-100 h-100 z-1"
                            style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .11) 100%)"></span>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="ratio d-block" style="--fn-aspect-ratio: calc(248 / 362 * 100%)">
                          <img src="assets/img/listings/real-estate/05.jpg" alt="Image">
                          <span class="position-absolute top-0 start-0 w-100 h-100 z-1"
                            style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .11) 100%)"></span>
                        </div>
                      </div>
                    </a>
                    <div
                      class="d-flex flex-column gap-2 align-items-start position-absolute top-0 start-0 z-1 pt-1 pt-sm-0 ps-1 ps-sm-0 mt-2 mt-sm-3 ms-2 ms-sm-3">
                      <span class="badge text-bg-info d-inline-flex align-items-center">
                        Verified
                        <i class="fi-shield ms-1"></i>
                      </span>
                    </div>
                    <div class="position-absolute top-0 end-0 z-1 pt-1 pt-sm-0 pe-1 pe-sm-0 mt-2 mt-sm-3 me-2 me-sm-3">
                      <button type="button"
                        class="btn btn-sm btn-icon btn-light bg-light border-0 rounded-circle animate-pulse"
                        aria-label="Remove from wishlist">
                        <i class="fi-heart-filled text-danger animate-target fs-sm"></i>
                      </button>
                    </div>
                    <div
                      class="position-absolute top-50 start-0 z-1 translate-middle-y d-none d-lg-block hover-effect-target opacity-0 ms-3">
                      <button type="button"
                        class="btn btn-sm btn-prev btn-icon btn-light bg-light rounded-circle animate-slide-start"
                        aria-label="Prev">
                        <i class="fi-chevron-left fs-lg animate-target"></i>
                      </button>
                    </div>
                    <div
                      class="position-absolute top-50 end-0 z-1 translate-middle-y d-none d-lg-block hover-effect-target opacity-0 me-3">
                      <button type="button"
                        class="btn btn-sm btn-next btn-icon btn-light bg-light rounded-circle animate-slide-end"
                        aria-label="Next">
                        <i class="fi-chevron-right fs-lg animate-target"></i>
                      </button>
                    </div>
                    <div class="swiper-pagination bottom-0 mb-2" data-bs-theme="light"></div>
                  </div>
                </div>
                <div class="card-body p-3">
                  <div class="pb-1 mb-2">
                    <span class="badge text-body-emphasis bg-body-secondary">For rent</span>
                  </div>
                  <div class="h5 mb-2">$1,250</div>
                  <h3 class="fs-sm fw-normal text-body mb-2">
                    <a class="stretched-link text-body" href="#!">444 Park Ave, Brooklyn, NY 11205</a>
                  </h3>
                  <div class="h6 fs-sm mb-0">54 sq.m</div>
                </div>
                <div class="card-footer d-flex gap-2 border-0 bg-transparent pt-0 pb-3 px-3 mt-n1">
                  <div class="d-flex align-items-center fs-sm gap-1 me-1">
                    1<i class="fi-bed-single fs-base text-secondary-emphasis"></i>
                  </div>
                  <div class="d-flex align-items-center fs-sm gap-1 me-1">
                    1<i class="fi-shower fs-base text-secondary-emphasis"></i>
                  </div>
                  <div class="d-flex align-items-center fs-sm gap-1 me-1">
                    0<i class="fi-car-garage fs-base text-secondary-emphasis"></i>
                  </div>
                </div>
              </article>
            </div>

            <!-- Item -->
            <div class="col">
              <article class="card hover-effect-opacity h-100">
                <div class="card-img-top position-relative bg-body-tertiary overflow-hidden">
                  <div class="swiper z-2" data-swiper='{
                      "pagination": {
                        "el": ".swiper-pagination"
                      },
                      "navigation": {
                        "prevEl": ".btn-prev",
                        "nextEl": ".btn-next"
                      },
                      "breakpoints": {
                        "991": {
                          "allowTouchMove": false
                        }
                      }
                    }'>
                    <a class="swiper-wrapper" href="#!">
                      <div class="swiper-slide">
                        <div class="ratio d-block" style="--fn-aspect-ratio: calc(248 / 362 * 100%)">
                          <img src="assets/img/listings/real-estate/01.jpg" alt="Image">
                          <span class="position-absolute top-0 start-0 w-100 h-100 z-1"
                            style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .11) 100%)"></span>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="ratio d-block" style="--fn-aspect-ratio: calc(248 / 362 * 100%)">
                          <img src="assets/img/listings/real-estate/01.jpg" alt="Image">
                          <span class="position-absolute top-0 start-0 w-100 h-100 z-1"
                            style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .11) 100%)"></span>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="ratio d-block" style="--fn-aspect-ratio: calc(248 / 362 * 100%)">
                          <img src="assets/img/listings/real-estate/01.jpg" alt="Image">
                          <span class="position-absolute top-0 start-0 w-100 h-100 z-1"
                            style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .11) 100%)"></span>
                        </div>
                      </div>
                    </a>
                    <div class="position-absolute top-0 end-0 z-1 pt-1 pt-sm-0 pe-1 pe-sm-0 mt-2 mt-sm-3 me-2 me-sm-3">
                      <button type="button"
                        class="btn btn-sm btn-icon btn-light bg-light border-0 rounded-circle animate-pulse"
                        aria-label="Remove from wishlist">
                        <i class="fi-heart-filled text-danger animate-target fs-sm"></i>
                      </button>
                    </div>
                    <div
                      class="position-absolute top-50 start-0 z-1 translate-middle-y d-none d-lg-block hover-effect-target opacity-0 ms-3">
                      <button type="button"
                        class="btn btn-sm btn-prev btn-icon btn-light bg-light rounded-circle animate-slide-start"
                        aria-label="Prev">
                        <i class="fi-chevron-left fs-lg animate-target"></i>
                      </button>
                    </div>
                    <div
                      class="position-absolute top-50 end-0 z-1 translate-middle-y d-none d-lg-block hover-effect-target opacity-0 me-3">
                      <button type="button"
                        class="btn btn-sm btn-next btn-icon btn-light bg-light rounded-circle animate-slide-end"
                        aria-label="Next">
                        <i class="fi-chevron-right fs-lg animate-target"></i>
                      </button>
                    </div>
                    <div class="swiper-pagination bottom-0 mb-2" data-bs-theme="light"></div>
                  </div>
                </div>
                <div class="card-body p-3">
                  <div class="pb-1 mb-2">
                    <span class="badge text-body-emphasis bg-body-secondary">For rent</span>
                  </div>
                  <div class="h5 mb-2">$1,620</div>
                  <h3 class="fs-sm fw-normal text-body mb-2">
                    <a class="stretched-link text-body" href="#!">40 S 9th St, Brooklyn, NY 11249</a>
                  </h3>
                  <div class="h6 fs-sm mb-0">65 sq.m</div>
                </div>
                <div class="card-footer d-flex gap-2 border-0 bg-transparent pt-0 pb-3 px-3 mt-n1">
                  <div class="d-flex align-items-center fs-sm gap-1 me-1">
                    2<i class="fi-bed-single fs-base text-secondary-emphasis"></i>
                  </div>
                  <div class="d-flex align-items-center fs-sm gap-1 me-1">
                    1<i class="fi-shower fs-base text-secondary-emphasis"></i>
                  </div>
                  <div class="d-flex align-items-center fs-sm gap-1 me-1">
                    1<i class="fi-car-garage fs-base text-secondary-emphasis"></i>
                  </div>
                </div>
              </article>
            </div>

            <!-- Item -->
            <div class="col">
              <article class="card hover-effect-opacity h-100">
                <div class="card-img-top position-relative bg-body-tertiary overflow-hidden">
                  <div class="swiper z-2" data-swiper='{
                      "pagination": {
                        "el": ".swiper-pagination"
                      },
                      "navigation": {
                        "prevEl": ".btn-prev",
                        "nextEl": ".btn-next"
                      },
                      "breakpoints": {
                        "991": {
                          "allowTouchMove": false
                        }
                      }
                    }'>
                    <a class="swiper-wrapper" href="#!">
                      <div class="swiper-slide">
                        <div class="ratio d-block" style="--fn-aspect-ratio: calc(248 / 362 * 100%)">
                          <img src="assets/img/listings/real-estate/04.jpg" alt="Image">
                          <span class="position-absolute top-0 start-0 w-100 h-100 z-1"
                            style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .11) 100%)"></span>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="ratio d-block" style="--fn-aspect-ratio: calc(248 / 362 * 100%)">
                          <img src="assets/img/listings/real-estate/04.jpg" alt="Image">
                          <span class="position-absolute top-0 start-0 w-100 h-100 z-1"
                            style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .11) 100%)"></span>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="ratio d-block" style="--fn-aspect-ratio: calc(248 / 362 * 100%)">
                          <img src="assets/img/listings/real-estate/04.jpg" alt="Image">
                          <span class="position-absolute top-0 start-0 w-100 h-100 z-1"
                            style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .11) 100%)"></span>
                        </div>
                      </div>
                    </a>
                    <div class="position-absolute top-0 end-0 z-1 pt-1 pt-sm-0 pe-1 pe-sm-0 mt-2 mt-sm-3 me-2 me-sm-3">
                      <button type="button"
                        class="btn btn-sm btn-icon btn-light bg-light border-0 rounded-circle animate-pulse"
                        aria-label="Remove from wishlist">
                        <i class="fi-heart-filled text-danger animate-target fs-sm"></i>
                      </button>
                    </div>
                    <div
                      class="position-absolute top-50 start-0 z-1 translate-middle-y d-none d-lg-block hover-effect-target opacity-0 ms-3">
                      <button type="button"
                        class="btn btn-sm btn-prev btn-icon btn-light bg-light rounded-circle animate-slide-start"
                        aria-label="Prev">
                        <i class="fi-chevron-left fs-lg animate-target"></i>
                      </button>
                    </div>
                    <div
                      class="position-absolute top-50 end-0 z-1 translate-middle-y d-none d-lg-block hover-effect-target opacity-0 me-3">
                      <button type="button"
                        class="btn btn-sm btn-next btn-icon btn-light bg-light rounded-circle animate-slide-end"
                        aria-label="Next">
                        <i class="fi-chevron-right fs-lg animate-target"></i>
                      </button>
                    </div>
                    <div class="swiper-pagination bottom-0 mb-2" data-bs-theme="light"></div>
                  </div>
                </div>
                <div class="card-body p-3">
                  <div class="pb-1 mb-2">
                    <span class="badge text-body-emphasis bg-body-secondary">For rent</span>
                  </div>
                  <div class="h5 mb-2">$1,170</div>
                  <h3 class="fs-sm fw-normal text-body mb-2">
                    <a class="stretched-link text-body" href="#!">67-04 Myrtle Ave Glendale, NY 11385</a>
                  </h3>
                  <div class="h6 fs-sm mb-0">42 sq.m</div>
                </div>
                <div class="card-footer d-flex gap-2 border-0 bg-transparent pt-0 pb-3 px-3 mt-n1">
                  <div class="d-flex align-items-center fs-sm gap-1 me-1">
                    1<i class="fi-bed-single fs-base text-secondary-emphasis"></i>
                  </div>
                  <div class="d-flex align-items-center fs-sm gap-1 me-1">
                    1<i class="fi-shower fs-base text-secondary-emphasis"></i>
                  </div>
                  <div class="d-flex align-items-center fs-sm gap-1 me-1">
                    0<i class="fi-car-garage fs-base text-secondary-emphasis"></i>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection