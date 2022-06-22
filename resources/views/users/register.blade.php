@extends('users.layout')
@section('content')
<div class="row">
    <div class="col-md-6 register-right">
        <h4> Register</h4>
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <form action="{{ route('register.action') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>User Name <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="userName" />
            </div>
            <div class="mb-3">
                <label>Email <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="email"/>
            </div>
            <div class="mb-3">
                <label>Phone Number <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="phone" />
            </div>
            <div class="mb-3">
                <label>Games Played<span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="game" />
            </div>
            <div class="mb-3">
                <label>Status <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="status" />
            </div>
            <div class="mb-3">
            <label for="roleID">Choose Role:</label>
				<select name="roleID" id="roleID">
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
            </div>
            <div class="mb-3">
                <label>Password <span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="password" />
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">Register</button>
                <a class="btn btn-danger" href="{{ route('home') }}">Back</a>
            </div>
        </form>
    </div>
</div>
@endsection