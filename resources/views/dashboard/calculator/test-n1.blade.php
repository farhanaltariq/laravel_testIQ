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

{{-- <table class="table table-bordered">
    <thead>
        <th colspan="25" class="text-center">Kunci Jawaban</th>
    </thead>
    <thead>
        @php
           for($i=1; $i<=25; $i++) {
               echo "<th>$i</th>";
           }
        @endphp
    </thead>
    <tbody>
        @foreach ($key as $k)
        <tr>
            <td>{{ $k->ans1 }}</td>
            <td>{{ $k->ans2 }}</td>
            <td>{{ $k->ans3 }}</td>
            <td>{{ $k->ans4 }}</td>
            <td>{{ $k->ans5 }}</td>
            <td>{{ $k->ans6 }}</td>
            <td>{{ $k->ans7 }}</td>
            <td>{{ $k->ans8 }}</td>
            <td>{{ $k->ans9 }}</td>
            <td>{{ $k->ans10 }}</td>
            <td>{{ $k->ans11 }}</td>
            <td>{{ $k->ans12 }}</td>
            <td>{{ $k->ans13 }}</td>
            <td>{{ $k->ans14 }}</td>
            <td>{{ $k->ans15 }}</td>
            <td>{{ $k->ans16 }}</td>
            <td>{{ $k->ans17 }}</td>
            <td>{{ $k->ans18 }}</td>
            <td>{{ $k->ans19 }}</td>
            <td>{{ $k->ans20 }}</td>
            <td>{{ $k->ans21 }}</td>
            <td>{{ $k->ans22 }}</td>
            <td>{{ $k->ans23 }}</td>
            <td>{{ $k->ans24 }}</td>
            <td>{{ $k->ans25 }}</td>
        </tr>
        @endforeach
    </tbody>
</table> --}}

{{-- <table class="table table-striped my-3">
    <thead>
        <th rowspan="2" class="text-center">Nama</th>
        <th colspan="25" class="text-center">Jawaban</th>
    </thead>
    <thead>
        <th></th>
        @php
           for($i=1; $i<=25; $i++) {
               echo "<th>$i</th>";
           }
        @endphp
    </thead>
    <tbody>
        @foreach ($n1 as $n)
        <tr>
            <td>{{ $n->nama }}</td>
            <td>{{ $n->ans1 }}</td>
            <td>{{ $n->ans2 }}</td>
            <td>{{ $n->ans3 }}</td>
            <td>{{ $n->ans4 }}</td>
            <td>{{ $n->ans5 }}</td>
            <td>{{ $n->ans6 }}</td>
            <td>{{ $n->ans7 }}</td>
            <td>{{ $n->ans8 }}</td>
            <td>{{ $n->ans9 }}</td>
            <td>{{ $n->ans10 }}</td>
            <td>{{ $n->ans11 }}</td>
            <td>{{ $n->ans12 }}</td>
            <td>{{ $n->ans13 }}</td>
            <td>{{ $n->ans14 }}</td>
            <td>{{ $n->ans15 }}</td>
            <td>{{ $n->ans16 }}</td>
            <td>{{ $n->ans17 }}</td>
            <td>{{ $n->ans18 }}</td>
            <td>{{ $n->ans19 }}</td>
            <td>{{ $n->ans20 }}</td>
            <td>{{ $n->ans21 }}</td>
            <td>{{ $n->ans22 }}</td>
            <td>{{ $n->ans23 }}</td>
            <td>{{ $n->ans24 }}</td>
            <td>{{ $n->ans25 }}</td>
        </tr>
        <tr>
            <td>Nilai</td>
            <td>{{ $n->ans1 == $key[0]->ans1 ? '1' : '0' }}</td>
        </tr>
        @endforeach
    </tbody>
</table> --}}
<div class="container-fluid">
            {{-- <h1 class="mb-4 text-center">How to Use Yajra Datatables in Laravel 8</h1> --}}
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
        <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
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
@endsection