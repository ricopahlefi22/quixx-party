<!DOCTYPE html>
<html lang="en" dir="ltr" class="">

<head>
    <meta charset="utf-8" />
    <title>{{ $title }} - Quixx {{ env('PARTY') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta content="Tailwind Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="Mannatthemes" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" />


    <link rel="stylesheet" href="{{ asset('assets/css/icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/tailwind.css') }}" />

</head>

<body data-layout-mode="light"
    class="bg-gray-100 dark:bg-gray-900 bg-[url('../images/bg-body.png')] dark:bg-[url('../images/bg-body-2.png')]">
    <!-- leftbar-tab-menu -->
    @include('template.sections.header')

    <div class="container mx-auto px-2  min-h-[calc(100vh-138px)]  relative pb-14">
        @yield('content')

        @include('template.sections.footer')
    </div><!--end container-->


    <!-- Jquery -->
    <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>

    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/chart.js/chart.min.js') }}"></script>
    <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/libs/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/analytics-index.init.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>

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
</body>

</html>
