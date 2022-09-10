<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" type="text/css" href="{{ url('dash/app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <!-- font icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ url('dash/app-assets/fonts/icomoon.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ url('dash/app-assets/fonts/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('dash/app-assets/vendors/css/extensions/pace.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('dash/app-assets/vendors/css/ui/prism.min.css') }}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('dash/app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('dash/app-assets/css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('dash/app-assets/css/colors.css') }}">
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css"
        href="{{ url('dash/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ url('dash/app-assets/css/core/menu/menu-types/vertical-overlay-menu.css') }}">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('dash/assets/css/style.css') }}">
    <style>
        .btn-primary {
            border-color: #448aff;
            background-color: #448aff;
            color: #448aff;
        }

        .button {
            border-color: #448aff;
            background-color: #448aff;
            color: #448aff;
        }

        .btn-primary:hover {
            background-color: #448aff;
        }

        .main-menu.menu-dark .navigation>li ul .active {
            background: #4e6785;
            525868
        }

        .main-menu.menu-dark .navigation>li.active>a {
            background-color: #4e6785;
        }

        .main-menu.menu-dark .navigation>li.open>a {
            color: #c3c3c3;
            background: #2f5d91;
        }

        span.menu-title {
            color: rgb(255, 255, 255)
        }
    </style>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body data-open="click" data-menu="vertical-menu"
    data-col="2-columns"class="vertical-layout vertical-menu 2-columns  fixed-navbar">

    @include('layouts.inc.navbar')
    @include('layouts.inc.sidebar')
    @yield('content')
    @include('layouts.inc.footer')


    <script src="{{ url('dash/app-assets/js/core/libraries/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('dash/app-assets/vendors/js/ui/tether.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('dash/app-assets/js/core/libraries/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('dash/app-assets/vendors/js/ui/perfect-scrollbar.jquery.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ url('dash/app-assets/vendors/js/ui/unison.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('dash/app-assets/vendors/js/ui/blockUI.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('dash/app-assets/vendors/js/ui/jquery.matchHeight-min.js') }}" type="text/javascript"></script>
    <script src="{{ url('dash/app-assets/vendors/js/ui/screenfull.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('dash/app-assets/vendors/js/extensions/pace.min.js') }}" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script type="text/javascript" src="{{ url('dash/app-assets/vendors/js/ui/prism.min.js') }}"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="{{ url('dash/app-assets/js/core/app-menu.js') }}" type="text/javascript"></script>
    <script src="{{ url('dash/app-assets/js/core/app.js') }}" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script>
        //toastr notifications
        setTimeout(function() {
            toastr.options = {
                closeButton: true,
                progressBar: true,
                showMethod: 'slideDown',
                timeOut: 5000
            };
            @if (!is_null(Session::get('success')))
                toastr.success('{!! Session::get('success') !!}',
                    'Success');
            @endif
            @if (!is_null(Session::get('error')))
                toastr.error('{!! Session::get('error') !!}',
                    'Error !!');
            @endif
            @if (count($errors) > 0)
                @foreach ($errors->all() as $error)
                    toastr.error('{!! $error !!}', 'Validation error !!');
                @endforeach
            @endif
            @if (!is_null(Session::get('info')))
                toastr.info('{!! Session::get('info') !!}',
                    'Info');
            @endif
        }, 800);
    </script>







    <script src="{{ asset('backend/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/node-waves/waves.min.js') }}"></script>
    <!-- apexcharts -->
    <script src="{{ asset('backend/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <!-- jquery.vectormap map -->
    <script src="{{ asset('backend/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}">
    </script>
    <script src="{{ asset('backend/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js') }}">
    </script>

    <!-- Responsive examples -->
    <script src="{{ asset('backend/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}">
    </script>
    <script src="{{ asset('backend/assets/js/pages/dashboard.init.js') }}"></script>
    <!-- App js -->
    <script src="{{ asset('backend/assets/js/app.js') }}"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    {{-- <script src="{{ asset('backend/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script> --}}
    <!-- Datatable init js -->
    <script src="{{ asset('backend/assets/js/pages/datatables.init.js') }}"></script>

    <script src="{{ asset('backend/assets/js/validate.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script src="{{ asset('backend/assets/js/code.js') }}"></script>


    <script src="{{ asset('backend/assets/js/handlebars.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>

    <!--  For Select2 -->
    <script src="{{ asset('backend/assets/libs/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/pages/form-advanced.init.js') }}"></script>
</body>

</html>
