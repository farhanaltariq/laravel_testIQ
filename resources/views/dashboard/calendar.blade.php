@include('layouts.dashboard.header')
<body id="page-top">
    <div id="wrapper">
        @include('layouts.dashboard.sidebar')
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('layouts.dashboard.navbar')
                <div class="container">
                    
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
                    {{-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> --}}
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>

                    <div class="panel panel-secondary">
                        <div class="panel-body" >
                            {!! $calendar->calendar() !!}
                            {!! $calendar->script() !!}
                        </div>
                    </div>

                </div>
                @include('layouts.dashboard.footer')

            </div>
        </div>

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        {{-- <script src="{{ asset('sb_ui') }}/vendor/jquery/jquery.min.js"></script> --}}
        <script src="{{ asset('sb_ui') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('sb_ui') }}/vendor/jquery-easing/jquery.easing.min.js"></script>

        {{-- @include('layouts.dashboard.script') --}}
</body>

</html>