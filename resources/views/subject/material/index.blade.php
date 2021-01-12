@foreach ($subject->materials as $material)
    <div class="flex flex-row bg-gray-300 py-2 px-2">
        {{ $material->title }}
        <a href="{{ route('material.show', $material->title) }}" class="pl-96">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 12L11 14L15 10M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="#4A5568" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>
    </div>
@endforeach