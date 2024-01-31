<nav class="border-gray-200 bg-gray-900 px-2.5 py-2.5 shadow-sm dark:bg-slate-800 sm:px-4 block print:hidden">
    <div class="container mx-0 flex max-w-full flex-wrap items-center lg:mx-auto">
        <div class="flex items-center">
            <a href="{{ url('/') }}" class="flex items-center outline-none">
                <img src="assets/images/logo-sm.png" alt="" class="h-6" />
            </a>
        </div>

        <div class="order-2 hidden w-full items-center justify-between md:order-1 md:ml-5 md:flex md:w-auto"
            id="mobile-menu-2">
            <ul
                class="font-body mt-4 flex flex-col font-medium md:mt-0 md:flex-row md:text-sm md:font-medium space-x-0 md:space-x-4 lg:space-x-6 xl:space-x-8 navbar">
                <li class="dropdown">
                    <a href="{{ url('/') }}"
                        class="text-white dropdown-toggle flex w-full items-center border-b border-gray-800 py-2 px-3 font-medium md:border-0 md:p-0">
                        <i class="ti ti-smart-home mr-1 pb-1 text-lg"></i> Beranda
                    </a>
                </li>

                @if (Auth::user()->level == true)
                    <li class="dropdown">
                        <button id="navAppsLink" data-dropdown-toggle="navApps"
                            class="text-white dropdown-toggle flex w-full items-center border-b border-gray-800 py-2 px-3 font-medium md:border-0 md:p-0">
                            <i class="ti ti-apps mr-1 pb-1 text-lg"></i> Master Data
                            <i class="ti ti-chevron-down ml-auto lg:ml-1"></i>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="navApps"
                            class="dropdown-menu z-10 my-1 hidden w-full list-none divide-y divide-gray-100 rounded bg-gray-800 md:bg-white text-base shadow dark:divide-gray-600 border border-slate-700 md:border-white dark:border-slate-700/50 dark:bg-gray-900 md:w-44 dropdown-menu">
                            <ul class="py-1">
                                <li>
                                    <a href="{{ url('administrators') }}" class="nav-link  dark:hover:bg-slate-800/70">
                                        Data Admin
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('voting-zones') }}" class="nav-link  dark:hover:bg-slate-800/70">
                                        Data Dapil
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('districts') }}" class="nav-link  dark:hover:bg-slate-800/70">
                                        Data Kecamatan
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('villages') }}" class="nav-link  dark:hover:bg-slate-800/70">
                                        Data Desa
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('voting-places') }}" class="nav-link  dark:hover:bg-slate-800/70">
                                        Data TPS
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('voting-results') }}" class="nav-link  dark:hover:bg-slate-800/70">
                                        Data Perolehan Suara
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('parties') }}" class="nav-link  dark:hover:bg-slate-800/70">
                                        Data Partai
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('candidates') }}" class="nav-link  dark:hover:bg-slate-800/70">
                                        Data Calon Legislatif
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown">
                        <button id="navUIkitLink" data-dropdown-toggle="navUIkit"
                            class="text-white dropdown-toggle flex w-full items-center border-b border-gray-800 py-2 px-3 font-medium md:border-0 md:p-0">
                            <i class="ti ti-device-tv mr-1 pb-1 text-lg"></i> TV Hasil Perolehan
                            <i class="ti ti-chevron-down ml-auto lg:ml-1"></i>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="navUIkit"
                            class="dropdown-menu z-20 my-1 hidden w-full sm:left-0 sm:right-0 md:left-0 md:right-0 lg:left-0 lg:right-0 xl:left-auto xl:right-auto xl:max-w-screen-lg list-none divide-y divide-gray-100 rounded bg-gray-800 md:bg-white text-base shadow dark:divide-gray-600 border border-slate-700 md:border-white dark:border-slate-700/50 dark:bg-gray-900 bg-[url('../images/widgets/m-p2.png')] bg-no-repeat bg-right-bottom dropdown-menu">
                            <div class="grid grid-cols-12 gap-4 px-4 pb-4">
                                @foreach (App\Models\City::all() as $city)
                                    <div class="col-span-6 md:col-span-3">
                                        <h5
                                            class="font-medium text-base p-2 border-b border-dashed border-slate-500 dark:border-slate-600 md:border-slate-300 text-slate-300 dark:text-slate-500 md:text-slate-700">
                                            {{ $city->name }}
                                        </h5>
                                        <ul class="py-1">
                                            @foreach ($city->votingZones as $voting_zone)
                                                <li>
                                                    <a href="{{ url('tv', $voting_zone->voting_zone_id) }}"
                                                        target="_blank" class="nav-link dark:hover:bg-slate-800/70">
                                                        {{ $voting_zone->name }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </li>
                @else
                    <li class="dropdown">
                        <a href="{{ url('voting-results', Auth::user()->voting_zone_id) }}"
                            class="text-white dropdown-toggle flex w-full items-center border-b border-gray-800 py-2 px-3 font-medium md:border-0 md:p-0">
                            <i class="ti ti-pencil mr-1 pb-1 text-lg"></i> Input Perolehan Suara
                        </a>
                    </li>

                    <li class="dropdown">
                        <a href="{{ url('tv', Auth::user()->voting_zone_id) }}" target="_blank"
                            class="text-white dropdown-toggle flex w-full items-center border-b border-gray-800 py-2 px-3 font-medium md:border-0 md:p-0">
                            <i class="ti ti-device-tv mr-1 pb-1 text-lg"></i> TV Perolehan Suara
                        </a>
                    </li>
                @endif
            </ul>
        </div>
        <div class="order-1 ml-auto flex items-center md:order-2">
            <div class="mr-2 lg:mr-4">
                <button id="toggle-theme" class="flex rounded-full md:mr-0 relative">
                    <i class="ti ti-sun top-icon"></i>
                </button>
            </div>
            <div class="mr-2 lg:mr-0 dropdown relative">
                <button type="button"
                    class="dropdown-toggle flex items-center rounded-full text-sm focus:bg-none focus:ring-0 dark:focus:ring-0 md:mr-0"
                    id="user-profile" aria-expanded="false" data-dropdown-toggle="navUserdata">
                    <img class="h-8 w-8 rounded-full" src="assets/images/users/avatar-1.jpg" alt="user photo" />
                    <span class="ml-2 hidden text-left xl:block">
                        <span class="block font-medium text-gray-400">{{ Auth::user()->name }}</span>
                        @if (empty(Auth::user()->voting_zone_id))
                            <span class="-mt-1 block text-sm font-medium text-gray-500">
                                {{ Auth::user()->level == true ? 'Super Admin' : 'Admin' }}
                            </span>
                        @else
                            <span class="-mt-1 block text-sm font-medium text-gray-500">
                                Admin {{ Auth::user()->votingZone->name }} {{ Auth::user()->city->name }}
                            </span>
                        @endif
                    </span>
                </button>

                <div class="dropdown-menu dropdown-menu-right z-50 my-1 hidden list-none divide-y divide-gray-100 rounded border-slate-700 md:border-white text-base shadow dark:divide-gray-600 bg-white dark:bg-slate-800"
                    id="navUserdata">
                    <div class="py-3 px-4">
                        <span
                            class="block text-sm font-medium text-gray-900 dark:text-white">{{ Auth::user()->name }}</span>
                        <span
                            class="block truncate text-sm font-normal text-gray-500 dark:text-gray-400">{{ Auth::user()->username }}</span>
                    </div>
                    <ul class="py-1" aria-labelledby="navUserdata">
                        <li>
                            <a href="{{ url('profile') }}"
                                class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-900/20 dark:hover:text-white">
                                Profil
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('logout') }}"
                                class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-900/20 dark:hover:text-white">
                                Keluar
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <button data-collapse-toggle="mobile-menu-2" type="button" id="toggle-menu"
                class="ml-1 inline-flex items-center rounded-lg text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-0 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 md:hidden"
                aria-controls="mobile-menu-2" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <i class="ti ti-menu-2 h-6 w-6 text-lg leading-6"></i>
                <i class="ti ti-X hidden h-6 w-6 text-lg leading-6"></i>
            </button>
        </div>
    </div>
</nav>
