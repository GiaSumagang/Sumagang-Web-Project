@extends('users.layout')
@section('content')
<div class="col-md-6 login-left">
<div class="card">
<h2>Edit User</h2>
  <div class="card-body">
      
      <form action="{{ url('user/' .$users->userID) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="userID" id="userID" value="{{$users->id}}" id="userID" />
        <label>User Name</label></br>
        <input type="text" name="userName" id="userName" value="{{$users->userName}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" value="{{$users->email}}" class="form-control"></br>
        <label>Game Played</label></br>
        <input type="text" name="game" id="game" value="{{$users->game}}" class="form-control"></br>
        <label>Phone Number</label></br>
        <input type="text" name="phone" id="phone" value="{{$users->phone}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success">
        <a class="btn btn-danger" href="{{ route('index') }}">Back</a></br>
    </form>
</div>
  </div>
</div>
 
@stop