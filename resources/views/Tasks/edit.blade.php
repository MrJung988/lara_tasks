@extends('layouts.app')

@section('content')
<h1>Edit Task</h1>
<form action="{{ route('tasks.update', $task->id) }}" method="POST">
    @csrf
    @method('PATCH')
    <div>
        <label for="task_parent_id">Parent ID</label>
        <input type="number" name="task_parent_id" id="task_parent_id" value="{{ $task->task_parent_id }}">
    </div>
    <div>
        <label for="taskName">Task Name</label>
        <input type="text" name="taskName" id="taskName" value="{{ $task->taskName }}">
    </div>
    <div>
        <label for="Description">Description</label>
        <textarea name="Description" id="Description">{{ $task->Description }}</textarea>
    </div>
    <div>
        <label for="main_task_parent_id">Main Parent ID</label>
        <input type="number" name="main_task_parent_id" id="main_task_parent_id" value="{{ $task->main_task_parent_id }}">
    </div>
    <div><label for="by_user_id">By User ID</label>
        <input type="number" name="by_user_id" id="by_user_id" value="{{ $task->by_user_id }}">
    </div>
    <div>
        <label for="to_user_id">To User ID</label>
        <input type="number" name="to_user_id" id="to_user_id" value="{{ $task->to_user_id }}">
    </div>
    <div>
        <label for="dt_starting">Starting Date</label>
        <input type="datetime" name="dt_starting" id="dt_starting" value="{{ $task->dt_starting }}">
    </div>
    <div>
        <label for="dt_done">Ending Date</label>
        <input type="datetime" name="dt_done" id="dt_done" value="{{ $task->dt_done }}">
    </div>
    <div>
        <label for="is_done">Is Done</label>
        <input type="checkbox" name="is_done" id="is_done" {{ $task->is_done ? 'checked' : '' }}>
    </div>
    <div>
        <label for="is_active">Is Active</label>
        <input type="checkbox" name="is_active" id="is_active" {{ $task->is_active ? 'checked' : '' }}>
    </div>
    <button type="submit">Save</button>
</form>
@endsection