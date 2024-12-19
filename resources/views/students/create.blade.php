<x-layout>
<p>Add a Student</p>

<form action="{{ route('students.store') }}" method="POST">
    @csrf
    
    <h2>Create a New Ninja</h2>
  
    <!-- ninja Name -->
    <label for="name">Ninja Name:</label>
    <input 
      type="text" 
      id="name" 
      name="name" 
      value="{{ old('name') }}" 
      required
    >
  
    <!-- ninja Strength -->
    <label for="skill">Ninja Skill (0-100):</label>
    <input 
      type="number" 
      id="skill" 
      name="skill" 
      required
    >
  
    <!-- ninja Bio -->
    <label for="bio">Biography:</label>
    <textarea
      rows="5"
      id="bio" 
      name="bio" 
      required
    ></textarea>
  
    <!-- select a dojo -->
    <label for="subject_id">Subject:</label>
    <select id="subject_id" name="subject_id" required>
      <option value="" disabled selected>Select a Subject</option>
      @foreach($subjects as $subject)
      <option value="{{$subject->id}}">
        {{$subject->name}}
      </option>
      @endforeach
    </select>
  
    <button type="submit" class="mt-4 btn">Create Ninja</button>
  
    <!-- validation errors -->
    
  </form>
  
</x-layout>