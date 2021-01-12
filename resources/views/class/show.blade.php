<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-center text-gray-800 leading-tight">
          {{ $classroom->major->major }} {{ $classroom->level->level }} - {{ $classroom->class }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-6 bg-white">
                    <table class="border-2 w-full border-black">
                        <thead class="border-2 w-full border-black">
                            <th class="border-2 border-black">No</th>
                            <th class="border-2 border-black">Name</th>
                            @if (Auth::user()->hasRole('admin'))
                                <th class="border-2 border-black">Action</th>
                            @endif
                        </thead>
                        <tbody>
                            @foreach ($classroom->users as $user)
                                <tr class="border-2 w-full border-black">
                                    <td class="border-2 border-black">{{ $loop->iteration }}</td>
                                    <td class="border-2 border-black">{{ $user->name }}</td>
                                    @if (Auth::user()->hasRole('admin'))
                                        <td class="border-2 border-black">
                                            <div class="flex text-white text-center">
                                                <a href="" class="px-2 bg-red-500 hover:bg-red-600 rounded">Delete</a>
                                                <a href="" class="px-2 bg-green-500 hover:bg-green-600 rounded">Edit</a>
                                            </div>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
