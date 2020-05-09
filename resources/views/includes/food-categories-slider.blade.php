<section id="food-preview">
    <h2>We have everything you need for your taste buds</h2>
    <div class="container">
           <div class="left-btn"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
           <div class="right-btn"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
       <div class="food-slider">
         <div class="sliding-system">
           @foreach($foodCategories as $foodCategory)
           <a href="/menu/{{$foodCategory->title}}" class="slide">
             <div class="background"></div>
             <div class="content">
                 <div class="food-title">
                   {{$foodCategory->title}}
                 </div>
                 <p class="food-description">
                    {{$foodCategory->description}}
                 </p>
                 <div class="food-image">
                   <img src="{{$foodCategory->image_url}}">
                 </div>
             </div>  
          </a>
         @endforeach
         </div>

     </div>
    </div>
   
</section>
