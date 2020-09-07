<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    private function getGreeting() {
        $hours = date('H');

        if ( $hours < 12 ) {
            return 'Good Morning';
        }
        else if ( $hours < 18 ) {
            return 'Good Afternoon';
        }
        else {
            return 'Good Evening';
        }
    }
    public function show() {
        $tasks = array('wash the car', 'feed the cat', 'feed the cat to the dog');

        $greeting = $this->getGreeting();

        return view('tasks', ['tasks' => $tasks, 'greeting' => $greeting]);
    }

    public function create(Request $request) {
        $newTask = $request->input('newTask');
        $tasks = array('wash the car', 'feed the cat', 'feed the cat to the dog');
        
        $greeting = $this->getGreeting();

        array_push($tasks, $newTask);

        return view('tasks', ['tasks' => $tasks, 'greeting' => $greeting]);
    }
}
