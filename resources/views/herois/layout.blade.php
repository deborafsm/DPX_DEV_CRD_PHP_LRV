<!DOCTYPE html>
<html>
    <head>
        <title>Herois- @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            <h1>Sect</h1>
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>