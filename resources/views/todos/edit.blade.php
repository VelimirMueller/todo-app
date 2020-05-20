@extends('layouts.todosapp')

@section('content')

    <div class="from-group">

        <div class="text-center my-5" style="margin-top:20vh;background-color:white;opacity:1;border-radius:5px;">
                <h1>Todos editieren</h1>
        </div>

            
                    
                    <div class="card card-default">

                        <div class="card-header">Neues Todo erstellen</div>

                        <div class="card-body">

                        @if ($errors->any())

                            <div class="alert alter-danger">

                                <ul class="list-group">

                                @foreach ($errors->all() as $error)
                                <li class="list-group-items" style="background-color:rgba(200,0,0,0.5); color:black">
                                    {{ $error }}
                                </li>
                                @endforeach

                                </ul>
                            
                            </div>
                        @endif
                            <form action="/todo-app/public/todos/{{ $todo->id }}/update-todos" method="POST">

                            @csrf

                                <div class="form-group" style="border: 1px solid #17a2b8; border-radius:5px">
                                    <input type="text" class="form-control" placeholder="Name" name="name" value="{{$todo->name}}">
                                </div>

                                <div class="form-group" style="border: 1px solid #17a2b8; border-radius:5px">
                                    <textarea cols="5" rows="5" class="form-control" placeholder="Description" name="description">{{ $todo->description }}
                                    </textarea>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-info btn-sm float-right">Update</button>
                                </div>

                            </form>
                        </div>

                    </div>

                </div>

            
    </div>
    </form>


@endsection