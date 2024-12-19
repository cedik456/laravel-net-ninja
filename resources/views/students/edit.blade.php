<x-layout>

    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- This is required for PUT method in a form -->
    
        <h2>Edit Ninja</h2>
      
        <!-- Students Name -->
        <label for="name">Ninja Name:</label>
        <input 
          type="text" 
          id="name" 
          name="name" 
          value="{{ old('name', $student->name) }}" 
          required
        >
      
        <!-- Students Rate -->
        <label for="skill">Ninja Skill (0-100):</label>
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
      
        <!-- Select a Subject -->
        <label for="subject_id">Subject:</label>
        <select id="subject_id" name="subject_id" required>
          <option value="" disabled>Select a Subject</option>
          @foreach($subjects as $subject)
          <option value="{{ $subject->id }}" {{ $subject->id == old('subject_id', $student->subject_id) ? 'selected' : ''}}>
            {{$subject->name}}
          </option>
          @endforeach
        </select>
      
        <button type="submit" class="mt-4 btn">Update Ninja</button>
      
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
    