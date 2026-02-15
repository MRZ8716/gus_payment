<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="" name="description">
    <meta content="" name="keywords">

    <title>@yield('title', config('app.name'))</title>

    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.gstatic.com" rel="preconnect">
    @vite(['resources/assets/vendor/bootstrap/css/bootstrap.min.css', 'resources/assets/vendor/bootstrap-icons/bootstrap-icons.css', 'resources/assets/vendor/boxicons/css/boxicons.min.css', 'resources/assets/css/style.css'])

    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    @stack('styles')
</head>

<body class="@yield('body-class')">

    @yield('body')

    @stack('scripts')
    @vite(['resources/assets/vendor/bootstrap/js/bootstrap.bundle.min.js'])

</body>

</html>
