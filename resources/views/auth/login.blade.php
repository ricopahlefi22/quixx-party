@extends('auth.auth-base')

@section('content')
    <div class="mb-10">
        <h1 class="text-3xl font-extrabold uppercase !leading-snug text-primary md:text-4xl dark:text-white">
            Login
        </h1>
        <p>Login dahulu sebelum melanjutkan</p>
    </div>
    <form id="form" class="space-y-5 dark:text-white">
        <div>
            <label for="username">Username</label>
            <div class="relative text-white-dark">
                <input id="username" type="text" name="username" placeholder="Masukkan Username"
                    class="form-input ps-10 placeholder:text-white-dark" />
                <x-icon></x-icon>
            </div>
        </div>
        <div>
            <label for="password">
                Kata Sandi
            </label>
            <div class="relative text-white-dark">
                <input id="password" type="password" name="password" placeholder="Masukkan Kata Sandi"
                    class="form-input ps-10 placeholder:text-white-dark" />
                <x-icon></x-icon>
            </div>
        </div>
        <button id="submit" type="submit"
            class="btn btn-gradient !mt-6 w-full border-0 uppercase shadow-[0_10px_20px_-10px_rgba(67,97,238,0.44)]">
            Login
        </button>
    </form>
    <div class="text-center dark:text-white mt-4">
        <a href="{{ url('forgot-password') }}">Lupa Kata Sandi?</a>
    </div>
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
                        '<i class="animate-spin border-[3px] border-white border-l-transparent rounded-full w-5 h-5 inline-block align-middle m-auto"></i>'
                    ).prop('disabled', true);
                },
                success: function(response) {
                    if (response.code == 200) {
                        Swal.fire({
                            icon: "success",
                            title: response.status,
                            text: response.message,
                            padding: '2em',
                            customClass: 'sweet-alerts',
                            confirmButtonText: "Lanjut",
                            // confirmButtonColor: "#3B5DE7",
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

                    $("#submit").html("Login").prop('disabled', false);
                },
                error: function(error) {
                    console.error(error);
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

                    $("#submit").html("Login").prop('disabled', false);
                },
            });
        });
    </script>
@endpush
