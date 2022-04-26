<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css" >
    <title>@yield('tab_title')</title>
</head>
<body>

    <div class="main">

        @include('includes.header')
            @yield('content')
        @include('includes.footer')

    </div>

</body>
</html>