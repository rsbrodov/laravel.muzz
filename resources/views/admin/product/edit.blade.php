@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Manager {{ $product->name }}</div>
                <form action="{{ route('admin.product.update', ['product' => $product->id]) }}", method="POST">
                	@csrf
                	{{ method_field('PUT') }}

                    <input type="text" name="name" value="{{ $product->name }}">
                    <input type="text" name="price" value="{{ $product->price }}">
                    <input type="text" name="brand" value="{{ $product->brand }}">
                    <textarea name="description" value="{{ $product->description }}"></textarea>

                        
                	<select name="category_id">
                        @foreach($categories as $category)
                          <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                      </select>
                	<button type="submit" class='btn btn-success'>Update</button>
                </form>

                <div class="card-body">
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection