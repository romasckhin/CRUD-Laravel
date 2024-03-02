<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD-Laravel</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script src="{{ asset('assets/js/script.js') }}" defer ></script>
</head>
<body>

<header class="header">
    <div class="container header__container">
        @include('components.navbar')
    </div>
</header>
    
<main>
    <div class="container">
        @yield('main')
    </div>
</main>

</body>
</html>