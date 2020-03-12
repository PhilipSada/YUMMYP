<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.metatags')
          
    </head>
    <body>
        <section id="app-layout">
            @include('includes.menu-bar')
            <div class="welcome-jumbo">
              <div class="status">NEW</div>
              <h1>Philly Burger</h1>
             <img src="https://www.stickpng.com/assets/images/580b57fcd9996e24bc43c1a9.png" class="burger-fries"> 
            </div>
          </section>
          @yield('content')
        
    </body>
</html>
