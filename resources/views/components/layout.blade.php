<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DWCL</title>
    @vite('resources/css/app.css')
</head>
<body>

    @if (session('success'))

    <div id="flash" class="p-4 text-center text-green-500 bg-green-50">
        {{ session('success') }}
    </div>

    @endif

    <header>
        <nav>
            <h1>DWCL</h1>
            <div class="flex gap-5">
                <a class="hover:text-blue-500" href="{{ route('students.create') }}">Add Student</a>
                <a class="hover:text-blue-500" href="{{ route('students.index') }}">Students</a>
                <a class="hover:text-blue-500" href="/subjects">Subjects</a>
            </div>
        </nav>
    </header>

    <main class="container">
        {{$slot}}
    </main>
    
</body>
</html>