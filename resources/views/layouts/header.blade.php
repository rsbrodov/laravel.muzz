<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Главная</title>
        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ URL::asset('css/css.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" type="text/css">
        <link href="/template/css/font-awesome.min.css" rel="stylesheet">
        <link href="/template/css/main.css" rel="stylesheet">
        <link href="../template/css/css.css" rel="stylesheet">
        <link href="/template/css/cssmusic.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
        <!-- Шрифты фонт авесом последней версии -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        
        
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/mediaelement/4.2.7/mediaelementplayer.min.css'>


        
        
        
        
        <!-- для слайдера -->
         <!-- <script src="../template/js/bootstrap.min.js"></script> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="//code.jivosite.com/widget.js" jv-id="Ib2v6HDAk4" async></script>
        <script src="//api.html5media.info/1.2.2/html5media.min.js"></script>
        <script src="/template/js/music.js"></script>
             
    </head><!--/head-->

    <body>
        <div class="page-wrapper">


            <header id="header"><!--header-->
                <div class="header-bottom"><!--header-bottom-->
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: #180729;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="/">Muzza inc</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        
        
        <li><a class="nvt" href="/catalog/music">Артисты</a></li>
        <li><a class="nvt" href="{{ URL::to('/catalog/')}}">Каталог</a></li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a class="nvtt" href="/cart">
                                                <i class="glyphicon glyphicon-shopping-cart"></i> Корзина 
                                                
                                            </a>
                                        </li>
         @if (Route::has('login'))
                    @auth
                        <li><a class="nvtt" href="{{ url('/home') }}"><span class="glyphicon glyphicon-log-in"></span> Home</a><li>
                    @else                   
        <li><a class="nvtt" href="{{ url('login') }}"><span class="glyphicon glyphicon-log-in"></span> Вход</a></li> 
        @endauth
        @endif
            








        
      </ul> 
    </div>
  </div>
</nav>
  
                            </div>
                        </div>
                    </div>
                </div><!--/header-bottom-->

            </header><!--/header-->