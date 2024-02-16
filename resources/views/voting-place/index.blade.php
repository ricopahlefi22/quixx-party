@extends('template.base')

@push('style')
    <!-- SweetAlert2 -->
    <link href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- DataTables -->
    <link href="{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
@endpush

@section('content')
    <div x-data="basic">
        <div class="panel">
            <h5 class="text-lg font-semibold dark:text-white-light">Tabel TPS</h5>
            <table id="table" class="table-hover whitespace-nowrap"></table>
        </div>
    </div>
@endsection

@push('script')
    <script src="{{ asset('assets/js/simple-datatables.js') }}"></script>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('basic', () => ({
                datatable: null,
                init() {
                    this.datatable = new simpleDatatables.DataTable('#table', {
                        data: {
                            headings: [
                                `No`,
                                `Nama`,
                                `Kecamatan`,
                                `C1 {{ env('PARTY') }}`,
                                `C1 Partai Lain`,
                                `C1 Provinsi`,
                                `Aksi`,
                            ],
                            data: [
                                @foreach ($voting_places as $voting_place)
                                    [
                                        `{{ $loop->iteration }}`,
                                        `{{ $voting_place->village->name . ' ' . $voting_place->name }}`,
                                        `{{ $voting_place->district->name }}`,
                                        `{{ $voting_place->votingResults->where('level', 'Kabupaten')->where('party_id', $web->party_id)->count() }}`,
                                        `{{ $voting_place->votingResults->where('level', 'Kabupaten')->where('party_id', '!=', $web->party_id)->count() }}`,
                                        `{{ $voting_place->votingResults->where('level', 'Provinsi')->where('party_id', $web->party_id)->count() }}`,
                                        `{{ $voting_place->id }}`,
                                    ],
                                @endforeach
                            ],
                        },
                        searchable: true,
                        perPage: 10,
                        perPageSelect: [10, 20, 30, 50, 100],
                        columns: [{
                                select: 1,
                                render: (data, cell, row) => {
                                    return `<div class="flex items-center gap-2">
                                            <strong class="font-bold">${data}</strong>
                                    </div>`;
                                },
                            },
                            {
                                select: 2,
                                render: (data, cell, row) => {
                                    return `${data}`;
                                },
                                sortable: false,
                            },
                            {
                                select: 3,
                                render: (data, cell, row) => {
                                    if (data != 0) {
                                        return `✅`;
                                    } else {
                                        return `❌`;
                                    }
                                },
                            },
                            {
                                select: 4,
                                render: (data, cell, row) => {
                                    if (data != 0) {
                                        return `✅`;
                                    } else {
                                        return `❌`;
                                    }
                                },
                            },
                            {
                                select: 5,
                                render: (data, cell, row) => {
                                    if (data != 0) {
                                        return `✅`;
                                    } else {
                                        return `❌`;
                                    }
                                },
                            },
                            {
                                select: 6,
                                render: (data, cell, row) => {
                                    return `<a href="input-c1/${data}" class="btn btn-info btn-sm">Formulir C1</a>`
                                },
                                sortable: false,
                            },
                        ],
                        firstLast: true,
                        firstText: '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5 rtl:rotate-180"> <path d="M13 19L7 12L13 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> <path opacity="0.5" d="M16.9998 19L10.9998 12L16.9998 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>',
                        lastText: '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5 rtl:rotate-180"> <path d="M11 19L17 12L11 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> <path opacity="0.5" d="M6.99976 19L12.9998 12L6.99976 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>',
                        prevText: '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5 rtl:rotate-180"> <path d="M15 5L9 12L15 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>',
                        nextText: '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5 rtl:rotate-180"> <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>',
                        labels: {
                            perPage: '{select}',
                        },
                        layout: {
                            top: '{search}',
                            bottom: '{info}{select}{pager}',
                        },
                    });
                },
            }));
        });
    </script>
@endpush
