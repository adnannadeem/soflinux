<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hammersmith+One&family=Herr+Von+Muellerhoff&family=League+Spartan:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website_general.css') }}">
    @stack('css')


</head>
<body class="website-body text-body">
    <div id="app">
        @include('website.partials.navbar')

        <!-- Main Content -->
        <main class="container-fluid p-0">
            @yield('content')
        </main>
        @include('website.partials.frontend-footer')
    </div>
    
    
    @stack('js')
</body>
</html>
