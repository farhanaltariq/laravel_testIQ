@extends('layouts.dashboard.app')
@section('content')
    <style>
        iframe{
            width: 90%;
            height: 80vh;
            margin-inline: 5%;
        }
    </style>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary mb-5 mx-5" data-toggle="modal" data-target="#exampleModal">
        Buat Agenda <i class="fas fa-plus"></i>
    </button>
    <a href="{{ route('calendar.index') }}" class="btn btn-primary mb-5">
        Tampilan Agenda
    </a>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="{{ route('calendar.store') }}" method="POST">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New Event</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="start_date">Start Date</label>
                            <input type="date" class="form-control" id="start_date" name="start_date">
                        </div>
                        <div class="form-group">
                            <label for="start_date">Start Time</label>
                            <input type="time" class="form-control" id="start_date_time" name="start_date">
                        </div>
                        <div class="form-group">
                            <label for="end_date">End Date</label>
                            <input type="date" class="form-control" id="end_date" name="end_date">
                        </div>
                        <div class="form-group">
                            <label for="end_date">End Time</label>
                            <input type="time" class="form-control" id="end_date_time" name="end_date">
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

    <iframe src="https://calendar.google.com/calendar/embed?src=8knisahfptklqujfkigjle7tos%40group.calendar.google.com&ctz=Asia%2FJakarta" style="border: 1" width="600" height="600" frameborder="0" scrolling="no"></iframe>
@endsection