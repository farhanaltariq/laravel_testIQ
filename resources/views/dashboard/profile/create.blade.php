@extends('layouts.dashboard.app')
@section('content')
<div class="container border-left-info" style="width: 60%">
    <div class="container text-center h4 my-3">Daftarkan Pengguna</div>
        <form action="{{ route('user.store') }}" method="POST" class="form">
            @csrf
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="name" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email">
            </div>
            <button class="btn btn-primary my-4">Simpan</button>
        </form>
</div>
@endsection