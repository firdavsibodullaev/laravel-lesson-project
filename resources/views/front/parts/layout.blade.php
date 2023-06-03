<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <div>
        @include('front.parts.header')
    </div>

    @yield('content')

    <div>
        @include('front.parts.footer')
    </div>
</body>
</html>