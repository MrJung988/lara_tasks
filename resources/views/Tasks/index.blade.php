@extends('layouts.app')

@section('content')
<h1>Tasks</h1>
<a href="{{ route('tasks.create') }}"><button class="btn btn-primary">Add Tasks</button></a>
<table class="table" id="">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Parent ID</th>
            <th scope="col">Task Name</th>
            <th scope="col">Description</th>
            <th scope="col">Main Parent ID</th>
            <th scope="col">By User ID</th>
            <th scope="col">To User ID</th>
            <th scope="col">Starting Date</th>
            <th scope="col">Ending Date</th>
            <th scope="col">Is Done</th>
            <th scope="col">Is Active</th>
            <th scope="col">Actions</th>
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
            <td>{{ $task->by_user_id }}</td>
            <td>{{ $task->to_user_id }}</td>
            <td>{{ $task->dt_starting }}</td>
            <td>{{ $task->dt_done }}</td>
            <td>{{ $task->is_done }}</td>
            <td>{{ $task->is_active }}</td>
            <td>
                <a href="{{ route('tasks.reply', $task->id) }}" class="btn btn-primary">Reply</a>
                <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-info">View</a>
                <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @php
        $i++;
        @endphp
        @endforeach
    </tbody>
</table>

<footer>
    <a href="{{ route('logout') }}">Logout</a>
</footer>



@endsection

@push('js')
<!-- <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script> -->
@endpush