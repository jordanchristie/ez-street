<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function show() {
        $tasks = array('wash the car', 'feed the cat', 'feed the cat to the dog');

        return view('tasks')->with('tasks', $tasks);
    }
}
