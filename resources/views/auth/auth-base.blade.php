<!DOCTYPE html>
<html lang="en" dir="ltr" class="">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>{{ $title }} - Quixx {{ env('PARTY') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/x-icon" href="{{ asset('logo.png') }}" />

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('assets/css/style.css') }}" />

    @stack('style')
</head>

<body x-data="main" class="relative overflow-x-hidden font-nunito text-sm font-normal antialiased"
    :class="[$store.app.sidebar ? 'toggle-sidebar' : '', $store.app.theme === 'dark' || $store.app.isDarkMode ? 'dark' : '',
        $store.app.menu, $store.app.layout, $store.app.rtlClass
    ]">
    <!-- screen loader -->
    @include('template.sections.screen-loader')

    <!-- scroll to top button -->
    @include('template.sections.scroll-to-top')

    <div class="main-container min-h-screen text-black dark:text-white-dark">
        <div x-data="auth">
            <div class="absolute inset-0">
                <img src="{{ asset('assets/images/auth/bg-gradient.png') }}" alt="image"
                    class="h-full w-full object-cover" />
            </div>

            <div
                class="relative flex min-h-screen items-center justify-center bg-[url(../images/auth/map.png)] bg-cover bg-center bg-no-repeat px-6 py-10 dark:bg-[#060818] sm:px-16">
                <img src="{{ asset('assets/images/auth/coming-soon-object1.png') }}" alt="image"
                    class="absolute left-0 top-1/2 h-full max-h-[893px] -translate-y-1/2" />
                <img src="{{ asset('assets/images/auth/coming-soon-object2.png') }}" alt="image"
                    class="absolute left-24 top-0 h-40 md:left-[30%]" />
                <img src="{{ asset('assets/images/auth/coming-soon-object3.png') }}" alt="image"
                    class="absolute right-0 top-0 h-[300px]" />
                <img src="{{ asset('assets/images/auth/polygon-object.svg') }}" alt="image"
                    class="absolute bottom-0 end-[28%]" />
                <div
                    class="relative w-full max-w-[870px] rounded-md bg-[linear-gradient(45deg,#fff9f9_0%,rgba(255,255,255,0)_25%,rgba(255,255,255,0)_75%,_#fff9f9_100%)] p-2 dark:bg-[linear-gradient(52.22deg,#0E1726_0%,rgba(14,23,38,0)_18.66%,rgba(14,23,38,0)_51.04%,rgba(14,23,38,0)_80.07%,#0E1726_100%)]">
                    <div
                        class="relative flex flex-col justify-center rounded-md bg-white/60 backdrop-blur-lg dark:bg-black/50 px-6 lg:min-h-[758px] py-20">

                        <div class="mx-auto w-full max-w-[440px]">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery -->
    <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
    <!-- Simplebar -->
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <!-- Sweetalert -->
    <script defer src="{{ asset('assets/js/sweetalert.min.js') }}"></script>

    <script src="{{ asset('assets/js/alpine-collaspe.min.js') }}"></script>
    <script src="{{ asset('assets/js/alpine-persist.min.js') }}"></script>
    <script defer src="{{ asset('assets/js/alpine-ui.min.js') }}"></script>
    <script defer src="{{ asset('assets/js/alpine-focus.min.js') }}"></script>
    <script defer src="{{ asset('assets/js/alpine.min.js') }}"></script>

    <script src="{{ asset('assets/js/custom.js') }}"></script>

    @stack('script')

    <script>
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });

        // main section
        document.addEventListener('alpine:init', () => {
            Alpine.data('scrollToTop', () => ({
                showTopButton: false,
                init() {
                    window.onscroll = () => {
                        this.scrollFunction();
                    };
                },

                scrollFunction() {
                    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                        this.showTopButton = true;
                    } else {
                        this.showTopButton = false;
                    }
                },

                goToTop() {
                    document.body.scrollTop = 0;
                    document.documentElement.scrollTop = 0;
                },
            }));
        });
    </script>
</body>

</html>
