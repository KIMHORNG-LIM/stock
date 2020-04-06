@extends('soldProduct.soldMaster')
@section('title','Product Order')
@section('content')
@csrf
@foreach($soldproducts as $k=>$v)
    <tbody>
        <tr>
            <td colspan="2">{{$v->name}}</td>
            <td>{{$v->amount}}</td>
            <td>{{$v->date}}</td>
            <td><span>{{$v->price}}&#36;</span></td>
            <td>{{$v->price*$v->amount}}&#36;<td>
            
        </tr>
    </tbody>
@endforeach
@endsection
