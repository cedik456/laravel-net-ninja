<x-layout>
    {{-- <h1>{{$greetings}}</h1> Accessing a dynamic value --}} 

    {{-- @if($greetings === "hi")
        <p>Hello from if directives</p>
    @endif If directives --}}

    <h2 class="font-bold">List of Students</h2>
    <ul>
        @foreach ($students as $student)
            <li>
                <x-card 
                    :highlight="$student['grade'] > 70"
                    :showRoute="route('students.show', $student->id)"
                    :updateRoute="route('students.edit', $student->id)">
                    
                    <div>
                        <h3>{{ $student['name'] }}</h3>
                        <p>{{ $student->course->name }}</p>
                    </div>
                
                </x-card>    
            </li>
        @endforeach
    </ul>

    {{ $students->links() }}

</x-layout>