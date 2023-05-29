@extends('base')

@section('title', 'Page Title')

@section('content')
    <h1>Hello {{ $controller_name }}! ✅</h1>

    This friendly message is coming from:
    <ul>
        <li>Your controller at <code>app/Http/Controllers/TodoController.php</code></li>
        <li>Your template at <code>resources/views/todo/index.blade.php</code></li>
    </ul>
@endsection
