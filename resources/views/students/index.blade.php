<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
</head>
<body>
    {{-- <h1>{{$greetings}}</h1> Accessing a dynamic value --}} 

    {{-- @if($greetings === "hi")
        <p>Hello from if directives</p>
    @endif If directives --}}

    <h2>Currently Available Ninjas</h2>
    <a href="/subjects">Find Subjects</a>

    @foreach ($students as $student)
        <li>
            <p>{{$student['name']}}</p>
            <a href="/students/{{$student['id']}}">More details</a>
        </li>
    @endforeach

    
</body>
</html>