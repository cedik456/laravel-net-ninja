<x-layout>

    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- This is required for PUT method in a form -->
    
        <h2>Edit Ninja</h2>
      
        <!-- Students Name -->
        <label for="name">Student Name:</label>
        <input 
          type="text" 
          id="name" 
          name="name" 
          value="{{ old('name', $student->name) }}" 
          required
        >
      
        <!-- Students Rate -->
        <label for="skill">Student Skill (0-100):</label>
        <input 
          type="number" 
          id="skill" 
          name="skill" 
          value="{{ old('skill', $student->skill) }}" 
          required
        >
      
        <!-- Students Bio -->
        <label for="bio">Biography:</label>
        <textarea
          rows="5"
          id="bio" 
          name="bio" 
          required
        >{{ old('bio', $student->bio) }}</textarea>
      
        <!-- Select a course -->
        <label for="course_id">course:</label>
        <select id="course_id" name="course_id" required>
          <option value="" disabled>Select a course</option>
          @foreach($courses as $course)
          <option value="{{ $course->id }}" {{ $course->id == old('course_id', $student->course_id) ? 'selected' : ''}}>
            {{$course->name}}
          </option>
          @endforeach
        </select>
      
        <button type="submit" class="mt-4 btn">Update Student</button>
      
        <!-- validation errors -->
        @if ($errors->any()) 
            <ul class="px-4 py-2 bg-red-100">
                @foreach ($errors->all() as $error)
                <li class="my-2 text-red-500">{{$error}}</li>
                @endforeach
            </ul>
        @endif
        
    </form>
      
    </x-layout>
    