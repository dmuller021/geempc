@extends('master')

@section('content')
    <!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #DDD;
        }

        tr:hover {background-color: #D6EEEE;}
    </style>
</head>
<body>
<table>
    <tr>
        <th>order id</th>
        <th>email</th>
        <th>address</th>
        <th>house number</th>
        <th>created_at</th>

    </tr>
@foreach($order as $orders)

    <tr>

        <td>{{$orders->id}}</td>
        <td>{{$orders->email}}</td>
        <td>{{$orders->address}}</td>
        <td>{{$orders->house_number}}</td>
        <td>{{$orders->created_at}}</td>
        <th> <form method="post" action="{{route('repair')}}">
                <input type="submit" name="repair" value="repair">
            </form></th>

    </tr>

    @endforeach
</table>

</body>
</html>
@endsection
