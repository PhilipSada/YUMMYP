@extends('layouts.app')

@section('title')
Offers - {{$settings['general']->site_title}}
@endsection


@section('content')

    
  <div id="offers-page">
      <div class="content-box">
          <div class="row">
              <div class="col-md-8 offset-md-2">
                <h1>Get Offers</h1>
                <form method="POST" action="/offers">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputfirstname">First Name</label>
                                <input id="inputfirstname" type="text" class="form-control form-control-lg @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" 
                                required autocomplete="firstname" placeholder="John" autofocus >
                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                    </span>
                               @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputlastname">Last Name</label>
                                <input id="inputlastname" type="text" class="form-control form-control-lg @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" 
                                required autocomplete="lastname" placeholder="Doe" autofocus >
                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                    </span>
                               @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputEmail">Email Address</label>
                                <input id="inputEmail" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="johndoe@gmail.com">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputphone">Phone Number</label>
                                <input id="inputphone" type="tel" class="form-control form-control-lg @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" placeholder="+497878787845">

                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                               <p>In signing up, I acknowledge i am at least 18 years old and want to receive email offers from Phill's Burgers
                                   I select to join dine rewards, agree to the terms and conditions of the program
                               </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary mb-2">Sign Up</button>
                            </div>
                        </div>
                    </div>
                    
                    
                   
                  </form>
             </div>
             
        </div>
      </div>
    
  </div>
       
    
       
   

@endsection