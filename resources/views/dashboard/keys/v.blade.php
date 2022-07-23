@extends('layouts.dashboard.app')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid card border-left-info shadow h-80 mb-3">
    <div class="card-header text-center"><h4>Kunci Jawaban Tes V</h4></div>
    <table class="table table-borderless">
        <thead>
            <th></th>
            @php
                for ($i=1; $i <= 25; $i++) { 
                    echo '<th>'.$i.'</th>';
                }
            @endphp
        </thead>
        <tbody>
            <tr>
                <td></td>
                @php
                    for($i = 1; $i <= 25; $i++) {
                        echo '<td>'.$answer[$i].'</td>';
                    }
                @endphp
            </tr>
        </tbody>
        <thead>
            <th></th>
            @php
                for ($i=26; $i <= 50; $i++) { 
                    echo '<th>'.$i.'</th>';
                }
            @endphp
        </thead>
        <tbody>
            <tr>
                <td></td>
                @php
                    for($i = 26; $i <= 50; $i++) {
                        echo '<td>'.$answer[$i].'</td>';
                    }
                @endphp
            </tr>
        </tbody>
        <thead>
            <th></th>
            @php
                for ($i=51; $i <= 75; $i++) { 
                    echo '<th>'.$i.'</th>';
                }
            @endphp
        </thead>
        <tbody>
            <tr>
                <td></td>
                @php
                    for($i = 51; $i <= 75; $i++) {
                        echo '<td>'.$answer[$i].'</td>';
                    }
                @endphp
            </tr>
        </tbody>
        <thead>
            <th></th>
            @php
                for ($i=76; $i <= 100; $i++) { 
                    echo '<th>'.$i.'</th>';
                }
            @endphp
        </thead>
        <tbody>
            <tr>
                <td></td>
                @php
                    for($i = 76; $i <= 100; $i++) {
                        echo '<td>'.$answer[$i].'</td>';
                    }
                @endphp
            </tr>
        </tbody>
    </table>
</div>
@endsection