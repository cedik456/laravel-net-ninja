@props(['highlight' => false, 'showRoute' => '#', 'updateRoute' => '#'])

<div @class(['highlight' => $highlight, 'card'])>
    {{$slot}}
    <div class="flex gap-2 mt-2">
        <!-- View Button -->
        <a href="{{ $showRoute }}" class="btn btn-view">View</a>
        
        <!-- Edit Button -->
        <form action="{{ $updateRoute }}" method="GET">
            @csrf 
            <button type="submit" class="btn btn-edit">Edit</button>
        </form>
    </div>
</div>
