<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="py-2 bg-slate-600">
    <h1 class="text-center text-cyan-300">
        Home Page
    </h1>
    <div class="text-center mt-4">
        <a href="{{ url('/calculator') }}" class="text-white bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded">
            Go to Calculator
        </a>
    </div>
</body>

</html>