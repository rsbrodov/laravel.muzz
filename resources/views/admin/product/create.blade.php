@extends('layouts.app')
@section('content')
<div class="container">
  @if(count($errors) > 0)
  <ul>
    @foreach($errors->all() as $error)
    <li class="alert alert-danger">{{ $error }}</li>
    @endforeach
  </ul>
  @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Manager products</div>

                <div class="card-body">
                    <form action="{{route('admin.product.store')}}" method="post" enctype="multipart/form-data">
                      @csrf
                      {{ csrf_field() }}
                      <input type="text" name="name" placeholder="name product">
                      <input type="text" name="price" placeholder="цена">
                      <input type="text" name="brand" placeholder="бренд">
                      <textarea name="description" placeholder="описание"></textarea>
                      <select name="type">
                        <option value="1">Товар</option>
                        <option value="0">услуга</option>
                      </select>
                      <select name="status">
                        <option value="1">Опубликован</option>
                        <option value="0">Не публиковать</option>
                      </select>
                      <select name="category_id">
                        @foreach($categories as $category)
                          <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                      </select>

                      <input type="file" name="image">
                      <button type="submit" class="btn btn-success btn-sm">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection