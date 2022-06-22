@extends('users.layout')
@section('content')
 
 
<div class="card">
<div class="col-md-6 login-left">
<h3>User Details</h3>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">User ID : {{ $users->userID }}</h5>
        <p class="card-text">User Name : {{ $users->userName }}</p>
        <p class="card-text">Email : {{ $users->email }}</p>
        <p class="card-text">Game Played : {{ $users->game }}</p>
        <p class="card-text">Phone Number : {{ $users->phone }}</p>
        <p class="card-text">roleID : {{ $users->roleID }}</p>
        <p class="card-text">Status : {{ $users->status }}</p>
        <a class="btn btn-danger" href="{{ route('index') }}">Back</a></br>

  </div>
       
    </hr>
  
  </div>
</div>