<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta19
* @link https://tabler.io
* Copyright 2018-2023 The Tabler Authors
* Copyright 2018-2023 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">

<head>
    @include('templates.partials.head')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <script src="{{ asset ('dist/js/demo-theme.min.js') }}"></script>

    <div class="page">
        <!-- Sidebar -->
        @include('templates.partials.sidebar')
        <!-- End Sidebar -->
        <br><br>
        <div class="page-wrapper">

            <!-- Page header -->
            <div class="page-header d-print-none">
                <div class="container-xl">
                    <div class="row g-2 align-items-center">
                        <div class="col">
                            <!-- Page pre-title -->
                            <div class="page-pretitle">
                                {{ $preTitle ?? 'Dashboard'}}
                            </div>
                            <h2 class="page-title">
                                {{ $title ?? 'Raw Herbal Tisane'}}
                            </h2>
                        </div>
                        <!-- Page title actions -->
                        <div class="col-auto ms-auto d-print-none">
                            <!-- stack booking tempat -->
                            @stack('page-action')
                        </div>
                    </div>
                </div>
            </div>
            <!-- End page header -->

            <!-- Page body -->
            <div class="page-body">
                <div class="container-xl">
                    @include('templates.partials.alert')

                    @yield('content')
                </div>
            </div>
            <!-- End page body -->

            <!-- Footer -->
            @include('templates.partials.footer')
            <!-- End footer -->

        </div>
    </div>

    <!-- Script -->
    @include('templates.partials.scripts')
    <!-- End script -->

</body>

</html>