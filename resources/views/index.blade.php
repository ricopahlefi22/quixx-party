<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Simple - Tailwind HTML Admin Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta
        content="Simple - Tailwind HTML Admin Dashboard Template, A fully featured admin theme which can be used to build CRM, CMS, etc."
        name="description">
    <meta content="coderthemes" name="author">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <script src="{{ asset('assets/js/head.js') }}" type="module"></script>
</head>

<body>

    <div class="wrapper">
        <!-- Sidenav Menu Start  -->
        <div class="app-menu">
            <!-- Sidenav Brand Logo -->
            <a href="index.html" class="logo-box">
                <!-- Light Brand Logo -->
                <div class="logo-light">
                    <img src="assets/images/logo-light.png" class="logo-lg" alt="Light logo">
                    <img src="assets/images/logo-sm.png" class="logo-sm" alt="Small logo">
                </div>

                <!-- Dark Brand Logo -->
                <div class="logo-dark">
                    <img src="assets/images/logo-dark.png" class="logo-lg" alt="Dark logo">
                    <img src="assets/images/logo-sm.png" class="logo-sm" alt="Small logo">
                </div>
            </a>

            <!--- Menu -->
            <div data-simplebar>
                <!-- User Box -->
                <div class="relative flex flex-wrap items-center justify-center gap-3 mt-5 px-[25px] py-2.5 user-box">
                    <img src="assets/images/users/avatar-1.jpg" alt="user-image" class="h-12 w-12 rounded-full">
                    <div class="user-text">
                        <a href="#" class="font-semibold mb-1">Stanley Jones</a>
                        <p class="text-xs">Administrator</p>
                    </div>
                </div>

                <ul class="menu" data-hs-collapse="accordion">
                    <li class="menu-title">Navigation</li>

                    <li class="menu-item">
                        <a href="index.html" class="menu-link">
                            <i data-lucide="home" class="menu-icon"></i>
                            <span class="menu-text"> Dashboard </span>
                        </a>
                    </li>

                    <li class="menu-title">Apps</li>

                    <li class="menu-item">
                        <a href="extras-calendar.html" class="menu-link">
                            <i data-lucide="calendar" class="menu-icon"></i>
                            <span class="menu-text"> Calender </span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="extras-contacts.html" class="menu-link">
                            <i data-lucide="users" class="menu-icon"></i>
                            <span class="menu-text"> Contacts </span>
                        </a>
                    </li>


                    <li class="menu-item">
                        <a href="extras-invoice.html" class="menu-link">
                            <i data-lucide="file-text" class="menu-icon"></i>
                            <span class="menu-text"> Invoice </span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="extras-profile.html" class="menu-link">
                            <i data-lucide="user-circle" class="menu-icon"></i>
                            <span class="menu-text">User Profile</span>
                        </a>
                    </li>

                    <li class="menu-title">Components</li>

                    <li class="menu-item">
                        <a href="ui-elements.html" class="menu-link">
                            <i data-lucide="paint-bucket" class="menu-icon"></i>
                            <span class="menu-text"> UI Elements </span>
                            <span class="badge bg-primary text-white rounded">11</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0)" class="menu-link" data-hs-collapse="#menuComponents">
                            <i data-lucide="lightbulb" class="menu-icon"></i>
                            <span class="menu-text"> Components </span>
                            <span class="menu-arrow"></span>
                        </a>

                        <ul class="sub-menu hidden" id="menuComponents">
                            <li class="menu-item">
                                <a href="components-range-slider.html" class="menu-link">
                                    <span class="menu-text">Range Slider</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="components-alerts.html" class="menu-link">
                                    <span class="menu-text">Alerts</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="components-icons.html" class="menu-link">
                                    <span class="menu-text">Icons</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="components-widgets.html" class="menu-link">
                                    <span class="menu-text">Widgets</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item">
                        <a href="typography.html" class="menu-link">
                            <i data-lucide="spray-can" class="menu-icon"></i>
                            <span class="menu-text"> Typography </span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0)" class="menu-link" data-hs-collapse="#menuForms">
                            <i data-lucide="pencil-line" class="menu-icon"></i>
                            <span class="menu-text"> Forms </span>
                            <span class="menu-arrow"></span>
                        </a>

                        <ul class="sub-menu hidden" id="menuForms">
                            <li class="menu-item">
                                <a href="forms-general.html" class="menu-link">
                                    <span class="menu-text">General Elements</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="forms-advanced.html" class="menu-link">
                                    <span class="menu-text">Advanced Form</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0)" class="menu-link" data-hs-collapse="#menuTables">
                            <i data-lucide="menu" class="menu-icon"></i>
                            <span class="menu-text"> Tables </span>
                            <span class="menu-arrow"></span>
                        </a>

                        <ul class="sub-menu hidden" id="menuTables">
                            <li class="menu-item">
                                <a href="tables-basic.html" class="menu-link">
                                    <span class="menu-text">Basic Tables</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="tables-advanced.html" class="menu-link">
                                    <span class="menu-text">Advanced Tables</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item">
                        <a href="charts.html" class="menu-link">
                            <i data-lucide="pie-chart" class="menu-icon"></i>
                            <span class="menu-text"> Charts </span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="maps.html" class="menu-link">
                            <i data-lucide="map-pin" class="menu-icon"></i>
                            <span class="menu-text"> Maps </span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0)" class="menu-link" data-hs-collapse="#menuPages">
                            <i data-lucide="files" class="menu-icon"></i>
                            <span class="menu-text"> Pages </span>
                            <span class="menu-arrow"></span>
                        </a>

                        <ul class="sub-menu hidden" id="menuPages">
                            <li class="menu-item">
                                <a href="pages-login.html" class="menu-link">
                                    <span class="menu-text">Login</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="pages-register.html" class="menu-link">
                                    <span class="menu-text">Register</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="pages-forget-password.html" class="menu-link">
                                    <span class="menu-text">Forget Password</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="pages-lock-screen.html" class="menu-link">
                                    <span class="menu-text">Lock-screen</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="pages-blank.html" class="menu-link">
                                    <span class="menu-text">Blank page</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="pages-404.html" class="menu-link">
                                    <span class="menu-text">Error 404</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="pages-confirm-mail.html" class="menu-link">
                                    <span class="menu-text">Confirm Mail</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="pages-session-expired.html" class="menu-link">
                                    <span class="menu-text">Session Expired</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0)" class="menu-link" data-hs-collapse="#menuExtraPages">
                            <i data-lucide="target" class="menu-icon"></i>
                            <span class="menu-text"> Extra Pages </span>
                            <span class="menu-arrow"></span>
                        </a>

                        <ul class="sub-menu hidden" id="menuExtraPages">
                            <li class="menu-item">
                                <a href="extras-timeline.html" class="menu-link">
                                    <span class="menu-text">Timeline</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="extras-faqs.html" class="menu-link">
                                    <span class="menu-text">FAQs</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="extras-pricing.html" class="menu-link">
                                    <span class="menu-text">Pricing</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0)" class="menu-link" data-hs-collapse="#menuLayouts">
                            <i data-lucide="layout" class="menu-icon"></i>
                            <span class="menu-text"> Layouts </span>
                            <span class="badge bg-danger text-white rounded-full">New</span>
                        </a>

                        <ul class="sub-menu hidden" id="menuLayouts">
                            <li class="menu-item">
                                <a href="layouts-dark-sidebar.html" target="_blank" class="menu-link">
                                    <span class="menu-text">Dark Sidebar</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="layouts-brand-sidebar.html" target="_blank" class="menu-link">
                                    <span class="menu-text">Brand Sidebar</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="layouts-small-sidebar.html" target="_blank" class="menu-link">
                                    <span class="menu-text">Small Sidebar</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="layouts-compact-sidebar.html" target="_blank" class="menu-link">
                                    <span class="menu-text">Compact Sidebar</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="layouts-mobile-sidebar.html" target="_blank" class="menu-link">
                                    <span class="menu-text">Mobile Sidebar</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="layouts-hidden-sidebar.html" target="_blank" class="menu-link">
                                    <span class="menu-text">Hidden Sidebar</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0)" data-hs-collapse="#menuDemoItem" class="menu-link">
                            <i data-lucide="share-2" class="menu-icon"></i>
                            <span class="menu-text">Demo Item </span>
                            <span class="menu-arrow"></span>
                        </a>

                        <ul id="menuDemoItem" class="sub-menu hidden">
                            <li class="menu-item">
                                <a href="javascript: void(0)" class="menu-link">
                                    <span class="menu-text">Item 1</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="javascript: void(0)" class="menu-link">
                                    <span class="menu-text">Item 2</span>
                                    <span class="badge bg-info rounded">New</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Sidenav Menu End  -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="page-content bg-white dark:bg-slate-700">

            <!-- Topbar Start -->
            <header class="app-header">
                <div class="flex items-center px-3 gap-3">
                    <!-- Brand Logo -->
                    <a href="index.html" class="logo-box">
                        <!-- Light Brand Logo -->
                        <div class="logo-light">
                            <img src="assets/images/logo-light.png" class="logo-lg" alt="Light logo">
                            <img src="assets/images/logo-sm.png" class="logo-sm" alt="Small logo">
                        </div>

                        <!-- Dark Brand Logo -->
                        <div class="logo-dark">
                            <img src="assets/images/logo-dark.png" class="logo-lg" alt="Dark logo">
                            <img src="assets/images/logo-sm.png" class="logo-sm" alt="Small logo">
                        </div>
                    </a>

                    <!-- Sidenav Menu Toggle Button -->
                    <button id="button-toggle-menu" class="nav-link p-2">
                        <span class="sr-only">Menu Toggle Button</span>
                        <span class="flex items-center justify-center h-6 w-6">
                            <i data-lucide="menu" class="w-6 h-6 text-xl"></i>
                        </span>
                    </button>

                    <!-- Topbar Search Input -->
                    <div class="me-auto">
                        <div class="md:flex hidden items-center relative">
                            <div class="absolute inset-y-0 end-3 flex items-center pointer-events-none">
                                <i class="mdi mdi-magnify text-base text-slate-500 z-10"></i>
                            </div>
                            <input type="search"
                                class="form-input pe-8 ps-4 rounded-full bg-white border-transparent focus:border-transparent placeholder:opacity-60"
                                placeholder="Search...">
                        </div>
                    </div>

                    <!-- Language -->
                    <div class="md:flex hidden">
                        <div class="hs-dropdown relative inline-flex [--placement:bottom-right]">
                            <button id="hs-dropdown-default" type="button"
                                class="hs-dropdown-toggle nav-link flex items-center">
                                <img src="assets/images/flags/us.jpg" alt="user-image" class="h-4 w-6 me-2">
                                English
                                <i class="mdi mdi-chevron-down ms-2"></i>
                            </button>

                            <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] hs-dropdown-open:opacity-100 opacity-0 hidden z-10 mt-2 min-w-[10rem] bg-white dark:bg-slate-700 border border-gray-200 dark:border-slate-500/70 shadow-md rounded py-2"
                                aria-labelledby="hs-dropdown-default">
                                <a class="flex items-center gap-x-3.5 py-2 px-5 text-sm hover:bg-gray-100 dark:hover:bg-slate-500/30"
                                    href="#">
                                    <img src="assets/images/flags/germany.jpg" alt="user-image" class="h-4">
                                    <span class="align-middle">German</span>
                                </a>
                                <a class="flex items-center gap-x-3.5 py-2 px-5 text-sm hover:bg-gray-100 dark:hover:bg-slate-500/30"
                                    href="#">
                                    <img src="assets/images/flags/italy.jpg" alt="user-image" class="h-4">
                                    <span class="align-middle">Italian</span>
                                </a>
                                <a class="flex items-center gap-x-3.5 py-2 px-5 text-sm hover:bg-gray-100 dark:hover:bg-slate-500/30"
                                    href="#">
                                    <img src="assets/images/flags/spain.jpg" alt="user-image" class="h-4">
                                    <span class="align-middle">Spanish</span>
                                </a>
                                <a class="flex items-center gap-x-3.5 py-2 px-5 text-sm hover:bg-gray-100 dark:hover:bg-slate-500/30"
                                    href="#">
                                    <img src="assets/images/flags/russia.jpg" alt="user-image" class="h-4">
                                    <span class="align-middle">Russian</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Light/Dark Toggle Button -->
                    <div class="flex">
                        <button id="light-dark-mode" type="button" class="nav-link p-2">
                            <span class="sr-only">Light/Dark Mode</span>
                            <span class="flex items-center justify-center h-6 w-6">
                                <i data-lucide="moon" class="block dark:hidden"></i>
                                <i data-lucide="sun" class="hidden dark:block"></i>
                            </span>
                        </button>
                    </div>

                    <!-- Notification Bell Button -->
                    <div class="hs-dropdown relative inline-flex">
                        <button id="hs-dropdown-default" type="button" class="hs-dropdown-toggle nav-link p-2">
                            <span class="sr-only">View notifications</span>
                            <span class="flex items-center justify-center h-6 w-6">
                                <i data-lucide="bell"></i>
                                <span
                                    class="absolute top-3 end-1.5 w-4 h-4 flex items-center justify-center rounded-full bg-danger text-white font-medium text-[10px]">4</span>
                            </span>
                        </button>

                        <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] hs-dropdown-open:opacity-100 opacity-0 hidden z-10 mt-2 w-96 min-w-[10rem] bg-white dark:bg-slate-700 border border-gray-200 dark:border-slate-500/70 shadow-md rounded py-2"
                            aria-labelledby="hs-dropdown-default">
                            <div class="p-4">
                                <div class="flex items-center justify-between">
                                    <h6 class="text-sm"> Notification</h6>
                                    <a href="javascript: void(0);" class="text-gray-500">
                                        <small>Clear All</small>
                                    </a>
                                </div>
                            </div>

                            <div class="p-4 h-80" data-simplebar>
                                <h5 class="text-xs text-gray-500 dark:text-gray-300 mb-2">Today</h5>

                                <a href="javascript:void(0);" class="block mb-4">
                                    <div class="card-body">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0">
                                                <div
                                                    class="flex justify-center items-center h-9 w-9 rounded-full bg text-white bg-primary">
                                                    <i class="mdi mdi-comment-account-outline text-lg"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow truncate ms-2">
                                                <h5 class="text-sm font-semibold mb-1">Datacorp <small
                                                        class="font-normal text-gray-500 ms-1">1 min ago</small></h5>
                                                <small class="noti-item-subtitle text-gray-400">Caleb Flakelar
                                                    commented on Admin</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript:void(0);" class="block mb-4">
                                    <div class="card-body">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0">
                                                <div
                                                    class="flex justify-center items-center h-9 w-9 rounded-full bg-info text-white">
                                                    <i class="mdi mdi-heart text-lg"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow truncate ms-2">
                                                <h5 class="text-sm font-semibold mb-1">Admin <small
                                                        class="font-normal text-gray-500 ms-1">1 hr ago</small></h5>
                                                <small class="noti-item-subtitle text-gray-400">New user
                                                    registered</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript:void(0);" class="block mb-4">
                                    <div class="card-body">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0">
                                                <img src="assets/images/users/avatar-2.jpg"
                                                    class="rounded-full h-9 w-9" alt="">
                                            </div>
                                            <div class="flex-grow truncate ms-2">
                                                <h5 class="text-sm font-semibold mb-1">Cristina Pride <small
                                                        class="font-normal text-gray-500 ms-1">1 day ago</small></h5>
                                                <small class="noti-item-subtitle text-gray-400">Hi, How are you? What
                                                    about our next meeting</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <h5 class="text-xs text-gray-500 mb-2">Yesterday</h5>

                                <a href="javascript:void(0);" class="block mb-4">
                                    <div class="card-body">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0">
                                                <div
                                                    class="flex justify-center items-center h-9 w-9 rounded-full bg-primary text-white">
                                                    <i class="mdi mdi-account-plus text-lg"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow truncate ms-2">
                                                <h5 class="text-sm font-semibold mb-1">Datacorp</h5>
                                                <small class="noti-item-subtitle text-gray-400">Caleb Flakelar
                                                    commented on Admin</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript:void(0);" class="block">
                                    <div class="card-body">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0">
                                                <img src="assets/images/users/avatar-4.jpg"
                                                    class="rounded-full h-9 w-9" alt="">
                                            </div>
                                            <div class="flex-grow truncate ms-2">
                                                <h5 class="text-sm font-semibold mb-1">Karen Robinson</h5>
                                                <small class="noti-item-subtitle text-gray-400">Wow ! this admin looks
                                                    good and awesome design</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <a href="javascript:void(0);"
                                class="p-2 border-t border-dashed border-gray-200 dark:border-gray-700 block text-center text-primary underline font-semibold">
                                View All
                            </a>
                        </div>
                    </div>

                    <!-- Profile Dropdown Button -->
                    <div class="hs-dropdown relative inline-flex [--placement:bottom-right]">
                        <button id="hs-dropdown-default" type="button"
                            class="hs-dropdown-toggle nav-link flex items-center">
                            <img src="assets/images/users/avatar-1.jpg" alt="user-image"
                                class="rounded-full h-8 w-8">
                            <div class="lg:flex hidden">
                                <span class="text-sm mx-2">Maxine K</span>
                                <i class="mdi mdi-chevron-down"></i>
                            </div>
                        </button>

                        <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] hs-dropdown-open:opacity-100 opacity-0 hidden z-10 mt-2 min-w-[10rem] bg-white dark:bg-slate-700 border border-gray-200 dark:border-slate-500/70 shadow-md rounded py-2"
                            aria-labelledby="hs-dropdown-default">
                            <h6 class="py-2 px-5">Welcome !</h6>

                            <a class="flex items-center gap-x-3.5 py-2 px-5 text-sm hover:bg-gray-100 dark:hover:bg-slate-500/30"
                                href="extras-profile.html">
                                <i data-lucide="user" class="w-4 h-4 me-2"></i>
                                <span>My Account</span>
                            </a>
                            <a class="flex items-center gap-x-3.5 py-2 px-5 text-sm hover:bg-gray-100 dark:hover:bg-slate-500/30"
                                href="extras-profile.html">
                                <i data-lucide="settings" class="w-4 h-4 me-2"></i>
                                <span>Settings</span>
                            </a>
                            <a class="flex items-center gap-x-3.5 py-2 px-5 text-sm hover:bg-gray-100 dark:hover:bg-slate-500/30"
                                href="pages-login.html">
                                <i data-lucide="lock" class="w-4 h-4 me-2"></i>
                                <span>Lock Screen</span>
                            </a>
                            <hr class="my-2 border-gray-200 dark:border-gray-700">
                            <a class="flex items-center gap-x-3.5 py-2 px-5 text-sm hover:bg-gray-100 dark:hover:bg-slate-500/30"
                                href="pages-login.html">
                                <i data-lucide="log-out" class="w-4 h-4 me-2"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </div>

                    <!-- Customization Button -->
                    <div class="flex">
                        <button type="button" class="nav-link p-2" data-hs-overlay="#theme-customization">
                            <span class="sr-only">Customization Button</span>
                            <span class="flex items-center justify-center h-6 w-6">
                                <i data-lucide="settings"></i>
                            </span>
                        </button>
                    </div>
                </div>
            </header>
            <!-- Topbar End -->

            <main class="p-6">

                <h4 class="header-title">Welcome !</h4>

                <div class="space-y-6">
                    <div class="card">
                        <div class="p-6">
                            <div class="grid xl:grid-cols-4 sm:grid-cols-2">
                                <div>
                                    <div class="text-center xl:border-e border-gray-200 dark:border-slate-500/70 p-4">
                                        <h2 class="text-3xl font-semibold mb-3">
                                            <i class="text-primary mdi mdi-access-point-network me-2"></i>
                                            8954
                                        </h2>
                                        <p>Lifetime total sales</p>
                                    </div>
                                </div>

                                <div>
                                    <div class="text-center xl:border-e border-gray-200 dark:border-slate-500/70 p-5">
                                        <h2 class="text-3xl font-semibold mb-3">
                                            <i class="text-teal mdi mdi-cast-variant me-2"></i>
                                            7841
                                        </h2>
                                        <p>Income amounts</p>
                                    </div>
                                </div>

                                <div>
                                    <div class="text-center xl:border-e border-gray-200 dark:border-slate-500/70 p-5">
                                        <h2 class="text-3xl font-semibold mb-3">
                                            <i class="text-info mdi mdi-black-mesa me-2"></i>
                                            6521
                                        </h2>
                                        <p>Total users</p>
                                    </div>
                                </div>

                                <div>
                                    <div class="text-center p-5">
                                        <h2 class="text-3xl font-semibold mb-3">
                                            <i class="text-danger mdi mdi-cellphone-link me-2"></i>
                                            325
                                        </h2>
                                        <p>Total visits</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="card">
                            <div class="p-6">
                                <h6 class="mb-4">Total Revenue</h6>
                                <div class="text-center">
                                    <ul class="flex items-center justify-center gap-3">
                                        <li>
                                            <p><i class="fa fa-circle mr-2 text-primary"></i>Series A</p>
                                        </li>
                                        <li>
                                            <p><i class="fa fa-circle mr-2 text-gray-400"></i>Series B</p>
                                        </li>
                                    </ul>
                                </div>

                                <div class="morris-chart" dir="ltr" id="dashboard-bar-stacked"
                                    style="height: 300px;"></div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="p-6">
                                <h6 class="mb-4">Sales Analytics</h6>
                                <div class="text-center">
                                    <ul class="flex items-center justify-center gap-3">
                                        <li>
                                            <p><i class="fa fa-circle mr-2 text-primary"></i>Mobiles</p>
                                        </li>
                                        <li>
                                            <p><i class="fa fa-circle mr-2 text-info"></i>Tablets</p>
                                        </li>
                                    </ul>
                                </div>

                                <div class="morris-chart" dir="ltr" id="dashboard-line-chart"
                                    style="height: 300px;"></div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="p-6">
                            <h6 class="mb-4">Contacts</h6>

                            <div class="flex flex-col">
                                <div class="-m-1.5 overflow-x-auto">
                                    <div class="p-1.5 min-w-full inline-block align-middle">
                                        <div class="overflow-hidden">
                                            <table
                                                class="min-w-full divide-y divide-gray-200 dark:divide-slate-500/30">
                                                <thead>
                                                    <tr
                                                        class="border-t border-b-2 border-gray-200 dark:border-slate-500/30">
                                                        <th class="px-4 py-3 whitespace-nowrap text-start font-bold dark:text-white"
                                                            scope="col">
                                                            <input class="form-checkbox rounded" id="checkbox-default"
                                                                type="checkbox">
                                                        </th>
                                                        <th class="px-4 py-3 whitespace-nowrap text-start font-bold dark:text-white"
                                                            scope="col">
                                                            Name
                                                        </th>
                                                        <th class="px-4 py-3 whitespace-nowrap text-start font-bold dark:text-white"
                                                            scope="col">
                                                            Email
                                                        </th>
                                                        <th class="px-4 py-3 whitespace-nowrap text-start font-bold dark:text-white"
                                                            scope="col">
                                                            Products
                                                        </th>
                                                        <th class="px-4 py-3 whitespace-nowrap text-start font-bold dark:text-white"
                                                            scope="col">
                                                            Start Date
                                                        </th>
                                                    </tr>
                                                </thead>

                                                <tbody class="divide-y divide-gray-200 dark:divide-slate-500/30">
                                                    <tr
                                                        class="transition-all duration-300 hover:bg-gray-100 dark:hover:bg-slate-600/40">
                                                        <th class="px-4 py-3 text-start whitespace-nowrap">
                                                            <div class="flex items-center gap-3">
                                                                <input class="form-checkbox rounded"
                                                                    id="checkbox-default" type="checkbox">
                                                                <img class="h-9 w-9 rounded-full"
                                                                    src="assets/images/users/avatar-1.jpg">
                                                            </div>
                                                        </th>
                                                        <td class="px-4 py-3 whitespace-nowrap">Tomaslau</td>
                                                        <td class="px-4 py-3 whitespace-nowrap">tomaslau@dummy.com</td>
                                                        <td class="px-4 py-3 whitespace-nowrap">356</td>
                                                        <td class="px-4 py-3 whitespace-nowrap">01/11/2003</td>
                                                    </tr>
                                                    <tr
                                                        class="transition-all duration-300 hover:bg-gray-100 dark:hover:bg-slate-600/40">
                                                        <th class="px-4 py-3 text-start whitespace-nowrap">
                                                            <div class="flex items-center gap-3">
                                                                <input class="form-checkbox rounded"
                                                                    id="checkbox-default" type="checkbox">
                                                                <img class="h-9 w-9 rounded-full"
                                                                    src="assets/images/users/avatar-2.jpg">
                                                            </div>
                                                        </th>
                                                        <td class="px-4 py-3 whitespace-nowrap">Chadengle</td>
                                                        <td class="px-4 py-3 whitespace-nowrap">chadengle@dummy.com
                                                        </td>
                                                        <td class="px-4 py-3 whitespace-nowrap">568</td>
                                                        <td class="px-4 py-3 whitespace-nowrap">01/11/2003</td>
                                                    </tr>
                                                    <tr
                                                        class="transition-all duration-300 hover:bg-gray-100 dark:hover:bg-slate-600/40">
                                                        <th class="px-4 py-3 text-start whitespace-nowrap">
                                                            <div class="flex items-center gap-3">
                                                                <input class="form-checkbox rounded"
                                                                    id="checkbox-default" type="checkbox">
                                                                <img class="h-9 w-9 rounded-full"
                                                                    src="assets/images/users/avatar-3.jpg">
                                                            </div>
                                                        </th>
                                                        <td class="px-4 py-3 whitespace-nowrap">Stillnotdavid</td>
                                                        <td class="px-4 py-3 whitespace-nowrap">stillnotdavid@dummy.com
                                                        </td>
                                                        <td class="px-4 py-3 whitespace-nowrap">201</td>
                                                        <td class="px-4 py-3 whitespace-nowrap">12/11/2003</td>
                                                    </tr>
                                                    <tr
                                                        class="transition-all duration-300 hover:bg-gray-100 dark:hover:bg-slate-600/40">
                                                        <th class="px-4 py-3 text-start whitespace-nowrap">
                                                            <div class="flex items-center gap-3">
                                                                <input class="form-checkbox rounded"
                                                                    id="checkbox-default" type="checkbox">
                                                                <img class="h-9 w-9 rounded-full"
                                                                    src="assets/images/users/avatar-4.jpg">
                                                            </div>
                                                        </th>
                                                        <td class="px-4 py-3 whitespace-nowrap">Kurafire</td>
                                                        <td class="px-4 py-3 whitespace-nowrap">kurafire@dummy.com</td>
                                                        <td class="px-4 py-3 whitespace-nowrap">56</td>
                                                        <td class="px-4 py-3 whitespace-nowrap">14/11/2003</td>
                                                    </tr>
                                                    <tr
                                                        class="transition-all duration-300 hover:bg-gray-100 dark:hover:bg-slate-600/40">
                                                        <th class="px-4 py-3 text-start whitespace-nowrap">
                                                            <div class="flex items-center gap-3">
                                                                <input class="form-checkbox rounded"
                                                                    id="checkbox-default" type="checkbox">
                                                                <img class="h-9 w-9 rounded-full"
                                                                    src="assets/images/users/avatar-5.jpg">
                                                            </div>
                                                        </th>
                                                        <td class="px-4 py-3 whitespace-nowrap">Shahedk</td>
                                                        <td class="px-4 py-3 whitespace-nowrap">shahedk@dummy.com</td>
                                                        <td class="px-4 py-3 whitespace-nowrap">356</td>
                                                        <td class="px-4 py-3 whitespace-nowrap">20/11/2003</td>
                                                    </tr>
                                                    <tr
                                                        class="transition-all duration-300 hover:bg-gray-100 dark:hover:bg-slate-600/40">
                                                        <th class="px-4 py-3 text-start whitespace-nowrap">
                                                            <div class="flex items-center gap-3">
                                                                <input class="form-checkbox rounded"
                                                                    id="checkbox-default" type="checkbox">
                                                                <img class="h-9 w-9 rounded-full"
                                                                    src="assets/images/users/avatar-6.jpg">
                                                            </div>
                                                        </th>
                                                        <td class="px-4 py-3 whitespace-nowrap">Adhamdannaway</td>
                                                        <td class="px-4 py-3 whitespace-nowrap">adhamdannaway@dummy.com
                                                        </td>
                                                        <td class="px-4 py-3 whitespace-nowrap">956</td>
                                                        <td class="px-4 py-3 whitespace-nowrap">24/11/2003</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </main>

            <!-- Footer Start -->
            <footer class="footer border-t border-gray-200 dark:border-gray-600 mt-auto">
                <div class="h-16 flex items-center px-8 rounded-none">
                    <div class="flex justify-center w-full gap-4">
                        <div>
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Simple theme by <a href="https://coderthemes.com/"
                                target="_blank" class="text-primary">Coderthemes</a>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Footer End -->
        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>

    <!-- Theme Settings -->
    <div>
        <!-- Theme Settings Offcanvas -->

        <div id="theme-customization"
            class="hs-overlay hs-overlay-open:translate-x-0 translate-x-full fixed top-0 right-0 transition-all duration-300 transform h-full max-w-xs w-full z-[60] bg-white dark:bg-gray-800 hidden"
            tabindex="-1">
            <div class="h-16 bg-primary text-white flex items-center px-6 gap-3">
                <h5 class="text-base text-white grow">Theme Customizer</h5>
                <button type="button"
                    class="h-6 w-6 flex items-center justify-center rounded-full bg-dark text-white"
                    data-hs-overlay="#theme-customization">
                    <i class="mdi mdi-close text-sm"></i>
                </button>
            </div>

            <div class="h-[calc(100vh-64px)]" data-simplebar>
                <div class="p-6">
                    <div class="py-3 px-5 border border-warning/25 bg-warning/20 text-warning rounded mb-6"
                        role="alert">
                        <span class="font-medium">Customize </span> the overall color scheme, Layout, etc.
                    </div>

                    <div class="mb-4">
                        <h5 class="font-semibold text-sm mb-3">Color Scheme</h5>
                        <div class="flex flex-col gap-2">
                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm text-primary" type="checkbox"
                                    name="data-mode" id="layout-color-light" value="light">
                                <label class="ms-2" for="layout-color-light">Light</label>
                            </div>

                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm text-primary" type="checkbox"
                                    name="data-mode" id="layout-color-dark" value="dark">
                                <label class="ms-2" for="layout-color-dark"> Dark </label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <h5 class="font-semibold text-sm mb-3">Direction</h5>
                        <div class="flex flex-col gap-2">
                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm text-primary" type="checkbox" name="dir"
                                    id="direction-ltr" value="ltr">
                                <label class="ms-2" for="direction-ltr"> LTR </label>
                            </div>

                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm text-primary" type="checkbox" name="dir"
                                    id="direction-rtl" value="rtl">
                                <label class="ms-2" for="direction-rtl"> RTL </label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4" id="leftSidebarSize">
                        <h5 class="font-semibold text-sm mb-3">Left Sidebar Size</h5>
                        <div class="flex flex-col gap-3">
                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm text-primary" type="checkbox"
                                    name="data-sidenav-view" id="sidenav-view-default" value="default">
                                <label class="ms-2" for="sidenav-view-default"> Default </label>
                            </div>


                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm text-primary" type="checkbox"
                                    name="data-sidenav-view" id="sidenav-view-condensed" value="condensed">
                                <label class="ms-2" for="sidenav-view-condensed"> Condensed (Small) </label>
                            </div>

                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm text-primary" type="checkbox"
                                    name="data-sidenav-view" id="sidenav-view-compact" value="compact">
                                <label class="ms-2" for="sidenav-view-compact"> Compact </label>
                            </div>

                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm text-primary" type="checkbox"
                                    name="data-sidenav-view" id="sidenav-view-mobile" value="mobile">
                                <label class="ms-2" for="sidenav-view-mobile"> Mobile </label>
                            </div>

                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm text-primary" type="checkbox"
                                    name="data-sidenav-view" id="sidenav-view-hidden" value="hidden">
                                <label class="ms-2" for="sidenav-view-hidden">Hidden </label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <h5 class="font-semibold text-sm mb-3">Sidenav Color</h5>
                        <div class="flex flex-col gap-2">
                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm text-primary" type="checkbox"
                                    name="data-sidenav-color" id="sidenav-color-light" value="light">
                                <label class="ms-2" for="sidenav-color-light"> Light </label>
                            </div>

                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm text-primary" type="checkbox"
                                    name="data-sidenav-color" id="sidenav-color-dark" value="dark">
                                <label class="ms-2" for="sidenav-color-dark"> Dark </label>
                            </div>

                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm text-primary" type="checkbox"
                                    name="data-sidenav-color" id="sidenav-color-brand" value="brand">
                                <label class="ms-2" for="sidenav-color-brand"> Brand </label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-6">
                        <h5 class="font-semibold text-sm mb-3">Topbar Color</h5>
                        <div class="flex flex-col gap-2">
                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm text-primary" type="checkbox"
                                    name="data-topbar-color" id="topbar-color-light" value="light">
                                <label class="ms-2" for="topbar-color-light"> Light </label>
                            </div>

                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm text-primary" type="checkbox"
                                    name="data-topbar-color" id="topbar-color-dark" value="dark">
                                <label class="ms-2" for="topbar-color-dark"> Dark </label>
                            </div>
                        </div>
                    </div>

                    <div>
                        <button type="button" class="btn bg-primary text-white w-full"
                            id="reset-layout">Reset</button>
                    </div>
                </div>
            </div>
            <!-- Plugin Js -->
            <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
            <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
            <script src="{{ asset('assets/libs/preline/preline.js') }}"></script>

            <!-- App Js -->
            {{-- <script src="{{asset('assets/js/app.js')}}"></script> --}}
            <script src="{{ asset('assets/js/app.js') }}" type="module"></script>

            <script src="{{ asset('assets/js/pages/dashboard.init.js') }}" type="module"></script>

</body>

</html>
