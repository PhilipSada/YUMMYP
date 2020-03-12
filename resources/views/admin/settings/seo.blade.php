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
                                 <h2 class="pageheader-title">SEO Settings </h2>
                                 <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                                 <div class="page-breadcrumb">
                                     <nav aria-label="breadcrumb">
                                         <ol class="breadcrumb">
                                             <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                             <li class="breadcrumb-item active" aria-current="page">Edit SEO Settings</li>
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
                                     <h5 class="card-header">SEO Settings</h5>
                                     <div class="card-body">
                                        <form method="POST" action="/admin/settings/seo">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <label for="inputTitle">Description</label>
                                                <input id="inputTitle" type="text" class="form-control form-control-lg @error('description') is-invalid @enderror" name="description" value="{{ old('description', $seoSetting->description) }}" 
                                                required autocomplete="description" placeholder="Description" autofocus >

                                                       @error('description')
                                                           <span class="invalid-feedback" role="alert">
                                                               <strong>{{ $message }}</strong>
                                                           </span>
                                                       @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="inputKeywords">Keywords</label>
                                                <input id="inputKeywords" type="text" class="form-control form-control-lg @error('keywords') is-invalid @enderror" name='keywords' value="{{ old('keywords', $seoSetting->keywords) }}" 
                                                required autocomplete='keywords' placeholder='keywords' autofocus >
                    
                                                @error('keywords')
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