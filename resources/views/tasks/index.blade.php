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
            My Tasks
        </h2>
    </x-slot>

    <!-- Page Content -->
    <div style="background-color:#F6EFE7; min-height:100vh; padding:2rem;">

        <!-- MAIN CARD (same as dashboard) -->
        <div
            style="
                background-color:#F6EFE7;
                border:1px solid #5A1A1A;
                border-radius:8px;
                padding:2.5rem;
                max-width:1000px;
                margin:0 auto;
            "
        >
            <!-- Top Section -->
            <div style="margin-bottom:2rem;">
                <p style="
                    color:#3A1A1A;
                    font-size:1.4rem;
                    font-weight:600;
                    margin-bottom:0.3rem;
                ">
                    Your Tasks Overview
                </p>

                <p style="color:#6B4A4A; font-size:0.95rem;">
                    Manage, update and track your tasks efficiently.
                </p>
            </div>

            <!-- Action Button -->
            <div style="margin-bottom:1.8rem;">
                <a href="{{ route('tasks.create') }}"
                   style="
                        background-color:#5A1A1A;
                        color:#fff;
                        padding:0.55rem 1.2rem;
                        border-radius:6px;
                        font-size:0.85rem;
                        letter-spacing:0.08em;
                        text-transform:uppercase;
                        text-decoration:none;
                   ">
                    + New Task
                </a>
            </div>

            <!-- TASK TABLE (boxed inside dashboard style) -->
            <div style="overflow-x:auto;">
                <table style="width:100%; border-collapse:collapse; font-size:0.9rem;">
                    <thead>
                        <tr style="background-color:#5A1A1A; color:#fff;">
                            <th style="padding:0.6rem; text-align:left;">Title</th>
                            <th style="padding:0.6rem; text-align:left;">Description</th>
                            <th style="padding:0.6rem; text-align:left;">Status</th>
                            <th style="padding:0.6rem; text-align:left;">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($tasks as $task)
                            <tr style="border-bottom:1px solid #C8A9A0;">
                                <td style="padding:0.6rem;">{{ $task->title }}</td>
                                <td style="padding:0.6rem;">{{ $task->description }}</td>

                                <td style="padding:0.6rem; font-weight:600;
                                    color: {{ $task->status === 'completed' ? '#2F855A' : '#9B2C2C' }};
                                ">
                                    {{ strtoupper($task->status ?? 'pending') }}
                                </td>

                                <td style="padding:0.6rem;">
                                    <a href="{{ route('tasks.edit', $task) }}"
                                       style="color:#5A1A1A; text-decoration:underline;">
                                        Edit
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4"
                                    style="padding:1.2rem; text-align:center; color:#6B4A4A;">
                                    No tasks found.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-app-layout>
