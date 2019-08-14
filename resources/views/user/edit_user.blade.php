@extends('user.master')

@section('title', 'Chỉnh sửa')

@section('content')
@if($errors->any())
<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
		<li>{{$error}}</li>
		@endforeach
	</ul>
</div>
@endif
<form action="{{route('users.update')}}" method="post">
	@csrf()
	@if(isset($user))
	<input type="hidden" name="id" value="{{$user->id}}">
	@endif
	<div class="form-group">
		<label for="first_name">First Name</label>
		<input class="form-control" type="text" id="first_name" name="first_name" value="{{isset($user) ? $user->first_name : ''}}">
	</div>
    <div class="form-group">
		<label for="last_name">Last Name</label>
		<input class="form-control" type="text" id="last_name" name="last_name" value="{{isset($user) ? $user->last_name : ''}}">
	</div>
    <div class="form-group">
		<label for="email">Email</label>
		<input class="form-control" type="text" id="email" name="email" value="{{isset($user) ? $user->email : ''}}">
	</div>
    <div class="form-group">
		<label for="password">Password</label>
		<input class="form-control" type="password" id="password" name="password" value="{{isset($user) ? $user->password : ''}}">
	</div>
    <div class="form-group">
		<label for="address">Address</label>
		<input class="form-control" type="text" id="address" name="address" value="{{isset($user) ? $user->address : ''}}">
	</div>
    <div class="form-group">
		<label for="birthday">Birthday</label>
		<input class="form-control" type="date" id="birthday" name="birthday" value="{{isset($user) ? $user->birthday : ''}}">
	</div>
    <div class="form-group">
		<label for="is_active">Active</label>
		<input class="form-control" type="number" id="is_active" name="is_active" value="{{isset($user) ? $user->is_active : ''}}">
	</div>
	<div>
		<button type="submit" class="btn btn-submit">Update</button>
	</div>
</form>
@endsection