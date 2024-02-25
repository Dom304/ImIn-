<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/output.css')}}" type="text/css">
    <script src="./node_modules/preline/dist/preline.js"></script>
    <title>Vue 3 Test</title>
    @vite('resources/js/app.js')
</head>
<body>
    <div id="app">
        @yield('content')
    </div>
</body>
</html>