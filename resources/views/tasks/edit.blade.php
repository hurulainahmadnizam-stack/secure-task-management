<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">
            Edit Task
        </h2>
    </x-slot>

    <div class="p-6">
        <form method="POST" action="{{ route('tasks.update', $task) }}">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label>Title</label>
                <input type="text" name="title"
                       value="{{ $task->title }}"
                       class="border p-2 w-full"
                       required>
            </div>

            <div class="mb-4">
                <label>Description</label>
                <textarea name="description"
                          class="border p-2 w-full">{{ $task->description }}</textarea>
            </div>

            <button class="bg-blue-500 text-white px-4 py-2 rounded">
                Update
            </button>
        </form>
    </div>
</x-app-layout>
