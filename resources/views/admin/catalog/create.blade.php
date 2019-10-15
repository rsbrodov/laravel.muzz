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
                <div class="card-header">Manager categories</div>

                <div class="card-body">
                    <form action="{{route('admin.catalog.store')}}" method="post">
                      @csrf
                      {{ csrf_field() }}
                      <input type="text" name="name" placeholder>
                      <select name="type">
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