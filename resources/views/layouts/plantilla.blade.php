<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>@yield('title') </title>
    
    {{-- favicon --}}
    {{-- estilos --}}

</head>

<body>
    {{-- header --}}
    {{-- nav --}}
    @include('components.flash_alerts')

    @yield('content')
    {{-- footer --}}
    {{-- script --}}
</body>
</html>
