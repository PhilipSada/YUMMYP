@extends('layouts.app')

@section('title')
Contact - {{$settings['general']->site_title}}
@endsection

{{--  @section('description')
Philly Burgers have been around for every long time. Having high quality burgers have been one of the reasons our customers keep coming back
@endsection  --}}

@section('content')

    
  <div id="contact-page">
      <div class="content-box">
          <div class="row">
              <div class="col-md-6">
                <h1>Contact Us</h1>
                <h3>Address</h3>
                <p>{{$settings['general']->address_1}}<br>{{$settings['general']->city}}, 
                    {{$settings['general']->state}} {{$settings['general']->zipcode}}
                </p>
                <h3>Phone Number</h3>
                <p><a href="tel:7182198652">{{$settings['general']->phone_number}}</a></p>
             </div>
             <div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3591.8139851157985!2d-80.21037628502555!3d25.809710183614996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b14a3c28de63%3A0x870df91c65bc6732!2s730%20NW%2036th%20St%2C%20Miami%2C%20FL%2033127%2C%20USA!5e0!3m2!1sen!2sde!4v1584006153707!5m2!1sen!2sde"
                 width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
             </div>
        </div>
      </div>
    
  </div>
       
    
       
   

@endsection