<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quixx || LOGIN</title>
    <link rel="stylesheet" href="{{ asset('template/node_modules/bootstrap-icons/font/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/plugins/data-table/datatable-bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/css/output.css') }}">
</head>

<body class="login-page">

    <div class="box">
		<form action="{{ url('login') }}" method="POST">
			@csrf
			<div class="brands">qp</div>
			<div class="form-header">
				<h2>QUIXX PARTY</h2>
				<p>Silahkan login menggunakan akun anda !</p>
			</div>
			<div class="form-body">
				<label for="email" class="form-group">
					<span class="icons icons-left">
						<i class="bi bi-envelope"></i>
					</span>
					<input type="email" name="email" placeholder="Enter email ..." class="form-control @error('email') is-invalid @enderror">
					
				</label>
				<label for="password" class="form-group">
					<span class="icons icons-left">
						<i class="bi bi-lock"></i>
					</span>
					<input type="password" name="password" placeholder="Enter password ..." class="form-control @error('email') is-invalid @enderror">
					<span class="icons icons-right">
						<i class="bi bi-eye-slash"></i>
					</span>
				</label>
				<button class="btn btn-primary">SIGN-IN</button>
			</div>
		</form>
	</div>


    <script src="{{ asset('template/assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('template/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('template/assets/plugins/feather-icons/dist/feather.min.js') }}"></script>
    <script src="{{ asset('template/assets/plugins/data-table/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('template/assets/plugins/data-table/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('template/assets/js/app.js') }}"></script>
    <script src="{{ asset('template/assets/js/table.js') }}"></script>
</body>

</html>