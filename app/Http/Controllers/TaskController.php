<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Laravel\Sanctum\HasApiTokens;

class TaskController extends Controller
{
    use HasApiTokens;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();
        return response()->json([
            'status_code'   => 200,
            'tasks'         => $tasks
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id'=>'required',
            'isActive'=>'required|boolean',
            'position'=>'required'
        ]);

        $task = new Task;
        $task->user_id = $request->user_id;
        $task->isActive = $request->isActive;
        $task->position = $request->position;

        if(!$task->save()){
            return response()->json([
                'status_code'=>503,
                'error'=>'Error in creating Task'
            ]);
        }
        return response()->json([
            'status_code'   => 200,
            'task'         => $task
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        return response()->json([
            'status_code'   => 200,
            'task'         => $task
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        $request->validate([
            'user_id'=>'required',
            'isActive'=>'required|boolean',
            'position'=>'required'
        ]);

        $task->user_id = $request->user_id;
        $task->isActive = $request->isActive;
        $task->position = $request->position;

        if(!$task->save()){
            return response()->json([
                'status_code'=>503,
                'error'=>'Error in updating Task'
            ]);
        }
        return response()->json([
            'status_code'   => 200,
            'task'         => $task
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        if($task->delete())
        return response()->json([
            'status_code'   => 200,
        ]);       
    }
}
