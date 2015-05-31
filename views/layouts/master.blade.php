<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', liana('settings')->get('site.name'))</title>
    <link rel="stylesheet" href="{{ elixir('css/site.css') }}">
    <script src="{{ elixir('js/site.js') }}"></script>
</head>
<body>
    @yield('content')
</body>
</html>
