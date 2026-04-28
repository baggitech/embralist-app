@extends('layouts.app')

@section('content')

    <div class="container pt-4 pt-sm-5 pb-5 mb-xxl-3">
      <div class="row pt-2 pt-sm-0 pt-lg-2 pb-2 pb-sm-3 pb-md-4 pb-lg-5">


        @include('partials.aside')


        <!-- Account listings content -->
        <div class="col-lg-9">
          <h1 class="h2 pb-2 pb-lg-3">My listings</h1>

          <!-- Nav pills -->
          <div class="nav overflow-x-auto mb-2">
            <ul class="nav nav-pills flex-nowrap gap-2 pb-2 mb-1" role="tablist">
              <li class="nav-item me-1" role="presentation">
                <button type="button" class="nav-link text-nowrap active" id="published-tab" data-bs-toggle="pill"
                  data-bs-target="#published" role="tab" aria-controls="published" aria-selected="true">
                  Published (3)
                </button>
              </li>
              <li class="nav-item me-1" role="presentation">
                <button type="button" class="nav-link text-nowrap" id="drafts-tab" data-bs-toggle="pill"
                  data-bs-target="#drafts" role="tab" aria-controls="drafts" aria-selected="false">
                  Drafts (2)
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button type="button" class="nav-link text-nowrap" id="archived-tab" data-bs-toggle="pill"
                  data-bs-target="#archived" role="tab" aria-controls="archived" aria-selected="false">
                  Archived (0)
                </button>
              </li>
            </ul>
          </div>

          <div class="tab-content">

            <!-- Published tab -->
            <div class="tab-pane fade show active" id="published" role="tabpanel" aria-labelledby="published-tab">

              <!-- Master checkbox + Action buttons -->
              <div class="nav align-items-center mb-4">
                <div class="nav-link fs-lg ps-0 pe-2 py-2 mt-n1 me-4"
                  data-master-checkbox='{"container": "#publishedSelection", "label": "Select all the ads to apply the same action to them", "labelChecked": "Unselect all", "showOnCheck": "#published-action-buttons"}'>
                  <input type="checkbox" class="form-check-input" id="published-master" checked>
                  <label for="published-master" class="form-check-label fw-normal mt-1 ms-2">Unselect all</label>
                </div>
                <div class="d-flex flex-wrap" id="published-action-buttons">
                  <a class="nav-link position-relative px-0 pe-sm-2 py-2 me-4" href="#!">
                    <i class="fi-zap fs-base me-2"></i>
                    <span class="hover-effect-underline stretched-link d-none d-md-inline">Promote</span>
                  </a>
                  <a class="nav-link position-relative px-0 pe-sm-2 py-2 me-4" href="#!">
                    <i class="fi-archive fs-base me-2"></i>
                    <span class="hover-effect-underline stretched-link d-none d-md-inline">Move to archive</span>
                  </a>
                  <a class="nav-link position-relative text-danger px-0 py-2" href="#!">
                    <i class="fi-trash fs-base me-1"></i>
                    <span class="hover-effect-underline stretched-link d-none d-md-inline">Delete</span>
                  </a>
                </div>
              </div>

              <!-- Published listings -->
              <div class="vstack gap-4" id="publishedSelection">

                <!-- Item -->
                <div class="d-sm-flex align-items-center">
                  <div class="d-inline-flex position-relative z-2 pt-1 pb-2 ps-2 p-sm-0 ms-2 ms-sm-0 me-sm-2">
                    <div class="form-check position-relative z-1 fs-lg m-0">
                      <input type="checkbox" class="form-check-input" checked>
                    </div>
                    <span class="position-absolute top-0 start-0 w-100 h-100 bg-body border rounded d-sm-none"></span>
                  </div>
                  <article class="card w-100">
                    <div class="d-sm-none" style="margin-top: -44px"></div>
                    <div class="row g-0">
                      <div class="col-sm-4 col-md-3 rounded overflow-hidden pb-2 pb-sm-0 pe-sm-2">
                        <a class="position-relative d-flex h-100 bg-body-tertiary" href="#!" style="min-height: 174px">
                          <img src="assets/img/listings/real-estate/01.jpg"
                            class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Image">
                          <div class="ratio d-none d-sm-block" style="--fn-aspect-ratio: calc(180 / 240 * 100%)"></div>
                          <div class="ratio ratio-16x9 d-sm-none"></div>
                        </a>
                      </div>
                      <div class="col-sm-8 col-md-9 align-self-center">
                        <div
                          class="card-body d-flex justify-content-between p-3 py-sm-4 ps-sm-2 ps-md-3 pe-md-4 mt-n1 mt-sm-0">
                          <div class="position-relative pe-3">
                            <span class="badge text-body-emphasis bg-body-secondary mb-2">For rent</span>
                            <div class="h5 mb-2">$2,500</div>
                            <a class="stretched-link d-block fs-sm text-body text-decoration-none mb-2" href="#!">40 S
                              9th St, Brooklyn, NY 11249</a>
                            <div class="h6 fs-sm mb-0">97 sq.m</div>
                          </div>
                          <div class="text-end">
                            <div class="fs-xs text-body-secondary mb-3">Created: 05/10/2024</div>
                            <div class="d-flex justify-content-end gap-2 mb-3">
                              <button type="button" class="btn btn-outline-secondary">Statistics</button>
                              <div class="dropdown">
                                <button type="button" class="btn btn-icon btn-outline-secondary"
                                  data-bs-toggle="dropdown" aria-expanded="false" aria-label="Settings">
                                  <i class="fi-settings fs-base"></i>
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
                                      <i class="fi-zap fs-base opacity-75 me-2"></i>
                                      Promote
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
                            </div>
                            <ul class="list-unstyled flex-row flex-wrap justify-content-end fs-sm mb-0">
                              <li class="d-flex align-items-center me-2 me-md-3">
                                <i class="fi-eye fs-base me-1"></i>
                                1246
                              </li>
                              <li class="d-flex align-items-center me-2 me-md-3">
                                <i class="fi-heart fs-base me-1"></i>
                                23
                              </li>
                              <li class="d-flex align-items-center">
                                <i class="fi-phone-incoming fs-base me-1"></i>
                                8
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </article>
                </div>

                <!-- Item -->
                <div class="d-sm-flex align-items-center">
                  <div class="d-inline-flex position-relative z-2 pt-1 pb-2 ps-2 p-sm-0 ms-2 ms-sm-0 me-sm-2">
                    <div class="form-check position-relative z-1 fs-lg m-0">
                      <input type="checkbox" class="form-check-input" checked>
                    </div>
                    <span class="position-absolute top-0 start-0 w-100 h-100 bg-body border rounded d-sm-none"></span>
                  </div>
                  <article class="card w-100">
                    <div class="d-sm-none" style="margin-top: -44px"></div>
                    <div class="row g-0">
                      <div class="col-sm-4 col-md-3 rounded overflow-hidden pb-2 pb-sm-0 pe-sm-2">
                        <a class="position-relative d-flex h-100 bg-body-tertiary" href="#!" style="min-height: 174px">
                          <img src="assets/img/listings/real-estate/02.jpg"
                            class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Image">
                          <div class="ratio d-none d-sm-block" style="--fn-aspect-ratio: calc(180 / 240 * 100%)"></div>
                          <div class="ratio ratio-16x9 d-sm-none"></div>
                        </a>
                      </div>
                      <div class="col-sm-8 col-md-9 align-self-center">
                        <div
                          class="card-body d-flex justify-content-between p-3 py-sm-4 ps-sm-2 ps-md-3 pe-md-4 mt-n1 mt-sm-0">
                          <div class="position-relative pe-3">
                            <span class="badge text-body-emphasis bg-body-secondary mb-2">For rent</span>
                            <div class="h5 mb-2">$1,350</div>
                            <a class="stretched-link d-block fs-sm text-body text-decoration-none mb-2" href="#!">444
                              Park Ave, Brooklyn, NY 11205</a>
                            <div class="h6 fs-sm mb-0">45 sq.m</div>
                          </div>
                          <div class="text-end">
                            <div class="fs-xs text-body-secondary mb-3">Created: 12/06/2024</div>
                            <div class="d-flex justify-content-end gap-2 mb-3">
                              <button type="button" class="btn btn-outline-secondary">Statistics</button>
                              <div class="dropdown">
                                <button type="button" class="btn btn-icon btn-outline-secondary"
                                  data-bs-toggle="dropdown" aria-expanded="false" aria-label="Settings">
                                  <i class="fi-settings fs-base"></i>
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
                                      <i class="fi-zap fs-base opacity-75 me-2"></i>
                                      Promote
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
                            </div>
                            <ul class="list-unstyled flex-row flex-wrap justify-content-end fs-sm mb-0">
                              <li class="d-flex align-items-center me-2 me-md-3">
                                <i class="fi-eye fs-base me-1"></i>
                                678
                              </li>
                              <li class="d-flex align-items-center me-2 me-md-3">
                                <i class="fi-heart fs-base me-1"></i>
                                5
                              </li>
                              <li class="d-flex align-items-center">
                                <i class="fi-phone-incoming fs-base me-1"></i>
                                1
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </article>
                </div>

                <!-- Item -->
                <div class="d-sm-flex align-items-center">
                  <div class="d-inline-flex position-relative z-2 pt-1 pb-2 ps-2 p-sm-0 ms-2 ms-sm-0 me-sm-2">
                    <div class="form-check position-relative z-1 fs-lg m-0">
                      <input type="checkbox" class="form-check-input">
                    </div>
                    <span class="position-absolute top-0 start-0 w-100 h-100 bg-body border rounded d-sm-none"></span>
                  </div>
                  <article class="card w-100">
                    <div class="d-sm-none" style="margin-top: -44px"></div>
                    <div class="row g-0">
                      <div class="col-sm-4 col-md-3 rounded overflow-hidden pb-2 pb-sm-0 pe-sm-2">
                        <a class="position-relative d-flex h-100 bg-body-tertiary" href="#!" style="min-height: 174px">
                          <img src="assets/img/listings/real-estate/06.jpg"
                            class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Image">
                          <div class="ratio d-none d-sm-block" style="--fn-aspect-ratio: calc(180 / 240 * 100%)"></div>
                          <div class="ratio ratio-16x9 d-sm-none"></div>
                        </a>
                      </div>
                      <div class="col-sm-8 col-md-9 align-self-center">
                        <div
                          class="card-body d-flex justify-content-between p-3 py-sm-4 ps-sm-2 ps-md-3 pe-md-4 mt-n1 mt-sm-0">
                          <div class="position-relative pe-3">
                            <span class="badge text-body-emphasis bg-body-secondary mb-2">For sale</span>
                            <div class="h5 mb-2">$375,000</div>
                            <a class="stretched-link d-block fs-sm text-body text-decoration-none mb-2" href="#!">929
                              Hart St,Brooklyn, NY 11237</a>
                            <div class="h6 fs-sm mb-0">108 sq.m</div>
                          </div>
                          <div class="text-end">
                            <div class="fs-xs text-body-secondary mb-3">Created: 19/05/2024</div>
                            <div class="d-flex justify-content-end gap-2 mb-3">
                              <button type="button" class="btn btn-outline-secondary">Statistics</button>
                              <div class="dropdown">
                                <button type="button" class="btn btn-icon btn-outline-secondary"
                                  data-bs-toggle="dropdown" aria-expanded="false" aria-label="Settings">
                                  <i class="fi-settings fs-base"></i>
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
                                      <i class="fi-zap fs-base opacity-75 me-2"></i>
                                      Promote
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
                            </div>
                            <ul class="list-unstyled flex-row flex-wrap justify-content-end fs-sm mb-0">
                              <li class="d-flex align-items-center me-2 me-md-3">
                                <i class="fi-eye fs-base me-1"></i>
                                392
                              </li>
                              <li class="d-flex align-items-center me-2 me-md-3">
                                <i class="fi-heart fs-base me-1"></i>
                                7
                              </li>
                              <li class="d-flex align-items-center">
                                <i class="fi-phone-incoming fs-base me-1"></i>
                                4
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </article>
                </div>
              </div>
            </div>


            <!-- Drafts tab -->
            <div class="tab-pane fade" id="drafts" role="tabpanel" aria-labelledby="drafts-tab">

              <!-- Master checkbox + Action buttons -->
              <div class="nav align-items-center mb-4">
                <div class="nav-link fs-lg ps-0 pe-2 py-2 mt-n1 me-4"
                  data-master-checkbox='{"container": "#draftsSelection", "label": "Select all the ads to apply the same action to them", "labelChecked": "Unselect all", "showOnCheck": "#drafts-action-buttons"}'>
                  <input type="checkbox" class="form-check-input" id="drafts-master">
                  <label for="drafts-master" class="form-check-label fw-normal mt-1 ms-2">Select all the ads to apply
                    the same action to them</label>
                </div>
                <div class="d-flex flex-wrap d-none" id="drafts-action-buttons">
                  <a class="nav-link position-relative px-0 pe-sm-2 py-2 me-4" href="#!">
                    <i class="fi-zap fs-base me-2"></i>
                    <span class="hover-effect-underline stretched-link d-none d-md-inline">Promote</span>
                  </a>
                  <a class="nav-link position-relative px-0 pe-sm-2 py-2 me-4" href="#!">
                    <i class="fi-archive fs-base me-2"></i>
                    <span class="hover-effect-underline stretched-link d-none d-md-inline">Move to archive</span>
                  </a>
                  <a class="nav-link position-relative text-danger px-0 py-2" href="#!">
                    <i class="fi-trash fs-base me-1"></i>
                    <span class="hover-effect-underline stretched-link d-none d-md-inline">Delete</span>
                  </a>
                </div>
              </div>

              <!-- Drafts listings -->
              <div class="vstack gap-4" id="draftsSelection">

                <!-- Item -->
                <div class="d-sm-flex align-items-center">
                  <div class="d-inline-flex position-relative z-2 pt-1 pb-2 ps-2 p-sm-0 ms-2 ms-sm-0 me-sm-2">
                    <div class="form-check position-relative z-1 fs-lg m-0">
                      <input type="checkbox" class="form-check-input">
                    </div>
                    <span class="position-absolute top-0 start-0 w-100 h-100 bg-body border rounded d-sm-none"></span>
                  </div>
                  <article class="card w-100">
                    <div class="d-sm-none" style="margin-top: -44px"></div>
                    <div class="row g-0">
                      <div class="col-sm-4 col-md-3 rounded overflow-hidden pb-2 pb-sm-0 pe-sm-2">
                        <a class="position-relative d-flex h-100 bg-body-tertiary" href="#!" style="min-height: 174px">
                          <img src="assets/img/listings/real-estate/05.jpg"
                            class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Image">
                          <div class="ratio d-none d-sm-block" style="--fn-aspect-ratio: calc(180 / 240 * 100%)"></div>
                          <div class="ratio ratio-16x9 d-sm-none"></div>
                        </a>
                      </div>
                      <div class="col-sm-8 col-md-9 align-self-center">
                        <div
                          class="card-body d-flex justify-content-between p-3 py-sm-4 ps-sm-2 ps-md-3 pe-md-4 mt-n1 mt-sm-0">
                          <div class="position-relative pe-3">
                            <span class="badge text-body-emphasis bg-body-secondary mb-2">For rent</span>
                            <div class="h5 mb-2">$-.---</div>
                            <a class="stretched-link d-block fs-sm text-body text-decoration-none mb-2" href="#!">517
                              82nd St, Brooklyn, NY 11209</a>
                            <div class="h6 fs-sm mb-0">00 sq.m</div>
                          </div>
                          <div class="text-end">
                            <div class="fs-xs text-body-secondary mb-3">Created: 13/12/2024</div>
                            <div class="d-flex justify-content-end gap-2 mb-3">
                              <button type="button" class="btn btn-outline-dark">Finish and publish</button>
                              <div class="dropdown">
                                <button type="button" class="btn btn-icon btn-outline-secondary"
                                  data-bs-toggle="dropdown" aria-expanded="false" aria-label="Settings">
                                  <i class="fi-settings fs-base"></i>
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
                                      <i class="fi-zap fs-base opacity-75 me-2"></i>
                                      Promote
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
                            </div>
                            <ul class="list-unstyled flex-row flex-wrap justify-content-end fs-sm mb-0">
                              <li class="d-flex align-items-center me-2 me-md-3">
                                <i class="fi-eye fs-base me-1"></i>
                                0
                              </li>
                              <li class="d-flex align-items-center me-2 me-md-3">
                                <i class="fi-heart fs-base me-1"></i>
                                0
                              </li>
                              <li class="d-flex align-items-center">
                                <i class="fi-phone-incoming fs-base me-1"></i>
                                0
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </article>
                </div>

                <!-- Item -->
                <div class="d-sm-flex align-items-center">
                  <div class="d-inline-flex position-relative z-2 pt-1 pb-2 ps-2 p-sm-0 ms-2 ms-sm-0 me-sm-2">
                    <div class="form-check position-relative z-1 fs-lg m-0">
                      <input type="checkbox" class="form-check-input">
                    </div>
                    <span class="position-absolute top-0 start-0 w-100 h-100 bg-body border rounded d-sm-none"></span>
                  </div>
                  <article class="card w-100">
                    <div class="d-sm-none" style="margin-top: -44px"></div>
                    <div class="row g-0">
                      <div class="col-sm-4 col-md-3 rounded overflow-hidden pb-2 pb-sm-0 pe-sm-2">
                        <a class="position-relative d-flex h-100 bg-body-tertiary" href="#!" style="min-height: 174px">
                          <img src="assets/img/listings/real-estate/04.jpg"
                            class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Image">
                          <div class="ratio d-none d-sm-block" style="--fn-aspect-ratio: calc(180 / 240 * 100%)"></div>
                          <div class="ratio ratio-16x9 d-sm-none"></div>
                        </a>
                      </div>
                      <div class="col-sm-8 col-md-9 align-self-center">
                        <div
                          class="card-body d-flex justify-content-between p-3 py-sm-4 ps-sm-2 ps-md-3 pe-md-4 mt-n1 mt-sm-0">
                          <div class="position-relative pe-3">
                            <span class="badge text-body-emphasis bg-body-secondary mb-2">For rent</span>
                            <div class="h5 mb-2">$1,430</div>
                            <a class="stretched-link d-block fs-sm text-body text-decoration-none mb-2" href="#!">67-04
                              Myrtle Ave Glendale, NY 11385</a>
                            <div class="h6 fs-sm mb-0">62 sq.m</div>
                          </div>
                          <div class="text-end">
                            <div class="fs-xs text-body-secondary mb-3">Created: 09/11/2024</div>
                            <div class="d-flex justify-content-end gap-2 mb-3">
                              <button type="button" class="btn btn-outline-dark">Publish</button>
                              <div class="dropdown">
                                <button type="button" class="btn btn-icon btn-outline-secondary"
                                  data-bs-toggle="dropdown" aria-expanded="false" aria-label="Settings">
                                  <i class="fi-settings fs-base"></i>
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
                                      <i class="fi-zap fs-base opacity-75 me-2"></i>
                                      Promote
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
                            </div>
                            <ul class="list-unstyled flex-row flex-wrap justify-content-end fs-sm mb-0">
                              <li class="d-flex align-items-center me-2 me-md-3">
                                <i class="fi-eye fs-base me-1"></i>
                                0
                              </li>
                              <li class="d-flex align-items-center me-2 me-md-3">
                                <i class="fi-heart fs-base me-1"></i>
                                0
                              </li>
                              <li class="d-flex align-items-center">
                                <i class="fi-phone-incoming fs-base me-1"></i>
                                0
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </article>
                </div>
              </div>
            </div>


            <!-- Archived tab -->
            <div class="tab-pane fade" id="archived" role="tabpanel" aria-labelledby="archived-tab">
              <h2 class="h6 pt-2 mb-2">You have no archived ads</h2>
              <p class="fs-sm mb-4" style="max-width: 640px">This means all your active ads are still visible to users.
                Archiving ads helps you retain your information even when it's temporarily inactive.</p>
              <button type="button" class="btn btn-dark">
                <i class="fi-archive fs-base ms-n1 me-2"></i>
                Archive ad
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection