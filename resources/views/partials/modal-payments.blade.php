  <!-- Add payment method modal -->
  <div class="modal fade" id="addPayment" data-bs-backdrop="static" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <ul class="nav nav-pills gap-3" role="tablist">
            <li class="nav-item" role="presentation">
              <button type="button" class="nav-link active" id="add-card-tab" data-bs-toggle="pill"
                data-bs-target="#add-card" role="tab" aria-controls="add-card" aria-selected="true">
                Add card
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button type="button" class="nav-link" id="add-paypal-tab" data-bs-toggle="pill"
                data-bs-target="#add-paypal" role="tab" aria-controls="add-paypal" aria-selected="false">
                Add PayPal
              </button>
            </li>
          </ul>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body tab-content">
          <div class="tab-pane fade show active" id="add-card" role="tabpanel" aria-labelledby="add-card-tab">
            <form class="needs-validation" novalidate>
              <div class="mb-4">
                <label for="card-number" class="form-label">Card number</label>
                <div class="position-relative" data-input-format='{"creditCard": true}'>
                  <input type="text" class="form-control form-control-lg form-icon-end bg-image-none" id="card-number"
                    placeholder="XXXX XXXX XXXX XXXX" required>
                  <span class="position-absolute d-flex top-50 end-0 translate-middle-y fs-5 text-body-tertiary me-3"
                    data-card-icon></span>
                  <div class="invalid-tooltip bg-transparent p-0">Please provide a valid card number!</div>
                </div>
              </div>
              <div class="position-relative mb-4">
                <label for="card-name" class="form-label">Name on card</label>
                <input type="text" class="form-control form-control-lg" id="card-name" required>
                <div class="invalid-tooltip bg-transparent p-0">Please enters cardholder's name!</div>
              </div>
              <div class="row row-cols-2 g-4 mb-4">
                <div class="col position-relative">
                  <label for="card-expiration" class="form-label">Expiration date</label>
                  <input type="text" class="form-control form-control-lg" id="card-expiration"
                    data-input-format='{"date": true, "datePattern": ["m", "y"]}' placeholder="MM/YY" required>
                  <div class="invalid-tooltip bg-transparent p-0">Field is required!</div>
                </div>
                <div class="col position-relative">
                  <label for="card-cvc" class="form-label">CVC</label>
                  <input type="text" class="form-control form-control-lg" id="card-cvc"
                    data-input-format='{"numericOnly": true, "blocks": [3]}' placeholder="XXX" required>
                  <div class="invalid-tooltip bg-transparent p-0">Field is required!</div>
                </div>
              </div>
              <div class="d-flex gap-3">
                <button type="reset" class="btn btn-secondary w-100" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary w-100">Add card</button>
              </div>
            </form>
          </div>
          <div class="tab-pane fade" id="add-paypal" role="tabpanel" aria-labelledby="add-paypal-tab">
            <form class="needs-validation" novalidate>
              <div class="position-relative mb-4">
                <label for="paypal-email" class="form-label">Email associated with PayPal</label>
                <input type="email" class="form-control form-control-lg" id="paypal-email" required>
                <div class="invalid-tooltip bg-transparent p-0">Please provide a valid email address!</div>
              </div>
              <div class="d-flex gap-3">
                <button type="reset" class="btn btn-secondary w-100" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary w-100">Continue</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>