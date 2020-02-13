<footer class="site-footer" style="background-image: url(/assets/images/hero_1.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h3 class="footer-heading mb-4 text-white">Sobre</h3>
        <p>O PHPeste visa reunir os desenvolvedores, estudantes, entusiastas, e amantes da linguagem de programação PHP, não só do Brasil, mas do mundo.</p>
        <p><a href="/about" class="btn btn-primary pill text-white px-4">Leia mais</a></p>
      </div>
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-6">
            <h3 class="footer-heading mb-4 text-white">Menu Rápido</h3>
              <ul class="list-unstyled">
                <li><a href="/about">Sobre</a></li>
                <li><a href="/sponsors">Patrocinadores</a></li>
                <!-- <li><a href="{{ $page->event_ticket ?? '#' }}">Ingressos</a></li> -->
                <!-- <li><a href="/speakers">Palestrantes</a></li> -->
                <!-- <li><a href="https://www.depassaporte.com.br/phpeste" target="_blank">Passagens aéreas</a></li> -->
              </ul>
            </div>
            <div class="col-md-6">
              <h3 class="footer-heading mb-4 text-white">&nbsp;</h3>
              <ul class="list-unstyled">
                <li><a href="/contact">Contato</a></li>
                <!-- <li><a href="https://loja.phpeste.net/produtos/index/workshop">Workshops</a></li> -->
                <!-- <li><a href="/programming">Programação</a></li> -->
                <li><a href="/contact">Seja um patrocinador</a></li>
              </ul>
          </div>
        </div>
      </div>

      @if ($page->event_facebook || $page->event_twitter || $page->event_instagram || $page->event_vimeo)
        <div class="col-md-2">
          <div class="col-md-12"><h3 class="footer-heading mb-4 text-white">Social Icons</h3></div>
            <div class="col-md-12">
              <p>
                @if ($page->event_facebook)<a href="{{ $page->event_facebook }}" class="pb-2 pr-2 pl-0"><span class="icon-facebook"></span></a>@endif
                @if ($page->event_twitter)<a href="{{ $page->event_twitter }}" class="p-2"><span class="icon-twitter"></span></a>@endif
                @if ($page->event_instagram)<a href="{{ $page->event_instagram }}" class="p-2"><span class="icon-instagram"></span></a>@endif
                @if ($page->event_vimeo)<a href="{{ $page->event_vimeo }}" class="p-2"><span class="icon-vimeo"></span></a>@endif
              </p>
            </div>
        </div>
      @endif
    </div>
    <div class="row pt-5 mt-5 text-center">
      <div class="col-md-12">
        <p>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy; <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All Rights Reserved | This template is made with <i class="icon-heart text-primary" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>
      </div>
      
    </div>
  </div>
</footer>