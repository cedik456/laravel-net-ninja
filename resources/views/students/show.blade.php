<x-layout>
    <h3>Name: {{$student->name}}</h3>
    
    <div class="p-4 bg-gray-200 rounded">
        <p><strong>Skill level: </strong>{{$student->skill}}</p>
        <p><strong>Course:</strong> {{$student->course->name}}</p>
        <p><strong>About me:</strong></p>
        <p>{{$student->bio}}</p>
    </div>

    <form method="POST" action="{{ route('students.destroy', $student->id)  }}">
        @csrf
        @method('DELETE')

        <button type="submit" class="my-4 hover:bg-red-500 btn">Delete Student</button>
    </form>

</x-layout>