@extends('layouts.dashboard.app')
@section('content')
<div class="container text-center text-info">
    <span class="h3">User setting of {{ Auth::user()->name ?? null }}</span>
</div>
<div class="container my-3">
    <div class="card">
        <div class="card-header">
            <h3>Update Profile</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('user.update') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="name" class="form-control" name="name" value="{{ Auth::user()->name ?? null }}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" value="{{ Auth::user()->email ?? null }}">
                </div>
                <div class="form-group">
                    <label for="password">Password [Required]</label>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="newPassword">New password [Optioanl]</label>
                    <input type="password" class="form-control" name="newPassword" placeholder="Confirm password">
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Confirm new password</label>
                    <input type="password" class="form-control" name="verifyPassword" placeholder="Confirm password">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection