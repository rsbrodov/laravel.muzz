@extends('layouts.app1')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Manager users</div>

                <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">Name</th>
                          <th scope="col">Email</th>
                          <th scope="col">Roles</th>
                          <th scope="col">Actions</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($users as $user)
                        <tr>
                          <th>{{ $user->name }}</th>
                          <th>{{ $user->email }}</th>
                          <th>{{ implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}</th>
                          <th>
                            <a href="{{ route('admin.users.edit', $user->id) }}" class="float-left">
                            <button type="button" class="btn btn-primary btn-sm">Edit</button>
                          </a>

                          <form action="{{ route('admin.users.destroy', $user->id) }}", method="POST">
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