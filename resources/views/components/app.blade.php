<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quixx</title>
    <link rel="stylesheet" href="{{ asset('template/node_modules/bootstrap-icons/font/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/plugins/data-table/datatable-bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/css/output.css') }}">
</head>

<body class="app-screen">

    <!-- Sidebar -->
    <x-layout.sidebar />
    <!-- End Sidebar -->

    <section class="content">

        <!-- Navbar -->
        <x-layout.navbar />
        <!-- End Navbar -->

        <section class="content-container">
            {{ $slot }}
        </section>
    </section>


    <script src="{{ asset('template/assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('template/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('template/assets/plugins/feather-icons/dist/feather.min.js') }}"></script>
    <script src="{{ asset('template/assets/plugins/data-table/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('template/assets/plugins/data-table/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('template/assets/js/app.js') }}"></script>
    <script src="{{ asset('template/assets/js/table.js') }}"></script>
</body>

</html>