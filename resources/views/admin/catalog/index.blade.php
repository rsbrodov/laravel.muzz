@extends('layouts.app1')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Manager categories</h2></div>

                <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">Name</th>
                          <th scope="col">Type category</th>
                          <th scope="col">
                             <a href="{{ route('admin.catalog.create') }}" class="float-left">
                            <button type="button" class="btn btn-primary btn-sm">Create</button>
                          </a>
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($categories as $category)
                        <tr>
                          <th>{{ $category->name }}</th>
                          @if($category->type == 1)
                          <th>Продукт</th>
                          @endif
                          @if($category->type == 0)
                          <th>Услуга</th>
                          @endif
                          <th>
                            

                          <form action="{{ route('admin.catalog.destroy', $category->id) }}", method="POST">
                            {{ method_field('DELETE') }}
                             @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                          </form>
                        </th>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection