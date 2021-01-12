<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div>
                        <form action="{{ route('search.forum') }}" method="GET">
                            @csrf
                            <select name="subject_id" id="" class="w-full">
                                @foreach ($subjects as $subject)
                                    <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                                @endforeach
                            </select>
                            <button type="submit">Search</button>
                        </form>
                    </div>
                    <div class="grid grid-cols-3">
                        @foreach ($forums as $forum)
                        <div class="grid bg-white border-2 border-black text-blue-400 hover:text-blue-500 px-10 py-7">
                            @if (Auth::user()->hasRole('student'))
                                @if ($forum->classroom_id==Auth::user()->classroom->id)
                                    <a href="{{ route('forum.show', $forum) }}">
                                        {{ $forum->title }}
                                    </a>
                                @endif
                            @else
                                <a href="{{ route('forum.show', $forum) }}">
                                    {{ $forum->title }}
                                </a>
                            @endif
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

