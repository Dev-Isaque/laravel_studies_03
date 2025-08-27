<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page_title')</title>

    <link rel="stylesheet" href="http://127.0.0.1:8000/assets/bootstrap/bootstrap.min.css">
</head>

<body>

    @include('layouts.navbar')

    @yield('content')

    <script src="{{ asset('assets/bootstrap/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
