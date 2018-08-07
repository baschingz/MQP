<!doctype html>
<html lang="{{ app()->getLocale() }}" ng-app="myApp">
    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- <script src="{{asset('css/bootstrap.css')}}"></script> -->
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.2/angular.min.js"></script>
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>
        <title>MQP</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
    </head>
    <body>
    <nav>
    
    </nav>
    @yield('body')
   <div class="footer">
   <p>Footer</p>
   </div>
    
    <script src="{{asset('js/angularJS.js')}}"></script>
    @yield('JS')
    </body>
   
</html>
