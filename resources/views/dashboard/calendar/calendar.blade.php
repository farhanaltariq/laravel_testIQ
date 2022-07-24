@extends('layouts.dashboard.app')
@section('content')
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary mb-5 mx-5" data-toggle="modal" data-target="#exampleModal">
        Buat Agenda <i class="fas fa-plus"></i>
    </button>
    <a href="{{ route('calendar.display') }}" class="btn btn-primary mb-5">
        Tampilan Kalender
    </a>

    <!-- create event Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="{{ route('calendar.store') }}" method="POST">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Agenda Baru</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="title">Judul</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                        </div>
                        <div class="form-group">
                            <label for="description">Deskripsi</label>
                            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="start_date">Tanggal Mulai</label>
                            <input type="date" class="form-control" id="start_date" name="start_date">
                        </div>
                        <div class="form-group">
                            <label for="start_date">Waktu Mulai</label>
                            <input type="time" class="form-control" id="start_date_time" name="start_date_time">
                        </div>
                        <div class="form-group">
                            <label for="end_date">Tanggal Selesai</label>
                            <input type="date" class="form-control" id="end_date" name="end_date">
                        </div>
                        <div class="form-group">
                            <label for="end_date">Waktu Selesai</label>
                            <input type="time" class="form-control" id="end_date_time" name="end_date_time">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- end create event Modal -->

    <div class="container h3 text-center text-primary">Daftar Agenda</div>
    <table class="table table-striped mx-5 text-dark">
        @foreach($event as $item)
            <tr>
                <td>
                    <h5>{{ $item->name }}</h5>
                    <p>{{ $item->description }}</p>
                    <p>{{ \Carbon\Carbon::parse($item->startDateTime)->format('d-m-Y g:i A') }} s/d {{ \Carbon\Carbon::parse($item->endDateTime)->format('d-m-Y g:i A') }}</p>
                </td>
                <td class="form-inline">
                    <button type="button" class="btn btn-primary text-end" data-toggle="modal" data-target="#update-modal">
                        <i class="fas fa-edit"></i>
                    </button>
                    
                    <button type="button" class="btn btn-danger text-left" data-toggle="modal" data-target="#delete-modal">
                        <i class="fas fa-trash"></i>
                    </button>
                </td>

                {{-- update modal --}}
                <div class="modal fade" id="update-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <form action="{{ route('calendar.update', $item->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Perbarui Agenda</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="title">Judul</label>
                                        <input type="text" class="form-control" id="title" name="title" value="{{ $item->name ?? null }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Deskripsi</label>
                                        <textarea class="form-control" id="description" name="description" rows="3">{{ $item->description ?? null }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="start_date">Tanggal Mulai</label>
                                        <input type="date" class="form-control" id="start_date" name="start_date" value="{{ $item->startDate ?? null }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="start_date">Waktu Mulai</label>
                                        <input type="time" class="form-control" id="start_date_time" name="start_date_time" value="{{ $item->startDateTime }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="end_date">Tanggal Berakhir</label>
                                        <input type="date" class="form-control" id="end_date" name="end_date" value="{{ $item->startDate ?? null }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="end_date">Waktu Berakhir</label>
                                        <input type="time" class="form-control" id="end_date_time" name="end_date_time" value="{{ $item->startDate ?? null }}">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                {{-- end update modal --}}

                {{-- delete modal --}}
                <div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Delete Event</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Apakah anda yakin ingin menghapus event ini?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <form action="{{ route('calendar.destroy', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Ya</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end of delete modal --}}
            </tr>
        @endforeach
    </table>
@endsection