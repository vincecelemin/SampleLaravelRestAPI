<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
    <h3>Available Routes</h3>
    <pre>
+--------+----------+------------+------+----------------------------------------------+------------+
| Domain | Method   | URI        | Name | Action                                       | Middleware |
+--------+----------+------------+------+----------------------------------------------+------------+
|        | GET|HEAD | /          |      | Closure                                      | web        |
|        | POST     | todos      |      | App\Http\Controllers\TodosController@store   | web        |
|        | GET|HEAD | todos      |      | App\Http\Controllers\TodosController@index   | web        |
|        | DELETE   | todos/{id} |      | App\Http\Controllers\TodosController@destroy | web        |
|        | GET|HEAD | todos/{id} |      | App\Http\Controllers\TodosController@show    | web        |
|        | PUT      | todos/{id} |      | App\Http\Controllers\TodosController@update  | web        |
+--------+----------+------------+------+----------------------------------------------+------------+
    </pre>
    </body>
</html>
