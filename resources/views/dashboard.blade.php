<x-app-layout>
    <!-- Page Header -->
    <x-slot name="header">
        <h2
            style="
                font-family: 'Playfair Display', serif;
                font-size: 2rem;
                font-weight: 600;
                letter-spacing: 0.12em;
                text-transform: uppercase;
                color: #5A1A1A;
            "
        >
            Dashboard
        </h2>
    </x-slot>

    <!-- Page Content -->
    <div style="background-color:#F6EFE7; min-height:100vh; padding:2rem;">

        <div
            style="
                background-color:#F6EFE7;
                border:1px solid #5A1A1A;
                border-radius:8px;
                padding:2.5rem;
                max-width:900px;
            "
        >
            <!-- Welcome Message -->
            <p style="
                color:#3A1A1A;
                font-size:1.4rem;
                font-weight:600;
                margin-bottom:0.3rem;
            ">
                Welcome back, {{ auth()->user()->name }} 👋
            </p>

            <!-- Sub text -->
            <p style="
                color:#6B4A4A;
                font-size:0.95rem;
                margin-bottom:2rem;
            ">
                Here’s a quick overview of your task management system.
            </p>

            <!-- DASHBOARD STATS -->
            <div style="
                display:flex;
                gap:1.5rem;
                flex-wrap:wrap;
            ">
                <!-- Total Tasks -->
                <div style="
                    flex:1;
                    min-width:220px;
                    background-color:#EFE6DC;
                    border:1px solid #5A1A1A;
                    border-radius:8px;
                    padding:1.5rem;
                ">
                    <p style="font-size:0.9rem; color:#6B4A4A;">
                        Total Tasks
                    </p>
                    <p style="
                        font-size:2rem;
                        font-weight:700;
                        color:#5A1A1A;
                    ">
                        {{ $totalTasks }}
                    </p>
                </div>

                <!-- Pending Tasks -->
                <div style="
                    flex:1;
                    min-width:220px;
                    background-color:#EFE6DC;
                    border:1px solid #5A1A1A;
                    border-radius:8px;
                    padding:1.5rem;
                ">
                    <p style="font-size:0.9rem; color:#6B4A4A;">
                        Pending Tasks
                    </p>
                    <p style="
                        font-size:2rem;
                        font-weight:700;
                        color:#9C3B3B;
                    ">
                        {{ $pendingTasks }}
                    </p>
                </div>

                <!-- Completed Tasks -->
                <div style="
                    flex:1;
                    min-width:220px;
                    background-color:#EFE6DC;
                    border:1px solid #5A1A1A;
                    border-radius:8px;
                    padding:1.5rem;
                ">
                    <p style="font-size:0.9rem; color:#6B4A4A;">
                        Completed Tasks
                    </p>
                    <p style="
                        font-size:2rem;
                        font-weight:700;
                        color:#3A7F5A;
                    ">
                        {{ $completedTasks }}
                    </p>
                </div>
            </div>

        </div>

    </div>
</x-app-layout>
