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

		return view('index', compact('tasks'));
    }

    public function create()
    {
    	return view('tasks.make');
    }

    public function store(Request $request)
    {
    	$task = new Task;

    	$task->body = $request->body;

    	$task->save();

    	return redirect()->route('homePage');
    }

    public function show($id)
    {
        $tasks = \App\Task::find($id);

        return view('tasks.task', compact('tasks'));
    }

    public function edit(\App\Task $task)
    {
    	return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, $id)
    {
        $tasks = \App\Task::find($id);

        $tasks->body = $request->body;

        $tasks->save();

        return redirect(route('homePage'));
    }

    public function delete($id)
    {
        $task = Task::find($id);

        $task->delete();

        return redirect(route('homePage'));
    }
}






