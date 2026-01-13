<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Task;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();
        $totalTasks = Task::count();
        $completedTasks = Task::where('status', 'completed')->count();

        // ✅ TAMBAH INI
        $pendingTasks = Task::where('status', 'pending')->count();

        return view('admin.dashboard', compact(
            'totalUsers',
            'totalTasks',
            'completedTasks',
            'pendingTasks'
        ));
    }
}
