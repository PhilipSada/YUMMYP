@extends('layouts.app')

@section('title')
Thank You - {{$settings['general']->site_title}}
@endsection


@section('content')

    
  <div id="offers-page">
      <div class="content-box">
          <div class="row">
              <div class="col-md-8 offset-md-2 thank-you">
                <h1>Thank you for signing up</h1>
                <p>You will be notified when we have any special offer. This would be sent to your email</p>
          </div>
             
        </div>
      </div>
    
  </div>
       
    
       
   

@endsection