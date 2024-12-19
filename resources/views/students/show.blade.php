<x-layout>
    <h3>Name: {{$student->name}}</h3>
    
    <div class="p-4 bg-gray-200 rounded">
        <p><strong>Skill level: </strong>{{$student->skill}}</p>
        <p><strong>About me:</strong></p>
        <p>{{$student->bio}}</p>
    </div>

    <div class="px-4 pb-4 my-4 bg-white border-2 border-dashed rounded">
        <h3>Subject Information</h3>
        <p><strong>Subject name:</strong> {{$student->subject->name}}</p>
        <p><strong>Location:</strong> {{$student->subject->location}}</p>
        <p><strong>About the subject:</strong></p>
        <p>{{$student->subject->description}}</p>
    </div>

    <form method="POST" action="{{ route('students.destroy', $student->id)  }}">
        @csrf
        @method('DELETE')

        <button type="submit" class="my-4 btn">Delete Student</button>
    </form>

</x-layout>