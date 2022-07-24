@extends('layouts.dashboard.app')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid card border-left-info shadow h-80 mb-3">
    <div class="card-header text-center"><h4>Kunci Jawaban Tes N1</h4></div>
    <div class="row">
        <div class="col">
            <table class="table table-striped">
                <tbody>
                    @php
                        for($i = 1; $i <= 5; $i++) {
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
                        for($i = 6; $i <= 10; $i++) {
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
                        for($i = 11; $i <= 15; $i++) {
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
                        for($i = 16; $i <= 20; $i++) {
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
                        for($i = 21; $i <= 25; $i++) {
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