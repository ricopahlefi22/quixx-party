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


                <div class="animate__animated p-6" :class="[$store.app.animation]">
                    <!-- start main content section -->
                    <div>
                        <ul class="flex space-x-2 rtl:space-x-reverse">
                            <li>
                                <a href="javascript:;" class="text-primary hover:underline">Users</a>
                            </li>
                            <li class="before:content-['/'] ltr:before:mr-1 rtl:before:ml-1">
                                <span>Account Settings</span>
                            </li>
                        </ul>
                        <div class="pt-5">
                            <div class="mb-5 flex items-center justify-between">
                            </div>
                            <div x-data="{tab: 'home'}">
                                <ul class="mb-5 overflow-y-auto whitespace-nowrap border-b border-[#ebedf2] font-semibold dark:border-[#191e3a] sm:flex">
                                    <li class="inline-block">
                                        <a
                                            href="javascript:;"
                                            class="flex gap-2 border-b border-transparent p-4 hover:border-primary hover:text-primary"
                                            :class="{'!border-primary text-primary' : tab == 'home'}"
                                            @click="tab='home'"
                                        >
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                                                <path
                                                    opacity="0.5"
                                                    d="M2 12.2039C2 9.91549 2 8.77128 2.5192 7.82274C3.0384 6.87421 3.98695 6.28551 5.88403 5.10813L7.88403 3.86687C9.88939 2.62229 10.8921 2 12 2C13.1079 2 14.1106 2.62229 16.116 3.86687L18.116 5.10812C20.0131 6.28551 20.9616 6.87421 21.4808 7.82274C22 8.77128 22 9.91549 22 12.2039V13.725C22 17.6258 22 19.5763 20.8284 20.7881C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.7881C2 19.5763 2 17.6258 2 13.725V12.2039Z"
                                                    stroke="currentColor"
                                                    stroke-width="1.5"
                                                />
                                                <path d="M12 15L12 18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                            </svg>
                                            Home
                                        </a>
                                    </li>
                                  
                                    
                                </ul>
                                <template x-if="tab === 'home'">
                                    <div>
                                        <form class="mb-5 rounded-md border border-[#ebedf2] bg-white p-4 dark:border-[#191e3a] dark:bg-[#0e1726]" action="{{url('profil/update')}}" method="get">
                                        
                                            <h6 class="mb-5 text-lg font-bold">Profil Akun</h6>
                                            <div class="flex flex-col sm:flex-row">
                                                <div class="mb-5 w-full sm:w-2/12 ltr:sm:mr-4 rtl:sm:ml-4">
                                                    <img
                                                        src="{{asset('/logo.png')}}"
                                                        alt="image"
                                                        class="mx-auto h-20 w-20 rounded-full object-cover md:h-32 md:w-32"
                                                    />
                                                </div>
                                                <div class="grid flex-1 grid-cols-1 gap-5 sm:grid-cols-2">
                                                    <div>
                                                        <label for="name">Full Name</label>
                                                        <input id="name" type="text" name="name" placeholder="Nama Lengkap" value="{{ucwords(Auth::user()->name)}}" class="form-input" />
                                                    </div>

                                                    <div>
                                                        <label for="profession">Username</label>
                                                        <input id="profession" type="text" value="{{Auth::user()->username}}" placeholder="Username" name="username" class="form-input" />
                                                    </div>

                                                      <div>
                                                        <label for="phone">Phone</label>
                                                        <input id="phone" type="number" name="phone_number" value="{{Auth::user()->phone_number}}" placeholder="NO Telp" class="form-input" />
                                                    </div>

                                                    <div>
                                                        <label for="country">Kabupaten</label>
                                                        <select id="country" disabled class="form-select text-white-dark">
                                                            <option>{{Auth::user()->city->name}}</option>
                                                            <option selected="">{{Auth::user()->city->name}}</option>
                                                            <option>India</option>
                                                            <option>Japan</option>
                                                            <option>China</option>
                                                            <option>Brazil</option>
                                                            <option>Norway</option>
                                                            <option>Canada</option>
                                                        </select>
                                                    </div>

                                                      <div>
                                                        <label for="country">Dapil</label>
                                                        <select id="country" disabled class="form-select text-white-dark">
                                                            <option>{{Auth::user()->zones->name}}</option>
                                                            <option selected="">{{Auth::user()->zones->name}}</option>
                                                            <option>India</option>
                                                            <option>Japan</option>
                                                            <option>China</option>
                                                            <option>Brazil</option>
                                                            <option>Norway</option>
                                                            <option>Canada</option>
                                                        </select>
                                                    </div>

                                                    <div class="mt-3 sm:col-span-2">
                                                        <button type="submit" class="btn btn-primary">Save Change</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <form class="rounded-md border border-[#ebedf2] bg-white p-4 dark:border-[#191e3a] dark:bg-[#0e1726]" action="{{url('profil/change-password')}}" method="get">
                                    
                                            <h6 class="mb-5 text-lg font-bold">Ganti Password</h6>
                                            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
                                                <div class="flex">
                                                    <div
                                                        class="flex items-center justify-center rounded bg-[#eee] px-3 font-semibold ltr:mr-2 rtl:ml-2 dark:bg-[#1b2e4b]"
                                                    >
                                                    Password Baru
                                                    </div>
                                                    <input type="password" placeholder="Password Baru" name="new" class="form-input" />
                                                </div>
                                                <div class="flex">
                                                 
                                                </div>
                                                <div class="flex">
                                                    <div
                                                        class="flex items-center justify-center rounded bg-[#eee] px-3 font-semibold ltr:mr-2 rtl:ml-2 dark:bg-[#1b2e4b]"
                                                    >
                                                        Konfirmasi Password
                                                    </div>
                                                    <input type="password" placeholder="Konfirmasi Password Baru" name="confirm" class="form-input" />
                                                </div>

                                                 <div class="mt-3 sm:col-span-2">
                                                        <button type="submit" class="btn btn-danger">Change Password</button>
                                                    </div>
                                              
                                            </div>
                                        </form>
                                    </div>
                                </template>
                            </div>
                        </div>
                    </div>
                    <!-- end main content section -->

                </div>

@endsection