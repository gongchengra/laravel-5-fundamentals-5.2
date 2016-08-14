<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog</title>
    <link href="{{ elixir('output/final.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        @include('flash::message')
        @yield('content')
    </div>
    <script src="/js/all.js"></script>
    <script>
//    $('div.alert').not('.alert-important').delay(3000).slideUp(300);
        $('#flash-overlay-modal').modal();
    </script>
    @yield('footer')
</body>
</html>
