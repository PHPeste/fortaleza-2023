<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>PHPeste 2020 - Natal, capital RN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('_partials.styles')
    <script src="https://identity.netlify.com/v1/netlify-identity-widget.js"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-65548481-8"></script>
    <script id="navegg" type="text/javascript">
      (function(n,v,g){o="Navegg";if(!n[o]){
        a=v.createElement('script');a.src=g;b=document.getElementsByTagName('script')[0];
        b.parentNode.insertBefore(a,b);n[o]=n[o]||function(parms){
        n[o].q=n[o].q||[];n[o].q.push([this, parms])};}})
      (window, document, 'https://tag.navdmp.com/universal.min.js');
      window.naveggReady = window.naveggReady||[];
      window.nvg57395 = new Navegg({
        acc: 57395
      });
      
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-65548481-8');
    </script>
    <link rel="manifest" href="/manifest.json" />
<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
  var OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: "5bb5d0b3-e517-40bd-9b9b-ea83c7a95c22",
    });
  });
</script>
  </head>
  <body>
  
  <div class="site-wrap">

    @include('_partials.menu')
  
    @yield('content')
    
    @include('_partials.footer')
  </div>

  @include('_partials.scripts')

  @stack('scripts')
  <script>
    if (window.netlifyIdentity) {
      window.netlifyIdentity.on("init", user => {
        if (!user) {
          window.netlifyIdentity.on("login", () => {
            document.location.href = "/admin/";
          });
        }
      });
    }
  </script>
  </body>
</html>
