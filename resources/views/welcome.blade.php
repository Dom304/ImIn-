<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vue 3 Test</title>
    <!-- Ensure the compiled CSS file is linked here -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">
    <div class="max-w-6xl mx-auto py-8">
        <h1 class="text-3xl font-bold underline">
            Vue 3 Test with Tailwind CSS
        </h1>
    </div>

    <div id="app" class="p-6 max-w-sm mx-auto bg-white rounded-xl shadow-md flex items-center space-x-4">
        <div class="shrink-0">
            <!-- Placeholder for an image or icon -->
            <img class="h-12 w-12" src="https://tailwindcss.com/img/logo.svg" alt="Tailwind">
        </div>
        <div>
            <div class="text-xl font-medium text-black">Tailwind CSS</div>
            <p class="text-gray-500">You're building with Vue 3 and Tailwind CSS!</p>
        </div>
    </div>

    <!-- Your scripts here, for example, Vue application script -->
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
