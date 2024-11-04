<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Todos') }}
        </h2>
    </x-slot>
    <div class="container mx-auto mt-8">
        @yield('content')
    </div>

</x-app-layout>