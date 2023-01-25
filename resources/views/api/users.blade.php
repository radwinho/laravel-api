<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            width: 100%;
            border: 1px solid grey;
        }
        th{
            border-bottom: 1px solid gray;
            border: 1px solid gray;

        }
        td{
            padding: 10px;
            text-align: center;
            border: 1px solid gray;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>UserName</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($response as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->username}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>