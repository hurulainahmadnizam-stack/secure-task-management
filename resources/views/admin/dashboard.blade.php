<x-app-layout>
    <div class="min-h-screen py-12" style="background:#F6EFE7">
        <div class="max-w-6xl mx-auto px-10">

            <h1 class="text-4xl font-bold uppercase tracking-widest mb-10"
                style="color:#5A1A1A;">
                Dashboard
            </h1>

            <div class="grid grid-cols-3 gap-8">
                <div class="p-8 rounded-lg shadow"
                     style="background:#EFE6DC">
                    <h3 class="text-xl font-semibold">Total Tasks</h3>
                    <p class="text-4xl mt-4">{{ $totalTasks }}</p>
                </div>

                <div class="p-8 rounded-lg shadow"
                     style="background:#EFE6DC">
                    <h3 class="text-xl font-semibold">Pending</h3>
                    <p class="text-4xl mt-4">{{ $pendingTasks }}</p>
                </div>

                <div class="p-8 rounded-lg shadow"
                     style="background:#EFE6DC">
                    <h3 class="text-xl font-semibold">Completed</h3>
                    <p class="text-4xl mt-4">{{ $completedTasks }}</p>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
