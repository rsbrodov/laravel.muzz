@extends('app')
@section('content')

<script>
  //window.console = window.console || function(t) {};
</script>
<script>
  //if (document.location.search.match(/type=embed/gi)) {
   // window.parent.postMessage("resize", "*");
 // }
</script>



     <wrapper>
	<div id="dws-slider" class="carousel slide" data-ride="carousel">
		<!--Показатели-->
		<ol class="carousel-indicators">
			<li data-target="#dws-slider" data-slide-to="0" class="active"></li>
			<li data-target="#dws-slider" data-slide-to="1"></li>
			<li data-target="#dws-slider" data-slide-to="2"></li>
		</ol>

		<!--Обертка для слайдов-->
		<div class="carousel-inner" role="listbox">
			<div class="item active"><img src="https://martsound.com.ua/wp-content/uploads/2016/11/IMG_2033.jpg" alt="Картинка 1">
				<div class="carousel-caption">
					<h3 class="text-uppercase">Студия звукозаписи Muzza</h3>
					<p>Более 5 лет на рынке музыки, высокое качество звука, современная аппаратура для обработки музыкального материала</p>
				</div>
			</div>
			<div class="item"><img src="https://www.jadcontracting.ca/images/587014199.jpg" alt="Картинка 2">
				<div class="carousel-caption">
					<h3 class="text-uppercase">Музыкальные услуги</h3>
					<p>Предоставляем полный цикл услуг аудио и видео производства</p>
				</div>
			</div>
			<div class="item"><img src="../template/images/experement/slider/slider-3.jpg" alt="Картинка 3">
				<div class="carousel-caption">
					<h3 class="text-uppercase">Простая установка</h3>
					<p>Praesent dictum, orci eget eleifend auctor, urna ex dapibus odio, vitae pretium neque massa vel
						neque. Donec et interdum diam. Morbi dignissim vestibulum mi ac viverra.</p>
				</div>
			</div>
		</div>

		<!--Элементы управления-->
		<a class="left carousel-control" href="#dws-slider" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#dws-slider" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</wrapper>



<div class="preim-block">
  
  
    <div class="preim-item">
       <span class="fa fa-history"></span> 
       <h2>Безлимитная запись</h2>
       <p>Не думайте о подсчете времени на записи песни, цена от количества часов не меняется !</p>
    </div>
    
  
   
    <div class="preim-item">
       <span class="fa fa-microphone"></span> 
       <h2>Бесплатное продюсирование</h2>
       <p>Саундпродюссер на записи песни спродюсирует ваш вокал (подскажет как спеть и скорректирует ритмику)</p>
    </div>
    
  
  
    <div class="preim-item">
       <span class="fa fa-apple"></span> 
       <h2>Размещаем песню на Itunes</h2>
       <p>Закажите аранжировку вашей песни и мы бесплатно разместим ее на Itunes и еще 100 площадках</p>
    </div>
    
  </div>



 <section>
    <div class="container">
        <div class="row">
            

            <div class="sins padding-right" >
                    <div class="title-g">
                    <h2 class="title-home">услуги</h2>
                    <h3 class="title-home">Все услуги</h3>
                    </div>
                    
                    @foreach ($services as $service)
                    <div class="col-sm-3 col-xs-6 " style="width:275px; ">
                        <div class="block-item" >
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="{{ asset('/storage/uploads/products/' . $service->id . '.jpg') }}" />
                                        <h2>{{ $service->price }} RUB</h2>
                                        <p>
                                            <a href="{{ URL::to('/product/' . $service->id )}}">
                                                {{ $service->name }}
                                            </a>
                                        </p>
                                        <a href="#" class="btn btn-default add-to-cart" data-id="<?php echo $service['id']; ?>"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    @endforeach

</div>
               

                
            </div><!--/recommended_items-->

        
    </div>

</section>



<section>
   <div class="container">
    <div class="row">
                    <div class="title-g">
                    <h2 class="title-home">товары</h2>
                    <h3 class="title-home">Все товары</h3>
                    </div>
                       
                    @foreach ($products as $product)
                      <div class="col-sm-3 col-xs-6" style="width:275px; ">
                        <div class="block-item" >
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="{{ asset('/storage/uploads/products/' . $product->id . '.jpg') }}" />
                                        <h2>{{ $product->price }} RUB</h2>
                                        <p>
                                            <a href="{{ URL::to('/product/' . $product->id )}}" >
                                                {{ $product->name }}
                                            </a>
                                        </p>
                                        <a href="#" class="btn btn-default add-to-cart" data-id="<?php echo $product['id']; ?>"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                      </div>
                   @endforeach

            </div><!--/recommended_items-->

        
    </div>

</section>
<br><br><br>
@endsection