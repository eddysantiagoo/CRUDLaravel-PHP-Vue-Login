<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="https://emojitool.com/img/apple/ios-13.3/father-christmas-type-1-2-3000.png" type="image/x-icon">
    <title>Login hecho con LaraTrust</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    
    <div class="container h-100">
        @yield('content')
    </div>

</body>
</html>