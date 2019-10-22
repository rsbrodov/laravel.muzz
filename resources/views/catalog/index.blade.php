@extends('app')
@section('content')
<section>
    <div class="container">
    <div class="sizing">
        
         <div class="title-g">
                    <h2 class="title-home">Товары</h2>
                    
                    </div>
        
                <div class="catalog-box">
                    <ul>
                   @foreach($catalogProducts as $catalog)
                                    <li>
                                        <a href="{{ URL::to('/catalog/' . $catalog->id
                                            ) }}">                                                                                    
                                               {{$catalog->name}}
                                        </a>
                                    </li>
                                            @endforeach 
                                            </ul>
                </div>
            
            
             <div class="title-g">
                    <h2 class="title-home">Услуги</h2>
                    
                    </div>
            <div class="catalog-box">
                    <ul>
             @foreach($catalogServices as $catalog)
                            <li>
                                        <a href="{{ URL::to('/catalog/' . $catalog->id) }}">                                                                                    
                                               {{$catalog->name}}
                                               
                                        </a>
                                    </li>
                                            @endforeach 
                                            </ul>
            </div>
            </div>
            </div>
</section>
<div></div>
@endsection