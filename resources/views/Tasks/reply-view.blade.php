@extends('layouts.app')

@section('content')
<h1>Task reply</h1>

<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Parent ID</th>
            <th scope="col">Task Name</th>
            <th scope="col">Description</th>
            <th scope="col">Main Parent ID</th>
        </tr>
    </thead>
    <tbody>
        @php
        $i = 1;
        @endphp
        @foreach($tasks as $task)
        <tr>
            <td>{{ $i }}</td>
            <td>{{ $task->task_parent_id }}</td>
            <td>{{ $task->name }}</td>
            <td>{{ $task->description }}</td>
            <td>{{ $task->main_task_parent_id }}</td>
        </tr>
        @php
        $i++;
        @endphp
        @endforeach
    </tbody>
</table>
@endsection