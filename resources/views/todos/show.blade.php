@extends('layouts.todosapp')

@section('content')



<div class="text-center my-5" style="margin-top:20vh;background-color:white;opacity:1;border-radius:5px">
            <h1>Details</h1>
</div>
    

        <div class="card card-default">

            

                <div class="card card-default">
                    <div class="card-header">
                    {{$todo->name}}    
                    
                    </div>

                    <div class="card-body">
                        <div class="btn btn-info btn-sm" style="font-weight:bold;border:solid #17a2b8 1px;background:white; color: #17a2b8">
                            {{ $todo->description}}
                        </div>

                    
                
                <hr>

                <a href="/todo-app/public/todos/{{ $todo->id }}/delete" class="btn btn-danger btn-sm" style="float:right;">Löschen</a>

                <a href="/todo-app/public/todos/{{ $todo->id }}/edit" class="btn btn-info btn-sm" style="float:right;">Editieren</a>

                
                
                
        
         
        </div>
</div>
@endsection