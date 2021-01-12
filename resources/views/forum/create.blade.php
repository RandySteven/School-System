<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('forum.store') }}" method="post">
                        @csrf
                        <div class="grid grid-cols-2 border border-2 border-black px-2">
                            <div class="my-10 mx-2 border border-2 border-black py-5 px-5">
                                <label for="major_id">Major</label>
                            </div>
                            <div class="my-10 mx-2 border border-2 border-black py-5 px-5">
                                <select name="major_id" class="w-full bg-white py-3" id="">
                                    <option disabled selected>Choose one</option>
                                    @foreach ($majors as $major)
                                        <option value="{{ $major->id }}" class="">{{ $major->major }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="my-10 mx-2 border border-2 border-black py-5 px-5">
                                <label for="level_id">Level</label>
                            </div>
                            <div class="my-10 mx-2 border border-2 border-black py-5 px-5">
                                @if (Auth::user()->hasRole('admin')||Auth::user()->hasRole('teacher'))
                                    <select name="level_id" id="level_id" class="w-full bg-white py-3">
                                        <option disabled selected>Choose one</option>
                                        @foreach ($levels as $level)
                                            <option value="{{ $level->id }}">{{ $level->level }}</option>
                                        @endforeach
                                    </select>
                                @else
                                    <input type="hidden" name="level_id" value="{{ Auth::user()->classrooms()->level->id }}">
                                @endif
                            </div>
                            <div class="my-10 mx-2 border border-2 border-black py-5 px-5">
                                <label for="classroom_id">Classroom</label>
                            </div>
                            <div class="my-10 mx-2 border border-2 border-black py-5 px-5">
                                @if (Auth::user()->hasRole('admin')||Auth::user()->hasRole('teacher'))
                                    <select class="w-full bg-white py-3" name="classroom_id" id="classroom_id">
                                        <option disabled selected>Choose one</option>
                                        @foreach ($classrooms as $classroom)
                                            <option value="{{ $classroom->id }}">{{ $classroom->major->major }} {{ $classroom->level->level }} - {{ $classroom->class }}</option>
                                        @endforeach
                                    </select>
                                @else
                                    <input type="hidden" name="classroom_id" value="{{ Auth::user()->classrooms()->id }}">
                                @endif
                            </div>
                            <div class="my-10 mx-2 border border-2 border-black py-5 px-5">
                                <label for="subject_id">Subject</label>
                            </div>
                            <div class="my-10 mx-2 border border-2 border-black py-5 px-5">
                                <select name="subject_id" class="w-full bg-white py-3" id="subject_id">
                                    <option disabled selected>Choose one</option>
                                    @if (Auth::user()->hasRole('student'))
                                        @foreach (Auth::user()->subjects as $subject)
                                            <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                                        @endforeach
                                    @else
                                        @foreach ($subjects as $subject)
                                            <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 my-2">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="border border-2 py-2 border-black w-full">
                        </div>
                        <div class="grid-cols-1 my-2">
                            <label for="body">Body</label>
                            <textarea name="body" id="" class="w-full border border-2 border-black py-2" rows="10"></textarea>
                        </div>
                        <div class="grid-cols-1 my-2 text-center">
                            <button class="px-5 py-2 rounded bg-blue-400 hover:bg-blue-500">Create Forum</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
