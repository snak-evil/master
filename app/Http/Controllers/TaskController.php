<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
class TaskController extends Controller
{
    public function index()
    {
    	return '<a href="/tasks">Go to task list</a>';
    }
    public function tasks()
    {
    	$tasks=Task::all();
    	return view('tasks.index',compact('tasks'));
    }
    public function show($id)
    {

    	$task=Task::find($id);
    	return view('tasks.show',compact('task'));
    }
}
