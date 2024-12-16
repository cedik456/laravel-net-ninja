<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    @vite('resources/css/app.css')
</head>
<body>
    <h1>Welcome to Laravel!</h1>
    <p>Click the button below to view the list of students</p>

    <a href="/students" class="p-1 m-1 text-white bg-black border rounded-md btn">
        Find Students
    </a>
    
</body>
</html>