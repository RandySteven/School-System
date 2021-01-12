<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('store.data.to.student') }}" method="POST" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        @include('admin.components.add-form')
                        <div class="grid grid-cols-1">
                            <label for="parent_name">Parent Name</label>
                            <input type="text" name="parent_name" class="w-full border-2 border-black" id="">
                        </div>
                        <div class="grid grid-cols-1">
                            <label for="parent_phone">Parent Phone</label>
                            <input type="text" name="parent_phone" class="w-full border-2 border-black" id="">
                        </div>
                        <div class="grid grid-cols-1">
                            <label for="major_id">Major</label>
                            <select name="major_id" id="major_id">
                                @foreach ($majors as $major)
                                    @if ($major->id==3)
                                        @continue
                                    @endif
                                    <option value="{{ $major->id }}">{{ $major->major }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="bg-blue-400 rounded px-2 py-2 hover:bg-blue-500">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
