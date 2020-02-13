<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto text-center mb-5 section-heading">
        <h2 class="mb-5 text-uppercase">{{ $title }}</h2>
      </div>
    </div>
    @foreach ($page->categories as $key => $category)
      @if (count($sponsors) > 0)
        <div class="row mb-5">
          <div class="col-md-12 text-left section-heading">
            <h4 class="mb-5 text-uppercase">{{ $category->description }}</h4>
          </div>
          @foreach ($sponsors as $sponsor)
            @if ($sponsor->type === $key)
                <div class="col-6 col-md-6 col-lg-3">
                  @if($sponsor->website)
                    <a href="{{ $sponsor->website }}" target="_blank" class="btn">
                      <img src="{{ $sponsor->image }}" alt="{{ $sponsor->name }}" class="img-fluid">
                    </a>
                  @else
                    <img src="{{ $sponsor->image }}" alt="{{ $sponsor->name }}" class="img-fluid">
                  @endif
                </div>
            @endif
          @endforeach
        </div>
      @endif
    @endforeach
  
    <div class="row mb-5">
      <div class="col-md-12 col-lg-12 mb-4">
        <h1 class="text-center">Seja um <a href="/contact">patrocinador</a>!</h1>
      </div>
    </div>
  </div>
</div>
