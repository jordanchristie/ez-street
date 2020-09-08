@extends('layouts.app')

@section('content')
<div class="container my-5">
<h1 class="text-center">{{ $greeting }}, Jordan</h1>

<form method="POST" class="form-horizontal">
{{ csrf_field() }}
    <div class="form-group row">
        <input type="text" placeholder="New task" name="newTask" class="form-control w-50">
        <button type="submit" class="btn btn-primary ml-3"><i class="fa fa-plus"></i> Add</button>
    </div>
</form>

@if(count($tasks) > 0)
    <ul class="task-list">
    @foreach($tasks as $task)
    <div class="card flex-row justify-content-between mt-5">
    <h3 class="card-body col-xs-12 col-sm-6">
        {{$task}}
        <i class="fa fa-pencil"></i> Edit
    </h3>

    

    <div class="btn-group col-xs-12 col-sm-6 p-0">
    <button class="btn btn-success p-4"> <i class="fa fa-check"></i> Complete</button>

    <button class="btn btn-danger p-4"> <i class="fa fa-trash"></i> Delete</button>
    
    </div>
    
    </div>
    
    @endforeach
    </ul>
@endif
</div>
@endsection