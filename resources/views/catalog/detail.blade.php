@extends('app')
@section('content')
<section>
    <div class="container">
        <div class="row">
           
            <div class="col-sm-12 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Товары/Услуги</h2>

                    @foreach($products->productofcategory as $product)
                        <div class="col-sm-4">
                            <div class="product-image-wrapper" style="height:550px, width:300px">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="{{ asset('/storage/uploads/products/' . $product->id . '.jpg') }}" alt="" />
                                        <h2>{{ $product->price }} RUB</h2>
                                        <p>
                                            <a href="{{ URL::to('/product/' . $product->id )}}">
                                                {{ $product->name }}
                                            </a>
                                        </p>
                                        <a href="/cart/add/<?php echo $product['id']; ?>" class="btn btn-default add-to-cart" data-id="<?php echo $product['id']; ?>"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    @endforeach                             

                </div><!--features_items-->
                
                

            </div>
        </div>
    </div>
</section>
@endsection