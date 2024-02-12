@extends('auth.auth-base')

@section('content')
    <div class="mb-7">
        <h1 class="mb-3 text-2xl font-bold !leading-snug dark:text-white">Lupa Kata Sandi</h1>
        <p>Kami akan kirimkan OTP ke whatsappmu</p>
    </div>
    <form class="space-y-5" @submit.prevent="window.location = 'index.html'">
        <div>
            <label for="phoneNumber" class="dark:text-white">No. Handphone (Whatsapp)</label>
            <div class="relative text-white-dark">
                <input id="phoneNumber" type="tel" placeholder="Masukkan Nomor Handphone"
                    class="form-input ps-10 placeholder:text-white-dark" />
                <span class="absolute start-4 top-1/2 -translate-y-1/2">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <path opacity="0.5"
                            d="M10.65 2.25H7.35C4.23873 2.25 2.6831 2.25 1.71655 3.23851C0.75 4.22703 0.75 5.81802 0.75 9C0.75 12.182 0.75 13.773 1.71655 14.7615C2.6831 15.75 4.23873 15.75 7.35 15.75H10.65C13.7613 15.75 15.3169 15.75 16.2835 14.7615C17.25 13.773 17.25 12.182 17.25 9C17.25 5.81802 17.25 4.22703 16.2835 3.23851C15.3169 2.25 13.7613 2.25 10.65 2.25Z"
                            fill="currentColor" />
                        <path
                            d="M14.3465 6.02574C14.609 5.80698 14.6445 5.41681 14.4257 5.15429C14.207 4.89177 13.8168 4.8563 13.5543 5.07507L11.7732 6.55931C11.0035 7.20072 10.4691 7.6446 10.018 7.93476C9.58125 8.21564 9.28509 8.30993 9.00041 8.30993C8.71572 8.30993 8.41956 8.21564 7.98284 7.93476C7.53168 7.6446 6.9973 7.20072 6.22761 6.55931L4.44652 5.07507C4.184 4.8563 3.79384 4.89177 3.57507 5.15429C3.3563 5.41681 3.39177 5.80698 3.65429 6.02574L5.4664 7.53583C6.19764 8.14522 6.79033 8.63914 7.31343 8.97558C7.85834 9.32604 8.38902 9.54743 9.00041 9.54743C9.6118 9.54743 10.1425 9.32604 10.6874 8.97558C11.2105 8.63914 11.8032 8.14522 12.5344 7.53582L14.3465 6.02574Z"
                            fill="currentColor" />
                    </svg>
                </span>
            </div>
        </div>
        <button type="submit"
            class="btn btn-gradient !mt-6 w-full border-0 uppercase shadow-[0_10px_20px_-10px_rgba(67,97,238,0.44)]">
            KIRIM OTP
        </button>
    </form>
    <div class="text-center dark:text-white mt-4">
        <a href="{{ url('login') }}">Sudah Ingat Kata Sandimu?</a>
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
