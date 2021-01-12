<x-app-layout>
    <x-slot name="title">
        Student Classroom
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('classroom.user.store') }}" method="post">
                        @csrf
                        <div class="grid grid-cols-2 py-2">
                            <div>
                                <select name="user_id" class="w-full py-2 bg-white border-2 border-blue-200" id="">
                                    <option disabled selected>Choose one</option>
                                    @foreach ($users as $user)
                                        @if($user->hasRole('student'))
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <select name="classroom_id" class="w-full py-2 bg-white border-2 border-blue-200 ml-2" id="">
                                    <option disabled selected>Choose one</option>
                                    @forelse ($classrooms as $classroom)
                                        <option value="{{ $classroom->id }}">
                                            {{ $classroom->major->major }}
                                            {{ $classroom->level->level }} -
                                            {{ $classroom->class }}
                                        </option>
                                    @empty
                                        <option disabled selected>No any class yet</option>
                                    @endforelse
                                </select>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="w-full bg-green-400 hover:bg-green-500 text-white py-2 rounded">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
