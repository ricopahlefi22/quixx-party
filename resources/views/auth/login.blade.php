@extends('auth.auth-base')

@section('content')
    <div class="text-center p-6 bg-slate-100 dark:bg-slate-900 rounded-t">
        <a href="{{ url('/') }}">
            <img src="assets/images/logo-sm.png" class="w-14 h-14 mx-auto mb-2" />
        </a>
        <h3 class="font-semibold text-dark dark:text-white text-xl mb-1">
            Quixx {{ env('PARTY') }}
        </h3>
        <p class="text-xs text-slate-800 dark:text-slate-400">Login terlebih dahulu untuk melanjutkan.</p>
    </div>

    <form id="form" class="p-6">
        <div>
            <label for="username" class="label">
                Username<span title="Wajib diisi" class="text-red-600 dark:text-red-400 text-xs">*</span>
                <div id="usernameError" class="float-right text-red-600 dark:text-red-400 text-xs mt-1"></div>
            </label>
            <input type="text" id="username" name="username"
                class="form-control dark:bg-slate-800/60 dark:border-slate-700/50" placeholder="Masukkan Username" />
        </div>
        <div class="mt-4">
            <label for="password" class="label">
                Kata Sandi<span title="Wajib diisi" class="text-red-600 dark:text-red-400 text-xs">*</span>
                <div id="passwordError" class="float-right text-red-600 dark:text-red-400 text-xs mt-1"></div>
            </label>
            <input type="password" id="password" name="password"
                class="form-control dark:bg-slate-800/60 dark:border-slate-700/50" placeholder="Masukkan Kata Sandi" />
        </div>
        <a href="{{ url('forgot-password') }}" class="text-xs text-slate-800 dark:text-slate-400 hover:underline">
            Lupa Kata Sandi?
        </a>

        <div class="mt-6">
            <button id="submit"
                class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-blue-600 rounded hover:bg-blue-800 focus:outline-none focus:bg-blue-800">
                Login
            </button>
        </div>
    </form>
@endsection

@push('script')
    <script type="text/javascript">
        $("#form").on("submit", function(e) {
            e.preventDefault();

            $.ajax({
                url: 'login',
                method: 'POST',
                data: new FormData(this),
                processData: false,
                dataType: "json",
                contentType: false,
                beforeSend: function() {
                    $("#usernameError").html("");
                    $("#passwordError").html("");
                    $("#submit").html(
                        '<i class="fas fa-spinner animate-spin mr-2"></i>'
                    ).prop('disabled', true);
                },
                success: function(response) {
                    if (response.code == 200) {
                        Swal.fire({
                            type: "success",
                            title: response.status,
                            text: response.message,
                            confirmButtonText: "Lanjut",
                            confirmButtonColor: "#3B5DE7",
                            backdrop: true,
                            allowOutsideClick: () => {
                                console.log("Klik Tombol Lanjut");
                            },
                        }).then((result) => {
                            if (result.value == true) {
                                window.location.href = response.redirect_url;
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

                    $("#submit").html("Masuk").prop('disabled', false);
                },
                error: function(error) {
                    if (error.status == 422) {
                        var rspError = error["responseJSON"]["errors"];
                        $("#usernameError").html(rspError["username"]);
                        $("#passwordError").html(rspError["password"]);

                        if (rspError["password"]) {
                            $("#password").focus();
                        }

                        if (rspError["username"]) {
                            $("#username").focus();
                        }
                    }

                    $("#submit").html("Masuk").prop('disabled', false);
                },
            });
        });
    </script>
@endpush
