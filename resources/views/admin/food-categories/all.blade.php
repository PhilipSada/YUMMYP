@extends('layouts.admin')
@section('content')

       <div class="container-fluid  dashboard-content">
           <!-- ============================================================== -->
           <!-- pageheader -->
           <!-- ============================================================== -->
           <div class="row">
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                   <div class="page-header">
                       <h2 class="pageheader-title">Food Categories</h2>
                       <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                       <div class="page-breadcrumb">
                           <nav aria-label="breadcrumb">
                               <ol class="breadcrumb">
                                   <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                   <li class="breadcrumb-item active" aria-current="page">Food Categories</li>
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
                   <!-- ============================================================== -->
                   <!-- basic table -->
                   <!-- ============================================================== -->
                   <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                       <div class="card">
                           <h5 class="card-header">All Food Categories</h5>
                           <div class="card-body">
                               <table class="table">
                                   <thead>
                                       <tr>
                                           <th scope="col">Id</th>
                                           <th scope="col">Title</th>
                                           <th scope="col">Description</th>
                                           <th scope="col">Image_Url</th>
                                           <th scopr="col">Updated_at </th>
                                           <th scope="col">Edit</th>
                                           <th scope="col">Delete</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                    <tbody>
                                        @foreach($foodCategories as $foodCategory)
                                        <tr>
                                            <th scope="row">{{$foodCategory->id}}</th>
                                            <th>{{$foodCategory->title}}</th>
                                            <td>{{$foodCategory->description}}</td>
                                            <td>{{$foodCategory->image_url}}</td>
                                            <td>{{date('m/d/y', strtotime($foodCategory->updated_at))}}</td>
                                            <td><a href="/admin/food-categories/{{$foodCategory->id}}/edit"><i class="far fa-edit"></i></a></td>
                                            <td><a href="/admin/food-categories/{{$foodCategory->id}}/delete" 
                                            onclick="if(! confirm('Are you sure you want to delete this category?')){return false}"><i class="far fa-trash-alt"></i></a></td>
                                        </tr>
                                        @endforeach
                                   </tbody>
                               </table>
                               {{ $foodCategories->links() }}
                           </div>
                       </div>
                   </div>
                  
               </div>
          
       </div>
      
   

@endsection