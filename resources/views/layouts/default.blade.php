<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
 
        <title>{{ config('app.name', 'Laravel') }}</title>
 
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
 
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
 
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            <div class="min-h-screen bg-gray-100">
                <header class="bg-white shadow">
                    <nav x-data="{ open: false }" class="bg-gray-800">
                        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
                            <div class="relative flex items-center justify-between h-16">
                                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                                    <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-expanded="false">
                                        <span class="sr-only">Open main menu</span>
                                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                        </svg>
                                        <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                                    <div class="flex-shrink-0 flex items-center">
                                        <span class="text-white text-2xl font-bold">Laravel Tutorial</span>
                                    </div>
                                    <div class="hidden sm:block sm:ml-6">
                                        <div class="flex space-x-4">
                                            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Impressum</a>
                                            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Kontakt</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
                            <div class="px-2 pt-2 pb-3 space-y-1">
                                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Impressum</a>
                                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Kontakt</a>
                            </div>
                        </div>
                    </nav>
                </header>
                <main>
                    @yield('content')
                </main>
            </div>
        </div>
    </body>
</html>