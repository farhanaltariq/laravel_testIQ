@extends('layouts.dashboard.app')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid card border-left-info shadow h-80 mb-3">
    <div class="card-header text-center"><h4>Kunci Jawaban Tes V</h4></div>
    <div class="row">
        <div class="col">
            <table class="table table-striped">
                <tbody>
                    @php
                        for($i = 1; $i <= 25; $i++) {
                            echo    '<tr><th style="width: 20%">'.$i.'</th>'.
                                    '<td>'.$answer[$i].'</td></tr>';
                        }
                    @endphp
                </tbody>
            </table>
        </div>
        <div class="col">
            <table class="table table-striped">
                <tbody>
                    @php
                        for($i = 26; $i <= 50; $i++) {
                            echo    '<tr><th style="width: 20%">'.$i.'</th>'.
                                    '<td>'.$answer[$i].'</td></tr>';
                        }
                    @endphp
                </tbody>
            </table>
        </div>
        <div class="col">
            <table class="table table-striped">
                <tbody>
                    @php
                        for($i = 51; $i <= 75; $i++) {
                            echo    '<tr><th style="width: 20%">'.$i.'</th>'.
                                    '<td>'.$answer[$i].'</td></tr>';
                        }
                    @endphp
                </tbody>
            </table>
        </div>
        <div class="col">
            <table class="table table-striped">
                <tbody>
                    @php
                        for($i = 76; $i <= 100; $i++) {
                            echo    '<tr><th style="width: 20%">'.$i.'</th>'.
                                    '<td>'.$answer[$i].'</td></tr>';
                        }
                    @endphp
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection