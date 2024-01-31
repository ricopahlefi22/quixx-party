@extends('auth.auth-base')

@section('content')
    <div class="text-center p-6 bg-slate-100 dark:bg-slate-900 rounded-t">
        <a href="{{ url('/') }}">
            <img src="assets/images/logo-sm.png" class="w-14 h-14 mx-auto mb-2" />
        </a>
        <h3 class="font-semibold text-dark dark:text-white text-xl mb-1">
            Atur Ulang Kata Sandi
        </h3>
        <p class="text-xs text-slate-800 dark:text-slate-400">
            Perbarui kata sandi anda untuk melanjutkan.
        </p>
    </div>

    <form id="form" class="p-6">
        <input type="hidden" name="token" value="{{ $token }}">
        <div>
            <label for="password" class="label">
                Kata Sandi Baru<span title="Wajib diisi" class="text-red-600 dark:text-red-400 text-xs">*</span>
                <div id="passwordError" class="float-right text-red-600 dark:text-red-400 text-xs mt-1"></div>
            </label>
            <input type="password" id="password" name="password"
                class="form-control dark:bg-slate-800/60 dark:border-slate-700/50" placeholder="********" />
        </div>
        <div class="mt-4">
            <label for="confirmPassword" class="label">
                Konfirmasi Kata Sandi<span title="Wajib diisi" class="text-red-600 dark:text-red-400 text-xs">*</span>
                <div id="confirmPasswordError" class="float-right text-red-600 dark:text-red-400 text-xs mt-1"></div>
            </label>
            <input type="password" id="confirmPassword" name="confirm_password"
                class="form-control dark:bg-slate-800/60 dark:border-slate-700/50" placeholder="********" />
        </div>

        <div class="mt-6">
            <button id="submit"
                class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-blue-500 rounded hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                Simpan
            </button>
        </div>
    </form>
@endsection

@push('script')
    <script>
        $("#password").focus();

        $("#form").on('submit', function(e) {
            e.preventDefault();

            $.ajax({
                url: 'reset-password',
                method: 'POST',
                data: new FormData(this),
                processData: false,
                dataType: "json",
                contentType: false,
                beforeSend: function() {
                    $("#passwordError").html("");
                    $("#confirmPasswordError").html("");

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
                                window.location.href = '/login';
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
                        $("#passwordError").html(errors["password"]);
                        $("#confirmPasswordError").html(errors["confirm_password"]);

                        if (errors["confirm_password"]) {
                            $("#confirmPassword").addClass('is-invalid').focus();
                        }

                        if (errors["password"]) {
                            $("#password").addClass('is-invalid').focus();
                        }
                    }

                    $("#submit").html('Kirim').prop('disabled', false);
                },
            });
        });
    </script>
@endpush
