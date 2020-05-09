<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.metatags')
          
    </head>
    <body data-barba="wrapper">
        <nav>
            @include('includes.menu-bar')
        </nav>
        <div class="loading-bg"></div>
        
          <section>
            @yield('content')
          </section>
       
          <footer>
            @include('includes.footer')
          </footer>

          <script src="https://unpkg.com/@barba/core"></script>
          <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js'></script>
          <script src="/js/app.js"></script>
    </body>
   
</html>
