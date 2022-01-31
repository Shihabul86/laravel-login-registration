<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel authentication & crud</title>
    {{-- bootstrap --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    {{-- fontawesome --}}
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    @stack('css')
</head>
<body>
    @include('partials.header')

    @yield('content')

    @include('partials.footer')
    
    {{-- bootstrap --}}
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    {{-- fontAwesome --}}
    <script src="{{ asset('assets/js/all.min.js') }}"></script>
    @stack('js')
</body>
</html>