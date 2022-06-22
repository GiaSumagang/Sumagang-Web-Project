@extends('users.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Users Page</div>
  <div class="card-body">
      
      <form action="{{ url('user') }}" method="post">
        {!! csrf_field() !!}
        <label>User Name</label></br> 
        <input type="text" name="userName" id="userName" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" class="form-control"></br>
        <label>Game</label></br>
        <input type="text" name="game" id="game" class="form-control"></br>
        <label>Phone Number</label></br>
        <input type="text" name="phone" id="phone" class="form-control"></br>
        <label>Status</label></br>
        <input type="text" name="status" id="status" class="form-control"></br>
        <label for="roleID">Choose Role:</label></br>
				<select name="roleID" id="roleID">
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select></br>
        <label>Password</label></br>
        <input type="text" name="password" id="password" class="form-control"></br>

        <input type="submit" value="Save" class="btn btn-success"> <a class="btn btn-danger" href="{{ route('index') }}">Back</a></br>
    </form>
   
  </div>
</div>
 
@stop