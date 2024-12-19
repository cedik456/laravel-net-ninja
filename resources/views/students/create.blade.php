<x-layout>

<form action="{{ route('students.store') }}" method="POST">
    @csrf
    
    <h2>Create a New Ninja</h2>
  
    <!-- Students Name -->
    <label for="name">Name:</label>
    <input 
      type="text" 
      id="name" 
      name="name" 
      value="{{ old('name') }}" 
      required
    >
  
    <!-- Students Rate -->
    <label for="skill">Skill (0-100):</label>
    <input 
      type="number" 
      id="skill" 
      name="skill" 
      value="{{ old('skill') }}" 
      required
    >
  
    <!-- Students Bio -->
    <label for="bio">Biography:</label>
    <textarea
      rows="5"
      id="bio" 
      name="bio" 
      required
    >{{old('bio')}}</textarea>
  
    <!-- Select a course -->
    <label for="course_id">Course:</label>
    <select id="course_id" name="course_id" required>
      <option value="" disabled selected>Select a course</option>
      @foreach($courses as $course)
      <option value="{{ $course->id }}" {{ $course->id == old('course_id') ? 'selected' : ''}}>
        {{$course->name}}
      </option>
      @endforeach
    </select>
  
    <button type="submit" class="mt-4 btn">Create Student</button>
  
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