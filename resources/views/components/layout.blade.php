<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('images/dwcl-logo.png') }}" type="image/x-icon">
    <title>Divine Word College of Legazpi</title>
    @vite('resources/css/app.css')
</head>
<body>

    @if (session('success'))

    <div id="flash" class="p-2 text-sm text-center text-green-500 bg-green-50">
        {{ session('success') }}
    </div>

    @endif

    <header>
        <nav>
            <h1><img src="{{ asset('images/dwcl-logo.png') }}" class="inline-block h-10 mr-2"></h1>
            <div class="flex items-center justify-center gap-5">
                <a class="text-md hover:text-blue-500" href="{{ route('profile') }}">Profile</a>
                <a class="text-md hover:text-blue-500" href="{{ route('students.index') }}">Students</a>
                <a class="text-md hover:text-blue-500" href="{{ route('students.create') }}">Add Students</a>
            </div>
        </nav>
    </header>

    <main class="container">
        {{$slot}}
    </main>
    
</body>
</html>