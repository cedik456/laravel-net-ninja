<x-layout>
    {{-- <h1>{{$greetings}}</h1> Accessing a dynamic value --}} 

    {{-- @if($greetings === "hi")
        <p>Hello from if directives</p>
    @endif If directives --}}

    <h2>List of Students</h2>
    <a href="/subjects">Find Subjects</a>

    @foreach ($students as $student)
        <li>
            <p>{{$student['name']}}</p>
            <a href="/students/{{$student['id']}}">More details</a>
        </li>
    @endforeach

</x-layout>