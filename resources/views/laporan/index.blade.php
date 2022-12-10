@extends('layouts.layout')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
@section('content')
<body>

    <table class="table table-striped table-hover">
        <tr>
        <th>id</th>
        <th>order id</th>
        <th>product id</th>
        <th>total</th>
        <th>qty</th>
    </tr>
        @foreach ( $laporan as $l)
         <tr>
            <th>{{$l->id}}</th>
            <th>{{$l->order_id}}</th>
            <th>{{$l->product_id}}</th>
            <th>{{$l->total}}</th>
            <th>{{$l->total}}</th>
            </tr>
        @endforeach
    </table>

</body>
</html>
@endsection
