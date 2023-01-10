<?php

namespace App\Http\Controllers;

use App\Models\AppTasks;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function reply(AppTasks $task)
    {
        return view('Tasks.reply', compact('task'));
    }
}
