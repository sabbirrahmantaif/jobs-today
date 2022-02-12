<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Jobs Today @yield('title')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.png') }}">

    <!-- page css -->
    <link rel="stylesheet" href="{{ asset('assets\vendors\datatables\dataTables.bootstrap.min.css') }}">

    <!-- Core css -->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet">
    @yield('css')
</head>

<body>
    <div class="app">
        @yield('contents')
    </div>

    <!-- Core Vendors JS -->
    <script src="{{asset('assets/js/vendors.min.js')}}"></script>

    <!-- page js -->
    <script src="{{asset('assets/vendors/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/vendors/datatables/dataTables.bootstrap.min.js')}}"></script>
    <script>
        $('#data-table').DataTable();
    </script>

    <!-- Core JS -->
    <script src="{{asset('assets/js/app.min.js')}}"></script>
</body>

</html>
