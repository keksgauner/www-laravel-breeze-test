<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Todos') }}
        </h2>
    </x-slot>

    <div class="container mx-auto mt-8">
        <a href="{{ route('todos.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Add Todo</a>
        @if ($message = Session::get('success'))
            <div class="bg-green-500 text-white p-2 mt-4 rounded">
                {{ $message }}
            </div>
        @endif
        <table class="table-auto w-full mt-4 bg-white rounded-lg shadow-lg">
            <thead>
                <tr>
                    <th class="px-4 py-2">Title</th>
                    <th class="px-4 py-2">Description</th>
                    <th class="px-4 py-2">Completed</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($todos as $todo)
                    <tr>
                        <td class="border px-4 py-2">{{ $todo->title }}</td>
                        <td class="border px-4 py-2">{{ $todo->description }}</td>
                        <td class="border px-4 py-2">{{ $todo->completed ? 'Yes' : 'No' }}</td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('todos.edit', $todo->id) }}"
                                class="bg-yellow-500 text-white px-4 py-2 rounded">Edit</a>
                            <form action="{{ route('todos.destroy', $todo->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>