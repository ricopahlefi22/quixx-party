<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    @include('template.sections.style')

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
   @include('template.sections.js')

    @stack('script')
</body>

</html>
