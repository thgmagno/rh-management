<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} @isset($pageTitle) - {{ $pageTitle }} @endisset</title>
    <!-- favicon -->
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/png">
    <!-- resources -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/datatables/datatables.min.css') }}">
    <!-- custom -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
</head>

<body>

    <!-- user bar -->
    <x-user-bar />

    <div class="main-content">
        <!-- sidebar -->
        <x-side-bar />

        <!-- main content -->
        {{ $slot }}
    </div>

    <!-- resources -->
    <script src="{{ asset('assets/datatables/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/datatables/datatables.min.js') }}"></script>

</body>

</html>