<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Task;

class TasksController extends Controller
{
    public function index()
    {
    	$tasks = \App\Task::all();

		return view('todo', compact('tasks'));
    }

    public function create()
    {
    	return view('make');
    }

    public function store(Request $request)
    {
    	$task = new Task;

    	$task->body = $request->body;

    	$task->save();

    	return redirect()->route('homePage');
    }

    public function edit()
    {
    	
    }
}






