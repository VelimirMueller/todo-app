@extends('layouts.todosapp')


@section('content')

<div class="content">
                <div class="text-center my-5" style="margin-top:20vh;background-color:white;opacity:1;border-radius:5px">
                <h1>Velis Todo App</h1>
                </div>
        
        <div class="card card-default">

        <div class="card-header">

            TODOS
        </div>


        <div class="card-body">

        <ul class="list-group">

            @foreach($todos as $todo)
            
            
                <li class="list-group-item">

                {{$todo->name}}
                {{$todo->date_add}}
                    
                    <a href="/todo-app/public/todos/{{$todo->id}} " class="btn btn-info btn-sm float-right">Check</a>
                </li>
            @endforeach
        </ul>
</div>
           
    </div>

 </div>
@endsection