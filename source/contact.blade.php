@extends('_layouts.master')

@section('content')
    <div class="site-blocks-cover overlay" style="background-image: url(/assets/images/img_3.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-10 text-center" data-aos="fade">
            <h1 class="mb-4">Contato</h1>
          </div>
        </div>
      </div>
    </div>  
    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-12 mb-5">
          
          <form id="my-form" class="p-5 bg-white" name="contact" method="POST" action="https://hook.integromat.com/li5grt86nqlimck6quan85x9nul37x7s">
              <input type="hidden" name="location" value="form-contact-site-phpeste">

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="name">Nome</label>
                  <input type="text" id="name" name="name" class="form-control" placeholder="Nome">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">E-mail</label>
                  <input type="email" id="email" name="email" class="form-control" placeholder="Endereço de e-mail">
                </div>
              </div>


              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="phone">Telefone</label>
                  <input type="text" id="phone" name="phone" class="form-control" placeholder="Telefone #">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="message">Mensagem</label>
                  <textarea id="message" name="message" cols="30" rows="5" class="form-control" placeholder="Diga olá para nós"></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Enviar mensagem" class="btn btn-primary px-4 py-2">
                </div>
              </div>

  
            </form>
          </div>

        </div>
      </div>
    </div>

    {{-- @include('_shared.why-us') --}}

    @include('_shared.contact-info')
@endsection

@push('scripts')
  <script>
    $("#my-form").submit(function(e) {
      e.preventDefault();

      var $form = $(this);
      $.post($form.attr("action"), $form.serialize()).then(function() {
        alert("Obrigado, sua mensagem foi enviada!");
      });
    });
  </script>
@endpush