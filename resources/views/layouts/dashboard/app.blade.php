@include('layouts.dashboard.header')

<body id="page-top">
    <div id="wrapper">
        @include('layouts.dashboard.sidebar')
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('layouts.dashboard.navbar')
                <div class="container-fluid">
                    @yield('content')
                </div>
                @include('layouts.dashboard.footer')

            </div>
        </div>

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        @include('layouts.dashboard.script')
</body>

</html>