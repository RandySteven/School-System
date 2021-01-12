<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('store.data.to.teacher') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="grid grid-cols-2">
                            <div class="border-2 border-black">
                                <label for="subjects[]">Subject</label>
                                <select name="subjects[]" class="w-full" multiple id="">
                                    @foreach ($subjects as $subject)
                                        <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="border-2 border-black ml-2">
                                <label for="degrees[]">Degree</label>
                                <select multiple name="degrees[]" id="degrees_id" class="w-full">
                                    @foreach ($degrees as $degree)
                                        <option value="{{ $degree->id }}">{{ $degree->degree }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        @include('admin.components.add-form')
                        <div class="grid grid-cols-1 my-5">
                            <button type="submit" class="bg-blue-500 text-white px-2 text-center rounded py-2">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
