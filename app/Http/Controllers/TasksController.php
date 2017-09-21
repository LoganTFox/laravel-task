<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
    	$tasks = \DB::table('tasks')->get();

    	return view('todo', compact('tasks'));
    }
}
