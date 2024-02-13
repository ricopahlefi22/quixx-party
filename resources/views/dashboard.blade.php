@extends('template.base')

@section('content')
    <div x-data="analytics">
        <ul class="flex space-x-2 rtl:space-x-reverse">
            <li>
                <a href="javascript:;" class="text-primary hover:underline">Dashboard</a>
            </li>
            <li class="before:mr-1 before:content-['/'] rtl:before:ml-1">
                <span>Analytics</span>
            </li>
        </ul>
        <div class="pt-5">
            <div class="mb-6 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <div class="panel h-full sm:col-span-2 lg:col-span-1">
                    <!-- statistics -->
                    <div class="mb-5 flex items-center justify-between dark:text-white-light">
                        <h5 class="text-lg font-semibold">Statistics</h5>
                        <div x-data="dropdown" @click.outside="open = false" class="dropdown">
                            <a href="javascript:;" @click="toggle">
                                <svg class="h-5 w-5 text-black/70 hover:!text-primary dark:text-white/70"
                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="5" cy="12" r="2" stroke="currentColor" stroke-width="1.5" />
                                    <circle opacity="0.5" cx="12" cy="12" r="2" stroke="currentColor"
                                        stroke-width="1.5" />
                                    <circle cx="19" cy="12" r="2" stroke="currentColor" stroke-width="1.5" />
                                </svg>
                            </a>
                            <ul x-cloak x-show="open" x-transition x-transition.duration.300ms
                                class="ltr:right-0 rtl:left-0">
                                <li><a href="javascript:;" @click="toggle">This Week</a></li>
                                <li><a href="javascript:;" @click="toggle">Last Week</a></li>
                                <li><a href="javascript:;" @click="toggle">This Month</a></li>
                                <li><a href="javascript:;" @click="toggle">Last Month</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="grid gap-8 text-sm font-bold text-[#515365] sm:grid-cols-2">
                        <div>
                            <div>
                                <div>Total Visits</div>
                                <div class="text-lg text-[#f8538d]">423,964</div>
                            </div>
                            <div x-ref="totalVisit" class="overflow-hidden"></div>
                        </div>

                        <div>
                            <div>
                                <div>Paid Visits</div>
                                <div class="text-lg text-[#f8538d]">7,929</div>
                            </div>
                            <div x-ref="paidVisit" class="overflow-hidden"></div>
                        </div>
                    </div>
                </div>

                <div class="panel h-full">
                    <div class="mb-5 flex items-center justify-between dark:text-white-light">
                        <h5 class="text-lg font-semibold">Expenses</h5>
                        <div x-data="dropdown" @click.outside="open = false" class="dropdown">
                            <a href="javascript:;" @click="toggle">
                                <svg class="h-5 w-5 text-black/70 hover:!text-primary dark:text-white/70"
                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="5" cy="12" r="2" stroke="currentColor" stroke-width="1.5" />
                                    <circle opacity="0.5" cx="12" cy="12" r="2" stroke="currentColor"
                                        stroke-width="1.5" />
                                    <circle cx="19" cy="12" r="2" stroke="currentColor" stroke-width="1.5" />
                                </svg>
                            </a>
                            <ul x-cloak x-show="open" x-transition x-transition.duration.300ms
                                class="ltr:right-0 rtl:left-0">
                                <li><a href="javascript:;" @click="toggle">This Week</a></li>
                                <li><a href="javascript:;" @click="toggle">Last Week</a></li>
                                <li><a href="javascript:;" @click="toggle">This Month</a></li>
                                <li><a href="javascript:;" @click="toggle">Last Month</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="my-10 text-3xl font-bold text-[#e95f2b]">
                        <span>$ 45,141</span>
                        <span class="text-sm text-black ltr:mr-1 rtl:ml-1 dark:text-white-light">this week
                        </span>
                        <svg class="inline h-5 w-5 text-success" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.5"
                                d="M22 7L14.6203 14.3347C13.6227 15.3263 13.1238 15.822 12.5051 15.822C11.8864 15.8219 11.3876 15.326 10.3902 14.3342L10.1509 14.0962C9.15254 13.1035 8.65338 12.6071 8.03422 12.6074C7.41506 12.6076 6.91626 13.1043 5.91867 14.0977L2 18"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M22.0001 12.5458V7H16.418" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="flex items-center justify-between">
                        <div
                            class="h-5 w-full overflow-hidden rounded-full bg-dark-light p-1 shadow-3xl dark:bg-dark-light/10 dark:shadow-none">
                            <div class="relative h-full w-full rounded-full bg-gradient-to-r from-[#4361ee] to-[#805dca] before:absolute before:inset-y-0 before:m-auto before:h-2 before:w-2 before:rounded-full before:bg-white ltr:before:right-0.5 rtl:before:left-0.5"
                                style="width: 65%"></div>
                        </div>
                        <span class="ltr:ml-5 rtl:mr-5 dark:text-white-light">57%</span>
                    </div>
                </div>

                <div class="panel grid h-full grid-cols-1 content-between overflow-hidden before:absolute before:-right-44 before:top-0 before:bottom-0 before:m-auto before:h-96 before:w-96 before:rounded-full before:bg-[#1937cc]"
                    style="background: linear-gradient(0deg, #00c6fb -227%, #005bea) !important">
                    <div class="z-[7] mb-16 flex items-start justify-between text-white-light">
                        <h5 class="text-lg font-semibold">Total Balance</h5>

                        <div class="relative whitespace-nowrap text-xl">
                            $ 41,741.42
                            <span
                                class="mt-1 table rounded bg-[#4361ee] p-1 text-xs text-[#d3d3d3] ltr:ml-auto rtl:mr-auto">+
                                2453</span>
                        </div>
                    </div>
                    <div class="z-10 flex items-center justify-between">
                        <div class="flex items-center justify-between">
                            <a href="javascript:;"
                                class="place-content-center rounded p-1 text-white-light shadow-[0_0_2px_0_#bfc9d4] hover:bg-[#1937cc] ltr:mr-2 rtl:ml-2">
                                <svg class="h-5 w-5" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="12" y1="5" x2="12" y2="19">
                                    </line>
                                    <line x1="5" y1="12" x2="19" y2="12">
                                    </line>
                                </svg>
                            </a>
                            <a href="javascript:;"
                                class="grid place-content-center rounded p-1 text-white-light shadow-[0_0_2px_0_#bfc9d4] hover:bg-[#1937cc]">
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M2 12C2 8.22876 2 6.34315 3.17157 5.17157C4.34315 4 6.22876 4 10 4H14C17.7712 4 19.6569 4 20.8284 5.17157C22 6.34315 22 8.22876 22 12C22 15.7712 22 17.6569 20.8284 18.8284C19.6569 20 17.7712 20 14 20H10C6.22876 20 4.34315 20 3.17157 18.8284C2 17.6569 2 15.7712 2 12Z"
                                        stroke="currentColor" stroke-width="1.5"></path>
                                    <path opacity="0.5" d="M10 16H6" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round"></path>
                                    <path opacity="0.5" d="M14 16H12.5" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round"></path>
                                    <path opacity="0.5" d="M2 10L22 10" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round"></path>
                                </svg>
                            </a>
                        </div>
                        <a href="javascript:;"
                            class="z-10 rounded p-1 text-white-light shadow-[0_0_2px_0_#bfc9d4] hover:bg-[#4361ee]">
                            Upgrade
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script defer src="{{ asset('assets/js/apexcharts.js') }}"></script>
@endpush
