@extends('layouts.app1')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header"><h2>Manager Edit</h2> <h3>{{ $product->name }}</h3></div>
                <form action="{{ route('admin.product.update', ['product' => $product->id]) }}", method="POST">
                	@csrf
                	{{ method_field('PUT') }}
                    <label for="input1">Название товара</label>
                    <input id="input1" type="text" name="name" class="form-control" value="{{ $product->name }}">

                    <label for="input2">Цена</label>
                    <input id="input2" type="text" name="price" class="form-control" value="{{ $product->price }}">

                    <label for="input3">Бренд</label>
                    <input id="input3" type="text" name="brand" class="form-control" value="{{ $product->brand }}">

                    <label for="input4">Описание</label>
                    <textarea id="input4" name="description" class="form-control" value="{{ $product->description }}"></textarea>

                      <label for="input4">Категория</label>  
                	<select id="input4"  class="form-control" name="category_id">
                        @foreach($categories as $category)
                          <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                      </select>
                      <br>
                	<button type="submit" class='btn btn-success'>Update</button>
                </form>

                <div class="card-body">
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection