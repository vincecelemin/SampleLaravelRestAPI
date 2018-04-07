<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Todo;

class TodosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = Todo::all();

        return $todos;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // SAMPLE REQUEST BODY
    // {
    //     "task": "New task",
    //     "done": false,
    //     "date_completed": null
    // }
    public function store(Request $request)
    {
        $requestBody = $request->json()->all();
        
        $todo = new Todo();

        try {
            $todo->task = $requestBody['task'];
            $todo->done = $requestBody['done'];
            $todo->date_completed = $requestBody['date_completed'];
            $todo->save();
        }
        catch(\Illuminate\Database\QueryException $ex){ 
            return response('Encountered a database error issue.', 500); 
        }
        catch(Exception $ex){ 
            return response($ex->getMessage(), 400); 
        }

        return response($todo, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $todos = Todo::find($id);

        return $todos;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // SAMPLE REQUEST BODY
    // {
    //     "task": "New task",
    //     "done": false,
    //     "date_completed": null
    // }
    public function update(Request $request, $id)
    {
        $requestBody = $request->json()->all();

        $todo = Todo::find($id);

        if ($todo == null)
            return response('Todo not found.', 404);

        try {
            $todo->task = $requestBody['task'];
            $todo->done = $requestBody['done'];
            $todo->date_completed = $requestBody['date_completed'];
            $todo->save();
        }
        catch(\Illuminate\Database\QueryException $ex){ 
            return response('Encountered a database error issue.', 500); 
        }
        catch(Exception $ex){ 
            return response($ex->getMessage(), 400); 
        }

        return response($todo, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $todo = Todo::find($id);

        if ($todo == null)
            return response('Todo not found.', 404);

        $todo->delete();
        
        return response('Todo successfully deleted.', 200); 
    }
}
