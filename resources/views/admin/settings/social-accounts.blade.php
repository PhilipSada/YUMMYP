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
                                 <h2 class="pageheader-title">Social Account Settings </h2>
                                 <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                                 <div class="page-breadcrumb">
                                     <nav aria-label="breadcrumb">
                                         <ol class="breadcrumb">
                                             <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                             <li class="breadcrumb-item active" aria-current="page">Edit Social Account Settings</li>
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
                                     <h5 class="card-header">Social Account Settings</h5>
                                     <div class="card-body">
                                        <form method="POST" action="/admin/settings/social-accounts">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <label for="inputFacebook">Facebook</label>
                                                <input id="inputFacebook" type="text" class="form-control form-control-lg @error('facebook_url') is-invalid @enderror" name='facebook_url'value="{{ old('facebook_url', $socialAccountSetting->facebook_url) }}" 
                                                required autocomplete='facebook_url' placeholder='facebook_url' autofocus >

                                                       @error('facebook_url')
                                                           <span class="invalid-feedback" role="alert">
                                                               <strong>{{ $message }}</strong>
                                                           </span>
                                                       @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="inputTwitter">Twitter</label>
                                                <input id="inputTwitter" type="text" class="form-control form-control-lg @error('twitter_url') is-invalid @enderror" name='twitter_url' value="{{ old('twitter_url', $socialAccountSetting->twitter_url) }}" 
                                                required autocomplete='twitter_url' placeholder='twitter_url' autofocus >
                    
                                                @error('twitter_url')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="inputInstagram">Instagram</label>
                                                <input id="inputInstagram" type="text" class="form-control form-control-lg @error('instagram_url') is-invalid @enderror" name='instagram_url' value="{{ old('instagram_url', $socialAccountSetting->instagram_url) }}" required autocomplete='instagram_url' placeholder='instagram_url'>

                                                @error('instagram_url')
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