<!DOCTYPE html>
<html>
    <head>
        <title>Haine</title>
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet"
              href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
              integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
              crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    </head>
    <body class="background_haine">
        <div class="container-fluid p-0">
            <div class="border-bottom border-secondary p-2">
                @include('navigation.header-navigation')
            </div>
            <div class="content">
                @yield('content')
            </div>
        </div>
    </body>
</html>
