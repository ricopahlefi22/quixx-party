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
    <div class="container mx-auto px-2  min-h-[calc(100vh-138px)]  relative pb-14">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 my-4">
            <div class="md:row-span-1 lg:row-span-1 xl:row-span-2 md:col-span-2 lg:col-span-2 xl:col-span-1  ">
                <div
                    class="h-full bg-white dark:bg-slate-800 shadow rounded-md w-full p-4 relative overflow-hidden grid md:gap-4 lg:gap-2 xl:gap-4 md:grid-cols-1 lg:grid-cols-4">
                    <div class="md:col-span-4 lg:col-span-2 xl:col-span-4 self-center">
                        <h3
                            class="text-slate-800 dark:text-slate-200 text-center text-2xl md:text-2xl lg:text-lg xl:text-2xl font-bold leading-8 py-2 md:py-2 lg:py-1 xl:py-2">
                            Selamat Datang!
                        </h3>
                        <div
                            class="text-center text-slate-400 text-base md:text-base lg:text-sm xl:text-base font-medium py-3">
                            Hubungi Kami Jika Anda Mengalami Kendala Dalam Penggunaan Sistem.
                        </div>
                        <div class="text-center py-3 md:mb-3 lg:mb-0 xl:mb-3">
                            <a href="https://wa.me/085171121070" target="_blank"
                                class="px-3 py-2 lg:px-4 bg-green-500 text-white text-sm font-semibold rounded hover:bg-blue-600">
                                <i class="ti ti-brand-whatsapp"></i> Hubungi
                            </a>
                        </div>
                    </div>
                    <div class="md:col-span-4 lg:col-span-2 xl:col-span-4 block dark:hidden">
                        <img src="assets/images/widgets/user.png" alt="" class="px-3 mb-2 w-60 mx-auto">
                    </div>
                    <div class="md:col-span-4 lg:col-span-2 xl:col-span-4 hidden dark:block">
                        <img src="assets/images/widgets/user-light.png" alt="" class="px-3 mb-2 w-60 mx-auto">
                    </div>
                </div> <!--end inner-grid-->
            </div>
            <div class="sm:col-span-3 md:col-span-2 lg:col-span-2 xl:col-span-3">
                <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div class="md:col-span-2 lg:col-span-2 xl:col-span-1">
                        <div
                            class="bg-white dark:bg-slate-800 shadow  rounded-md w-full p-4 relative overflow-hidden bg-[url('../images/widgets/p-1.png')] bg-no-repeat bg-contain">
                            <div class="flex justify-between xl:gap-x-2 items-cente">
                                <div
                                    class="absolute -left-6 -top-4 text-blue-500 p-3 text-center inline-flex items-center justify-center w-32 h-32 ">
                                    <i class="ti ti-users text-3xl"></i>
                                </div>
                                <div class="self-center ml-auto">
                                    <h3 class="my-1 font-semibold text-2xl dark:text-slate-200">
                                        {{ $voting_result_count }}</h3>
                                    <p class="text-gray-400 mb-0 font-medium">Suara Partai</p>
                                </div>
                            </div>
                        </div> <!--end inner-grid-->
                    </div>
                    <div class="md:col-span-2 lg:col-span-2 xl:col-span-1">
                        <div
                            class="bg-white dark:bg-slate-800 shadow  rounded-md w-full p-4 relative overflow-hidden bg-[url('../images/widgets/p-1.png')] bg-no-repeat bg-contain">
                            <div class="flex justify-between xl:gap-x-2 items-cente">
                                <div
                                    class="absolute -left-6 -top-4 text-blue-500 p-3 text-center inline-flex items-center justify-center w-32 h-32 ">
                                    <i class="ti ti-clock text-3xl"></i>
                                </div>
                                <div class="self-center ml-auto">
                                    <h3 class="my-1 font-semibold text-2xl dark:text-slate-200">{{ $district_count }}
                                    </h3>
                                    <p class="text-gray-400 mb-0 font-medium">Jumlah Kecamatan</p>
                                </div>
                            </div>
                        </div> <!--end inner-grid-->
                    </div>
                    <div class="md:col-span-2 lg:col-span-2 xl:col-span-1">
                        <div
                            class="bg-white dark:bg-slate-800 shadow  rounded-md w-full p-4 relative overflow-hidden bg-[url('../images/widgets/p-1.png')] bg-no-repeat bg-contain">
                            <div class="flex justify-between xl:gap-x-2 items-cente">
                                <div
                                    class="absolute -left-6 -top-4 text-blue-500 p-3 text-center inline-flex items-center justify-center w-32 h-32 ">
                                    <i class="ti ti-activity text-3xl"></i>
                                </div>
                                <div class="self-center ml-auto">
                                    <h3 class="my-1 font-semibold text-2xl dark:text-slate-200">{{ $village_count }}
                                    </h3>
                                    <p class="text-gray-400 mb-0 font-medium">Jumlah Desa</p>
                                </div>
                            </div>
                        </div> <!--end inner-grid-->
                    </div>
                    <div class="md:col-span-2 lg:col-span-2 xl:col-span-1">
                        <div
                            class="bg-white dark:bg-slate-800 shadow rounded-md w-full p-4 relative overflow-hidden bg-[url('../images/widgets/p-1.png')] bg-no-repeat bg-contain">
                            <div class="flex justify-between xl:gap-x-2 items-cente">
                                <div
                                    class="absolute -left-6 -top-4 text-blue-500 p-3 text-center inline-flex items-center justify-center w-32 h-32 ">
                                    <i class="ti ti-confetti text-3xl"></i>
                                </div>
                                <div class="self-center ml-auto">
                                    <h3 class="my-1 font-semibold text-2xl dark:text-slate-200">
                                        {{ $voting_place_count }}</h3>
                                    <p class="text-gray-400 mb-0 font-medium">Jumlah TPS</p>
                                </div>
                            </div>
                        </div> <!--end inner-grid-->
                    </div>
                </div>
            </div>
            <div class="md:col-span-4 lg:col-span-4 xl:col-span-3">
                <div class="bg-white dark:bg-slate-800 shadow rounded-md h-full w-full p-4 relative overflow-hidden ">
                    <div class="chart-container">
                        <canvas id="bar" height="290"></canvas>
                    </div>
                </div> <!--end inner-grid-->
            </div>
            <div class="md:col-span-4 lg:col-span-4 xl:col-span-3">
                <div class="bg-white dark:bg-slate-800 shadow rounded-md h-full w-full p-4 relative overflow-hidden ">
                    <div class="chart-container">
                        <canvas id="bar" height="290"></canvas>
                    </div>
                </div> <!--end inner-grid-->
            </div>
        </div>
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
