<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('classroom.store') }}" method="POST">
                        @csrf
                        <div>
                            <x-label for="class":value="__('Class')">
                            <x-input id="class" class="block mt-1 w-full" type="text" name="class" required autofocus />
                        </div>
                        <div class="mt-4">
                            <x-label for="level_id":value="__('Level')">
                            <select name="level_id" id="level_id" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                                <option disabled selected>Choose one</option>
                                @foreach ($levels as $level)
                                    <option value="{{ $level->id }}">{{ $level->level }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mt-4">
                            <x-label for="major_id":value="__('Major')">
                            <select name="major_id" id="major_id" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                                <option disabled selected>Choose one</option>
                                @foreach ($majors as $major)
                                @if ($major->id==3)
                                    @continue
                                @endif
                                    <option value="{{ $major->id }}">{{ $major->major }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-button>
                                {{ __('Create') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
