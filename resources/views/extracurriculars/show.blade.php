<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <img src="{{ asset('/storage/'.$extracurricular->thumbnail) }}" class="w-64 " alt="">
                    <h1>{{ $extracurricular->name }}</h1>
                    <p>{!! nl2br($extracurricular->desc) !!}</p>
                    <div class="my-2">
                        @if (Auth::user()->hasRole('student'))
                            @include('admin.extracurricular.create')
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
