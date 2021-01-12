<x-app-layout>
    <x-slot name="title">
        Edit
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-center text-gray-800 leading-tight">
            {{ __('Edit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('teacher.update',$user) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div>
                            <x-label for="name" :value="__('Name')" />
                            <x-input id="name" class="block mt-1 w-full border border-gray-400 hover:border-gray-500" type="text" value="{{ $user->name }}" name="name" required autofocus />
                        </div>
                        <div class="my-4">
                            <x-label for="phone" :value="__('Phone')" />
                            <x-input id="phone" class="block mt-1 w-full border border-gray-400 hover:border-gray-500" type="text" name="phone" placeholder="phone" value="{{ $user->phone }}" required autofocus />
                        </div>
                        <div class="my-4">
                            <x-label for="photo" :value="__('Photo')" />
                            <x-input id="photo" class="block mt-1 w-full border border-gray-400 hover:border-gray-500" type="file" name="photo" placeholder="phone" value="{{ $user->photo }}"  />
                        </div>
                        <div class="my-4">
                            <x-label for="address" :value="__('Address')" />
                            <textarea name="address" id="" class="block mt-1 w-full border" value="{{ $user->address }}" rows="10"></textarea>
                        </div>
                        <div class="my-4">
                            <x-label for="subjects" :value="__('Subjects')" />
                            <select name="subjects[]" id="subjects" class="block mt-1 w-full border" multiple>
                                @foreach ($subjects as $subject)
                                    <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="my-4">
                            <x-label for="degrees" :value="__('Degrees')" />
                            <select name="degrees[]" id="degrees" class="block mt-1 w-full border" multiple>
                                @foreach ($degrees as $degree)
                                    <option value="{{ $degree->id }}">{{ $degree->degree }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="px-2 py-1 bg-blue-500 hover:bg-blue-400">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
