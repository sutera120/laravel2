<!doctype html>
<html lang="ja">

<head>
    <title>Index</title>
    <style>
        th {
            background-color: red;
            padding: 10px;
        }

        td {
            background-color: #eee;
            padding: 10px;
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <h1>Hello/Index</h1>
    <p>{{$msg}}</p>
    <table border="1">
        @foreach($data as $item)
        <tr>
            <th>{{$item->id}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->mail}}</td>
            <td>{{$item->age}}</td>
        </tr>
        @endforeach
    </table>
    <hr>
</body>

</html>