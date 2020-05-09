@extends('layouts.landing-page')

@section('title', 'Reservations')

@section('content')

<main data-barba="container" data-barba-namespace="reservation">    
  <div id="reservations-page">
      <div class="content-box">
          <div class="row d-flex justify-content-center">
              <div class="col-md-8">
                <h1>Reserve a table </h1>
                <form method="POST" action="/reservations">
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
                        <input id="inputphone" type="tel" class="form-control form-control-lg @error('phonenumber') is-invalid @enderror" name="phonenumber" value="{{ old('phonenumber') }}" required autocomplete="phonenumber" placeholder="+497878787845">
  
                        @error('phonenumber')
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
                        <label for="guestinput">How many guests?</label>
                        <select class="form-control form-control-lg @error('gueststotal') is-invalid @enderror" id="guestinput" name="gueststotal">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                        @error('gueststotal')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                       @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="timeinput">What time?</label>
                        <select  class="form-control form-control-lg @error('time') is-invalid @enderror" id="timeinput" name="time">
                          <option value="6">6:00pm</option>
                          <option value="7">7:00pm</option>
                          <option value="8">8:00pm</option>
                          <option value="9">9:00pm</option>
                          <option value="10">10:00pm</option>
                        </select>
                        @error('time')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                       @enderror
                      </div>
                    </div>
                  </div>
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary mb-2">Confirm</button>
                    </div>
                  </form>
             </div>
             {{-- <div class="col-md-4">
                 <p> Do you want us to reserve a table for you? If yes, please fill the reservation form </p>
             </div> --}}
             
        </div>
      </div>
    
  </div>
       
</main> 
       
   

@endsection