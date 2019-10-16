<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">    
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ URL::asset('css/css.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" type="text/css">
   
</head>
<body>
    <div id="app">


<div class="container-fluid">
        <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: #180729;">
  
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="{{ route('admin.') }}">Администратор</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        
        
        <li><a class="nvt" href="/catalog/music">Артисты</a></li>
        <li><a class="nvt" href="{{ URL::to('/catalog/')}}">Каталог</a></li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        
         
                        <li><a class="nvtt" href="{{ url('/main') }}"><span class="glyphicon glyphicon-log-in"></span> На сайт</a><li>
                    
        
      </ul> 
    </div>
  
</nav>
 </div> 
<br>
<br>
<br>
<br>
        <main class="py-4">
            @include('partial.alerts')<!--подключили вид с ошибками-->
            @yield('content')
        </main>
    </div>
</body>
</html>







