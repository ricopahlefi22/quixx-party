<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>{{ $title }} - Quixx {{ env('PARTY') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/x-icon" href="{{ asset('logo.png') }}" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('assets/css/perfect-scrollbar.min.css') }}" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('assets/css/style.css') }}" />
    <link defer rel="stylesheet" type="text/css" media="screen" href="{{ asset('assets/css/animate.css') }}" />

    <script src="{{ asset('assets/js/perfect-scrollbar.min.js') }}"></script>
    <script defer src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script defer src="{{ asset('assets/js/tippy-bundle.umd.min.js') }}"></script>
    <script defer src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
</head>

<body x-data="main" class="relative overflow-x-hidden font-nunito text-sm font-normal antialiased"
    :class="[$store.app.sidebar ? 'toggle-sidebar' : '', $store.app.theme === 'dark' || $store.app.isDarkMode ? 'dark' : '',
        $store.app.menu, $store.app.layout, $store.app.rtlClass
    ]">
    <!-- sidebar menu overlay -->
    <div x-cloak class="fixed inset-0 z-50 bg-[black]/60 lg:hidden" :class="{ 'hidden': !$store.app.sidebar }"
        @click="$store.app.toggleSidebar()"></div>

    <!-- screen loader -->
    @include('template.sections.screen-loader')

    <!-- scroll to top button -->
    @include('template.sections.scroll-to-top')

    <!-- start theme customizer section -->
    @include('template.sections.customizer')
    <!-- end theme customizer section -->

    <div class="main-container min-h-screen text-black dark:text-white-dark" :class="[$store.app.navbar]">
        <!-- start sidebar section -->
        @include('template.sections.sidebar')
        <!-- end sidebar section -->

        <div class="main-content flex flex-col min-h-screen">
            <!-- start header section -->
            @include('template.sections.header')
            <!-- end header section -->

            <div class="animate__animated p-6" :class="[$store.app.animation]">
                <!-- start main content section -->
                @yield('content')
                <!-- end main content section -->
            </div>

            <!-- start footer section -->
            @include('template.sections.footer')
            <!-- end footer section -->
        </div>
    </div>

    <!-- Jquery -->
    <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>

    <script src="{{ asset('assets/js/highlight.min.js') }}"></script>
    <script src="{{ asset('assets/js/alpine-collaspe.min.js') }}"></script>
    <script src="{{ asset('assets/js/alpine-persist.min.js') }}"></script>
    <script defer src="{{ asset('assets/js/alpine-ui.min.js') }}"></script>
    <script defer src="{{ asset('assets/js/alpine-focus.min.js') }}"></script>
    <script defer src="{{ asset('assets/js/alpine.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <script>
        document.addEventListener('alpine:init', () => {
            // main section
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

            // theme customization
            Alpine.data('customizer', () => ({
                showCustomizer: false,
            }));

            // sidebar section
            Alpine.data('sidebar', () => ({
                init() {
                    const selector = document.querySelector('.sidebar ul a[href="' + window.location
                        .pathname + '"]');
                    if (selector) {
                        selector.classList.add('active');
                        const ul = selector.closest('ul.sub-menu');
                        if (ul) {
                            let ele = ul.closest('li.menu').querySelectorAll('.nav-link');
                            if (ele) {
                                ele = ele[0];
                                setTimeout(() => {
                                    ele.click();
                                });
                            }
                        }
                    }
                },
            }));

            // header section
            Alpine.data('header', () => ({
                init() {
                    const selector = document.querySelector('ul.horizontal-menu a[href="' + window
                        .location.pathname + '"]');
                    if (selector) {
                        selector.classList.add('active');
                        const ul = selector.closest('ul.sub-menu');
                        if (ul) {
                            let ele = ul.closest('li.menu').querySelectorAll('.nav-link');
                            if (ele) {
                                ele = ele[0];
                                setTimeout(() => {
                                    ele.classList.add('active');
                                });
                            }
                        }
                    }
                },

                notifications: [{
                        id: 1,
                        profile: 'user-profile.jpeg',
                        message: '<strong class="text-sm mr-1">John Doe</strong>invite you to <strong>Prototyping</strong>',
                        time: '45 min ago',
                    },
                    {
                        id: 2,
                        profile: 'profile-34.jpeg',
                        message: '<strong class="text-sm mr-1">Adam Nolan</strong>mentioned you to <strong>UX Basics</strong>',
                        time: '9h Ago',
                    },
                    {
                        id: 3,
                        profile: 'profile-16.jpeg',
                        message: '<strong class="text-sm mr-1">Anna Morgan</strong>Upload a file',
                        time: '9h Ago',
                    },
                ],

                removeNotification(value) {
                    this.notifications = this.notifications.filter((d) => d.id !== value);
                },

                removeMessage(value) {
                    this.messages = this.messages.filter((d) => d.id !== value);
                },
            }));
        });
    </script>

    @stack('script')
</body>

</html>
