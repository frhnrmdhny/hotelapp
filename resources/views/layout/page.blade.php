<!DOCTYPE html>
<html lang="en" data-theme="retro">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/css/app.css')
</head>

<body>
    @yield('content')

    <script src="{{ URL::to('assets/js/jquery-3.5.1.min.js') }}"></script>
	
    @yield('script')
</body>

</html>
