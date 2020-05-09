@extends('layouts.landing-page')

@section('title', $foodItem->title)



@section('content')

<main data-barba="container" data-barba-namespace="single-menu">
  <div id="single-menu-page">
      <div class="single-menu-grid">
        <div class="single-menu-image-container">
          <img src="{{$foodItem->image_url}}" class="single-menu-image">
      </div>
      <div class="single-menu-text">
        <h4>{{$foodItem->title}}</h4>
        <p>{{$foodItem->description}}.</p>
  
        <p>If interested in knowing about this menu, please feel free to contact us</p>
        <a href="/contact" class="single-menu-contact">Contact</a>
      </div>
    </div>
    <div class="row menu-nutrition">
        <div class="col-md-6">
            <div class="card menu-height">
                <div class="card-header">Nutritional Values</div>
                <div class="card-body">
                    <table class="menu-table">
                        <thead>
                            <tr>
                                <th class="td-large"></th>
                                <th class="td-medium">per 100g</th>
                                <th class="td-medium">per portion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Calorific value(kCal)</td>
                                <td>270.0</td>
                                <td>680.7</td>
                            </tr>
                            <tr>
                                <td>Calorific value(kJ)</td>
                                <td>1,129.0</td>
                                <td>2,846.2</td>
                            </tr>
                            <tr>
                                <td>fat(G)</td>
                                <td>16.0</td>
                                <td>40.3</td>
                            </tr>
                            <tr>
                                <td>saturated of it(G)</td>
                                <td>6.0</td>
                                <td>15.1</td>
                            </tr>
                            <tr>
                                <td>carbohydrates(G)</td>
                                <td>17.0</td>
                                <td>42.9</td>
                            </tr>
                            <tr>
                                <td>protein(G)</td>
                                <td>15.0</td>
                                <td>37.8</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card menu-height">
                <div class="card-header">Allergens</div>
                <div class="card-body">
                   <div class="allergens">
                       <h4>Gluten (Bacon Bun)</h4>
                       <h4>Milk (bacon bun)</h4>
                       <h4>Mustard (smoky sauce)</h4>
                       <h4>Celery (smoky sauce)</h4>
                       <h4>Egg (smoky sauce)</h4>
                       <h4>May contain traces (according to our suppliers): soy, sesame</h4>
                   </div>
                </div>
            </div>
        </div>
    </div>
   

    
  </div>
       
    
</main>   
   

@endsection