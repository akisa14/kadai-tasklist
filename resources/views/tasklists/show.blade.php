@extends('layouts.app')

@section('content')

    <h1>id = {{ $tasklist->id }} のタスク詳細ページ</h1>
    
    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <th>{{ $tasklist->id }}</th>
        </tr>
        <tr>
            <th>タスク</th>
            <th>{{ $tasklist->content }}</th>
        </tr>
        <tr>
            <th>ステータス</th>
            <th>{{ $tasklist->status }}</th>
        </tr>
    </table>

    {!! link_to_route('tasklists.edit', 'このタスクを編集', ['id' => $tasklist->id], ['class' => 'btn btn-default']) !!}
    
     {!! Form::model($tasklist, ['route' => ['tasklists.destroy', $tasklist->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger'])!!}
    {!! Form::close() !!}

@endsection