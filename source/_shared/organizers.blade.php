<div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5 text-uppercase">{{ $title }}</h2>
          </div>
        </div>
        <div class="row">
          
        @foreach ($organizers as $organizerr)
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="speaker text-left">
              <a href="{{ $organizerr->getPath() }}" class="d-block mb-3 thumbnail"><img src="{{ $organizerr->image }}" alt="Image" class="img-fluid"></a>
              <h3 class="heading mb-0"><a href="#"><span>{{ $organizerr->first_name }}</span> {{ $organizerr->last_name }}</a></h3>
              <p>{{ $organizerr->profession }}</p>
            </div>
          </div>
        @endforeach

        </div>
      </div>
    </div>