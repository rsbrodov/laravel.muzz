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
                <div class="card-header"><h2>Manager products</h2></div>

                  <div class="card-body">
                      <form action="{{route('admin.product.store')}}" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                        @csrf
                        {{ csrf_field() }}
                        <label for="input1">Название товара</label>
                        <input id="input1" type="text" class="form-control" name="name" placeholder="name product">

                        <label for="input2">Цена</label>
                        <input id="input2" type="text"  class="form-control" name="price" placeholder="цена">

                        <label for="input3">Бренд</label>
                        <input id="input3" type="text" class="form-control" name="brand" placeholder="бренд">

                        <label for="input4">Описание</label>
                        <textarea id="input4" class="form-control" name="description" placeholder="описание"></textarea>

                        <label for="input5">Выберите тип</label>
                        <select id="input5" name="type" class="form-control">
                          <option value="1">Товар</option>
                          <option value="0">услуга</option>
                        </select>

                        <label for="input6">Укажите статус</label>
                        <select id="input6" name="status" class="form-control">
                          <option value="1">Опубликован</option>
                          <option value="0">Не публиковать</option>
                        </select>

                        <label for="input7">Укажите категорию</label>
                        <select id="input7" name="category_id" class="form-control">
                          @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                          @endforeach
                        </select>

                        <input type="file" name="image">
                        <br>
                        <button type="submit" class="btn btn-success btn-sm">Create</button>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection