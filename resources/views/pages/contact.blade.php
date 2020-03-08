@extends('layouts.main-app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')

    
    <div>
       
        <h1>Contact Page</h1>
       
    </div>
   

@endsection