@extends('layouts.landing-page')
@section('title', 'Yummy P')
@section('content')
<main data-barba="container" data-barba-namespace="home">
  <div class="hero">
      <div class="split left-split">
          <div class="hero-text">
              <h1 class="intro">Discover your taste</h1>
              <h1 class="hero-title">Eat Delicious Burgers</h1>
              <p class="details">We are glad to introduce more burgers to our menu as<br> we noticed some of our customers needed new<br> burgers
                in the menu and at yummy p, we love <br>to satisfy every customer</p>
              <a href="/reservations" class="booking">Book a table</a>
          </div>
          <div class="social-icons">
              <div class="pt-2"><i class="fa fa-instagram"></i></div>
              <div class="pt-2"><i class="fa fa-twitter"></i></div>
              <div class="pt-2"><i class="fa fa-facebook"></i></div>
          </div>
      </div>
      <div class="split right-split">
          <div class="right-split-image-container">
              <img src="/images/burgercover.png" class="right-split-image">
          </div>
          {{--  <div class="right-split-image-container-2"></div>  --}}
          <div class="right-split-side-bar"></div>
      </div>
    
      
  </div>
   <div class="home-food-menu">
     <h4>Our Menu</h4>
      <div class="menu-card-container">
        @foreach($foodItems as $foodItem)
            <div>
              <div class="card menu-card">
                <a href="/menu/{{$foodItem->title}}"><img class="card-img-top" src="{{$foodItem->image_url}}" alt="Card image cap"></a>
                <div class="card-body">
                 <p class="card-text">{{$foodItem->title}}</p>
               </div>
             </div>
            </div>
        @endforeach  
       </div>
         <div class="more-food-menu-container"><a href="/menu" class="more-food-menu-link">See more</a></div>
   </div>
  </main>
@endsection
