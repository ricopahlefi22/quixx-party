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
            <h5 class="text-lg font-semibold dark:text-white-light">Tabel Calon Legislatif</h5>
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
                            headings: ['No Urut', '', 'Nama', 'Partai', 'Jumlah Suara',
                                'Jenis Kelamin', 'Kota'
                            ],
                            data: [
                                @foreach ($candidates as $candidate)
                                    [
                                        '{{ $candidate->number }}',
                                        '{{ $candidate->party->logo }}',
                                        '{{ $candidate->name }}',
                                        '{{ $candidate->party->short_name }}',
                                        '20',
                                        '{{ $candidate->gender }}',
                                        '{{ $candidate->city }}',
                                    ],
                                @endforeach
                            ],
                        },
                        searchable: true,
                        perPage: 25,
                        perPageSelect: [10, 25, 50, 100],
                        columns: [{
                                select: 0,
                                render: (data, cell, row) => {
                                    return `<span class="text-[#E5B90D]">#${data}</span>`;
                                },
                                sortable: false,
                            },
                            {
                                select: 1,
                                render: (data, cell, row) => {
                                    return `<div class="flex items-center gap-2">
                                            <img src="{{ asset('${data}') }}" width="40">
                                    </div>`;
                                },
                                sortable: false,
                            },
                            {
                                select: 2,
                                render: (data, cell, row) => {
                                    return `<div class="flex items-center gap-2">
                                            <strong class="text-[#ee8232] font-bold">${data}</strong>
                                    </div>`;
                                },
                            },
                            {
                                select: 3,
                                render: (data, cell, row) => {
                                    return `${data}`;
                                },
                                sortable: false,
                            },
                            {
                                select: 5,
                                render: (data, cell, row) => {
                                    return `${data}`;
                                },
                                sortable: false,
                            },
                            {
                                select: 6,
                                render: (data, cell, row) => {
                                    return `${data}`;
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
