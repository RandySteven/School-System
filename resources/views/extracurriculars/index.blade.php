<x-app-layout>
    <x-slot name="title">
        Extracurriculars
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-center text-gray-800 leading-tight">
            {{ __('Extracurricular') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex my-2">
                        @foreach ($extracurriculars as $extracurricular)
                        <div class="w-1/3 px-1">
                            <a href="{{ route('extracurricular.show', $extracurricular->slug) }}">
                                <div class="max-w-sm my-12 rounded overflow-hidden shadow-lg hover:shadow-outline-blue">
                                    <img class="w-full" src="{{ asset('/storage/'.$extracurricular->thumbnail) }}" alt="{{ $extracurricular->thumbnail }}">
                                    <div class="px-6 py-4">
                                        <div class="font-bold text-xl mb-2">{{ $extracurricular->name }}</div>
                                            <p class="text-gray-700 text-base">
                                                {{ Str::limit($extracurricular->desc, 150, '...') }}
                                            </p>
                                        </div>
                                    </div>
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
