<x-app-layout>
    <x-slot name="title">
        Classes
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-center text-gray-800 leading-tight">
            {{ __('Class') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="grid grid-cols-5 gap-4">
                        @foreach ($classrooms as $classroom)
                        <a href="{{ route('classroom.show', $classroom) }}">
                            <div class="max-w-sm text-center lg:max-w-full lg:flex">
                                <div class="border-2 transition {{ $classroom->major_id == 1 ? 'hover:bg-green-400' : 'hover:bg-yellow-400' }}  hover:text-white hover:border-b hover:border-2 duration-300 border-gray-400 lg:border-gray-400 bg-white rounded lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                                    {{ $classroom->major->major }} {{ $classroom->level->level }}-{{ $classroom->class }}
                                    @if (Auth::user()->hasRole('admin'))
                                        <div>
                                            <form action="{{ route('classroom.delete', $classroom) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="bg-red-600 transition hover:bg-red-700 duration-300 px-5 py-3 rounded rounded">DELETE</button>
                                            </form>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
