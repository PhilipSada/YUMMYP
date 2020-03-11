@extends('layouts.admin')
@section('content')

       <div class="container-fluid  dashboard-content">
              <div class="container-fluid  dashboard-content">
                     <!-- ============================================================== -->
                     <!-- pageheader -->
                     <!-- ============================================================== -->
                     <div class="row">
                         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                             <div class="page-header">
                                 <h2 class="pageheader-title">New Reservation </h2>
                                 <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                                 <div class="page-breadcrumb">
                                     <nav aria-label="breadcrumb">
                                         <ol class="breadcrumb">
                                             <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                             <li class="breadcrumb-item"><a href="/admin/reservations" class="breadcrumb-link">All Reservations</a></li>
                                             <li class="breadcrumb-item active" aria-current="page">New Reservation</li>
                                         </ol>
                                     </nav>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <!-- ============================================================== -->
                     <!-- end pageheader -->
                     <!-- ============================================================== -->
                  
              
                         <div class="row">
                             <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                 <div class="card">
                                     <h5 class="card-header">Create a new food item</h5>
                                     <div class="card-body">
                                        <form method="POST" action="/admin/reservations">
                                            @csrf
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
                                              <div class="form-group">
                                                <label for="inputEmail">Email Address</label>
                                                <input id="inputEmail" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="johndoe@gmail.com">
                          
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                              </div>
                                              <div class="form-group">
                                                <label for="inputphone">Phone Number</label>
                                                <input id="inputphone" type="tel" class="form-control form-control-lg @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" placeholder="+497878787845">
                          
                                                @error('phone_number')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                              </div>
                                              <div class="form-group">
                                                <label for="guestinput">How many guests?</label>
                                                <select class="form-control form-control-lg @error('guests_total') is-invalid @enderror" id="guestinput" name="guests_total">
                                                  <option>1</option>
                                                  <option>2</option>
                                                  <option>3</option>
                                                  <option>4</option>
                                                  <option>5</option>
                                                </select>
                                                @error('guests_total')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                               @enderror
                                              </div>
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
                                              <div class="form-group">
                                              <button type="submit" class="btn btn-primary mb-2">Confirm</button>
                                              </div>
                                            </form>
                                     </div>
                                 </div>
                             </div>
                            
                          
                
                 </div>
       </div>
      
   

@endsection