<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Chatty</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        @include('templates.partials.navigation')
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>