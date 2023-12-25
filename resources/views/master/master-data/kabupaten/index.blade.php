<x-app>

    <x-layout.section-header title="DATA KABUPATEN" />

    <!-- Modal Tambah Data -->
    <x-modal.modal id="tambah" action="{{ url('master-data/data-kabupaten/create') }}">
        <x-modal.header title="TAMBAH KABUPATEN" />
        <x-modal.body>
            <x-form.input type="text" label="Kabupaten" name="name" placeholder="Masukan nama kabupaten ..." />
        </x-modal.body>
        <x-modal.footer>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">BATAL</button>
            <button type="button" class="btn btn-primary">SIMPAN</button>
        </x-modal.footer>
    </x-modal.modal>
    <!-- ENDModal Tambah Data -->

    <div class="row">
        <div class="col-md-12">
            <x-card.card>
                <x-card.header>
                    <x-button.btn url="#tambah" icons="plus" class="success" modal />
                </x-card.header>
                <x-card.body>
                    <x-table.table>
                        <thead>
                            <tr>
                                <x-table.th label="No." />
                                <x-table.th label="Nama Kecamatan" />
                                <x-table.th label="Aksi" />
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_city as $item)
                                <tr>
                                    <x-table.td label="{{ $loop->iteration }}" />
                                    <x-table.td label="{{ ucwords($item->name) }}" />
                                    <x-table.td-action x-data="modal">
                                        <x-button.btn url="#lihat" icons="eye" class="warning" modal />
                                        <x-button.btn url="#edit" icons="pencil-square" class="primary" modal />
                                        <x-button.btn url="#hapus" icons="trash" class="danger" modal />
                                    </x-table.td-action>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <x-table.th label="No." />
                                <x-table.th label="Nama Kecamatan" />
                                <x-table.th label="Aksi" />
                            </tr>
                        </tfoot>
                    </x-table.table>
                </x-card.body>
            </x-card.card>
        </div>
    </div>
</x-app>
