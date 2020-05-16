        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <!-- Search Engine Optimization by Rank Math - https://s.rankmath.com/home -->
        <meta name="description" content="{{$settings['seo']->description}}">
        <meta name="robots" content="follow,index,max-snippet:-1,max-video-preview:-1,max-image-preview:large">
        {{-- <link rel="canonical" href="https://codingphase.com/"> --}}
        <meta property="og:locale" content="en_US">
        <meta property="og:type" content="website">
        <meta property="og:title" content="@yield('title')">
        <meta property='og:image' content="//yummiep.com/images/restaurantCover.png">        
        <meta property="og:description" content="{{$settings['seo']->description}}">
        <meta property="og:url" content="https://yummiep.com/">
        <meta property="og:site_name" content="{{$settings['general']->site_title}}">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="@yield('title')">
        <meta name="twitter:description" content="{{$settings['seo']->description}}">
         <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">