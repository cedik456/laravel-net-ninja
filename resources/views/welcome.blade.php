<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    @vite('resources/css/app.css')
</head>
<body class="px-8 py-10 text-center">
    <h1>Welcome to Laravel!</h1>
    <p>Click the button below to view the list of students</p>

    <a href="/students" class="inline-block mt-4 btn">
        Find Students
    </a>
    
</body>
</html>