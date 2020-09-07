@extends('layouts.app')

@section('content')
<h1 class="text-center">{{ $greeting }}, Jordan</h1>

<?php echo date('H') ?>

<form method="POST" class="form-horizontal">
{{ csrf_field() }}
    <div class="form-group row">
        <input type="text" placeholder="New task" name="newTask" class="form-control w-50">
        <input type="submit" value="Add" class="btn btn-primary ml-3">
    </div>
</form>

@if(count($tasks) > 0)
    <ul class="task-list">
    @foreach($tasks as $task)
    <div class="card flex justify-content-between mt-5">
    <h3 class="card-body">{{$task}}</h3>

    <div class="btn-group">
    <button class="btn btn-success p-4">Complete</button>
    <button class="btn btn-danger p-4">Remove</button>
    </div>
    
    </div>
    
    @endforeach
    </ul>
@endif
@endsection