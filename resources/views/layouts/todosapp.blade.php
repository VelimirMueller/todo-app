<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <title>Velis Todo App</title>
    <style>
        html, body {
                background-image: url('/todo-app/public/img/cool-background.png');
                color:#777;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 90vh;
                margin: 0;
            }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light my-5">
  <a class="navbar-brand" href="/todo-app/public/">Velis Todo App</a>
  <a class="navbar-brand" href="/todo-app/public/todos">Todos</a>
  <a class="navbar-brand" href="/todo-app/public/new-todos">Todos erstellen</a>
  <a class="navbar-brand" href="/todo-app/public/done">Erledigte Todos</a>
  
</nav>

<div class="container">

  @if(session()->has('success'))
              <div class="alert alert-success" style="background-color:white">
                  {{ session()->get('success')}}
              </div>
  @endif

  @yield('content')

</div>

<hr>



  
            
 
 
    

       <div class="text-center py-5" style="color:white">© 2020 Velimir Müller:
       <hr style="color:white">     
       <a href="http://github.com/VelimirMueller" style="color:white"> Github </a>
       </div>
  
   

  




</body>
</html>