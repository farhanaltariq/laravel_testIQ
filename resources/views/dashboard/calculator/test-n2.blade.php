@extends('layouts.dashboard.app')

@section('title', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card border-left-primary shadow h-80 mb-3">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Upload Excel - Test N2</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-400">
                            <form action="{{ route('test-n2.ans') }}" enctype="multipart/form-data" class="form-inline" method="POST">
                                @csrf
                                <input type="file" name="file" class="form-control mb-2 mr-sm-2">
                                <button type="submit" class="btn btn-primary mb-2">Upload</button>
                                {{-- <a href="{{ route('test-n1.create') }}" class="btn btn-primary mb-2 mx-3" >Input Manual +</a> --}}
                            </form>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calculator fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid card border-left-info shadow h-80 mb-3">
    <div class="card-header text-center"><h4>Daftar Nilai Tes N2</h4></div>
    <form class="form-inline" action="{{ route('test-n2') }}">
        <label class="sr-only" for="inlineFormInputName2">Name</label>
        <input name="search" type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Cari nama atau tanggal ...">
        <button type="submit" class="btn btn-primary mb-2">
            <i class="fas fa-search"></i>
        </button>
    </form>
    
    <div class="row">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <th>Nama</th>
                    <th>Nilai</th>
                    <th>Tanggal</th>
                    <th></th>
                </thead>
                <tbody>
                    @php
                        $answer[1] = explode(',', $answer[1]);
                        $answer[2] = explode(',', $answer[2]);
                        $answer[3] = explode(',', $answer[3]);
                        $answer[4] = explode(',', $answer[4]);
                        $answer[5] = explode(',', $answer[5]);
                        $answer[6] = explode(',', $answer[6]);
                        $answer[7] = explode(',', $answer[7]);
                        $answer[8] = explode(',', $answer[8]);
                        $answer[9] = explode(',', $answer[9]);
                        $answer[10] = explode(',', $answer[10]);
                        $answer[11] = explode(',', $answer[11]);
                        $answer[12] = explode(',', $answer[12]);
                        $answer[13] = explode(',', $answer[13]);
                        $answer[14] = explode(',', $answer[14]);
                        $answer[15] = explode(',', $answer[15]);
                        $answer[16] = explode(',', $answer[16]);
                        $answer[17] = explode(',', $answer[17]);
                        $answer[18] = explode(',', $answer[18]);
                        $answer[19] = explode(',', $answer[19]);
                        $answer[20] = explode(',', $answer[20]);
                    @endphp
                    @foreach ($n2 as $item)
                        {{-- hitung nilai --}}
                        @php
                            $nilai = 0;
                            $ans1 = explode(',', $item->ans1);
                            foreach ($ans1 as $ans) {
                                if (in_array(strtoupper($ans), $answer[1])) {
                                    $nilai++;
                                } else {
                                    $nilai--;
                                }
                            }
                            
                            $ans2 = explode(',', $item->ans2);
                            foreach ($ans2 as $ans) {
                                if (in_array(strtoupper($ans), $answer[2])) {
                                    $nilai++;
                                } else {
                                    $nilai--;
                                }
                            }
                            
                            $ans3 = explode(',', $item->ans3);
                            foreach ($ans3 as $ans) {
                                if (in_array(strtoupper($ans), $answer[3])) {
                                    $nilai++;
                                } else {
                                    $nilai--;
                                }
                            }
                            
                            $ans4 = explode(',', $item->ans4);
                            foreach ($ans4 as $ans) {
                                if (in_array(strtoupper($ans), $answer[4])) {
                                    $nilai++;
                                } else {
                                    $nilai--;
                                }
                            }
                            
                            $ans5 = explode(',', $item->ans5);
                            foreach ($ans5 as $ans) {
                                if (in_array(strtoupper($ans), $answer[5])) {
                                    $nilai++;
                                } else {
                                    $nilai--;
                                }
                            }
                            
                            $ans6 = explode(',', $item->ans6);
                            foreach ($ans6 as $ans) {
                                if (in_array(strtoupper($ans), $answer[6])) {
                                    $nilai++;
                                } else {
                                    $nilai--;
                                }
                            }
                            
                            $ans7 = explode(',', $item->ans7);
                            foreach ($ans7 as $ans) {
                                if (in_array(strtoupper($ans), $answer[7])) {
                                    $nilai++;
                                } else {
                                    $nilai--;
                                }
                            }
                            
                            $ans8 = explode(',', $item->ans8);
                            foreach ($ans8 as $ans) {
                                if (in_array(strtoupper($ans), $answer[8])) {
                                    $nilai++;
                                } else {
                                    $nilai--;
                                }
                            }
                            
                            $ans9 = explode(',', $item->ans9);
                            foreach ($ans9 as $ans) {
                                if (in_array(strtoupper($ans), $answer[9])) {
                                    $nilai++;
                                } else {
                                    $nilai--;
                                }
                            }
                            
                            $ans10 = explode(',', $item->ans10);
                            foreach ($ans10 as $ans) {
                                if (in_array(strtoupper($ans), $answer[10])) {
                                    $nilai++;
                                } else {
                                    $nilai--;
                                }
                            }
                            
                            $ans11 = explode(',', $item->ans11);
                            foreach ($ans11 as $ans) {
                                if (in_array(strtoupper($ans), $answer[11])) {
                                    $nilai++;
                                } else {
                                    $nilai--;
                                }
                            }
                            
                            $ans12 = explode(',', $item->ans12);
                            foreach ($ans12 as $ans) {
                                if (in_array(strtoupper($ans), $answer[12])) {
                                    $nilai++;
                                } else {
                                    $nilai--;
                                }
                            }
                            
                            $ans13 = explode(',', $item->ans13);
                            foreach ($ans13 as $ans) {
                                if (in_array(strtoupper($ans), $answer[13])) {
                                    $nilai++;
                                } else {
                                    $nilai--;
                                }
                            }
                            
                            $ans14 = explode(',', $item->ans14);
                            foreach ($ans14 as $ans) {
                                if (in_array(strtoupper($ans), $answer[14])) {
                                    $nilai++;
                                } else {
                                    $nilai--;
                                }
                            }
                            
                            $ans15 = explode(',', $item->ans15);
                            foreach ($ans15 as $ans) {
                                if (in_array(strtoupper($ans), $answer[15])) {
                                    $nilai++;
                                } else {
                                    $nilai--;
                                }
                            }
                            
                            $ans16 = explode(',', $item->ans16);
                            foreach ($ans16 as $ans) {
                                if (in_array(strtoupper($ans), $answer[16])) {
                                    $nilai++;
                                } else {
                                    $nilai--;
                                }
                            }
                            
                            $ans17 = explode(',', $item->ans17);
                            foreach ($ans17 as $ans) {
                                if (in_array(strtoupper($ans), $answer[17])) {
                                    $nilai++;
                                } else {
                                    $nilai--;
                                }
                            }
                            
                            $ans18 = explode(',', $item->ans18);
                            foreach ($ans18 as $ans) {
                                if (in_array(strtoupper($ans), $answer[18])) {
                                    $nilai++;
                                } else {
                                    $nilai--;
                                }
                            }
                            
                            $ans19 = explode(',', $item->ans19);
                            foreach ($ans19 as $ans) {
                                if (in_array(strtoupper($ans), $answer[19])) {
                                    $nilai++;
                                } else {
                                    $nilai--;
                                }
                            }
                            
                            $ans20 = explode(',', $item->ans20);
                            foreach ($ans20 as $ans) {
                                if (in_array(strtoupper($ans), $answer[20])) {
                                    $nilai++;
                                } else {
                                    $nilai--;
                                }
                            }
                        @endphp
                        <tr>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $nilai ?? '' }} dari {{ count($answer)-1 }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>
                                <a href="{{ route('test-n2.show', $item->id) }}">Detail</a>
                            </td>
                            {{-- <td>
                                <form action="{{ route('test-n1.destroy', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $n2->links("pagination::bootstrap-4") }}
        </div>
    </div>
</div>
@endsection