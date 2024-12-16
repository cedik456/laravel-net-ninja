<x-layout>
    {{-- <h1>{{$greetings}}</h1> Accessing a dynamic value --}} 

    {{-- @if($greetings === "hi")
        <p>Hello from if directives</p>
    @endif If directives --}}

    <h2 class="font-bold">List of Students</h2>
    <ul>
        @foreach ($students as $student)
            <li>
                <x-card href="/students/{{$student['id']}}" :highlight="$student['skill'] > 70 ">
                <h3>{{$student['name']}}</h3>
                </x-card>
            </li>
        @endforeach
    </ul>

</x-layout>