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

            
                
            @if ($todo->completed)
                <li class="list-group-item">
               
                {{$todo->name}}
                

                 <div class="btn-info btn-sm mx-1 float-right" style="background-color:red;">Completetion Date: {{$todo->updated_at}}</div>
                
                 
                
              
                 
                </li>
            @endif

            
                
            @endforeach
        </ul>
</div>
           
    </div>

 </div>
@endsection

