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

    <header class="p-4 mx-10">
        <nav class="flex justify-between">
            <h1>DWCL</h1>
            <div class="flex gap-3">
                <a class="hover:underline" href="/students/create">Add Students</a>
                <a class="hover:underline" href="/students">Students</a>
                <a class="hover:underline" href="/subjects">Subjects</a>
            </div>
        </nav>
    </header>

    <main class="m-14">
        {{$slot}}
    </main>
    
</body>
</html>