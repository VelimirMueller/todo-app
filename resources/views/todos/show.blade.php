@extends('layouts.todosapp')

@section('content')



<div class="text-center my-5" style="margin-top:20vh;background-color:white;opacity:1;border-radius:5px">
            <h1>{{$todo->name}}</h1>
</div>
    

        <div class="row justify-content-center">

            <div class="col-md-6">

                <div class="card card-default">
                    <div class="card-header">
                        Details
                    </div>

                    <div class="card-body">
                            {{ $todo->description}}
                    

                    
                
                <hr>
                <a href="/todo-app/public/todos/{{ $todo->id }}/edit" class="btn btn-info btn-sm" style="float:right;">Edit</a>
                <a href="/todo-app/public/todos/{{ $todo->id }}/delete" class="btn btn-danger btn-sm" style="float:right;">Delete</a>
                
            </div>
         
        </div>
</div>
@endsection