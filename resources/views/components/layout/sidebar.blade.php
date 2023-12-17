<div class="app-menu">

    <!-- Sidenav Brand Logo -->
    <a href="#" class="logo-box">
        <!-- Light Brand Logo -->
        <div class="logo-light">
            <img src="{{ asset('assets/images/logo-light.png')}}" class="logo-lg h-6" alt="Light logo">
            <img src="{{ asset('assets/images/logo-sm.png')}}" class="logo-sm" alt="Small logo">
        </div>

        <!-- Dark Brand Logo -->
        <div class="logo-dark">
            <img src="{{ asset('assets/images/logo-dark.png')}}" class="logo-lg h-6" alt="Dark logo">
            <img src="{{ asset('assets/images/logo-sm.png')}}" class="logo-sm" alt="Small logo">
        </div>
    </a>

    <!-- Sidenav Menu Toggle Button -->
    <button id="button-hover-toggle" class="absolute top-5 end-2 rounded-full p-1.5">
        <span class="sr-only">Menu Toggle Button</span>
        <i class="mgc_round_line text-xl"></i>
    </button>

    <!--- Menu -->
    <div class="srcollbar" data-simplebar>
        <ul class="menu" data-fc-type="accordion">

            <li class="menu-title">Menu</li>

            <x-layout.sidebar-item url="{{url('beranda')}}" icons="mgc_calendar_line" label="Dashboard" />


            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon"><i class="mgc_box_3_line"></i></span>
                    <span class="menu-text"> Master Data </span>
                    <span class="menu-arrow"></span>
                </a>
                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="{{url('master-data/kabupaten')}}" class="menu-link">
                            <span class="menu-text">Data Kabupaten</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{url('master-data/dapil')}}" class="menu-link">
                            <span class="menu-text">Data Dapil</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{url('master-data/kecamatan')}}" class="menu-link">
                            <span class="menu-text">Data Kecamatan</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{url('master-data/desa')}}" class="menu-link">
                            <span class="menu-text">Data Desa</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{url('master-data/tps')}}" class="menu-link">
                            <span class="menu-text">Data TPS</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="{{url('master-data/partai')}}" class="menu-link">
                            <span class="menu-text">Data Partai</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="{{url('master-data/kandidat')}}" class="menu-link">
                            <span class="menu-text">Data Kandidat</span>
                        </a>
                    </li>
                    
                </ul>
            </li>



            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon"><i class="mgc_box_3_line"></i></span>
                    <span class="menu-text"> Perhitungan Cepat </span>
                    <span class="menu-arrow"></span>
                </a>
                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="{{url('perhitungan-cepat/keseluruhan')}}" class="menu-link">
                            <span class="menu-text">Hasil Keseluruhan</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{url('perhitungan-cepat/kecamatan')}}" class="menu-link">
                            <span class="menu-text">Hasil Kecamatan</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{url('perhitungan-cepat/desa')}}" class="menu-link">
                            <span class="menu-text">Hasil Desa</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{url('perhitungan-cepat/tps')}}" class="menu-link">
                            <span class="menu-text">Hasil TPS</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{url('perhitungan-cepat/partai')}}" class="menu-link">
                            <span class="menu-text">Hasil Partai</span>
                        </a>
                    </li>

                   
                    
                </ul>
            </li>

             <x-layout.sidebar-item url="{{url('pengaturan')}}" icons="mgc_calendar_line" label="Pengaturan" />
             <x-layout.sidebar-item url="{{url('profil-akun')}}" icons="mgc_calendar_line" label="Profil Akun" />




        </ul>

    </div>
</div>