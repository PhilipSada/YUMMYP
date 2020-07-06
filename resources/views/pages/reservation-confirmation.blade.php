@extends('layouts.landing-page')

@section('title', 'Reservation-Confirmation')


@section('content')

<main data-barba="container" data-barba-namespace="reservation-confirmation">
  <div id="reservations-page">
      <div class="content-box">
          <div class="text-center">
              <div>
                <h2>You have successfully made a reservation at our restaurant</h2>
             </div>

             {{-- <p>A confirmation of this reservation has been sent to your email. Hope to see you soon</p> --}}
              <div class="back-to-home"><a href="/">Back to home</a></div>
        </div>
      </div>
    
  </div>
       
    
</main>     
   

@endsection