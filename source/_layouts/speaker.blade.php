@extends('_layouts.master')

@section('content')
  <div class="site-blocks-cover overlay" style="background-image: url({{ $page->image }});" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-10 text-center" data-aos="fade">
            <p>Palestrante</p>
            <h1 class="mb-4">{{ $page->first_name }} {{ $page->last_name }}</h1>
          </div>
        </div>
      </div>
    </div>  

    <div class="site-section pb-0">
      <div class="container">
        
        <div class="row">
          <div class="col-md-6 col-lg-6 mb-4">
            <img src="{{ $page->image }}" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-5 col-lg-5 ml-auto">
            <h2 class="font-weight-bold text-uppercase display-3"><span class="d-block">{{ $page->first_name }}</span> {{ $page->last_name }}</h2>
            <p style="color: #ccc;">{{ $page->profession }}</p>

            @yield('info')

            @if($page->website)
              <p><a href="{{ $page->website }}" class="btn btn-primary" target="_blank">Visite o site</a></p>
            @endif

            @if($page->link_palestra1 != ' ' && $page->link_palestra1 != '')
              <p><a href="{{ $page->link_palestra1 }}" class="btn btn-primary" target="_blank">{{ $page->nome_palestra1 }}</a></p>
            @endif

            @if($page->link_palestra2 != ' ' && $page->link_palestra2 != '')
              <p><a href="{{ $page->link_palestra2 }}" class="btn btn-primary" target="_blank">{{ $page->nome_palestra2 }}</a></p>
            @endif

            @if($page->link_palestras != ' ' && $page->link_palestras != '')
              <p><a href="{{ $page->link_palestras }}" class="btn btn-primary" target="_blank">{{ $page->nome_palestras }}</a></p>
            @endif
          </div>
          
        </div>
      </div>
    </div>

    @include('_shared.speakers', ['title' => 'Mais palestrantes'])

    @include('_shared.contact-info')
@endsection