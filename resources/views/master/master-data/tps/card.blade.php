<x-app>
    <x-card.card>
        <div class="p-3 flex items-center justify-between">
            <h2 class="text-base font-semibold text-slate-600">Header</h2>
            <a href="" class="px-4 py-2 bg-green-500 hover:bg-green-600 text-white rounded-md">Tambah</a>
        </div>
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

    <x-card.card>
        <div class="grid grid-cols-12 gap-2">
            <x-button.btn url="#" class="secondary" label="Secondary" />
            <x-button.btn url="#" class="primary" label="primary" />
            <x-button.btn url="#" class="warning" label="warning" />
            <x-button.btn url="#" class="info" label="info" />
            <x-button.btn url="#" class="danger" label="danger" />
            <x-button.btn url="#" class="success" label="success" />
        </div>
        <div class="">
            <x-form.input />
        </div>
    </x-card.card>
</x-app>