<!DOCTYPE html>
<html lang="en" dir="ltr" class="">

<head>
    <meta charset="utf-8" />
    <title>{{ $title }} - Quixx {{ env('PARTY') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/tailwind.css') }}" />
</head>

<body data-layout-mode="light"
    class="bg-gray-100 dark:bg-gray-900 bg-[url('../images/bg-body.png')] dark:bg-[url('../images/bg-body-2.png')]">
    <div class="relative flex flex-col justify-center min-h-screen overflow-hidden">
        <div
            class="w-full m-auto bg-white dark:bg-slate-800/60 rounded shadow-lg ring-2 ring-slate-300/50 dark:ring-slate-700/50 lg:max-w-md">
            @yield('content')
        </div>
    </div>


    <!-- Jquery -->
    <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>

    <!-- Simplebar -->
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>

    <!-- Simplebar -->
    <script src="{{ asset('assets/libs/sweetalert2/sweetalert2.all.min.js') }}"></script>

    <!-- Shortcut -->
    <script type="text/javascript" src="{{ asset('assets/js/shortcut.js') }}"></script>

    <script>
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });

        var isDarkMode = localStorage.getItem("darkMode") === "enabled";

        shortcut.add("shift+d", function() {
            document.documentElement.classList.toggle("dark");
            isDarkMode = document.documentElement.classList.contains("dark");

            localStorage.setItem("darkMode", isDarkMode ? "enabled" : "disabled");
        });

        if (isDarkMode) {
            document.documentElement.classList.add("dark");
        }
    </script>

    @stack('script')
</body>

</html>
