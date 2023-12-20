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
                            <th><center>No.</center></th>
                            <th><center>No.</center></th>
                            <th><center>No.</center></th>
                            <th><center>No.</center></th>
                            <th><center>No.</center></th>
                            <th><center>No.</center></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><center>No.</center></td>
                            <td><center>No.</center></td>
                            <td><center>No.</center></td>
                            <td><center>No.</center></td>
                            <td><center>No.</center></td>
                            <td>
                                
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </x-card.card>

</x-app>