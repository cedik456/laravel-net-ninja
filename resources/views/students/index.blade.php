<x-layout>
    {{-- <h1>{{$greetings}}</h1> Accessing a dynamic value --}} 

    {{-- @if($greetings === "hi")
        <p>Hello from if directives</p>
    @endif If directives --}}

    <h2 class="font-bold">List of Students</h2>

    @foreach ($students as $student)
        <li class="flex">
            <x-card href="/students/{{$student['id']}}" :highlight="$student['skill'] > 70 ">
            <p>{{$student['name']}}</p>
            </x-card>
        </li>
    @endforeach

</x-layout>