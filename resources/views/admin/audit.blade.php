<x-app-layout>
    <div style="background-color:#F6EFE7; min-height:100vh; padding:2rem;">

        <!-- Page Title -->
        <h2
            style="
                font-family: 'Playfair Display', serif;
                font-size: 2rem;
                font-weight: 600;
                letter-spacing: 0.12em;
                text-transform: uppercase;
                color: #5A1A1A;
                margin-bottom: 2rem;
            "
        >
            Audit Logs
        </h2>

        <!-- Audit Table -->
        <div class="overflow-x-auto">
            <table class="w-full border-collapse">

                <!-- Table Head -->
                <thead>
                    <tr style="background-color:#5A1A1A; color:white;">
                        <th class="p-3 text-left">User Email</th>
                        <th class="p-3 text-left">Action</th>
                        <th class="p-3 text-left">IP</th>
                        <th class="p-3 text-left">Time</th>
                    </tr>
                </thead>

                <!-- Table Body -->
                <tbody>
                    @foreach($logs as $log)
                        <tr
                            style="border-bottom:1px solid #5A1A1A;"
                            onmouseover="this.style.backgroundColor='#EFE6DD'"
                            onmouseout="this.style.backgroundColor='transparent'"
                        >
                            <td class="p-3">
                                {{ $log->user->email ?? 'Unknown' }}
                            </td>
                            <td class="p-3">
                                {{ $log->action }}
                            </td>
                            <td class="p-3">
                                {{ $log->ip_address }}
                            </td>
                            <td class="p-3">
                                {{ $log->created_at }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>

    </div>
</x-app-layout>
