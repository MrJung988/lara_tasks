@extends('layouts.app')

@section('content')
<h1>Tasks</h1>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Parent ID</th>
            <th>Task Name</th>
            <th>Description</th>
            <th>Main Parent ID</th>
            <th>By User ID</th>
            <th>To User ID</th>
            <th>Starting Date</th>
            <th>Ending Date</th>
            <th>Is Done</th>
            <th>Is Active</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tasks as $task)
        <tr>
            <td>{{ $task->id }}</td>
            <td>{{ $task->task_parent_id }}</td>
            <td>{{ $task->taskName }}</td>
            <td>{{ $task->Description }}</td>
            <td>{{ $task->main_task_parent_id }}</td>
            <td>{{ $task->by_user_id }}</td>
            <td>{{ $task->to_user_id }}</td>
            <td>{{ $task->dt_starting }}</td>
            <td>{{ $task->dt_done }}</td>
            <td>{{ $task->is_done }}</td>
            <td>{{ $task->is_active }}</td>
            <td>
                <a href="{{ route('tasks.show', $task->id) }}">View</a>
                <a href="{{ route('tasks.edit', $task->id) }}">Edit</a>
                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection