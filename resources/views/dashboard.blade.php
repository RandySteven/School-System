<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-center text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex">
                        <img src="{{ Auth::user()->photo != null ? asset('storage/'.Auth::user()->photo) : Auth::user()->gravatar() }}" class="rounded-full" alt="">
                        <div>
                            <p class="ml-4 font-extrabold text-3xl">{{ Auth::user()->name }}</p>
                            <p class="ml-4">{{ Auth::user()->roles->first()->name }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
