@extends('layouts.app1')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Manager {{ $user->name }}</div>
                <form action="{{ route('admin.users.update', ['user' => $user->id]) }}", method="POST">
                	@csrf
                	{{ method_field('PUT') }}
                	@foreach($roles as $role)
                	<div class="form-check">
                	<input type="checkbox" name="roles[]" value="{{ $role->id }}"
                	{{ $user->hasAnyRole($role->name)?'checked':'' }} ><!--Если данная роль является ролью пользователя назначить свойство чекед иначе оставить пустым-->
                	<label>{{ $role->name }}</label>
                </div>
                	@endforeach
                	<button type="submit" class='btn btn-success'>Сохранить</button>
                </form>

                <div class="card-body">
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection