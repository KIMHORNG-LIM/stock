@extends('instock.instockMaster')
@section('title','Product Order')
@section('content')

@foreach($instocks as $v)
@csrf

    <tbody>
        <tr>

            <td>{{$v->stock_id}}</td>
            <td>{{$v->stock_amount}}</td>
            <td colspan="2">{{$v->name}}</td>
            <td>{{$v->id}}</td>
            <td>{{$v->order_amount}}</td>
            <td>{{$v->stock_amount-$v->order_amount}}</td>
            <!-- sold product get from join table -->
        </tr>
       
    </tbody>
@endforeach
@endsection
