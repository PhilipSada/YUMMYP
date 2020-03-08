@extends('layouts.main-app')

@section('title', 'Page Title')


@section('content')

    
  <div id="reservations-page">
      <div class="content-box">
          <div class="row">
              <div class="col-md-6">
                <h1>Reservation</h1>
                <form>
                    <div class="form-group">
                        <label for="firstnameinput">First Name</label>
                        <input type="text" class="form-control" id="firstnameinput" name="firstname" placeholder="John">
                    </div>
                    <div class="form-group">
                        <label for="lastnameinput">Last Name</label>
                        <input type="text" class="form-control" name="lastname" id="lastnameinput" placeholder="Smith">
                    </div>
                    <div class="form-group">
                      <label for="emailinput">Email address</label>
                      <input type="email" class="form-control" id="emailinput" name="email" placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                      <label for="phoneinput">Phone Number</label>
                      <input type="text" class="form-control" name="phone" id="phoneinput" placeholder="718-298-5678">
                    </div>
                    <div class="form-group">
                      <label for="guestinput">How many guests?</label>
                      <select class="form-control" id="guestinput" name="guest">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="timeinput">What time?</label>
                      <select class="form-control" id="timeinput" name="time">
                        <option value="6">6:00pm</option>
                        <option value="7">7:00pm</option>
                        <option value="8">8:00pm</option>
                        <option value="9">9:00pm</option>
                        <option value="10">10:00pm</option>
                      </select>
                    </div>
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary mb-2">Confirm</button>
                    </div>
                  </form>
             </div>
             <div class="col-md-6">
                 <p>Please note that this is not a reservation. This is just to add you to the current waitlist. 
                    We will do our best to ensure that you don't have a long wait</p>
             </div>
             
        </div>
      </div>
    
  </div>
       
    
       
   

@endsection