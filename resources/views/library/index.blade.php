<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-center text-gray-800 leading-tight">
            Library
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="my-5 text-center">
                        @if (Auth::user()->hasRole('admin'))
                            <a href="{{ route('book.create') }}" class="px-5 py-3 rounded bg-green-400 hover:bg-green-500">Add Book</a>
                        @endif
                    </div>
                    <div class="text-justify">
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore atque dolores accusamus, sed magnam expedita animi explicabo porro ipsum ullam corporis, placeat totam. Nihil similique qui, voluptates doloremque est distinctio!
                            Recusandae eos deleniti odit. Libero beatae ex nemo, maiores expedita corporis voluptatem eos, dolor fugiat autem rerum veritatis magni facere tempora. Dolores nihil doloribus enim commodi quibusdam dolorem aliquid suscipit.
                            Accusantium sapiente reiciendis repellendus iure quibusdam cum quam consectetur? Consectetur tenetur quidem nesciunt nihil suscipit dolor laudantium eos vero aliquam? Eos necessitatibus vel accusantium beatae quis vitae consequuntur dolorem dignissimos.
                            Numquam praesentium eos saepe dolores culpa illo blanditiis neque esse enim quisquam aspernatur provident optio obcaecati necessitatibus quibusdam veritatis commodi perspiciatis eligendi, officia in. Odio, possimus recusandae? Assumenda, corrupti eaque.
                        </p>
                    </div>
                    <div>
                        <div class="grid grid-cols-2 mx-15">
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
                                </a>
                            </div>
                            @endforeach
                        </div>
                        @empty($books)

                        @else
                            <a href="{{ route('book.index') }}" class="text-white px-5 py-2 text-center bg-green-400 hover:bg-green-500">
                                View More
                            </a>
                        @endempty
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
