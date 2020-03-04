@extends('layouts.landing-page')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
<section id="information">
    <div class="restaurant-image">
      <img src="<?= asset('images/restaurant.png') ?>">
    </div>
    <div class="info">
     <h2>We started from the bottom in 1987</h2>
     <div class="paragraphs">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate quibusdam laboriosam, 
           consectetur amet cupiditate ipsam, voluptatum libero consequatur sed hic deserunt provident 
           quis impedit temporibus inventore non fugit nobis rem?
           Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate quibusdam laboriosam, 
           consectetur amet cupiditate ipsam, voluptatum libero consequatur sed hic deserunt provident 
         </p>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate quibusdam laboriosam, 
           consectetur amet cupiditate ipsam, voluptatum libero consequatur sed hic deserunt provident 
           quis impedit temporibus inventore non fugit nobis rem?
           Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate quibusdam laboriosam, 
           consectetur amet cupiditate ipsam, voluptatum libero consequatur sed hic deserunt provident 
         </p>
     </div>
     <a href="" class="about-link"><span>Learn more about our restaurants</span>
       <div class="circle-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
     </a>
    </div>
   
  </section>
  <section id="food-preview">
    <h2>We have everything you need for your taste buds</h2>
    <div class="button-rounded">View Our Menu</div>
    <div class="container">
           <div class="left-btn"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
           <div class="right-btn"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
       <div class="food-slider">
         <div class="sliding-system">
           <div class="slide">
             <div class="background"></div>
             <div class="content">
                 <div class="food-title">
                   Starters
                 </div>
                 <p class="food-description">
                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                 Ratione debitis pariatur atque eveniet sapiente amet vel nemo illum eligendi dolore?
                 </p>
                 <div class="food-image">
                   <img src="<?= asset('images/chips.png') ?>">
                 </div>
             </div>  
          </div>
          <div class="slide">
             <div class="background"></div>
             <div class="content">
                 <div class="food-title">
                   Burgers
                 </div>
                 <p class="food-description">
                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                 Ratione debitis pariatur atque eveniet sapiente amet vel nemo illum eligendi dolore?
                 </p>
                 <div class="food-image">
                   <img src="<?= asset('images/burger.png') ?>">
                 </div>
             </div>  
          </div>
          <div class="slide">
             <div class="background"></div>
             <div class="content">
                 <div class="food-title">
                   Entrees
                 </div>
                 <p class="food-description">
                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                 Ratione debitis pariatur atque eveniet sapiente amet vel nemo illum eligendi dolore?
                 Ratione debitis pariatur atque eveniet sapiente amet vel nemo 
                 </p>
                 <div class="food-image">
                   <img src="<?= asset('images/steak.png') ?>">
                 </div>
             </div>  
          </div>
          <div class="slide">
             <div class="background"></div>
             <div class="content">
                 <div class="food-title">
                   Sides
                 </div>
                 <p class="food-description">
                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                 Ratione debitis pariatur atque eveniet sapiente amet vel nemo illum eligendi dolore?
                 Ratione 
                 </p>
                 <div class="food-image">
                   <img src="<?= asset('images/salad.png') ?>">
                 </div>
             </div>  
          </div>
          <div class="slide">
             <div class="background"></div>
             <div class="content">
                 <div class="food-title">
                   Desserts
                 </div>
                 <p class="food-description">
                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                 Ratione debitis pariatur atque eveniet sapiente amet vel nemo illum eligendi dolore?
                 </p>
                 <div class="food-image">
                   <img src="<?= asset('images/pancakes.png') ?>">
                 </div>
             </div>  
          </div>
          <div class="slide">
             <div class="background"></div>
             <div class="content">
                 <div class="food-title">
                   Drinks
                 </div>
                 <p class="food-description">
                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                 Ratione debitis pariatur atque eveniet sapiente amet vel nemo illum eligendi dolore?
                 </p>
                 <div class="food-image">
                   <img src="<?= asset('images/juice.png') ?>">
                 </div>
             </div>  
          </div>
          <div class="slide">
             <div class="background"></div>
             <div class="content">
                 <div class="food-title">
                   Beer
                 </div>
                 <p class="food-description">
                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                
                 </p>
                 <div class="food-image">
                   <img src="<?= asset('images/cola.png') ?>">
                 </div>
             </div>  
          </div>
         </div>

     </div>
    </div>
   
  </section>
@endsection