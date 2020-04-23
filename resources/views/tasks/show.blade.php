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
    
    {!! link_to_route('tasks.edit', 'このtaskを編集', ['id' => $task->id], ['class' => 'btn btn-light']) !!}

    <p>
        
    </p>
    
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}

    <p>
        
    </p>
    
    {!! link_to_route('tasks.index', '戻る', [], ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}
    
    
@endsection
