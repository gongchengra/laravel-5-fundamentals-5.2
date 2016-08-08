<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="{{ elixir('output/final.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        @include('flash::message')
        @yield('content')
    </div>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
//    $('div.alert').not('.alert-important').delay(3000).slideUp(300);
        $('#flash-overlay-modal').modal();
    </script>
    @yield('footer')
</body>
</html>
