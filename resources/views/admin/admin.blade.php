<x-app-layout>
    <x-slot name="title">
        Admin
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="grid grid-cols-3">
                        <div class="flex px-5 py-3 mx-2 bg-green-500 text-white font-bold text-center">
                                <svg width="24" height="24" viewBox="1 1 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 20H22V18C22 16.3431 20.6569 15 19 15C18.0444 15 17.1931 15.4468 16.6438 16.1429M17 20H7M17 20V18C17 17.3438 16.8736 16.717 16.6438 16.1429M7 20H2V18C2 16.3431 3.34315 15 5 15C5.95561 15 6.80686 15.4468 7.35625 16.1429M7 20V18C7 17.3438 7.12642 16.717 7.35625 16.1429M7.35625 16.1429C8.0935 14.301 9.89482 13 12 13C14.1052 13 15.9065 14.301 16.6438 16.1429M15 7C15 8.65685 13.6569 10 12 10C10.3431 10 9 8.65685 9 7C9 5.34315 10.3431 4 12 4C13.6569 4 15 5.34315 15 7ZM21 10C21 11.1046 20.1046 12 19 12C17.8954 12 17 11.1046 17 10C17 8.89543 17.8954 8 19 8C20.1046 8 21 8.89543 21 10ZM7 10C7 11.1046 6.10457 12 5 12C3.89543 12 3 11.1046 3 10C3 8.89543 3.89543 8 5 8C6.10457 8 7 8.89543 7 10Z" stroke="#4A5568" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            People
                                ({{ $users->count() }})
                        </div>
                        <div class="flex px-5 py-3 mx-2 bg-blue-500 text-white font-bold text-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 14L21 9L12 4L3 9L12 14Z" fill="white"/>
                                <path d="M12 14L18.1591 10.5783C18.7017 11.9466 19 13.4384 19 14.9999C19 15.7013 18.9398 16.3885 18.8244 17.0569C16.2143 17.3106 13.849 18.4006 12 20.0555C10.151 18.4006 7.78571 17.3106 5.17562 17.0569C5.06017 16.3885 5 15.7012 5 14.9999C5 13.4384 5.29824 11.9466 5.84088 10.5782L12 14Z" fill="white"/>
                                <path d="M12 14L21 9L12 4L3 9L12 14ZM12 14L18.1591 10.5783C18.7017 11.9466 19 13.4384 19 14.9999C19 15.7013 18.9398 16.3885 18.8244 17.0569C16.2143 17.3106 13.849 18.4006 12 20.0555C10.151 18.4006 7.78571 17.3106 5.17562 17.0569C5.06017 16.3885 5 15.7012 5 14.9999C5 13.4384 5.29824 11.9466 5.84088 10.5782L12 14ZM8 19.9999V12.5L12 10.2778" stroke="#374151" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            Classrooms
                            ({{ $classrooms->count() }})
                        </div>
                        <div class="flex px-5 py-3 mx-2 bg-yellow-300 text-white font-bold text-center">
                            <svg width="24" height="24" viewBox="1 1 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 6.25278V19.2528M12 6.25278C10.8321 5.47686 9.24649 5 7.5 5C5.75351 5 4.16789 5.47686 3 6.25278V19.2528C4.16789 18.4769 5.75351 18 7.5 18C9.24649 18 10.8321 18.4769 12 19.2528M12 6.25278C13.1679 5.47686 14.7535 5 16.5 5C18.2465 5 19.8321 5.47686 21 6.25278V19.2528C19.8321 18.4769 18.2465 18 16.5 18C14.7535 18 13.1679 18.4769 12 19.2528" stroke="#4A5568" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            Subjects
                            ({{ $subjects->count() }})
                        </div>
                    </div>
                    <div class="grid grid-cols-2 my-2">
                        <div class="flex px-5 py-3 mx-2 text-white font-bold text-center bg-green-400 ">
                            {{ $ia->count() }} IPA Classrooms
                        </div>
                        <div class="flex px-5 py-3 mx-2 text-white font-bold text-center bg-yellow-300 ">
                            {{ $is->count() }} IPS Classrooms
                        </div>
                    </div>
                    <div class="grid grid-cols-3 my-2">
                        <div class="flex px-5 py-3 mx-2 text-white font-bold text-center bg-green-400 ">
                            {{ $iaSubjects->count() }} IPA Subjects
                        </div>
                        <div class="flex px-5 py-3 mx-2 text-white font-bold text-center bg-yellow-300 ">
                            {{ $isSubjects->count() }} IPS Subjects
                        </div>
                        <div class="flex px-5 py-3 mx-2 text-white font-bold text-center bg-red-500 ">
                            {{ $semuaSubjects->count() }} Semua
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
