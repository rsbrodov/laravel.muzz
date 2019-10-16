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
        <div class="col-md-4">
            <div class="card">
                <div class="card-header"><h2>Manager categories</h2></div>

                <div class="card-body">
                    <form action="{{route('admin.catalog.store')}}" method="post">
                      @csrf
                      {{ csrf_field() }}
                      <label for="input1">Название категории</label>
                        <input id="input1" type="text" class="form-control" name="name">
                      <label for="input5">Выберите тип</label>
                        <select id="input5" name="type" class="form-control">
                          <option value="1">Товар</option>
                          <option value="0">услуга</option>
                        </select>
                      <button type="submit" class="btn btn-success btn-sm">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection