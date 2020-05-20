@extends('layouts.todosapp')


@section('content')

<div class="content">
                <div class="text-center my-5" style="margin-top:20vh;background-color:white;opacity:1;border-radius:5px">
                <h1>Velis Todo App</h1>
                </div>
        
        <div class="card card-default">

        <div class="card-header">

            ToDos
        </div>


        <div class="card-body">

        <ul class="list-group">

            @foreach($todos as $todo)

            
                
            @if (!$todo->completed)
                <li class="list-group-item">
               
                {{$todo->name}}
                

                 

                 <a href="/todo-app/public/todos/{{$todo->id}}/complete " class="btn btn-info btn-sm mx-1 float-right">Fertigstellen</a>
                 <a href="/todo-app/public/todos/{{$todo->id}} " class="btn btn-info btn-sm float-right">Check</a>
                 
                
              
                 
                </li>
            @endif

            
                
            @endforeach
        </ul>
</div>
           
    </div>

 </div>
@endsection