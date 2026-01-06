<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">
            My Tasks
        </h2>
    </x-slot>

    <div class="p-6">
        <a href="{{ route('tasks.create') }}"
           class="bg-blue-500 text-white px-4 py-2 rounded">
            + New Task
        </a>

        @if(session('success'))
            <div class="mt-4 text-green-600">
                {{ session('success') }}
            </div>
        @endif

        <table class="mt-6 w-full border">
            <thead>
                <tr class="bg-gray-100">
                    <th class="p-2 border">Title</th>
                    <th class="p-2 border">Description</th>
                    <th class="p-2 border">Status</th>
                    <th class="p-2 border">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tasks as $task)
                <tr>
                    <td class="p-2 border">{{ $task->title }}</td>
                    <td class="p-2 border">{{ $task->description }}</td>
                    <td class="p-2 border">{{ $task->status }}</td>
                    <td class="p-2 border">
                        <a href="{{ route('tasks.edit', $task) }}" class="text-blue-600">Edit</a>

                        <form action="{{ route('tasks.destroy', $task) }}"
                              method="POST"
                              class="inline">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-600 ml-2">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
