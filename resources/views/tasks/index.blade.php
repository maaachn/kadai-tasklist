@extends('layouts.app')

@section('content')

    <h1>タスクリスト一覧</h1>
    
    @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>タイトル</th>
                    <th>タスク</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $message)
                    <tr>
                        <td>{!! link_to_route('tasks.show', $message->id, ['id' => $message->id]) !!}</td>
                        <td>{{ $message->title }}</td>
                        <td>{{ $message->content }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    {!! link_to_route('tasks.create', '新規タスクの投稿', null, ['class' => 'btn btn-primary']) !!}

@endsection