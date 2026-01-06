<x-app-layout>
    <div class="p-6">
        <h2 class="text-xl font-bold mb-4">Audit Logs</h2>

        <table class="border w-full">
            <tr class="bg-gray-100">
                <th class="border p-2">User ID</th>
                <th class="border p-2">Action</th>
                <th class="border p-2">IP</th>
                <th class="border p-2">Time</th>
            </tr>

            @foreach($logs as $log)
            <tr>
                <td class="border p-2">{{ $log->user_id }}</td>
                <td class="border p-2">{{ $log->action }}</td>
                <td class="border p-2">{{ $log->ip_address }}</td>
                <td class="border p-2">{{ $log->created_at }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</x-app-layout>
