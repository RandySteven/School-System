<x-app-layout>
    <x-slot name="title">
        Teachers
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-center text-gray-800 leading-tight">
            {{ __('Teachers') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table border-2 border-black w-full">
                        <thead>
                            <th class="border-2 border-black">Teacher Name</th>
                            <th class="border-2 border-black">Teacher Subject</th>
                            @if (Auth::user()->hasRole('admin'))
                                <th class="border-2 border-black">Action</th>
                            @endif
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                @if ($user->hasRole('teacher'))
                                    <tr class="border-2 border-black py-2">
                                        <td class="border-2 border-black py-2">
                                            {{ $user->name }} (
                                            @foreach ($user->degrees as $degree)
                                                {{ $user->degrees()->get()->implode('degree', ' , ') }}
                                            @endforeach
                                            )
                                        </td>
                                        <td class="border-2 px-2 border-black">
                                            @foreach ($user->subjects as $subject)
                                                <a href="{{ route('subject.show', $subject->slug) }}" class="px-3 py-1
                                                    @if($subject->major_id==1) bg-green-400 hover:bg-green-500
                                                    @elseif($subject->major_id==2) bg-yellow-400 hover:bg-yellow-500
                                                    @else bg-blue-400 hover:bg-blue-500 @endif rounded">
                                                    {{ $subject->name }}
                                                </a>
                                            @endforeach
                                        </td>
                                        @if (Auth::user()->hasRole('admin'))
                                            <td class="border-2 border-black py-2 px-2">
                                                <a href="{{ route('teacher.edit', $user) }}" class="bg-green-400 hover:bg-green-500 px-2 rounded">Edit</a>
                                                <a href="" class="bg-red-400 hover:bg-red-500 px-2 rounded">Delete</a>
                                                <a href="" class="bg-blue-400 hover:bg-blue-500 px-2 rounded">See Detail</a>
                                            </td>
                                        @endif
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
