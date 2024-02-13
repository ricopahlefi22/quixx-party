<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>{{ $title }} - Quixx {{ env('PARTY') }}</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="icon" type="image/x-icon" href="{{ asset('logo.png') }}" />

<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&display=swap" rel="stylesheet" />

<link rel="stylesheet" type="text/css" media="screen" href="{{ asset('assets/css/perfect-scrollbar.min.css') }}" />
<link rel="stylesheet" type="text/css" media="screen" href="{{ asset('assets/css/style.css') }}" />
<link defer rel="stylesheet" type="text/css" media="screen" href="{{ asset('assets/css/animate.css') }}" />

<script src="{{ asset('assets/js/perfect-scrollbar.min.js') }}"></script>
<script defer src="{{ asset('assets/js/popper.min.js') }}"></script>
<script defer src="{{ asset('assets/js/tippy-bundle.umd.min.js') }}"></script>
<script defer src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
