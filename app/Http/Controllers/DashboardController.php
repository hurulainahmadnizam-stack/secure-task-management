<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $totalTasks = Task::where('user_id', $user->id)->count();
        $pendingTasks = Task::where('user_id', $user->id)
            ->where('status', 'pending')
            ->count();

        $completedTasks = Task::where('user_id', $user->id)
            ->where('status', 'completed')
            ->count();

        return view('dashboard', compact(
            'totalTasks',
            'pendingTasks',
            'completedTasks'
        ));
    }
}
