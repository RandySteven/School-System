<x-app-layout>
    <x-slot name="title">
        Manage Student and Subjects
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table w-full border-2 border-black">
                        <thead>
                            <th class="border-2 border-black bg-green-500">No</th>
                            <th class="border-2 border-black bg-green-500">Subject Id</th>
                            <th class="border-2 border-black bg-green-500">Subject Name</th>
                        </thead>
                        <tbody>
                            @foreach ($user->subjects as $subject)
                                <tr class="border-2 border-black">
                                    <td class="border-2 border-black">{{ $loop->iteration }}</td>
                                    <td class="border-2 border-black">{{ $subject->id }}</td>
                                    <td class="border-2 border-black">{{ $subject->name }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
