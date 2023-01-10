<?php

namespace App\Http\Controllers;

use App\Models\AppTasks;
use Illuminate\Http\Request;

class AppTasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = AppTasks::all();
        return view('Tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $task = new AppTasks();
        $task->task_parent_id = $request->task_parent_id;
        $task->name = $request->name;
        $task->description = $request->Description;
        $task->main_task_parent_id = $request->main_task_parent_id;
        $task->by_user_id = $request->by_user_id;
        $task->to_user_id = $request->to_user_id;
        $task->dt_starting = $request->dt_starting;
        $task->dt_done = $request->dt_done;
        $task->is_done = $request->is_done;
        $task->is_active = $request->is_active;
        $task->save();

        return redirect()->route('tasks')->with('success', 'Task saved successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(AppTasks $task)
    {
        return view('Tasks.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(AppTasks $task)
    {
        return view('Tasks.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AppTasks $task)
    {
        $task->save();

        return redirect()->back()->with('success', 'Task updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(AppTasks $task)
    {
        $task->delete();

        return redirect()->back()->with('success', 'Task deleted successfully!');
    }
}
