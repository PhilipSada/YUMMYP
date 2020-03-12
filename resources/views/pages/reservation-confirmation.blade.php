@extends('layouts.app')

@section('title')
Reservation-confirmation - {{$settings['general']->site_title}}
@endsection


@section('content')

    
  <div id="reservations-page">
      <div class="content-box">
          <div class="text-center">
              <div>
                <h1>You have successfully made a reservation at our restaurant</h1>
             </div>

             <p>A confirmation of this reservation has been sent to your email. Hope to see you soon</p>
         
        </div>
      </div>
    
  </div>
       
    
       
   

@endsection