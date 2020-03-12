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
                                 <h2 class="pageheader-title">General Settings </h2>
                                 <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                                 <div class="page-breadcrumb">
                                     <nav aria-label="breadcrumb">
                                         <ol class="breadcrumb">
                                             <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                             <li class="breadcrumb-item active" aria-current="page">Edit General Settings</li>
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
                                     <h5 class="card-header">General Settings</h5>
                                     <div class="card-body">
                                        <form method="POST" action="/admin/settings/general">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <label for="inputTitle">Title</label>
                                                <input id="inputTitle" type="text" class="form-control form-control-lg @error('site_title') is-invalid @enderror" name="site_title" value="{{ old('site_title', $generalSetting->site_title) }}" 
                                                required autocomplete="name" placeholder="Title" autofocus >

                                                       @error('site_title')
                                                           <span class="invalid-feedback" role="alert">
                                                               <strong>{{ $message }}</strong>
                                                           </span>
                                                       @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="inputLogoUrl">Logo Image Url</label>
                                                <input id="inputLogoUrl" type="text" class="form-control form-control-lg @error('logo_image_url') is-invalid @enderror" name='logo_image_url' value="{{ old('logo_image_url', $generalSetting->logo_image_url) }}" 
                                                required autocomplete='logo_image_url' placeholder='logo_image_url' autofocus >
                    
                                                @error('logo_image_url')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="inputMainAddess">Main Address</label>
                                                <input id="inputMainAddress" type="text" class="form-control form-control-lg @error('address_1') is-invalid @enderror" name='address_1' value="{{ old('address_1', $generalSetting->address_1) }}" required autocomplete='address_1' placeholder='address_1'>

                                                @error('address_1')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="inputSecondAddress">Second Address</label>
                                                <input id="inputSecondAddress" type="text" class="form-control form-control-lg @error('address_2') is-invalid @enderror" name='address_2' value="{{ old('address_2', $generalSetting->address_2) }}" autocomplete='address_2' placeholder='address_2'>

                                                @error('address_2')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="inputCity">City</label>
                                                <input id="inputCity" type="text" class="form-control form-control-lg @error('city') is-invalid @enderror" name='city' value="{{ old('city', $generalSetting->city) }}" required autocomplete='city' placeholder='city'>

                                                @error('city')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                          
                                            <div class="form-group">
                                                <label for="inputState">State</label>
                                                <input id="inputState" type="text" class="form-control form-control-lg @error('state') is-invalid @enderror" name='state' value="{{ old('state', $generalSetting->state) }}" required autocomplete='state' placeholder='state'>

                                                @error('state')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="inputZipcode">Zipcode</label>
                                                <input id="inputZipcode" type="text" class="form-control form-control-lg @error('zipcode') is-invalid @enderror" name='zipcode' value="{{ old('zipcode', $generalSetting->zipcode) }}" required autocomplete='zipcode' placeholder='zipcode'>

                                                @error('zipcode')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPhoneNumber">Phone Number</label>
                                                <input id="inputPhoneNumber" type="tel" class="form-control form-control-lg @error('phone_number') is-invalid @enderror" name='phone_number' value="{{ old('phone_number', $generalSetting->phone_number) }}" required autocomplete='phone_number' placeholder='phone_number'>

                                                @error('phone_number')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                          
                                            <div class="row">
                                                <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                                    
                                                </div>
                                                <div class="col-sm-6 pl-0">
                                                    <p class="text-right">
                                                        <button type="submit" class="btn btn-space btn-primary">Edit</button> 
                                                    </p>
                                                </div>
                                            </div>
                                        </form>
                                     </div>
                                 </div>
                             </div>
                            
                          
                
                 </div>
       </div>
      
   

@endsection