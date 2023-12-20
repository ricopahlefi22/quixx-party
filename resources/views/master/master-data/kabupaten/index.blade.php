<x-app>
    <x-card.card>
        <div class="p-3 flex items-center justify-between">
            <h2 class="text-base font-semibold text-slate-600">Data Kabupaten</h2>
            <x-button.btn url="#" class="primary" data-modal-target="default-modal" data-modal-toggle="default-modal"  label="Tambah Kabupaten" />
        
        </div>
        <form action="{{ url('master-data/data-kabupaten/create') }}" method="post">
            @csrf
            <div class="mt-3">
                  <input name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Kabupaten">
                  
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
                            <th><center>Nama City</center></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>-</td>
                           <td>{{ $item->name }}</td>
                        </tr>
                    </tbody>


                    <tfoot>
                        <tr>
                            <th><center>#</center></th>
                            <th><center>Aksi</center></th>
                            <th><center>Nama City</center></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </x-card.card>

</x-app>