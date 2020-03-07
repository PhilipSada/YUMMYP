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
                                 <h2 class="pageheader-title">New User </h2>
                                 <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                                 <div class="page-breadcrumb">
                                     <nav aria-label="breadcrumb">
                                         <ol class="breadcrumb">
                                             <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                             <li class="breadcrumb-item"><a href="/admin/users" class="breadcrumb-link">All Users</a></li>
                                             <li class="breadcrumb-item active" aria-current="page">New User</li>
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
                                     <h5 class="card-header">Create a new user</h5>
                                     <div class="card-body">
                                         <form action="#" id="basicform" data-parsley-validate="" novalidate="">
                                             <div class="form-group">
                                                 <label for="inputFirstName">First Name</label>
                                                 <input id="inputFirstName" type="text" name="firstname" data-parsley-trigger="change" required="" placeholder="Billy" autocomplete="off" class="form-control">
                                             </div>
                                             <div class="form-group">
                                                 <label for="inputLastName">Last Name</label>
                                                 <input id="inputLastName" type="text" name="lastname" data-parsley-trigger="change" required="" placeholder="Smith" autocomplete="off" class="form-control">
                                             </div>
                                             <div class="form-group">
                                                 <label for="inputEmail">Email</label>
                                                 <input id="inputEmail" type="email" name="email" data-parsley-trigger="change" required="" placeholder="burger@gmail.com" autocomplete="off" class="form-control">
                                             </div>
                                             <div class="form-group">
                                                 <label for="inputPassword">Password</label>
                                                 <input id="inputPassword" type="password" name="password" data-parsley-trigger="change" required="" placeholder="Enter password" autocomplete="off" class="form-control">
                                             </div>
                                             <div class="form-group">
                                                <label for="inputRole">Role</label>
                                                <select class="form-control" id="inputRole">
                                                    <option value="admin">Admin</option>
                                                    <option value="employee">Employee</option>
                                                </select>
                                            </div>
                                             <div class="row">
                                                 <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                                     
                                                 </div>
                                                 <div class="col-sm-6 pl-0">
                                                     <p class="text-right">
                                                         <button type="submit" class="btn btn-space btn-primary">Create</button> 
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