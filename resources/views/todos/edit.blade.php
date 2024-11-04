<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Todo') }}
        </h2>
    </x-slot>

    <div class="container mx-auto mt-8 bg-white rounded-lg shadow-lg">
        <form action="{{ route('todos.update', $todo->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="title" class="block text-gray-700">Title:</label>
                <input type="text" name="title" id="title" class="w-full border border-gray-300 p-2 rounded"
                    value="{{ $todo->title }}" required>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700">Description:</label>
                <textarea name="description" id="description"
                    class="w-full border border-gray-300 p-2 rounded">{{ $todo->description }}</textarea>
            </div>
            <div class="mb-4">
                <label for="completed" class="block text-gray-700">Completed:</label>
                <input type="checkbox" name="completed" id="completed" {{ $todo->completed ? 'checked' : '' }}>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update Todo</button>
        </form>
    </div>
</x-app-layout>