@extends('layouts.app')

@section('content')

<h1>id = {{ $task->id }} のtask詳細ページ</h1>

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>task</th>
            <td>{{ $task->content }}</td>
        </tr>
    </table>
@endsection
