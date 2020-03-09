@extends('layouts.app')

@section('title', 'Page Title')


@section('content')

    
  <div id="offers-page">
      <div class="content-box">
          <div class="row">
              <div class="col-md-8 offset-md-2">
                <h1>Get Offers</h1>
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="firstnameinput">First Name</label>
                                <input type="text" class="form-control" id="firstnameinput" name="firstname" placeholder="John">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lastnameinput">Last Name</label>
                                <input type="text" class="form-control" name="lastname" id="lastnameinput" placeholder="Smith">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="emailinput">Email address</label>
                                <input type="email" class="form-control" id="emailinput" name="email" placeholder="name@example.com">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phoneinput">Phone Number</label>
                                <input type="text" class="form-control" name="phone" id="phoneinput" placeholder="718-298-5678">
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