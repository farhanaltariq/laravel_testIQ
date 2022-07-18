@extends('layouts.dashboard.header')
<div class="container-fluid" style="margin-top: 300px">

    <!-- 404 Error Text -->
    <div class="text-center">
        <div class="error mx-auto" data-text="404">404</div>
        <p class="lead text-gray-800 mb-5">Page Not Found</p>
        <p class="text-gray-500 mb-0">It looks like you found a glitch in the matrix...</p>
        <a href="{{ URL::previous() }}">← Back</a>
    </div>

</div>
@extends('layouts.dashboard.script')
