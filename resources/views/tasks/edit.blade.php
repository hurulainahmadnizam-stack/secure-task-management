<x-app-layout>
    <div class="min-h-screen py-10" style="background-color:#F6EFE7;">
        <div class="max-w-3xl mx-auto px-8 py-8 rounded-lg shadow-sm"
             style="background-color:#EFE6DC;">

            <h2 class="text-2xl font-semibold uppercase tracking-wide mb-6"
                style="color:#5A1A1A;">
                Edit Task
            </h2>

            <form method="POST" action="{{ route('tasks.update', $task) }}">
                @csrf
                @method('PUT')

                <!-- Title -->
                <div class="mb-5">
                    <label class="block mb-1 text-sm font-medium"
                           style="color:#5A1A1A;">
                        Title
                    </label>
                    <input type="text" name="title"
                           value="{{ old('title', $task->title) }}"
                           class="w-full px-4 py-2 rounded border focus:outline-none"
                           style="border-color:#5A1A1A;">
                </div>

                <!-- Description -->
                <div class="mb-6">
                    <label class="block mb-1 text-sm font-medium"
                           style="color:#5A1A1A;">
                        Description
                    </label>
                    <textarea name="description" rows="4"
                              class="w-full px-4 py-2 rounded border focus:outline-none"
                              style="border-color:#5A1A1A;">{{ old('description', $task->description) }}</textarea>
                </div>

                <!-- Status -->
                <div class="mb-6">
                    <label class="block mb-1 text-sm font-medium"
                           style="color:#5A1A1A;">
                        Status
                    </label>
                    <select name="status"
                            class="w-full px-4 py-2 rounded border"
                            style="border-color:#5A1A1A;">
                        <option value="pending" {{ $task->status === 'pending' ? 'selected' : '' }}>
                            Pending
                        </option>
                        <option value="completed" {{ $task->status === 'completed' ? 'selected' : '' }}>
                            Completed
                        </option>
                    </select>
                </div>

                <!-- Buttons -->
                <div class="flex gap-4">
                    <button type="submit"
                            class="px-6 py-2 rounded text-white text-sm tracking-wide"
                            style="background-color:#5A1A1A;">
                        Update
                    </button>

                    <a href="{{ route('tasks.index') }}"
                       class="px-6 py-2 rounded text-sm tracking-wide"
                       style="border:1px solid #5A1A1A; color:#5A1A1A;">
                        Cancel
                    </a>
                </div>

            </form>
        </div>
    </div>
</x-app-layout>
