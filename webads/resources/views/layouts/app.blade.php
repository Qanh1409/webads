<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
</head>

<body>
    {{-- Check if the user is logged in --}}
    @if (Auth::check())
        @include('layouts.header_users1') {{-- Include header for logged-in users --}}
    @else
        @include('layouts.header_users') {{-- Include header for guests --}}
    @endif

    <main>
        @yield('content')
    </main>

    @include('layouts.footer_users')
</body>

</html>
