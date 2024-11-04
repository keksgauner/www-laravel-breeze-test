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
        <table class="table-auto w-full mt-4">
            <thead>
                <tr>
                    <th class="px-4 py-2 text-white">Title</th>
                    <th class="px-4 py-2 text-white">Description</th>
                    <th class="px-4 py-2 text-white">Completed</th>
                    <th class="px-4 py-2 text-white">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($todos as $todo)
                    <tr>
                        <td class="border px-4 py-2 text-white">{{ $todo->title }}</td>
                        <td class="border px-4 py-2 text-white">{{ $todo->description }}</td>
                        <td class="border px-4 py-2 text-white">{{ $todo->completed ? 'Yes' : 'No' }}</td>
                        <td class="border px-4 py-2 ">
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