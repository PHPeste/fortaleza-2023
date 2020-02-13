<div class="py-5 quick-contact-info">
      <div class="container">
        <div class="row">
          <div class="col-md-4 text-center">
            <div>
              <span class="icon-room text-white h2 d-block"></span>
              <h2>Onde</h2>
              <p class="mb-0">{{ $page->event_location }}</p>
            </div>
          </div>
          <div class="col-md-4 text-center">
            <div>
              <span class="icon-clock-o text-white h2 d-block"></span>
              <h2>Quando</h2>
              <p class="mb-0">{{ $page->event_period }}</p>
            </div>
          </div>
          <div class="col-md-4 text-center">
            <div>
              <span class="icon-comments text-white h2 d-block"></span>
              <h2>Email</h2>
              <p class="mb-0">Email: {{ $page->event_contact_email }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>