<x-app>
    <x-card.card>
        <div class="p-3 flex items-center justify-between">
            <h2 class="text-base font-semibold text-slate-600">Data Desa</h2>
            <x-button.btn url="#" class="primary"  label="Tambah Data Desa" />
        </div>
        <div class="p-3">
            <div>
                <x-table.table>
                    <thead>
                        <tr>
                            <th><center>No.</center></th>
                            <th><center>Aksi</center></th>
                            <th><center>Nama Desa</center></th>
                            <th><center>Dapil Desa</center></th>
                            <th><center>Kecamatan Desa</center></th>
                            <th><center>Kabupaten Desa</center></th>
                        </tr>
                    </thead>
                    @foreach($list_village as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <x-table.td-action x-data="modal">
                            <x-button.btn url="#lihat" icons="eye" class="warning" modal />
                            <x-button.btn url="#edit" icons="pencil-square" class="primary" modal />
                            <x-button.btn url="{{url('master-data/data-kabupaten',$item->city_id)}}/delete" icons="trash" class="danger" />
                            </x-table.td-action>

                            <td>{{ucwords($item->name)}}</td>
                            <td>{{ucwords($item->zones->name)}}</td>
                            <td>{{ucwords($item->district->name)}}</td>
                            <td>{{ucwords($item->city->name)}}</td>
                        </tr>
                        @endforeach
                        <tbody>
                           <tr>
                            <th><center>No.</center></th>
                            <th><center>Aksi</center></th>
                            <th><center>Nama Desa</center></th>
                            <th><center>Dapil Desa</center></th>
                            <th><center>Kecamatan Desa</center></th>
                            <th><center>Kabupaten Desa</center></th>
                        </tr>
                    </tbody>
                </x-table.table>
            </div>
        </div>
    </x-card.card>

</x-app>