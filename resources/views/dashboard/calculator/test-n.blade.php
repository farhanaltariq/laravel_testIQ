@extends('layouts.dashboard.app')

@section('title', 'Dashboard')

@section('content')
        <div class="form-inline">
            {{-- upload excel --}}
            <div class="form-group mr-2">
                <label for="file">Upload Excel</label>
                <input type="file" class="form-control-file" id="file" name="file">

                <button type="submit" class="btn btn-primary">Hitung</button>
            </div>
            
        </div>
@endsection