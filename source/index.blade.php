@extends('_layouts.master')

@section('content')
<div class="site-blocks-cover overlay" style="background-image: url(/assets/images/background.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-10 text-center" data-aos="fade">
            <h1 class="mb-4">Maior conferência PHP do Nordeste</h1>
            <p class="mb-5">{{ $page->event_period }} &bullet; <a class="maps" href="" target="_blank">{{ $page->event_location }}</a></p>
            <p class="regular-font-size">
              <!-- <a href="{{ $page->event_ticket ?? '#' }}" class="btn btn-primary px-4 py-3 text-uppercase">Ingressos e produtos</a> -->
              <!-- <span class="mx-3">ou</span> -->
              <!-- <a href="/programming" class="btn btn-primary px-4 py-3 text-uppercase">Programação</a> -->
            </p>
          </div>
        </div>
      </div>
    </div>  

    @include('_about')

    @include('_shared.block-images', ['image1' => 'images/img_1.jpg', 'image2' => 'images/img_2.jpg'])

    <!-- @include('_shared.speakers', ['title' => 'Palestrantes']) -->

    @include('_shared.block-images', ['image1' => 'images/img_3.jpg', 'image2' => 'images/img_4.jpg'])

    {{-- @include('_shared.why-us') --}}

    @include('_shared.sponsors', ['title' => 'Patrocinadores'])

    {{-- @include('_events') --}}

@include('_shared.contact-info')
@endsection
