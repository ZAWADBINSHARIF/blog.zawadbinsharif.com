<!DOCTYPE html>
<html data-them="fantasy" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/assets/favicons/icons8-z-16.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/assets/favicons/icons8-z-32.png') }}">
    <link rel="icon" type="image/png" sizes="67x67" href="{{ asset('/assets/favicons/icons8-z-67.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('/assets/favicons/icons8-z-96.png') }}">
    <link rel="icon" type="image/png" sizes="100x100" href="{{ asset('/assets/favicons/icons8-z-100.png') }}">

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    <title>{{ $title ?? 'Page Title' }}</title>
</head>

<body>

    <div class="container mx-auto">
        @livewire('navbar')

        {{ $slot }}

        <x-footer />
    </div>

</body>

</html>
