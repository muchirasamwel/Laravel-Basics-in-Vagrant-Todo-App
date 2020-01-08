<?php

namespace App\Http\Controllers;

use App\todo;
use Illuminate\Http\Request;
use mysql_xdevapi\Exception;
use Illuminate\Support\Str;

class todoController extends Controller
{
    public function goHome()
    {
        return view('welcome');
    }
    public function goTodo()
    {
        $object=todo::all();;
        return view('todo')->with(['data'=>$object]);
    }
    public function postTodo(Request $request)
    {
        try{
            $newtodo = new todo();
            $newtodo->taskname = $request->input('taskname');
            $newtodo->taskdate = $request->input('taskdate');
            $newtodo->save();
            $object = todo::all();
            return view('todo')->with(['data'=>$object]);
        }
        catch (\Exception $exception)
        {
            $object=todo::all();
           // var_dump($exception);
            if(Str::contains($exception,"Duplicate entry")){
                return view('todo')->with(['errors'=>['Task already exists','try another Task'],'data'=>$object]);
            }
            else
            {
                return view('todo')->with(['errors'=>['Unknown error occurred'],'data'=>$object]);
            }
            //
        }
    }
    public function delTodo(Request $request)
    {
        //var_dump($request);
        todo::destroy([$request->input('id')]);
        $object = todo::all();
        return view('todo')->with(['data'=>$object]);
    }
}
