<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex">
                        <input id="long_url" type="text" placeholder="Pega la URL aquí" class="w-full px-4 py-3 rounded">
                        <button class="ml-4 w-auto px-6 py-3 font-semibold bg-gray-900 text-white rounded">
                        <span>Acortar</span>
                        </button>
                    </div>
                    <div class="flex py-5">
                    <input id="short_url" type="text" placeholder="" class="w-full px-4 py-3 rounded">
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
