<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body class="container">

        <form method="POST" action="/avatars" enctype="multipart/form-data">

            {{ csrf_field() }}

            <input type="file" name='avatar'></input>


            <button type="submit">Submit</button>
        </form>
    

    </body>
</html>
