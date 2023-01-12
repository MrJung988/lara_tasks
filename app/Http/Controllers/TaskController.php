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

    public function replyStore(Request $request, $task)
    {
        // dd($task);
        $reply_task = new AppTasks();
        $reply_task->task_parent_id = $task;
        $reply_task->description = $request->description;
        $reply_task->main_task_parent_id = $request->main_task_parent_id;
        $reply_task->save();
        // dd($task);
        $tasks = AppTasks::where('main_task_parent_id', $task)->get();
        // dd($tasks);

        return view('Tasks.reply-view', compact('tasks'))->with('success', 'Successfully reply saved');
    }

    public function replyView()
    {
        return view('Tasks.reply-view');
    }
}
