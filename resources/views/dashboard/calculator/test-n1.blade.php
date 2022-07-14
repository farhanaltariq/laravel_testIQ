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
                            Upload Excel - Test N1</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-400">
                            <form action="{{ route('test-n1.ans') }}" enctype="multipart/form-data" class="form-inline" method="POST">
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
    <div class="card-header text-center"><h4>Daftar Nilai</h4></div>
    {{-- search form --}}
    <form class="form-inline" action="{{ route('test-n1') }}">
        <label class="sr-only" for="inlineFormInputName2">Name</label>
        <input name="search" type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Cari Nama ...">
        <button type="submit" class="btn btn-primary mb-2">Submit</button>
    </form>
    <div class="row">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <th>Nama</th>
                    <th>Nilai</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($n1 as $item)
                        {{-- hitung nilai --}}
                        @php
                            $nilai = 0;
                            $item->ans1 == $answer[1] ? $nilai += 1 : null;
                            $item->ans2 == $answer[2] ? $nilai += 1 : null;
                            $item->ans3 == $answer[3] ? $nilai += 1 : null;
                            $item->ans4 == $answer[4] ? $nilai += 1 : null;
                            $item->ans5 == $answer[5] ? $nilai += 1 : null;
                            $item->ans6 == $answer[6] ? $nilai += 1 : null;
                            $item->ans7 == $answer[7] ? $nilai += 1 : null;
                            $item->ans8 == $answer[8] ? $nilai += 1 : null;
                            $item->ans9 == $answer[9] ? $nilai += 1 : null;
                            $item->ans10 == $answer[10] ? $nilai += 1 : null;
                            $item->ans11 == $answer[11] ? $nilai += 1 : null;
                            $item->ans12 == $answer[12] ? $nilai += 1 : null;
                            $item->ans13 == $answer[13] ? $nilai += 1 : null;
                            $item->ans14 == $answer[14] ? $nilai += 1 : null;
                            $item->ans15 == $answer[15] ? $nilai += 1 : null;
                            $item->ans16 == $answer[16] ? $nilai += 1 : null;
                            $item->ans17 == $answer[17] ? $nilai += 1 : null;
                            $item->ans18 == $answer[18] ? $nilai += 1 : null;
                            $item->ans19 == $answer[19] ? $nilai += 1 : null;
                            $item->ans20 == $answer[20] ? $nilai += 1 : null;
                            $item->ans21 == $answer[21] ? $nilai += 1 : null;
                            $item->ans22 == $answer[22] ? $nilai += 1 : null;
                            $item->ans23 == $answer[23] ? $nilai += 1 : null;
                            $item->ans24 == $answer[24] ? $nilai += 1 : null;
                            $item->ans25 == $answer[25] ? $nilai += 1 : null;
                        @endphp
                    <tr>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $nilai }}</td>
                        <td>
                            <a href="">Lihat Jawaban</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $n1->links("pagination::bootstrap-4") }}
        </div>
    </div>
</div>
{{-- 
<div class="row">
    <div class="col-xl-12">
        <div class="card border-left-primary shadow h-80 my-3 px-3">
            <div class="my-3 text-center h4">Daftar Nilai</div>
            <table class="table table-bordered yajra-datatable">
                <thead>
                    <tr>
                        <th>Nama</th>
                        @php
                            for($i=1; $i<=25; $i++) {
                                echo "<th>$i</th>";
                            }
                        @endphp
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function () {
        
        var table = $('.yajra-datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('data-n1') }}",
            columns: [
                {data: 'nama', name: 'nama'},
                {data: 'ans1', name: 'ans1'},
                {data: 'ans2', name: 'ans2'},
                {data: 'ans3', name: 'ans3'},
                {data: 'ans4', name: 'ans4'},
                {data: 'ans5', name: 'ans5'},
                {data: 'ans6', name: 'ans6'},
                {data: 'ans7', name: 'ans7'},
                {data: 'ans8', name: 'ans8'},
                {data: 'ans9', name: 'ans9'},
                {data: 'ans10', name: 'ans10'},
                {data: 'ans11', name: 'ans11'},
                {data: 'ans12', name: 'ans12'},
                {data: 'ans13', name: 'ans13'},
                {data: 'ans14', name: 'ans14'},
                {data: 'ans15', name: 'ans15'},
                {data: 'ans16', name: 'ans16'},
                {data: 'ans17', name: 'ans17'},
                {data: 'ans18', name: 'ans18'},
                {data: 'ans19', name: 'ans19'},
                {data: 'ans20', name: 'ans20'},
                {data: 'ans21', name: 'ans21'},
                {data: 'ans22', name: 'ans22'},
                {data: 'ans23', name: 'ans23'},
                {data: 'ans24', name: 'ans24'},
                {data: 'ans25', name: 'ans25'},
            ]
        });
        
    });
</script>
 --}}
@endsection