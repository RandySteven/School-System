<x-app-layout>
    <x-slot name="title">
        Books
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="grid grid-cols-2">
                        @foreach ($books as $book)
                        <div class="max-w-sm mb-10 rounded overflow-hidden shadow-lg hover:shadow-outline-blue">
                            <a href="{{ route('book.show', $book) }}">
                                <img class="w-full h-96" src="{{ asset('/storage/'.$book->thumbnail) }}" alt="{{ $book->thumbnail }}">
                                <div class="px-6 py-4">
                                    <div class="font-bold text-xl mb-2">{{ $book->title }}</div>
                                        <p class="text-gray-700 text-base">
                                            {{ Str::limit($book->desc, 150, '...') }}
                                        </p>
                                </div>
                                <div class="px-6 pt-4 pb-2">
                                    <a href="{{ route('category', $book->category->slug) }}">
                                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">
                                            {{ $book->category->category }}
                                        </span>
                                    </a>
                                    <a href="{{ route('book.writter', $book) }}">
                                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">
                                            {{ $book->writter_name }}
                                        </span>
                                    </a>
                                </div>
                                @if (Auth::user()->hasRole('admin'))
                                    <div class="px-6 pt-4 pb-2">
                                        <form action="{{ route('book.delete', $book->slug) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-400 hover:bg-red-500 px-5 py-3 rounded">DELETE</button>
                                        </form>
                                    </div>
                                @endif
                            </a>
                        </div>
                        @endforeach
                    </div>
                    <div>
                        {{ $books->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
