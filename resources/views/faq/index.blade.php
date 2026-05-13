@extends('layouts.app')

@section('content')
  <!-- Page content -->
  <main class="content-wrapper">

      <!-- Hero / page title -->
      <div class="position-relative py-5">
        <div class="container position-relative z-2 py-sm-2 py-md-4 py-lg-5 my-lg-3 my-xl-4">
          <h1 class="display-4 text-white mb-0 my-xxl-3">Looking for support?</h1>
        </div>
        <img src="assets/img/contact/v2/hero.jpg" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover rtl-flip" alt="Background image">
        <span class="position-absolute top-0 start-0 w-100 h-100 z-1 rtl-flip" style="background: linear-gradient(-270deg, rgba(0,0,0, .60) 0%, rgba(0,0,0, 0) 100%)"></span>
      </div>

    <!-- FAQ (Accordion) -->
    <section class="container py-5 mb-xxl-3">
      <div class="row py-1 py-sm-2 py-md-3 py-lg-4 py-xl-5">
        <div class="col-md-4 col-xl-3 mb-4 mb-md-0" style="margin-top: -120px">
          <div class="sticky-md-top text-center text-md-start pe-md-4 pe-lg-5 pe-xl-0" style="padding-top: 120px;">
            <h2>Popular FAQs</h2>
            <p class="pb-2 pb-md-3">Still have unanswered questions and need to get in touch?</p>
            <a class="btn btn-lg btn-primary" href="contact-v1.php">Contact us</a>
          </div>
        </div>
        <div class="col-md-8 offset-xl-1">

          <!-- Accordion of questions -->
          <div class="accordion" id="faq">

            <!-- Question -->
            <div class="accordion-item">
              <h3 class="accordion-header" id="faqHeading-1">
                <button type="button" class="accordion-button hover-effect-underline collapsed"
                  data-bs-toggle="collapse" data-bs-target="#faqCollapse-1" aria-expanded="false"
                  aria-controls="faqCollapse-1">
                  <span class="me-2">How do I start the process of buying a home?</span>
                </button>
              </h3>
              <div class="accordion-collapse collapse" id="faqCollapse-1" aria-labelledby="faqHeading-1"
                data-bs-parent="#faq">
                <div class="accordion-body">The first step is to assess your financial situation and get pre-approved
                  for a mortgage. This will give you a clear understanding of your budget. After that, you can start
                  searching for properties that match your criteria and work with a real estate agent to guide you
                  through the process.</div>
              </div>
            </div>

            <!-- Question -->
            <div class="accordion-item">
              <h3 class="accordion-header" id="faqHeading-2">
                <button type="button" class="accordion-button hover-effect-underline collapsed"
                  data-bs-toggle="collapse" data-bs-target="#faqCollapse-2" aria-expanded="false"
                  aria-controls="faqCollapse-2">
                  <span class="me-2">What should I consider when choosing a neighborhood?</span>
                </button>
              </h3>
              <div class="accordion-collapse collapse" id="faqCollapse-2" aria-labelledby="faqHeading-2"
                data-bs-parent="#faq">
                <div class="accordion-body">Consider factors such as the proximity to schools, work, public
                  transportation, safety, and local amenities like shops and parks. It’s also important to research the
                  neighborhood's future development plans and property value trends.</div>
              </div>
            </div>

            <!-- Question -->
            <div class="accordion-item">
              <h3 class="accordion-header" id="faqHeading-3">
                <button type="button" class="accordion-button hover-effect-underline collapsed"
                  data-bs-toggle="collapse" data-bs-target="#faqCollapse-3" aria-expanded="false"
                  aria-controls="faqCollapse-3">
                  <span class="me-2">How much should I budget for closing costs?</span>
                </button>
              </h3>
              <div class="accordion-collapse collapse" id="faqCollapse-3" aria-labelledby="faqHeading-3"
                data-bs-parent="#faq">
                <div class="accordion-body">Closing costs typically range from 2% to 5% of the home's purchase price.
                  These costs can include loan origination fees, title insurance, attorney fees, and other related
                  expenses. It's advisable to set aside additional funds for these costs.</div>
              </div>
            </div>

            <!-- Question -->
            <div class="accordion-item">
              <h3 class="accordion-header" id="faqHeading-4">
                <button type="button" class="accordion-button hover-effect-underline collapsed"
                  data-bs-toggle="collapse" data-bs-target="#faqCollapse-4" aria-expanded="false"
                  aria-controls="faqCollapse-4">
                  <span class="me-2">Is it better to rent or buy a home?</span>
                </button>
              </h3>
              <div class="accordion-collapse collapse" id="faqCollapse-4" aria-labelledby="faqHeading-4"
                data-bs-parent="#faq">
                <div class="accordion-body">This depends on your personal financial situation, lifestyle, and long-term
                  goals. Buying is often considered a good investment, but it requires a significant upfront cost and
                  ongoing maintenance. Renting offers more flexibility and fewer responsibilities, but you won't build
                  equity.</div>
              </div>
            </div>

            <!-- Question -->
            <div class="accordion-item">
              <h3 class="accordion-header" id="faqHeading-5">
                <button type="button" class="accordion-button hover-effect-underline collapsed"
                  data-bs-toggle="collapse" data-bs-target="#faqCollapse-5" aria-expanded="false"
                  aria-controls="faqCollapse-5">
                  <span class="me-2">How do I determine the right price to offer on a home?</span>
                </button>
              </h3>
              <div class="accordion-collapse collapse" id="faqCollapse-5" aria-labelledby="faqHeading-5"
                data-bs-parent="#faq">
                <div class="accordion-body">Research comparable properties in the area that have recently sold to get a
                  sense of the market value. Your real estate agent can also provide a comparative market analysis (CMA)
                  to help determine a fair offer based on the property's condition, location, and market demand.</div>
              </div>
            </div>

            <!-- Question -->
            <div class="accordion-item">
              <h3 class="accordion-header" id="faqHeading-6">
                <button type="button" class="accordion-button hover-effect-underline collapsed"
                  data-bs-toggle="collapse" data-bs-target="#faqCollapse-6" aria-expanded="false"
                  aria-controls="faqCollapse-6">
                  <span class="me-2">What should I look for during a home inspection?</span>
                </button>
              </h3>
              <div class="accordion-collapse collapse" id="faqCollapse-6" aria-labelledby="faqHeading-6"
                data-bs-parent="#faq">
                <div class="accordion-body">During a home inspection, focus on the structural integrity of the property,
                  including the roof, foundation, plumbing, electrical systems, and HVAC. Look for signs of water
                  damage, mold, and pests. The inspector will provide a detailed report, which can be used to negotiate
                  repairs or price adjustments.</div>
              </div>
            </div>

            <!-- Question -->
            <div class="accordion-item">
              <h3 class="accordion-header" id="faqHeading-7">
                <button type="button" class="accordion-button hover-effect-underline collapsed"
                  data-bs-toggle="collapse" data-bs-target="#faqCollapse-7" aria-expanded="false"
                  aria-controls="faqCollapse-7">
                  <span class="me-2">What are the benefits of getting a pre-approved mortgage?</span>
                </button>
              </h3>
              <div class="accordion-collapse collapse" id="faqCollapse-7" aria-labelledby="faqHeading-7"
                data-bs-parent="#faq">
                <div class="accordion-body">Getting pre-approved for a mortgage shows sellers that you are a serious
                  buyer and can afford the property. It also helps you set a realistic budget and speeds up the
                  home-buying process since your financial documents are already in order.</div>
              </div>
            </div>

            <!-- Question -->
            <div class="accordion-item">
              <h3 class="accordion-header" id="faqHeading-8">
                <button type="button" class="accordion-button hover-effect-underline collapsed"
                  data-bs-toggle="collapse" data-bs-target="#faqCollapse-8" aria-expanded="false"
                  aria-controls="faqCollapse-8">
                  <span class="me-2">How can I make my home more appealing to buyers?</span>
                </button>
              </h3>
              <div class="accordion-collapse collapse" id="faqCollapse-8" aria-labelledby="faqHeading-8"
                data-bs-parent="#faq">
                <div class="accordion-body">To make your home more appealing, focus on curb appeal by maintaining the
                  exterior, landscaping, and entryway. Inside, declutter, clean thoroughly, and consider staging the
                  home with neutral décor to allow buyers to envision themselves living there. Address any necessary
                  repairs and updates.</div>
              </div>
            </div>

            <!-- Question -->
            <div class="accordion-item">
              <h3 class="accordion-header" id="faqHeading-9">
                <button type="button" class="accordion-button hover-effect-underline collapsed"
                  data-bs-toggle="collapse" data-bs-target="#faqCollapse-9" aria-expanded="false"
                  aria-controls="faqCollapse-9">
                  <span class="me-2">What is a seller's market vs. a buyer's market?</span>
                </button>
              </h3>
              <div class="accordion-collapse collapse" id="faqCollapse-9" aria-labelledby="faqHeading-9"
                data-bs-parent="#faq">
                <div class="accordion-body">A seller's market occurs when there are more buyers than available
                  properties, leading to higher prices and quicker sales. A buyer's market happens when there are more
                  properties than buyers, giving buyers more negotiating power and typically leading to lower prices.
                </div>
              </div>
            </div>

            <!-- Question -->
            <div class="accordion-item">
              <h3 class="accordion-header" id="faqHeading-10">
                <button type="button" class="accordion-button hover-effect-underline collapsed"
                  data-bs-toggle="collapse" data-bs-target="#faqCollapse-10" aria-expanded="false"
                  aria-controls="faqCollapse-10">
                  <span class="me-2">How long does it take to close on a home?</span>
                </button>
              </h3>
              <div class="accordion-collapse collapse" id="faqCollapse-10" aria-labelledby="faqHeading-10"
                data-bs-parent="#faq">
                <div class="accordion-body">The closing process typically takes 30 to 45 days, depending on various
                  factors such as the type of loan, the efficiency of the involved parties, and any unforeseen issues
                  that may arise. Staying organized and responsive can help ensure a smoother, faster closing process.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
  </main>
@endsection