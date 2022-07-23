@extends('layouts.dashboard.app')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid card border-left-info shadow h-80 mb-3">
    <div class="card-header text-center"><h4>Kunci Jawaban</h4></div>
    <table class="table table-borderless">
        <thead>
            <th></th>
            @php
                for ($i=1; $i <= 20; $i++) { 
                    echo '<th>'.$i.'</th>';
                }
            @endphp
        </thead>
        <tbody>
            <tr>
                @foreach($answer as $ans)
                    <td>{{ $ans }}</td>
                @endforeach
            </tr>
        </tbody>
    </table>
</div>

<div class="container-fluid card border-left-info shadow h-80 mb-3">
        <div class="row">
            <div class="card-body">
                <table class="table table-xs table-borderless">
                    <thead>
                        <tr>
                            <th>Tanggal Tes</th>
                            <td>{{ $n3->created_at ?? null}}</td>
                        </tr>
                        <tr>
                            <th>Nama</th>
                            <td>{{ $n3->nama ?? null}}</td>
                        </tr>
                        <tr>
                            <th>Tanggal Lahir</th>
                            <td>{{ $n3->tgl_lahir ?? null}}</td>
                        </tr>
                        <tr>
                            <th>Ruang Kelas</th>
                            <td>{{ $n3->ruang_kelas ?? null }}</td>
                        </tr>
                        <tr>
                            <th>Pilihan Jurusan</th>
                            <td>{{ $n3->pil_jurusan ?? null }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
</div>

    <div class="container-fluid card border-left-info shadow h-80 mb-3">
    <div class="card-header text-center"><h4>Jawaban Tes N3</h4></div>
        <div class="row">
            <div class="card-body">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                {{ $n3->ans1 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                {{ $n3->ans2 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>
                                {{ $n3->ans3 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>
                                {{ $n3->ans4 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>
                                {{ $n3->ans5 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>
                                {{ $n3->ans6 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>
                                {{ $n3->ans7 ?? null }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
    
            <div class="card-body">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td>8</td>
                            <td>
                                {{ $n3->ans8 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>
                                {{ $n3->ans9 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>
                                {{ $n3->ans10 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>
                                {{ $n3->ans11 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>
                                {{ $n3->ans12 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>
                                {{ $n3->ans13 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td>
                                {{ $n3->ans14 ?? null }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="card-body">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td>15</td>
                            <td>
                                {{ $n3->ans15 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>16</td>
                            <td>
                                {{ $n3->ans16 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>17</td>
                            <td>
                                {{ $n3->ans17 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>18</td>
                            <td>
                                {{ $n3->ans18 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>19</td>
                            <td>
                                {{ $n3->ans19 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>20</td>
                            <td>
                                {{ $n3->ans20 ?? null }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
    
        </div>
    </div>
</form>
    @endsection