@extends('layouts.app')

@section('content')

    <h1>task新規作成ページ</h1>

    <div class="row">
        <div class="col-6">
            {!! Form::model($task, ['route' => 'tasks.store']) !!}
        
                <div class="form-group">
                    {!! Form::label('content', 'task:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
        
                {!! Form::submit('送信', ['class' => 'btn btn-primary']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>
    
@endsection
