@extends('layouts.app')

@section('content')

    <div class="container pt-4 pt-sm-5 pb-5 mb-xxl-3">
      <div class="row pt-2 pt-sm-0 pt-lg-2 pb-2 pb-sm-3 pb-md-4 pb-lg-5">


        @include('partials.aside')


        <!-- Account reviews content -->
        <div class="col-lg-9">
          <h1 class="h2 pb-2 pb-lg-3">Reviews</h1>

          <!-- Nav pills -->
          <div class="nav overflow-x-auto mb-3 mb-md-4">
            <ul class="nav nav-pills flex-nowrap gap-2 pb-2 mb-1" role="tablist">
              <li class="nav-item me-1" role="presentation">
                <button type="button" class="nav-link text-nowrap active" id="reviews-about-you-tab"
                  data-bs-toggle="pill" data-bs-target="#reviews-about-you" role="tab" aria-controls="reviews-about-you"
                  aria-selected="true">
                  Reviews about you (8)
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button type="button" class="nav-link text-nowrap" id="reviews-by-you-tab" data-bs-toggle="pill"
                  data-bs-target="#reviews-by-you" role="tab" aria-controls="reviews-by-you" aria-selected="false">
                  Reviews by you (12)
                </button>
              </li>
            </ul>
          </div>

          <div class="tab-content">

            <!-- Reviews about you tab -->
            <div class="tab-pane fade show active" id="reviews-about-you" role="tabpanel"
              aria-labelledby="reviews-about-you-tab">

              <!-- Review with reply -->
              <div class="border-bottom pb-4">
                <div class="d-sm-flex align-items-center mb-3">
                  <div class="d-flex align-items-center pe-3">
                    <div class="ratio ratio-1x1 flex-shrink-0 bg-body-secondary rounded-circle overflow-hidden"
                      style="width: 48px">
                      <img src="assets/img/account/reviews/ava01.jpg" alt="Avatar">
                    </div>
                    <div class="ps-3">
                      <h6 class="mb-1">Randy Walker</h6>
                      <div class="fs-xs text-body-secondary">Nov 12, 2024</div>
                    </div>
                  </div>
                  <div class="d-flex gap-1 fs-sm pt-2 pt-sm-0 ps-5 ps-sm-0 ms-3 ms-sm-auto">
                    <i class="fi-star-filled text-warning"></i>
                    <i class="fi-star-filled text-warning"></i>
                    <i class="fi-star-filled text-warning"></i>
                    <i class="fi-star-filled text-warning"></i>
                    <i class="fi-star-filled text-warning"></i>
                  </div>
                </div>
                <p class="fs-sm mb-2">Review on:<a
                    class="hover-effect-underline fw-medium text-dark-emphasis text-decoration-none ms-2"
                    href="#!">67-04 Myrtle Ave Glendale, NY 11385</a></p>
                <p class="fs-sm mb-0">Excellent apartment in the very center of the city, attractions and entertainment
                  venues are located 50m from the flat. The flat was perfectly clean and had basic slippers,
                  gel-shampoo, clean towels.</p>
                <div class="bg-body-tertiary rounded p-4 mt-4 mb-2">
                  <div class="d-flex align-items-center mb-3">
                    <div class="ratio ratio-1x1 flex-shrink-0 bg-body-secondary rounded-circle overflow-hidden"
                      style="width: 38px">
                      <img src="assets/img/account/avatar-sm.jpg" alt="Avatar">
                    </div>
                    <div class="ps-3">
                      <h6 class="mb-1">Michael Williams</h6>
                      <div class="fs-xs text-body-secondary">Nov 13, 2024</div>
                    </div>
                  </div>
                  <p class="fs-sm mb-0">Thank you for your feedback. I'm glad you were satisfied :)</p>
                </div>
              </div>

              <!-- Review -->
              <div class="border-bottom py-4">
                <div class="d-sm-flex align-items-center mt-2 mb-3">
                  <div class="d-flex align-items-center pe-3">
                    <div class="ratio ratio-1x1 flex-shrink-0 bg-body-secondary rounded-circle overflow-hidden"
                      style="width: 48px">
                      <img src="assets/img/account/reviews/ava02.jpg" alt="Avatar">
                    </div>
                    <div class="ps-3">
                      <h6 class="mb-1">Kathryn Murphy</h6>
                      <div class="fs-xs text-body-secondary">Sep 17, 2024</div>
                    </div>
                  </div>
                  <div class="d-flex gap-1 fs-sm pt-2 pt-sm-0 ps-5 ps-sm-0 ms-3 ms-sm-auto">
                    <i class="fi-star-filled text-warning"></i>
                    <i class="fi-star-filled text-warning"></i>
                    <i class="fi-star-filled text-warning"></i>
                    <i class="fi-star-filled text-warning"></i>
                    <i class="fi-star-filled text-warning"></i>
                  </div>
                </div>
                <p class="fs-sm mb-2">Review on:<a
                    class="hover-effect-underline fw-medium text-dark-emphasis text-decoration-none ms-2" href="#!">517
                    82nd St, Brooklyn, NY 11209</a></p>
                <p class="fs-sm">I recently rented an apartment, and it has been a fantastic experience. The apartment
                  itself is beautiful, with modern finishes and plenty of natural light. The property management team is
                  very attentive and responds quickly to any maintenance requests. The common areas, including the pool
                  and gym, are always clean and well-maintained.</p>
                <div class="d-flex gap-2 mb-3">
                  <a class="hover-effect-scale hover-effect-opacity position-relative d-block w-100 rounded overflow-hidden"
                    href="assets/img/listings/real-estate/single/01.jpg" style="max-width: 112px" data-glightbox
                    data-gallery="review-images">
                    <i
                      class="fi-zoom-in hover-effect-target fs-4 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
                    <span
                      class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
                    <div class="ratio ratio-1x1 hover-effect-target bg-body-tertiary">
                      <img src="assets/img/account/reviews/01.jpg" alt="Image">
                    </div>
                  </a>
                  <a class="hover-effect-scale hover-effect-opacity position-relative d-block w-100 rounded overflow-hidden"
                    href="assets/img/listings/real-estate/single/03.jpg" style="max-width: 112px" data-glightbox
                    data-gallery="review-images">
                    <i
                      class="fi-zoom-in hover-effect-target fs-4 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
                    <span
                      class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
                    <div class="ratio ratio-1x1 hover-effect-target bg-body-tertiary">
                      <img src="assets/img/account/reviews/02.jpg" alt="Image">
                    </div>
                  </a>
                  <a class="hover-effect-scale hover-effect-opacity position-relative d-block w-100 rounded overflow-hidden"
                    href="assets/img/listings/real-estate/single/02.jpg" style="max-width: 112px" data-glightbox
                    data-gallery="review-images">
                    <i
                      class="fi-zoom-in hover-effect-target fs-4 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
                    <span
                      class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
                    <div class="ratio ratio-1x1 hover-effect-target bg-body-tertiary">
                      <img src="assets/img/account/reviews/03.jpg" alt="Image">
                    </div>
                  </a>
                </div>
                <div class="d-flex align-items-center justify-content-between mb-2">
                  <button type="button" class="btn btn-sm btn-outline-secondary">
                    <i class="fi-corner-up-left fs-sm ms-n1 me-2"></i>
                    Reply
                  </button>
                  <div class="nav">
                    <a class="nav-link position-relative fs-xs py-1 px-0" href="#!">
                      <i class="fi-info fs-sm me-1"></i>
                      <span class="hover-effect-underline stretched-link">Report</span>
                    </a>
                  </div>
                </div>
              </div>

              <!-- Review -->
              <div class="border-bottom py-4">
                <div class="d-sm-flex align-items-center mt-2 mb-3">
                  <div class="d-flex align-items-center pe-3">
                    <div class="ratio ratio-1x1 flex-shrink-0 bg-body-secondary rounded-circle overflow-hidden"
                      style="width: 48px">
                      <img src="assets/img/account/reviews/ava03.jpg" alt="Avatar">
                    </div>
                    <div class="ps-3">
                      <h6 class="mb-1">Darrell Steward</h6>
                      <div class="fs-xs text-body-secondary">Aug 9, 2024</div>
                    </div>
                  </div>
                  <div class="d-flex gap-1 fs-sm pt-2 pt-sm-0 ps-5 ps-sm-0 ms-3 ms-sm-auto">
                    <i class="fi-star-filled text-warning"></i>
                    <i class="fi-star-filled text-warning"></i>
                    <i class="fi-star-filled text-warning"></i>
                    <i class="fi-star-filled text-warning"></i>
                    <i class="fi-star-filled text-warning"></i>
                  </div>
                </div>
                <p class="fs-sm mb-2">Review on:<a
                    class="hover-effect-underline fw-medium text-dark-emphasis text-decoration-none ms-2" href="#!">929
                    Hart St, Brooklyn, NY 11237</a></p>
                <p class="fs-sm">I had a great experience with Michael Williams when selling my home. The team was
                  professional, reliable, and extremely knowledgeable about the market. They provided excellent
                  marketing for my property, which attracted a lot of interest and ultimately led to a quick sale above
                  the asking price. I highly recommend their services to anyone looking to sell their home.</p>
                <div class="d-flex align-items-center justify-content-between mb-2">
                  <button type="button" class="btn btn-sm btn-outline-secondary">
                    <i class="fi-corner-up-left fs-sm ms-n1 me-2"></i>
                    Reply
                  </button>
                  <div class="nav">
                    <a class="nav-link position-relative fs-xs py-1 px-0" href="#!">
                      <i class="fi-info fs-sm me-1"></i>
                      <span class="hover-effect-underline stretched-link">Report</span>
                    </a>
                  </div>
                </div>
              </div>

              <!-- Review -->
              <div class="border-bottom py-4">
                <div class="d-sm-flex align-items-center mt-2 mb-3">
                  <div class="d-flex align-items-center pe-3">
                    <div class="ratio ratio-1x1 flex-shrink-0 bg-body-secondary rounded-circle overflow-hidden"
                      style="width: 48px">
                      <img src="assets/img/account/reviews/ava04.jpg" alt="Avatar">
                    </div>
                    <div class="ps-3">
                      <h6 class="mb-1">Ralph Edwards</h6>
                      <div class="fs-xs text-body-secondary">Jul 4, 2024</div>
                    </div>
                  </div>
                  <div class="d-flex gap-1 fs-sm pt-2 pt-sm-0 ps-5 ps-sm-0 ms-3 ms-sm-auto">
                    <i class="fi-star-filled text-warning"></i>
                    <i class="fi-star-filled text-warning"></i>
                    <i class="fi-star-filled text-warning"></i>
                    <i class="fi-star-filled text-warning"></i>
                    <i class="fi-star text-warning"></i>
                  </div>
                </div>
                <p class="fs-sm mb-2">Review on:<a
                    class="hover-effect-underline fw-medium text-dark-emphasis text-decoration-none ms-2" href="#!">1234
                    Maple Street, Brooklyn, NY 11201</a></p>
                <p class="fs-sm">I recently rented an apartment and had a positive experience overall. The location is
                  convenient, and the building amenities are great. The apartment itself is spacious and
                  well-maintained. However, there were a few minor issues with the plumbing that took a little longer to
                  fix than expected. Despite that, I'm happy with my decision and would recommend it to others.</p>
                <div class="d-flex align-items-center justify-content-between mb-2">
                  <button type="button" class="btn btn-sm btn-outline-secondary">
                    <i class="fi-corner-up-left fs-sm ms-n1 me-2"></i>
                    Reply
                  </button>
                  <div class="nav">
                    <a class="nav-link position-relative fs-xs py-1 px-0" href="#!">
                      <i class="fi-info fs-sm me-1"></i>
                      <span class="hover-effect-underline stretched-link">Report</span>
                    </a>
                  </div>
                </div>
              </div>

              <!-- Pagination -->
              <nav class="pt-4 mt-md-2" aria-label="Reviews pagination">
                <ul class="pagination pagination-lg">
                  <li class="page-item active" aria-current="page">
                    <span class="page-link">
                      1
                      <span class="visually-hidden">(current)</span>
                    </span>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#!">2</a>
                  </li>
                </ul>
              </nav>
            </div>


            <!-- Reviews by you tab -->
            <div class="tab-pane fade" id="reviews-by-you" role="tabpanel" aria-labelledby="reviews-by-you-tab">

              <!-- Review -->
              <div class="border-bottom pb-4">
                <div class="d-flex align-items-start align-items-sm-center mb-3">
                  <div class="ratio ratio-1x1" style="max-width: 112px">
                    <img src="assets/img/account/reviews/01.jpg" class="bg-body-tertiary rounded" alt="Image">
                  </div>
                  <div class="d-flex align-items-start justify-content-between w-100">
                    <div class="ps-3 pe-2 pe-sm-3">
                      <span class="badge text-info bg-info-subtle mb-2">Published</span>
                      <div class="d-flex gap-1 fs-sm py-sm-1 mb-2">
                        <i class="fi-star-filled text-warning"></i>
                        <i class="fi-star-filled text-warning"></i>
                        <i class="fi-star-filled text-warning"></i>
                        <i class="fi-star-filled text-warning"></i>
                        <i class="fi-star-filled text-warning"></i>
                      </div>
                      <p class="fs-sm mb-2 mb-sm-0">Review on:<a
                          class="hover-effect-underline fw-medium text-dark-emphasis text-decoration-none ms-2"
                          href="#!">67-04 Myrtle Ave Glendale, NY 11385</a></p>
                      <div class="fs-xs text-body-secondary d-sm-none">Jan 17, 2024</div>
                    </div>
                    <div class="text-end ms-n5 ms-sm-0">
                      <div class="dropdown mb-sm-4">
                        <button type="button" class="btn btn-icon btn-outline-secondary" data-bs-toggle="dropdown"
                          aria-expanded="false" aria-label="Actions">
                          <i class="fi-more-vertical fs-lg"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li>
                            <a class="dropdown-item" href="#!">
                              <i class="fi-edit opacity-75 me-2"></i>
                              Edit
                            </a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#!">
                              <i class="fi-archive opacity-75 me-2"></i>
                              Move to archive
                            </a>
                          </li>
                          <li>
                            <a class="dropdown-item text-danger" href="#!">
                              <i class="fi-trash opacity-75 me-2"></i>
                              Delete
                            </a>
                          </li>
                        </ul>
                      </div>
                      <div class="fs-xs text-body-secondary d-none d-sm-block">Jan 17, 2024</div>
                    </div>
                  </div>
                </div>
                <p class="fs-sm">Excellent apartment in the very center of the city, attractions and entertainment
                  venues are located 50m from the flat. The flat was perfectly clean and had basic slippers,
                  gel-shampoo, clean towels.</p>
                <div class="d-flex align-items-center fs-sm fw-medium text-body-secondary">
                  <div class="d-flex align-items-center me-n1">
                    <i class="fi-thumbs-up fs-base me-1"></i>
                    6
                  </div>
                  <hr class="vr my-2 mx-3">
                  <div class="d-flex align-items-center ms-n1">
                    <i class="fi-thumbs-down fs-base animate-target me-1"></i>
                    0
                  </div>
                </div>
              </div>

              <!-- Review -->
              <div class="border-bottom py-4">
                <div class="d-flex align-items-start align-items-sm-center mt-2 mb-3">
                  <div class="ratio ratio-1x1" style="max-width: 112px">
                    <img src="assets/img/account/reviews/02.jpg" class="bg-body-tertiary rounded" alt="Image">
                  </div>
                  <div class="d-flex align-items-start justify-content-between w-100">
                    <div class="ps-3 pe-2 pe-sm-3">
                      <span class="badge text-info bg-info-subtle mb-2">Published</span>
                      <div class="d-flex gap-1 fs-sm py-sm-1 mb-2">
                        <i class="fi-star-filled text-warning"></i>
                        <i class="fi-star-filled text-warning"></i>
                        <i class="fi-star-filled text-warning"></i>
                        <i class="fi-star-filled text-warning"></i>
                        <i class="fi-star-filled text-warning"></i>
                      </div>
                      <p class="fs-sm mb-2 mb-sm-0">Review on:<a
                          class="hover-effect-underline fw-medium text-dark-emphasis text-decoration-none ms-2"
                          href="#!">517 82nd St, Brooklyn, NY 11209</a></p>
                      <div class="fs-xs text-body-secondary d-sm-none">Dec 5, 2024</div>
                    </div>
                    <div class="text-end ms-n5 ms-sm-0">
                      <div class="dropdown mb-sm-4">
                        <button type="button" class="btn btn-icon btn-outline-secondary" data-bs-toggle="dropdown"
                          aria-expanded="false" aria-label="Actions">
                          <i class="fi-more-vertical fs-lg"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li>
                            <a class="dropdown-item" href="#!">
                              <i class="fi-edit opacity-75 me-2"></i>
                              Edit
                            </a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#!">
                              <i class="fi-archive opacity-75 me-2"></i>
                              Move to archive
                            </a>
                          </li>
                          <li>
                            <a class="dropdown-item text-danger" href="#!">
                              <i class="fi-trash opacity-75 me-2"></i>
                              Delete
                            </a>
                          </li>
                        </ul>
                      </div>
                      <div class="fs-xs text-body-secondary d-none d-sm-block">Dec 5, 2024</div>
                    </div>
                  </div>
                </div>
                <p class="fs-sm">I recently rented an apartment, and it has been a fantastic experience. The apartment
                  itself is beautiful, with modern finishes and plenty of natural light. The property management team is
                  very attentive and responds quickly to any maintenance requests. The common areas, including the pool
                  and gym, are always clean and well-maintained.</p>
                <div class="d-flex align-items-center fs-sm fw-medium text-body-secondary">
                  <div class="d-flex align-items-center me-n1">
                    <i class="fi-thumbs-up fs-base me-1"></i>
                    13
                  </div>
                  <hr class="vr my-2 mx-3">
                  <div class="d-flex align-items-center ms-n1">
                    <i class="fi-thumbs-down fs-base animate-target me-1"></i>
                    2
                  </div>
                </div>
              </div>

              <!-- Review -->
              <div class="border-bottom py-4">
                <div class="d-flex align-items-start align-items-sm-center mt-2 mb-3">
                  <div class="ratio ratio-1x1" style="max-width: 112px">
                    <img src="assets/img/account/reviews/04.jpg" class="bg-body-tertiary rounded" alt="Image">
                  </div>
                  <div class="d-flex align-items-start justify-content-between w-100">
                    <div class="ps-3 pe-2 pe-sm-3">
                      <span class="badge text-body bg-body-secondary mb-2">Archived</span>
                      <div class="d-flex gap-1 fs-sm py-sm-1 mb-2">
                        <i class="fi-star-filled text-warning"></i>
                        <i class="fi-star-filled text-warning"></i>
                        <i class="fi-star text-warning"></i>
                        <i class="fi-star text-warning"></i>
                        <i class="fi-star text-warning"></i>
                      </div>
                      <p class="fs-sm mb-2 mb-sm-0">Review on:<a
                          class="hover-effect-underline fw-medium text-dark-emphasis text-decoration-none ms-2"
                          href="#!">929 Hart St, Brooklyn, NY 11237</a></p>
                      <div class="fs-xs text-body-secondary d-sm-none">May 8, 2023</div>
                    </div>
                    <div class="text-end ms-n5 ms-sm-0">
                      <div class="dropdown mb-sm-4">
                        <button type="button" class="btn btn-icon btn-outline-secondary" data-bs-toggle="dropdown"
                          aria-expanded="false" aria-label="Actions">
                          <i class="fi-more-vertical fs-lg"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li>
                            <a class="dropdown-item" href="#!">
                              <i class="fi-edit opacity-75 me-2"></i>
                              Edit
                            </a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#!">
                              <i class="fi-upload opacity-75 me-2"></i>
                              Publish
                            </a>
                          </li>
                          <li>
                            <a class="dropdown-item text-danger" href="#!">
                              <i class="fi-trash opacity-75 me-2"></i>
                              Delete
                            </a>
                          </li>
                        </ul>
                      </div>
                      <div class="fs-xs text-body-secondary d-none d-sm-block">May 8, 2023</div>
                    </div>
                  </div>
                </div>
                <p class="fs-sm">The property was not as advertised; several features that were supposed to be included,
                  such as a fitness center and updated appliances, were either non-existent or in poor condition.
                  Maintenance requests are rarely addressed in a timely manner, with some issues lingering for months
                  without resolution. The overall upkeep of the building is lacking, with common areas often dirty and
                  neglected.</p>
                <div class="d-flex align-items-center fs-sm fw-medium text-body-secondary">
                  <div class="d-flex align-items-center me-n1">
                    <i class="fi-thumbs-up fs-base me-1"></i>
                    4
                  </div>
                  <hr class="vr my-2 mx-3">
                  <div class="d-flex align-items-center ms-n1">
                    <i class="fi-thumbs-down fs-base animate-target me-1"></i>
                    1
                  </div>
                </div>
              </div>

              <!-- Review -->
              <div class="border-bottom py-4">
                <div class="d-flex align-items-start align-items-sm-center mt-2 mb-3">
                  <div class="ratio ratio-1x1" style="max-width: 112px">
                    <img src="assets/img/account/reviews/05.jpg" class="bg-body-tertiary rounded" alt="Image">
                  </div>
                  <div class="d-flex align-items-start justify-content-between w-100">
                    <div class="ps-3 pe-2 pe-sm-3">
                      <span class="badge text-info bg-info-subtle mb-2">Published</span>
                      <div class="d-flex gap-1 fs-sm py-sm-1 mb-2">
                        <i class="fi-star-filled text-warning"></i>
                        <i class="fi-star-filled text-warning"></i>
                        <i class="fi-star-filled text-warning"></i>
                        <i class="fi-star-filled text-warning"></i>
                        <i class="fi-star text-warning"></i>
                      </div>
                      <p class="fs-sm mb-2 mb-sm-0">Review on:<a
                          class="hover-effect-underline fw-medium text-dark-emphasis text-decoration-none ms-2"
                          href="#!">1234 Maple Street, Brooklyn, NY 11201</a></p>
                      <div class="fs-xs text-body-secondary d-sm-none">Oct 3, 2022</div>
                    </div>
                    <div class="text-end ms-n5 ms-sm-0">
                      <div class="dropdown mb-sm-4">
                        <button type="button" class="btn btn-icon btn-outline-secondary" data-bs-toggle="dropdown"
                          aria-expanded="false" aria-label="Actions">
                          <i class="fi-more-vertical fs-lg"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li>
                            <a class="dropdown-item" href="#!">
                              <i class="fi-edit opacity-75 me-2"></i>
                              Edit
                            </a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#!">
                              <i class="fi-archive opacity-75 me-2"></i>
                              Move to archive
                            </a>
                          </li>
                          <li>
                            <a class="dropdown-item text-danger" href="#!">
                              <i class="fi-trash opacity-75 me-2"></i>
                              Delete
                            </a>
                          </li>
                        </ul>
                      </div>
                      <div class="fs-xs text-body-secondary d-none d-sm-block">Oct 3, 2022</div>
                    </div>
                  </div>
                </div>
                <p class="fs-sm">I recently rented an apartment and had a positive experience overall. The location is
                  convenient, and the building amenities are great. The apartment itself is spacious and
                  well-maintained. However, there were a few minor issues with the plumbing that took a little longer to
                  fix than expected. Despite that, I'm happy with my decision and would recommend it to others.</p>
                <div class="d-flex align-items-center fs-sm fw-medium text-body-secondary">
                  <div class="d-flex align-items-center me-n1">
                    <i class="fi-thumbs-up fs-base me-1"></i>
                    19
                  </div>
                  <hr class="vr my-2 mx-3">
                  <div class="d-flex align-items-center ms-n1">
                    <i class="fi-thumbs-down fs-base animate-target me-1"></i>
                    5
                  </div>
                </div>
              </div>

              <!-- Pagination -->
              <nav class="pt-4 mt-md-2" aria-label="Reviews pagination">
                <ul class="pagination pagination-lg">
                  <li class="page-item active" aria-current="page">
                    <span class="page-link">
                      1
                      <span class="visually-hidden">(current)</span>
                    </span>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#!">2</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#!">3</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection