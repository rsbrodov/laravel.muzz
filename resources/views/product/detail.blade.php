@extends('app')
@section('content')
<section>
    <div class="container">
        <div class="row">
            

            <div class="col-sm-12 padding-right">
                <div class="product-details"><!--product-details-->
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="view-product">
                                <img src="{{ asset('/storage/uploads/products/' . $product->id . '.jpg') }}" alt="" />
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="product-information"><!--/product-information-->

                                

                                <h2>{{$product->name}}</h2>
                                
                                <span>
                                    <span>RUB {{$product->price}}</span>
                                    <a href="#" data-id="<?php echo $product['id']; ?>"
                                       class="btn btn-default add-to-cart">
                                        <i class="fa fa-shopping-cart"></i>В корзину
                                    </a>
                                </span>
                                
                                <p><b>Производитель:</b> {{$product->brand}}</p>
                            </div><!--/product-information-->
                        </div>
                    </div>
                    <div class="row">                                
                        <div class="col-sm-12">
                            <br/>
                            <h5>Описание товара</h5>
                            {{$product->description}}
                        </div>
                    </div>
                </div><!--/product-details-->

            </div>
        </div>
    </div>
</section>
@endsection