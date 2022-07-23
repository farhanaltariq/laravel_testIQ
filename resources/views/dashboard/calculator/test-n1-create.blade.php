@extends('layouts.dashboard.app')
@section('content')
<form action="{{ route('test-n1.store') }}" method="POST">
    @csrf
    <div class="container-fluid card border-left-info shadow h-80 mb-3">
            <div class="row">
                <div class="card-body">
                    <table class="table table-xs table-borderless">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <td>
                                    <input type="text" class="form-control" name="created_at" readonly value="{{ old('created_at') ?? now() }}">
                                </td>
                            </tr>
                            <tr>
                                <th>Nama</th>
                                <td>
                                    <input type="text" name="nama" value="{{ old('nama') }}" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th>Tanggal Lahir</th>
                                <td>
                                    <input type="date" value="{{ old('tgl_lahir') }}" class="form-control" name="tgl_lahir">
                                </td>
                            </tr>
                            <tr>
                                <th>Ruang Kelas</th>
                                <td>
                                    <input type="text" value="{{ old('ruang_kelas') }}" class="form-control" name="ruang_kelas">
                                </td>
                            </tr>
                            <tr>
                                <th>Pilihan Jurusan</th>
                                <td>
                                    <input type="text" value="{{ old('pil_jurusan') }}" class="form-control" name="pil_jurusan">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
    </div>

    <div class="container-fluid card border-left-info shadow h-80 mb-3">
            <div class="card-header text-center"><h4>Jawaban Tes N1</h4></div>
            <div class="row">
                <div class="card-body">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th>No</th>
                                <th>Jawaban</th>
                            </tr>
                            <tr>
                                @php
                                    for($i=1; $i <= 5; $i++) {
                                        echo '<tr>
                                            <td>'.$i.'</td>
                                            <td>
                                                <input type="text" name="ans'.$i.'" value="' . old('ans'.$i). ' " class="form-control"">
                                            </td>
                                            </tr>';
                                    }
                                @endphp
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th>No</th>
                                <th>Jawaban</th>
                            </tr>
                            <tr>
                                @php
                                    for($i=6; $i <= 10; $i++) {
                                        echo '<tr>
                                            <td>'.$i.'</td>
                                            <td>
                                                <input type="text" name="ans'.$i.'" value="' . old('ans'.$i). ' " class="form-control"">
                                            </td>
                                            </tr>';
                                    }
                                @endphp
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th>No</th>
                                <th>Jawaban</th>
                            </tr>
                            <tr>
                                @php
                                    for($i=11; $i <= 15; $i++) {
                                        echo '<tr>
                                            <td>'.$i.'</td>
                                            <td>
                                                <input type="text" name="ans'.$i.'" value="' . old('ans'.$i). ' " class="form-control"">
                                            </td>
                                            </tr>';
                                    }
                                @endphp
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="card-body">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th>No</th>
                                <th>Jawaban</th>
                            </tr>
                            <tr>
                                @php
                                    for($i=16; $i <= 20; $i++) {
                                        echo '<tr>
                                            <td>'.$i.'</td>
                                            <td>
                                                <input type="text" name="ans'.$i.'" value="' . old('ans'.$i). ' " class="form-control"">
                                            </td>
                                            </tr>';
                                    }
                                @endphp
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th>No</th>
                                <th>Jawaban</th>
                            </tr>
                            <tr>
                                @php
                                    for($i=21; $i <= 25; $i++) {
                                        echo '<tr>
                                            <td>'.$i.'</td>
                                            <td>
                                                <input type="text" name="ans'.$i.'" value="' . old('ans'.$i). ' " class="form-control"">
                                            </td>
                                            </tr>';
                                    }
                                @endphp
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <span class="text-danger">
                *Jawaban tidak akan bisa diubah setelah dikirimkan.
            </span>
            <button type="submit" class="btn btn-primary my-3">Simpan</button>
    </div>
</form>
@endsection