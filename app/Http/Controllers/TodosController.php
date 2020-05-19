<?php

namespace App\Http\Controllers;

use App\Todo;

use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index()

    {
        // fetch all todos from database

        //display them in the todos.index page
        $todos = Todo::all();

        return view('todos.index')->with('todos', $todos);

    }


    public function show($todoId)

    {

       // die(var_dump($todoId));
       // dd($todoId)
        

        $todo = Todo::find($todoId);

        return view('todos.show')->with('todo', $todo);
    }


    public function create()
    {

        return view('todos.create');

       
    }

    public function store()
    {
        
        $this->validate(request(), [
            'name'=>'required|min:5|max:25',
            'description'=>'required|min:5|max:250'
        ]);
            //eingebaute validation Methode in Laravel - check Dokumentation auf https://laravel.com/docs/7.x/validation#introduction


        $data = request()->all();
            //data variable definieren um alle daten zu fetchen
        $todo = new Todo();

        $todo->name = $data['name'];
        $todo->description= $data['description'];
            //daten in variable data abspeichern mit den values name und description aus db

        $todo->completed = false;
            //completed eintrag in der db muss auf false gestellt werden !

        $todo->save();
            //db query um die eingaben zu speichern

        

        return redirect('/todos')->with('success', 'Erfolgreich erstellt');
            //user auf todos page weiterleiten

       
    }


    public function edit($todoId)
    {   
        $todo = Todo::find($todoId);
        
        return view('todos.edit')->with('todo', $todo);

        
    }

    public function update($todoId)
    {
        $this->validate(request(), [
            'name'=>'required|min:5|max:25',
            'description'=>'required|min:5|max:250'
        ]);

        $data = request()->all();

        $todo = Todo::find($todoId);
            
        $todo->name = $data['name'];
        $todo->description= $data['description'];

        $todo->completed = false;

        $todo->save();

        return redirect('/todos')->with('success', 'Erfolgreich editiert');

        
    }

    public function delete($todoId)
    {
        $data = request()->all();

        $todo = Todo::find($todoId);

        
    }


    public function destroy($todoId)
    {
        $todo = Todo::find($todoId);

        $todo->delete();

        return redirect('/todos')->with('success', 'Erfolgreich gelöscht');

        
    }

}
