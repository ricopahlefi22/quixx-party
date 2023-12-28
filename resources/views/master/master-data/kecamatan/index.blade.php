    <x-app>
        <x-card.card>
            <div class="p-3 flex items-center justify-between">
                <h2 class="text-base font-semibold text-slate-600">Data Kecamatan</h2>
                <x-button.btn url="#" class="primary"  label="Tambah Kecamatan" />
            </div>


            <form action="{{ url('master-data/data-kabupaten/create') }}" method="post">
                @csrf
                <div class="mt-3">
                   <select name="" id="" class="appearance-none border rounded w-full mt-3 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="" hidden>-- Pilih Kecamatan--</option>
                    @foreach ($list_city as $item)
                    <option value="{{ $item->city_id }}">{{ ucwords($item->name) }}</option>
                    @endforeach
                </select>


                <select name="" id="" class="appearance-none border rounded w-full mt-3 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="" hidden>-- Pilih Dapil--</option>
                    @foreach ($list_zones as $itemZones)
                    <option value="{{ $item->city_id }}">{{ ucwords($itemZones->name) }}</option>
                    @endforeach                   
                </select>

                <input name="name" class="shadow appearance-none border mt-3 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Kecamatan">

                <button class="bg-primary rounded-lg text-white px-4 py-2 mt-3 hover:bg-primary-299">SIMPAN</button>
            </div>
        </form>


        <div class="p-3">
            <div>
                <table class="table">
                    <thead>
                        <tr>
                            <th><center>#</center></th>
                            <th><center>Aksi</center></th>
                            <th><center>Kecamatan</center></th>
                            <th><center>Dapil</center></th>
                            <th><center>Kabupaten</center></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($list_district as $item)
                        <tr>
                            <td><center>{{$loop->iteration}}</center></td>
                             <x-table.td-action x-data="modal">
                                            <x-button.btn url="#lihat" icons="eye" class="warning" modal />
                                            <x-button.btn url="#edit" icons="pencil-square" class="primary" modal />
                                            <x-button.btn url="{{url('master-data/data-kabupaten',$item->city_id)}}/delete" icons="trash" class="danger" />
                                            </x-table.td-action>
                            <td><center>{{ucwords($item->name)}}</center></td>
                            <td><center>{{ucwords($item->zones->name)}}</center></td>
                            <td><center>{{ucwords($item->city->name)}}</center></td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                           <th><center>#</center></th>
                           <th><center>Aksi</center></th>
                           <th><center>Kecamatan</center></th>
                           <th><center>Dapil</center></th>
                           <th><center>Kabupaten</center></th>
                           <td>

                           </td>
                       </tr>
                   </tfoot>
               </table>
           </div>
       </div>
    </x-card.card>

    </x-app>