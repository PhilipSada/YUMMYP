@extends('layouts.main-app')

@section('title', 'Page Title')


@section('content')

    
  <div id="menu-page">
    <section id="food-preview">
        <h2>We have everything you need for your taste buds</h2>
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
                       <img src="<?= asset('/images/chips.png') ?>">
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
                       <img src="<?= asset('/images/burger.png') ?>">
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
                       <img src="<?= asset('/images/steak.png') ?>">
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
                       <img src="<?= asset('/images/salad.png') ?>">
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
                       <img src="<?= asset('/images/pancakes.png') ?>">
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
                       <img src="<?= asset('/images/juice.png') ?>">
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
                       <img src="<?= asset('/images/cola.png') ?>">
                     </div>
                 </div>  
              </div>
             </div>
    
         </div>
        </div>
       
      </section>
    
  </div>
       
    
       
   

@endsection