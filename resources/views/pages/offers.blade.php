@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')

    
    <div>
       
        <h1>Offers Page</h1>
       
    </div>
   

@endsection