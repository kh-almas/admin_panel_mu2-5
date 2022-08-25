<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('app.name', 'Demo admin')}} - @yield('title')</title>
    @include('backend.examples.page.parsal.cssLink')
    @stack('css')
</head>
<body>
@include('backend.examples.page.parsal.header')

<main class="content" id="content">
    @include('backend.examples.page.parsal.topbar')

    @yield('example-content')

    @include('backend.examples.page.parsal.footer')
</main>

@include('backend.examples.page.parsal.jsLink')
@stack('js')
</body>
</html>
