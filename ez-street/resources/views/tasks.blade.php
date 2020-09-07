@extends('layouts.app')

@section('content')
<h1>This is the task list for the day:</h1>

@if(count($tasks) > 0)
    <ul class="task-list">
    @foreach($tasks as $task)
    <li>{{$task}}</li>
    @endforeach
    </ul>
@endif
@endsection