<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todos;

class TodoController extends Controller
{
    public function index(){
        $todoValues=Todos::all();
        return view('/dashboard', compact('todoValues'));
    }

    public function addTodo(){       
        Todos::create([
            'todos'=> request('todos'),
        ]);
        
        return redirect()->back();
    }

    public function destroyTodo(Todos $todoValue){
        $todoValue->delete();

        return redirect()->back();
    }
}
