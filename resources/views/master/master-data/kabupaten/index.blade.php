<x-app>
    <div >
        <x-card.card>
            <x-card.header >
                <x-card.title title="Data Kabupaten" />
                <div x-data="modal">
                    <x-button.btn-modal  class="success btn-sm" icons icon="plus" @click="toggle" /> 
                    <!-- Modal tambah data -->
                <x-modal.modal>
                    <x-modal.body action="{{ url('master-data/data-kabupaten/create') }}">
                        <x-modal.header title="Modal Header"/>
                        <div class="p-3">
                            <x-form.input type="text" label="Kabupaten" name="name" placeholder="Masukan nama kabupaten ..." />
                        </div>
                        <div class="flex justify-center items-center px-3 pb-3">
                            <button type="button" class="btn btn-secondary" @click="toggle">BATAL</button>
                            <button type="submit" class="btn btn-primary ltr:ml-2 rtl:mr-2">SIMPAN</button>
                        </div>
                    </x-modal.body>
                </x-modal.modal>
                <!-- END Modal tambah data -->
                </div>
               

            </x-card.header>
            
            <div class="p-3 w-full overflow-x-auto">
                <x-table.table>
                    <thead>
                        <tr>
                            <x-table.th label="No." />
                            <x-table.th label="Nama Kecamatan" />
                            <x-table.th label="Aksi" />
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($list_city as $item)
                        <tr>
                            <x-table.td label="{{ $loop->iteration }}" />
                            <x-table.td label="{{ ucwords($item->name )}}" />
                            <x-table.td-action x-data="modal">
                                <x-button.btn-modal class="warning p-0 w-8 h-8" icons icon="eye" @click="toggle" /> 
                                <x-button.btn-modal class="primary p-0 w-8 h-8" icons icon="edit" @click="toggle" /> 
                                <x-button.btn-modal class="danger p-0 w-8 h-8" icons icon="trash-2" @click="toggle" /> 
                                <x-modal.modal>
                                    <x-modal.body action="{{ url('master-data/data-kabupaten/create') }}">
                                        <x-modal.header title="Modal Header"/>
                                        <div class="p-3">
                                            <x-form.input type="text" label="Kabupaten" name="name" placeholder="Masukan nama kabupaten ..." />
                                        </div>
                                        <div class="flex justify-center items-center px-3 pb-3">
                                            <button type="button" class="btn btn-secondary" @click="toggle">BATAL</button>
                                            <button type="submit" class="btn btn-primary ltr:ml-2 rtl:mr-2">SIMPAN</button>
                                        </div>
                                    </x-modal.body>
                                </x-modal.modal>
                                <!-- END Modal tambah data -->
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
            </div>
        </x-card.card>
    </div>
</x-app>