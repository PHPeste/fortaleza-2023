@extends('_layouts.master')

@section('content')
    <div class="site-blocks-cover overlay" style="background-image: url(/assets/images/hero_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-10 text-center" data-aos="fade">
            <h1 class="mb-4">Palestrantes</h1>
          </div>
        </div>
      </div>
    </div>

    @include('_shared.speakers', ['title' => 'Palestrantes'])

    @include('_shared.block-images', ['image1' => 'images/img_3.jpg', 'image2' => 'images/img_4.jpg'])

    {{-- @include('_shared.why-us') --}}

    @include('_shared.contact-info')
@endsection