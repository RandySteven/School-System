<x-app-layout>
    <x-slot name="title">
        Create Student
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('subject.user.store') }}" method="post">
                        @csrf
                        <div class="grid grid-cols-2 mx-2 my-5">
                            <div>
                                <select name="user_id" class="w-full border border-2 border-black" id="user_id">
                                    @forelse ($users as $user)
                                        @if ($user->hasRole('student'))
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endif
                                    @empty
                                        <option>No User</option>
                                    @endforelse
                                </select>
                            </div>
                            <div>
                                <select name="subjects[]" multiple id="subjects" class="w-full ml-2 border border-2 border-black">
                                    @forelse ($subjects as $subject)
                                        <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                                    @empty
                                        <option>No subjects</option>
                                    @endforelse
                                </select>
                            </div>
                        </div>
                        <div class="grid grid-cols-1">
                            <div>
                                <button type="submit" class="bg-green-400 hover:bg-green-500 px-5 py-2 w-full rounded">Create</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
