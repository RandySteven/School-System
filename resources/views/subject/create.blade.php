<x-app-layout>
    <x-slot name="title">
        Create Subjects
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('subject.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <div>
                                <x-label for="name":value="__('Name')" />
                                <x-input id="name" class="block mt-1 w-full border border-gray-400 hover:border-gray-500" type="text" name="name" placeholder="Subject Name" required autofocus />
                            </div>
                            <div class="mt-4">
                                <x-label for="thumbnail":value="__('Thumbnail')" />
                                <x-input id="thumbnail" class="block mt-1 w-full border border-gray-400 hover:border-gray-500" type="file" name="thumbnail" placeholder="Subject Name" required autofocus />
                            </div>
                            <div class="mt-4">
                                <x-label for="level_id":value="__('Level')" />
                                <select name="level_id" id="level_id" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                                    @foreach ($levels as $level)
                                        <option value="{{ $level->id }}">{{ $level->level }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mt-4">
                                <x-label for="major_id":value="__('Major')" />
                                <select name="major_id" id="major_id" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                                    @foreach ($majors as $major)
                                        <option value="{{ $major->id }}">{{ $major->major }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mt-4">
                                <x-label for="desc":value="__('Desc')" />
                                <textarea name="desc" id="" class="block apperance-none w-full border border-gray-400 hover:border-gray-500 focus:outline-none focus:shadow-outline" rows="10"></textarea>
                            </div>
                            <div class="flex items-center justify-end mt-4">
                                <x-button>
                                    {{ __('Create') }}
                                </x-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
