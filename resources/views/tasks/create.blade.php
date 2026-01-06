<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">
            Create Task
        </h2>
    </x-slot>

    <div class="p-6">
        <form method="POST" action="{{ route('tasks.store') }}">
            @csrf

            <div class="mb-4">
                <label>Title</label>
                <input type="text" name="title" class="border p-2 w-full" required>
            </div>

            <div class="mb-4">
                <label>Description</label>
                <textarea name="description" class="border p-2 w-full"></textarea>
            </div>

            <button class="bg-green-500 text-white px-4 py-2 rounded">
                Save
            </button>
        </form>
    </div>
</x-app-layout>
