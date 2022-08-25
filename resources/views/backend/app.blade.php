<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('app.name', 'Demo admin')}} - @yield('title')</title>
    @include('backend.page.parsal.cssLink')
    @stack('css')
</head>
<body>
@include('backend.page.parsal.header')

<main class="content overflow-hidden" id="content">
    @include('backend.page.parsal.topbar')

    @yield('admin-content')

    @include('backend.page.parsal.footer')
</main>

@include('backend.page.parsal.jsLink')
@stack('js')
</body>
</html>
