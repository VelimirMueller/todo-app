@extends('layouts.todosapp')


@section('content')

<div class="content">
        <div class="text-center my-5" style="margin-top:20vh;background-color:white;opacity:1;border-radius:5px">   
             <div class="btn btn-info btn-sm" style="width:100%;font-weight:bold;border:solid #999 2px;background:rgba(0,55,125,0); color: #999">
                <h1>Velis Todo App</h1>
            </div>
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
                <div class="btn btn-info btn-sm" style="width:100%;font-weight:bold;border:solid #17a2b8 1px;background:rgba(0,55,125,0); color: #17a2b8">
                {{$todo->name}}
                </div>

                 

                 <a href="/todo-app/public/todos/{{$todo->id}}/complete " class="btn btn-info btn-sm mx-1 float-right">Fertigstellen</a>
                 <a href="/todo-app/public/todos/{{$todo->id}} " class="btn btn-info btn-sm float-right">Check</a><br>
                 <br>
                 <hr>
                 <div class="btn btn-info btn-sm" style="background-color:#17a2b8;">Erstellt am: {{ ($todo->created_at)->format('d-m-Y H:i:s') }}</div>
                
              
                 
                </li>
            @endif

            
                
            @endforeach
        </ul>
</div>
           
    </div>

 </div>
@endsection