@extends('layouts.landing-page')

@section('title', 'About')


{{--  @section('description')
Philly Burgers have been around for every long time. Having high quality burgers have been one of the reasons our customers keep coming back
@endsection  --}}

@section('content')

<main data-barba="container" data-barba-namespace="about">
  <div id="about-page">
      <div class="content-box">
          <div class="row">
              <div class="col-md-6">
                <h1>About Us</h1>
                <p>Labore single-origin coffee unicorn retro salvia viral tbh. Next level tousled raw denim nulla, master cleanse ugh ea waistcoat. 90's edison bulb laborum retro enim ad synth keffiyeh authentic minim taxidermy seitan literally.
                    Banjo you probably haven't heard of them raclette aute typewriter laborum, vinyl air plant labore tilde 
                    hoodie semiotics poutine mlkshk nisi.Banjo you probably haven't heard of them raclette aute typewriter laborum, vinyl air plant labore tilde 
                    hoodie semiotics poutine mlkshk nisi.
                </p>
                <p>Labore single-origin coffee unicorn retro salvia viral tbh. Next level tousled raw denim nulla, master cleanse ugh ea waistcoat. 90's edison bulb laborum retro enim ad synth keffiyeh authentic minim taxidermy seitan literally.
                    Banjo you probably haven't heard of them raclette aute typewriter laborum, vinyl air plant labore tilde 
                    hoodie semiotics poutine mlkshk nisi.Banjo you probably haven't heard of them raclette aute typewriter laborum, vinyl air plant labore tilde 
                    hoodie semiotics poutine mlkshk nisi.
                </p>
             </div>
             <div class="col-md-6">
                 <img src="<?= asset('images/food3.png') ?>" class="img-fluid">
             </div>
        </div>
      </div>
    
  </div>
       
</main>
       
   

@endsection