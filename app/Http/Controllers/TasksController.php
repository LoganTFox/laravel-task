<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class TasksController extends Controller
{
    public function index()
    {
    	$tasks = \DB::table('tasks')->get();

    	return view('todo', compact('tasks'));
    }

    public function create()
    {
    	return view('make');
    }

    public function store()
    {
    	$post = new Post;

    	$post->body = request('body');

    	$post->save();

    	return redirect('/');
    }
}






