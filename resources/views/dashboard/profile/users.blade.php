@extends('layouts.dashboard.app')
@section('content')
<dic class="row">
    <div class="col-xl-12">
        <div class="card border-left-primary shadow h-80 mb-3">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <a class="btn btn-info" href="{{ route('user.create') }}">Daftarkan Pengguna +</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col mx-4">
        <table class="table table-striped border-left-info">
            <thead>
                <th>Nama</th>
                <th>Email</th>
                <th>Status</th>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @if($user->status == 'active')
                                <form action="{{ route('user.updateStatus', $user->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-success">Aktif</button>
                                </form>
                            @else
                                <form action="{{ route('user.updateStatus', $user->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-danger">Tidak Aktif</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection