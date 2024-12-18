<x-layout>
    <h3>Name: {{$student->name}}</h3>
    
    <div class="p-4 bg-gray-200 rounded">
        <p><strong>Skill level: </strong>{{$student->skill}}</p>
        <p><strong>About me:</strong></p>
        <p>{{$student->bio}}</p>
    </div>
</x-layout>