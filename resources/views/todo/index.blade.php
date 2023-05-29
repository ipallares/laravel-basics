@extends('base')

@section('title', 'Hello {{ $controller_name }}! ✅')

@section('content')
    <h1>TODO List</h1>
    <ul>
        @foreach ($todoList as $todo)
            @php
                $color = $todo->is_finished ? 'green' : 'red';
            @endphp

            <li style="color:{{ $color }}">{{ $todo->name }}</li>
        @endforeach
    </ul>
@endsection
