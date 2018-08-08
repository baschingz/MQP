<!doctype html>
<html lang="{{ app()->getLocale() }}" ng-app="myApp">
    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.2/angular.min.js"></script>
        <!-- <script src="{{asset('css/bootstrap.css')}}"></script> -->
        
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>
        <title>MQP</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand"  href= "http://localhost:8000">HS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
    <a class="nav-item nav-link"  href= "http://localhost:8000/manage">จัดการคิวของผู้ป่วย</a>
      <a class="nav-item nav-link" href="http://localhost:8000/show">แสดงคิวของผู้ป่วย</a>
      <a class="nav-item nav-link" href="#">ดูประวัติย้อนหลัง</a>
    </div>
  </div>
</nav>
    @yield('body')
   <!-- <div class="footer">
   <p>Footer</p>
   </div> -->
    <script src="{{asset('js/angularJS.js')}}"></script>    
    @yield('JS')
    </body>
   
</html>
