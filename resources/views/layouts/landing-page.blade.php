<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
          
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
