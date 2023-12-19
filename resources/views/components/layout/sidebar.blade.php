<nav x-data="sidebar" class="sidebar fixed bottom-0 top-0 z-50 h-full min-h-screen w-[260px] shadow-[5px_0_25px_0_rgba(94,92,154,0.1)] transition-all duration-300">
    <div class="h-full bg-white dark:bg-[#0e1726]">
        <div class="flex items-center justify-between px-4 py-3">
            <x-layout.brand />
            <a
                href="javascript:;"
                class="collapse-icon flex h-8 w-8 items-center rounded-full transition duration-300 hover:bg-gray-500/10 rtl:rotate-180 dark:text-white-light dark:hover:bg-dark-light/10"
                @click="$store.app.toggleSidebar()"
            >
                <i data-feather="chevrons-left"></i>
            </a>
        </div>
        <ul
            class="perfect-scrollbar relative h-[calc(100vh-80px)] space-y-0.5 overflow-y-auto overflow-x-hidden p-4 py-0 font-semibold"
            x-data="{ activeDropdown: 'dashboard' }"
        >
        <h2 class="-mx-4 mb-1 flex items-center bg-white-light/30 px-7 py-3 font-extrabold uppercase dark:bg-dark dark:bg-opacity-[0.08]">
            <span>Apps</span>
        </h2>
            

            <x-layout.sidebar-btn url="{{ url('/') }}" icon="home" label="Dashboard" />

            <x-layout.sidebar-dropdown>
                <x-layout.sidebar-dropdown-button class="master-data" icon="layers" label="Master data"/>
                <x-layout.sidebar-dropdown-menu class="master-data">
                    <x-layout.sidebar-dropdown-menuitem url="{{ url('master-data/data-kabupaten') }}" label="Data Kabupaten"/>
                    <x-layout.sidebar-dropdown-menuitem url="{{ url('master-data/data-dapil') }}" label="Data Dapil"/>
                    <x-layout.sidebar-dropdown-menuitem url="{{ url('master-data/data-kecamatan') }}" label="Data Kecamatan"/>
                    <x-layout.sidebar-dropdown-menuitem url="{{ url('master-data/data-desa') }}" label="Data Desa"/>
                    <x-layout.sidebar-dropdown-menuitem url="{{ url('master-data/data-tps') }}" label="Data TPS"/>
                    <x-layout.sidebar-dropdown-menuitem url="{{ url('master-data/data-partai') }}" label="Data Partai"/>
                    <x-layout.sidebar-dropdown-menuitem url="{{ url('master-data/data-kandidat') }}" label="Data Kandidat"/>
                </x-layout.sidebar-dropdown-menu>
            </x-layout.sidebar-dropdown>


            <x-layout.sidebar-dropdown>
                <x-layout.sidebar-dropdown-button class="perhitungan-cepat" icon="zap" label="Perhitungan Cepat"/>
                <x-layout.sidebar-dropdown-menu class="perhitungan-cepat">
                    <x-layout.sidebar-dropdown-menuitem url="{{ url('perhitungan-cepat/keseluruhan') }}" label="Hasil Keseluruhan"/>
                    <x-layout.sidebar-dropdown-menuitem url="{{ url('perhitungan-cepat/kecamatan') }}" label="Hasil Kecamatan"/>
                    <x-layout.sidebar-dropdown-menuitem url="{{ url('perhitungan-cepat/desa') }}" label="Hasil Desa"/>
                    <x-layout.sidebar-dropdown-menuitem url="{{ url('perhitungan-cepat/tps') }}" label="Hasil TPS"/>
                    <x-layout.sidebar-dropdown-menuitem url="{{ url('perhitungan-cepat/partai') }}" label="Hasil Partai"/>
                </x-layout.sidebar-dropdown-menu>
            </x-layout.sidebar-dropdown>


            <x-layout.sidebar-btn url="{{ url('/') }}" icon="settings" label="Pengaturan" />

            <x-layout.sidebar-btn url="{{ url('/') }}" icon="user" label="Profil Akun" />


            <x-layout.sidebar-dropdown>
                <x-layout.sidebar-dropdown-button class="user" icon="list" label="Example"/>
                <x-layout.sidebar-dropdown-menu class="user">
                    <x-layout.sidebar-dropdown-menuitem url="{{ url('master-data/card') }}" label="Card"/>
                    <x-layout.sidebar-dropdown-menuitem url="#" label="Data 3"/>
                    <x-layout.sidebar-dropdown-menuitem url="#" label="Data 4"/>
                </x-layout.sidebar-dropdown-menu>
            </x-layout.sidebar-dropdown>
        </ul>
    </div>
</nav>