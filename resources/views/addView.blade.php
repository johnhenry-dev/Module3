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
    <a href="/">View To Do list</a>
    <div class="container text-center">
    
    <form action="addTodo">
            <input type="text" name="todolist" placeholder="Enter to do list" class='form-control'>
            <input type="submit">
    </form>
    </div>

    </body>
</html>
