@extends('auth.auth-base')

@section('content')
    <div class="text-center p-6 bg-slate-100 dark:bg-slate-900 rounded-t">
        <a href="{{ url('/') }}">
            <img src="assets/images/logo-sm.png" class="w-14 h-14 mx-auto mb-2" />
        </a>
        <h3 class="font-semibold text-dark dark:text-white text-xl mb-1">
            Lupa Kata Sandi
        </h3>
        <p class="text-xs text-slate-800 dark:text-slate-400">
            Masukkan nomor handphone untuk mengatur ulang kata sandi.
        </p>
    </div>
    <button id="otpModalButton" href="#otpModal" type="button" data-modal-toggle="modal"></button>

    <form id="form" class="p-6">
        <div>
            <label for="phoneNumber" class="label">
                Nomor Handphone<span title="Wajib diisi" class="text-red-600 dark:text-red-400 text-xs">*</span>
                <div id="phoneNumberError" class="float-right text-red-600 dark:text-red-400 text-xs mt-1"></div>
            </label>
            <input type="tel" id="phoneNumber" name="phone_number"
                class="form-control dark:bg-slate-800/60 dark:border-slate-700/50" placeholder="Masukkan Nomor Handphone" />
        </div>
        <a href="{{ url('login') }}" class="text-xs text-slate-800 dark:text-slate-400 hover:underline">
            Sudah Ingat Kata Sandimu?
        </a>

        <div class="mt-6">
            <button id="submit"
                class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-blue-500 rounded hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                Kirim
            </button>
        </div>
    </form>

    <!-- MODAL -->
    <div class="modal fade" id="otpModal" data-backdrop="static">
        <div class="modal-dialog modal-dialog-center">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="staticBackdropLabel5">One Time Password</h6>
                    <button type="button" class="btn-close">&times;</button>
                </div>
                <form id="otpForm">
                    <input id="token" type="hidden" name="token">
                    <div class="modal-body  text-muted leading-relaxed">
                        <div>
                            <label for="otp" class="label">
                                Kode OTP<span title="Wajib diisi" class="text-red-600 dark:text-red-400 text-xs">*</span>
                                <div id="otpError" class="float-right text-red-600 dark:text-red-400 text-xs mt-1"></div>
                            </label>
                            <input type="text" id="otp" name="otp" data-inputmask='"mask": "999999"' data-mask
                                class="form-control dark:bg-slate-800/60 dark:border-slate-700/50"
                                placeholder="Masukkan Nomor Handphone" />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button id="otpSubmit" type="submit"
                            class="text-white bg-blue-500 hover:bg-blue-600  font-medium rounded text-sm px-3 py-2 dark:bg-blue-500 dark:hover:bg-blue-600 focus:outline-none  my-auto">
                            Lanjut
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <!-- form mask -->
    <script src="{{ asset('assets/libs/inputmask/min/jquery.inputmask.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/components.js') }}"></script>

    <script>
        $("[data-mask]").inputmask();

        $("#form").on('submit', function(e) {
            e.preventDefault();

            $.ajax({
                url: 'forgot-password',
                method: 'POST',
                data: new FormData(this),
                processData: false,
                dataType: "json",
                contentType: false,
                beforeSend: function() {
                    $("#phoneNumberError").html("");

                    $("#submit").html(
                        '<i class="fas fa-spinner animate-spin"></i>'
                    ).prop('disabled', true);
                },
                success: function(response) {
                    if (response.code == 200) {
                        Swal.fire({
                            type: "success",
                            title: response.status,
                            text: response.message,
                            confirmButtonText: "Lanjut",
                            confirmButtonColor: "#007BFF",
                            backdrop: true,
                            allowOutsideClick: () => {
                                console.log("Klik Tombol Lanjut");
                            },
                        }).then((result) => {
                            if (result.value == true) {
                                $("#otpModalButton").click();
                                $("#token").val(response.token);
                            }
                        });
                    } else {
                        Swal.fire({
                            type: "error",
                            title: response.status,
                            text: response.message,
                            confirmButtonText: "Tutup",
                            confirmButtonColor: "#6C757D",
                        });
                    }

                    $("#submit").html('Kirim').prop('disabled', false);
                },
                error: function(error) {
                    if (error.status == 422) {
                        var errors = error["responseJSON"]["errors"];
                        $("#phoneNumberError").html(errors["phone_number"]);

                        if (errors["phone_number"]) {
                            $("#phoneNumber").addClass('is-invalid').focus();
                        }
                    }

                    $("#submit").html('Kirim').prop('disabled', false);
                },
            });
        });

        $("#otpForm").on('submit', function(e) {
            e.preventDefault();

            $.ajax({
                url: 'otp',
                method: 'POST',
                data: new FormData(this),
                processData: false,
                dataType: "json",
                contentType: false,
                beforeSend: function() {
                    $("#otp").removeClass('is-invalid');

                    $("#otpSubmit").html(
                        '<i class="fas fa-spinner animate-spin"></i>'
                    ).prop('disabled', true);
                },
                success: function(response) {
                    if (response.code == 200) {
                        Swal.fire({
                            type: "success",
                            title: response.status,
                            text: response.message,
                            confirmButtonText: "Lanjut",
                            confirmButtonColor: "#007BFF",
                            backdrop: true,
                            allowOutsideClick: () => {
                                console.log("Klik Tombol Lanjut");
                            },
                        }).then((result) => {
                            if (result.value == true) {
                                location.href = response.route;
                            }
                        });
                    } else {
                        Swal.fire({
                            type: "error",
                            title: response.status,
                            text: response.message,
                            confirmButtonText: "Tutup",
                            confirmButtonColor: "#6C757D",
                        });
                    }

                    $("#otpSubmit").html('Lanjut').prop('disabled', false);
                },
                error: function(error) {
                    console.log(error);
                    if (error.status == 422) {
                        var errors = error["responseJSON"]["errors"];
                        $("#otpError").html(errors["otp"]);

                        if (errors["otp"]) {
                            $("#otp").addClass('is-invalid').focus();
                        }
                    }

                    $("#otpSubmit").html('Lanjut').prop('disabled', false);
                },
            });
        });
    </script>
@endpush
