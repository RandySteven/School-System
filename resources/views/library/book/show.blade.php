<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="text-center">
                        <img src="{{ asset('/storage/'.$book->thumbnail) }}" class="w-64 " alt="">
                        <h1 class="text-3xl text-bold">{{ $book->title }}</h1>
                        <p>{!! nl2br($book->desc) !!}</p>
                        <p>Pages : {{ $book->pages }}</p>
                        <p>Writter :
                            <a href="{{ route('book.writter', $book->writter_name) }}" class="bg-gray-400 px-1 rounded hover:bg-gray-500">
                                {{ $book->writter_name }}
                            </a>
                        </p>
                        <p>Category :
                            <a href="{{ route('category', $book->category->slug) }}" class="bg-gray-400 px-1 rounded hover:bg-gray-500">
                                {{ $book->category->category }}
                            </a>
                        </p>
                        <p>File : {{ $book->book_file }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
