<x-app-layout>
    <x-slot name="title">
        Subjects
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-center text-gray-800 leading-tight">
            {{ __('Subject') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="grid my-2 grid-cols-2">
                        @foreach ($subjects as $subject)
                        <div class="max-w-sm mb-10 rounded overflow-hidden shadow-lg hover:shadow-outline-blue">
                            <a href="{{ route('subject.show', $subject) }}">
                                <img class="w-full h-96" src="{{ asset('/storage/'.$subject->thumbnail) }}" alt="{{ $subject->thumbnail }}">
                                <div class="px-6 py-4">
                                    <div class="font-bold text-xl mb-2">{{ $subject->name }}</div>
                                        <p class="text-gray-700 text-base">
                                            {{ Str::limit($subject->desc, 150, '...') }}
                                        </p>
                                </div>
                                <div class="px-6 pt-4 pb-2">
                                    <a href="{{ route('major.show',$subject->major->slug) }}">
                                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">
                                            {{ $subject->major->major }}
                                        </span>
                                    </a>
                                    <a href="{{ route('level.show',$subject->level->slug) }}">
                                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">
                                            {{ $subject->level->level }}
                                        </span>
                                    </a>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
