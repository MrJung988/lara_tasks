@extends('layouts.app')

@section('content')
<h1>Reply to Task</h1>
<form action="{{ route('tasks.reply.store', $task->id) }}" method="POST">
    @csrf
    <input type="hidden" name="task_parent_id" value="{{ $task->id }}"> // set the task_parent_id to the id of the previous task
    <!-- <div>
        <label for="taskName">Task Name</label>
        <input type="text" name="name" id="taskName">
    </div> -->
    <div>
        <label for="Description">Description</label>
        <textarea name="description" id="Description"></textarea>
    </div>
    <div>
        <label for="main_task_parent_id">Main Parent ID</label>
        <input type="number" name="main_task_parent_id" id="main_task_parent_id">
    </div>
    <!-- <div>
        <label for="by_user_id">By User ID</label>
        <input type="number" name="by_user_id" id="by_user_id">
    </div>
    <div>
        <label for="to_user_id">To User ID</label>
        <input type="number" name="to_user_id" id="to_user_id">
    </div>
    <div>
        <label for="dt_starting">Starting Date</label>
        <input type="datetime" name="dt_starting" id="dt_starting">
    </div>
    <div>
        <label for="dt_done">Ending Date</label>
        <input type="datetime" name="dt_done" id="dt_done">
    </div>
    <div>
        <label for="is_done">Is Done</label>
        <input type="checkbox" name="is_done" id="is_done">
    </div>
    <div>
        <label for="is_active">Is Active</label>
        <input type="checkbox" name="is_active" id="is_active">
    </div> -->
    <button type="submit">Save</button>
</form>
@endsection