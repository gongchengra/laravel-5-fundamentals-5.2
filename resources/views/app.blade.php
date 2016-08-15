<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog</title>
    <link href="{{ elixir('css/all.css') }}" rel="stylesheet">
</head>
<body>
    @include('partials.nav')
    <div class="container">
        @include('flash::message')
        @yield('content')
    </div>
   	<script src="{{ elixir('js/all.js') }}"></script> 
    <script>
        $('#flash-overlay-modal').modal();
    </script>
    @yield('footer')
</body>
</html>
