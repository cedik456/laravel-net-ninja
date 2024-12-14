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
    <h2>Currently Available Ninjas</h2>
    <a href="/subjects">Find Subjects</a>

    <ul>
        <li>
            <a href="/students/{{$students[0]["id"]}}">{{$students[0]["name"]}}</a>
        </li>
        <li>
            <a href="/students/{{$students[1]["id"]}}">{{$students[1]["name"]}}</a>
        </li>
    </ul>
    
</body>
</html>