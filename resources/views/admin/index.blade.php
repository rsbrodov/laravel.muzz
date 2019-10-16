@extends('layouts.app')
@section('content')
<div class="container">
	<div class="col-lg-6">
	<ul class="list-group list-group-flush">
	  <li class="list-group-item">
	  	<a href="{{ route('admin.users.index') }}">Manager Users</a>
	  </li>
	  <li class="list-group-item">
	  	<a href="{{ route('admin.catalog.index') }}">Manager Category</a>
	  </li>
	  <li class="list-group-item">
	  	<a href="{{ route('admin.product.index') }}">Manager Products</a>
	  </li>
	</ul>
</div>
</div>
@endsection