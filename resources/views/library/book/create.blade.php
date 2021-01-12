<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('book.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <div>
                                <x-label for="title":value="__('Title')" />
                                <x-input id="title" class="block mt-1 w-full border border-gray-400 hover:border-gray-500" type="text" name="title" placeholder="Book Title" required autofocus />
                            </div>
                            <div class="mt-4">
                                <x-label for="writter_name":value="__('Title')" />
                                <x-input id="writter_name" class="block mt-1 w-full border border-gray-400 hover:border-gray-500" type="text" name="writter_name" placeholder="Writter Name" required autofocus />
                            </div>
                            <div class="mt-4">
                                <x-label for="pages":value="__('Title')" />
                                <x-input id="pages" class="block mt-1 w-full border border-gray-400 hover:border-gray-500" type="text" name="pages" placeholder="Pages number" required autofocus />
                            </div>
                            <div class="mt-4">
                                <x-label for="category_id":value="__('Level')" />
                                <select name="category_id" id="category_id" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                                    <option disabled selected>Choose one</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->category }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mt-4">
                                <x-label for="book_file":value="__('Book File')" />
                                <x-input id="book_file" class="block mt-1 w-full border border-gray-400 hover:border-gray-500" type="file" name="book_file" placeholder="Pages number" required autofocus></x-input>
                            </div>
                            <div class="mt-4">
                                <x-label for="thumbnail":value="__('Thumbnail')" />
                                <x-input id="thumbnail" class="block mt-1 w-full border border-gray-400 hover:border-gray-500" type="file" name="thumbnail" placeholder="Pages number" required autofocus></x-input>
                            </div>
                            <div class="mt-4">
                                <x-label for="desc":value="__('Desc')" />
                                <textarea name="desc" id="" class="block apperance-none w-full border border-gray-400 hover:border-gray-500 focus:outline-none focus:shadow-outline" rows="10"></textarea>
                            </div>
                            <div class="flex items-center justify-end mt-4">
                                <x-button>
                                    {{ __('Create') }}
                                </x-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
