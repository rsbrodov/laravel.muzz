@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Manager products</div>

                <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">Name</th>
                          <th scope="col">Price</th>
                          <th scope="col">Brand</th>
                          <th scope="col">Type</th>
                          <th scope="col">Category</th>
                          <th scope="col">
                             <a href="{{ route('admin.product.create') }}" class="float-left">
                            <button type="button" class="btn btn-primary btn-sm">Create</button>
                          </a>
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($products as $product)
                        <tr>
                          <th>{{ $product->name }}</th>
                          <th>{{ $product->price }}</th>
                          <th>{{ $product->brand }}</th>
                          @if($product->type == 1)
                          <th>Товар</th>
                          @endif
                          @if($product->type == 0)
                          <th>Услуга</th>
                          @endif

                          <th>
                            {{ $product->category->name }}
                          </th>
                          <th>
                            <a href="{{ route('admin.product.create') }}">
                              <button type="submit" class="btn btn-primary btn-sm">Edit</button>
                            </a>

                          <form action="{{ route('admin.product.destroy', $product->id) }}", method="POST">
                            {{ method_field('DELETE') }}
                             @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                          </form>
                        </th>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    {{$products->links()}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection