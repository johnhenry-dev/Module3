<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->

            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <link href="/css/styles.css" rel="stylesheet">

    </head>
    <body>
    <div class = "box">
    <div class ="header">
    <div class="container text-center">
    <h2>My ToDo List </h2>

    <a href="create">Add To Do list</a>

    </div>
    </div>
        
        <table class = "table">
            <tr>
                <td>ID</td>
                <td>ToDo List</td>
                <td> </td>
            </tr>
            
            @foreach($toDoArr as $todo)
            <tr>
                <td>{{$todo->id}}</td>
                <td>{{$todo->todolist}}</td>
                <td><a href="delete/{{$todo->id}}">Delete</a> | <a href="edit/{{$todo->id}}">Edit</a> </td>
            </tr>
            
            @endforeach
            

        </table>
        
        <div class = "box">
    </body>
</html>
