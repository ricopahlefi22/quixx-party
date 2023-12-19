<x-app>
    <x-card.card>
        <div class="p-3 flex items-center justify-between">
            <h2 class="text-base font-semibold text-slate-600">Header</h2>
            <x-button.btn url="#" class="success" label="success" />
        </div>
        <div class="p-3">
            <div>
                <x-table.table>
                    <thead>
                        <tr>
                            <x-table.th label="No." />
                            <x-table.th label="Name" />
                            <x-table.th label="Addrress" />
                            <x-table.th label="Email" />
                            <x-table.th label="Password" />
                            <x-table.th label="Action" />
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <x-table.td label="No." />
                            <x-table.td label="Name" />
                            <x-table.td label="Addrress" />
                            <x-table.td label="Email" />
                            <x-table.td label="Password" />
                            <x-table.td-action>
                                <x-button.dropdown-box>
                                    <x-button.dropdown-btn label="List"/>
                                    <x-button.dropdown-list>
                                        <x-button.dropdown-item url="#" label="List 1"/>
                                        <x-button.dropdown-item url="#" label="List 2"/>
                                        <x-button.dropdown-item url="#" label="List 3"/>
                                    </x-button.dropdown-list>
                                </x-button.dropdown-box>
                            </x-table.td-action>
                        </tr>
                        <tr>
                            <x-table.td label="No." />
                            <x-table.td label="Name" />
                            <x-table.td label="Addrress" />
                            <x-table.td label="Email" />
                            <x-table.td label="Password" />
                            <x-table.td-action>
                                <x-button.dropdown-box>
                                    <x-button.dropdown-btn label="List"/>
                                    <x-button.dropdown-list>
                                        <x-button.dropdown-item url="#" label="List 1"/>
                                        <x-button.dropdown-item url="#" label="List 2"/>
                                        <x-button.dropdown-item url="#" label="List 3"/>
                                    </x-button.dropdown-list>
                                </x-button.dropdown-box>
                            </x-table.td-action>
                        </tr>
                    </tbody>
                </x-table.table>
            </div>
        </div>
    </x-card.card>

    <x-card.card>
        <div class="grid grid-cols-12 gap-2 mb-12">
            <x-button.btn url="#" class="secondary" label="Secondary" />
            <x-button.btn url="#" class="primary" label="primary" />
            <x-button.btn url="#" class="warning" label="warning" />
            <x-button.btn url="#" class="info" label="info" />
            <x-button.btn url="#" class="danger" label="danger" />
            <x-button.btn url="#" class="success" label="success" />
        </div>
        <div class="">
            <x-form.input type="text"/>
            <x-form.input type="file" />
        </div>
    </x-card.card>
</x-app>