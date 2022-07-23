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
                            Upload Excel - Test N3</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-400">
                            <form action="{{ route('test-n3.ans') }}" enctype="multipart/form-data" class="form-inline" method="POST">
                                @csrf
                                <input type="file" name="file" class="form-control mb-2 mr-sm-2">
                                <button type="submit" class="btn btn-primary mb-2">Upload</button>
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
    <div class="card-header text-center"><h4>Daftar Nilai Tes N3</h4></div>
    {{-- search form --}}
    <form class="form-inline" action="{{ route('test-n3') }}">
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
                    @foreach ($n3 as $item)
                        {{-- hitung nilai --}}
                        @php
                            $nilai = 0;
                            strtoupper($item->ans1) == strtoupper($answer[1]) ? $nilai += 1 : null;
                            strtoupper($item->ans2) == strtoupper($answer[2]) ? $nilai += 1 : null;
                            strtoupper($item->ans3) == strtoupper($answer[3]) ? $nilai += 1 : null;
                            strtoupper($item->ans4) == strtoupper($answer[4]) ? $nilai += 1 : null;
                            strtoupper($item->ans5) == strtoupper($answer[5]) ? $nilai += 1 : null;
                            strtoupper($item->ans6) == strtoupper($answer[6]) ? $nilai += 1 : null;
                            strtoupper($item->ans7) == strtoupper($answer[7]) ? $nilai += 1 : null;
                            strtoupper($item->ans8) == strtoupper($answer[8]) ? $nilai += 1 : null;
                            strtoupper($item->ans9) == strtoupper($answer[9]) ? $nilai += 1 : null;
                            strtoupper($item->ans10) == strtoupper($answer[10]) ? $nilai += 1 : null;
                            strtoupper($item->ans11) == strtoupper($answer[11]) ? $nilai += 1 : null;
                            strtoupper($item->ans12) == strtoupper($answer[12]) ? $nilai += 1 : null;
                            strtoupper($item->ans13) == strtoupper($answer[13]) ? $nilai += 1 : null;
                            strtoupper($item->ans14) == strtoupper($answer[14]) ? $nilai += 1 : null;
                            strtoupper($item->ans15) == strtoupper($answer[15]) ? $nilai += 1 : null;
                            strtoupper($item->ans16) == strtoupper($answer[16]) ? $nilai += 1 : null;
                            strtoupper($item->ans17) == strtoupper($answer[17]) ? $nilai += 1 : null;
                            strtoupper($item->ans18) == strtoupper($answer[18]) ? $nilai += 1 : null;
                            strtoupper($item->ans19) == strtoupper($answer[19]) ? $nilai += 1 : null;
                            strtoupper($item->ans20) == strtoupper($answer[20]) ? $nilai += 1 : null;
                        @endphp
                    <tr>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $nilai }} dari {{ count($answer)-1 }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>
                            <a href="{{ route('test-n3.show', $item->id) }}">Detail</a>
                        </td>
                        {{-- <td>
                            <form action="{{ route('test-n3.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td> --}}
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $n3->links("pagination::bootstrap-4") }}
        </div>
    </div>
</div>
@endsection