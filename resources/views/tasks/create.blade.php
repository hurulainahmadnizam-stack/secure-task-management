<x-app-layout>
    <div class="min-h-screen py-12" style="background-color:#F6EFE7;">
        <div class="max-w-3xl mx-auto px-10 py-8 rounded-lg"
             style="background-color:#EFE4D8;">

            <h2 class="text-xl font-semibold mb-6"
                style="color:#5A1A1A;">
                Create Task
            </h2>

            <form method="POST" action="{{ route('tasks.store') }}">
                @csrf

                <!-- TITLE -->
                <div class="mb-4">
                    <label class="block mb-1">Title</label>
                    <input type="text" name="title"
                           class="w-full rounded border-gray-300"
                           required>
                </div>

                <!-- DESCRIPTION -->
                <div class="mb-6">
                    <label class="block mb-1">Description</label>
                    <textarea name="description"
                              class="w-full rounded border-gray-300"
                              rows="4"></textarea>
                </div>

                <!-- SUBMIT BUTTON -->
                <button type="submit"
                        class="px-6 py-2 rounded text-white"
                        style="background-color:#5A1A1A;">
                    Save Task
                </button>
            </form>

        </div>
    </div>
</x-app-layout>
