
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

     <!-- Scripts -->
    <link rel="stylesheet" href="{{asset('css/output.css')}}" type="text/css">
    <script src="./node_modules/preline/dist/preline.js"></script>
    <title>Vue 3 Test</title>
    @vite('resources/js/app.js')
</head>
<body style="background: #FBF3F0;">
    <div id="app">
        @yield('content')
    </div>
</body>
</html>