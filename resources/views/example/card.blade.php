<x-app>
    <h4 class="text-slate-900 dark:text-slate-200 text-lg font-medium mb-6">CARD COMPONENT</h4>
    <x-card.card>
        <x-card.header>
            <x-card.title title="Card Title" />
            {{-- <x-button.btn-icons url="#" class="outline-success btn-sm" icon="plus" /> --}}
            <!-- Modal -->
            <div x-data="modal">
                <div class="flex items-center justify-center gap-1">
                    <x-button.btn-modal  class="outline-primary btn-sm" icons icon="plus" @click="toggle" /> 
                </div>
                <x-modal.modal>
                    <x-modal.body>
                        <x-modal.header title="Modal Header"/>
                        <div class="p-3">
                            
                        </div>
                        <div class="flex justify-center items-center mt-8 p-3">
                            <button type="button" class="btn btn-outline-danger"
                                @click="toggle">Discard</button>
                            <button type="submit" class="btn btn-primary ltr:ml-2 rtl:mr-2">Save</button>
                        </div>
                    </x-modal.body>
                </x-modal.modal>
            </div>
            <!-- End Modal -->
        </x-card.header>
    </x-card.card>
</x-app>