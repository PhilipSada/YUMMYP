@extends('layouts.landing-page')

@section('title')
Food Preview - {{$settings['general']->site_title}}
@endsection


@section('content')

<main data-barba="container" data-barba-namespace="all-menu">
  <div id="menu-page">
    <div class="main-food-menu">
      <h4>Beef</h4>
       <div class="menu-card-container">
         @foreach($beefItems as $foodItem)
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
    </div>
    <div class="main-food-menu">
      <h4>Chicken</h4>
       <div class="menu-card-container">
         @foreach($chickenItems as $foodItem)
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
    </div>
    <div class="main-food-menu">
      <h4>King Snacks</h4>
       <div class="menu-card-container">
         @foreach($kingSnackItems as $foodItem)
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
    </div>
    
  </div>
       
</main>  
       
   

@endsection