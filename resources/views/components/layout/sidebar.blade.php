<aside class="sidebar">
    <ul>
        <x-layout.sidebar-header brand="Quixx" />
        <x-layout.sidebar-menu>
            <x-layout.sidebar-items url="{{ url('/') }}" icons="house-fill" label="Dashboard"/>
        </x-layout.sidebar-menu>
        <x-layout.sidebar-menu class="dropdown">
            <x-layout.sidebar-items dropdown url="#" icons="folder-fill" label="Master Data"/>
            <x-layout.drop-menu>
                <x-layout.drop-item url="{{ url('master-data/data-kabupaten') }}" icons="dash" label="Data Kabupaten"/>
                <x-layout.drop-item url="{{ url('master-data/data-dapil') }}" icons="dash" label="Data Dapil"/>
                <x-layout.drop-item url="{{ url('master-data/data-kecamatan') }}" icons="dash" label="Data Kecamatan"/>
                <x-layout.drop-item url="{{ url('master-data/data-desa') }}" icons="dash" label="Data Desa"/>
                <x-layout.drop-item url="{{ url('master-data/data-tps') }}" icons="dash" label="Data TPS"/>
                <x-layout.drop-item url="{{ url('master-data/data-partai') }}" icons="dash" label="Data Partai"/>
                <x-layout.drop-item url="{{ url('master-data/data-kandidat') }}" icons="dash" label="Data Kandidat"/>
            </x-layout.drop-menu>
        </x-layout.sidebar-menu>
        <x-layout.sidebar-menu class="dropdown">
            <x-layout.sidebar-items dropdown url="#" icons="file-earmark-break-fill" label="Perhitungan Cepat"/>
            <x-layout.drop-menu>
                <x-layout.drop-item url="{{ url('perhitungan-cepat/keseluruhan') }}" icons="dash" label="Hasil Keseluruhan"/>
                <x-layout.drop-item url="{{ url('perhitungan-cepat/kecamatan') }}" icons="dash" label="Hasil Kecamatan"/>
                <x-layout.drop-item url="{{ url('perhitungan-cepat/desa') }}" icons="dash" label="Hasil Desa"/>
                <x-layout.drop-item url="{{ url('perhitungan-cepat/tps') }}" icons="dash" label="Hasil TPS"/>
                <x-layout.drop-item url="{{ url('perhitungan-cepat/partai') }}" icons="dash" label="Hasil Partai"/>
            </x-layout.drop-menu>
        </x-layout.sidebar-menu>
    </ul>
</aside>