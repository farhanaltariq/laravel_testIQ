@extends('layouts.dashboard.app')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid card border-left-info shadow h-80 mb-3">
    <div class="card-header text-center">
        <h4>Feedback</h4>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Email</th>
                <th scope="col">Pesan</th>

            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            @foreach($feed as $pesan)
            <tr>
                <th scope="row"><?= $i; ?></th>
                <td>{{$pesan->email}}</td>
                <td>{{$pesan->pesan}}</td>
            </tr>
            <?php $i++ ?>
            @endforeach

        </tbody>
    </table>
</div>
@endsection