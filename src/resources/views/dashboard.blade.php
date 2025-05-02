<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <br>
        <a href="http://localhost:8000/apis" class="mt-4 d-block mx-auto px-4 py-2 shadow-sm text-white text-center"
           style="background-color: #4a90e2; border-radius: 12px; font-weight: 500; font-size: 16px; text-decoration: none; display: inline-block;">
            <p>Lista de API's</p></a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
