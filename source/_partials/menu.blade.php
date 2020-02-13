<div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    <div class="site-navbar-wrap js-site-navbar bg-white">
      
      <div class="container">
        <div class="site-navbar bg-light">
          <div class="py-1">
            <div class="row align-items-center">
              <div class="col-2">
                <a href="/">
                  <img src="/assets/images/logo.svg" alt="">
                </a>
              </div>
              <div class="col-10">
                <nav class="site-navigation text-right" role="navigation">
                  <div class="container">
                    <!-- d-lg-none -->
                    <div class="d-inline-block  ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu h3"></span></a></div>
                     <!-- d-lg-block -->
                    <ul class="site-menu js-clone-nav d-none">
                      <li><a href="/">Home</a></li>
                      <li class="{{ $page->selected('about') }}"><a href="/about">Sobre</a></li>
                      <!-- <li><a href="/programming">Programação</a></li> -->
                      <!-- <li><a href="https://loja.phpeste.net/produtos/index/workshop">Workshops</a></li> -->
                      <!-- <li class="{{ $page->selected('speakers') }}"><a href="/speakers">Palestrantes</a></li> -->
                      <li class="{{ $page->selected('sponsors') }}"><a href="/sponsors">Patrocinadores</a></li>
                      <li class="{{ $page->selected('code-of-conduct') }}"><a href="/code-of-conduct">Código de conduta</a></li>
                      <!-- <li><a href="http://loja.phpeste.net" target="_blank">Ingressos</a></li> -->
                      <!-- <li><a href="https://www.depassaporte.com.br/phpeste" target="_blank">Passagens aéreas</a></li> -->
                      <li class="{{ $page->selected('contact') }}"><a href="/contact">Contato</a></li>
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>