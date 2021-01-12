<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <img src="{{ asset('/storage/'.$subject->thumbnail) }}" class="w-64 " alt="">
                    <h1>{{ $subject->name }}</h1>
                    <p>{!! nl2br($subject->desc) !!}</p>
                    @if (Auth::user()->hasRole('admin'))
                        <div class="my-11">
                            @include('subject.material.create', ['subject_id'=>$subject->id])
                        </div>
                    @endif
                    @include('subject.material.index')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
