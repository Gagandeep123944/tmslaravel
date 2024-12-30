<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Default Title')</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset( 'css/style.css')}}">
    @stack('css')
</head>
<body>
    
    @if(auth()->check() && auth()->user()->role == 'admin') 
     @include('layouts.adminhaeder')
    @else
    

        @include('layouts.header')
    @endif

    <main>
        @yield('content')
    </main>

    @include('layouts.footer')

    @stack('css')
</body>
</html>