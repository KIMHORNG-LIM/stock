@extends('order.orderMaster')
@section('title','Product Order')
@section('content')

@foreach($orders as $v)
@csrf
    <tbody>
        <tr>
            <td>{{$v->stock_id}}</td>
            <td colspan="2">{{$v->name}}</td>
            <td>{{$v->id}}</td>
            <td>{{$v->order_amount}}</td>
            <td>{{$v->order_date}}</td>
            <td><span>{{$v->sellprice}}&#36;</span></td>
            <td><span>{{$v->order_amount*($v->sellprice-$v->price)}}&#36;</span></td> 
            
            <!-- sold product get from join table -->
        </tr>
    </tbody>
@endforeach
    @if(session('message'))
    <div class="alert alert-success">{{session('message')}}</div>
    @else
    <div class="alert alert-danger">{{session('message')}}</div>
    @endif

@endsection
@section('content')
    @parent
    @foreach((array)$maxamounts as $maxamount)
    @foreach($orders as $v)
    @csrf
    <div class="single_product_item">
            @if($maxamount->name==$v->name)
                <image src="/images/{{$v->path}} ">
            @endif
                    <div class="single_product_text">
                        <h4>{{$maxamount->name}}</h4>
                        <h3>{{$maxamount->price}}</h3>
                    </div>
            </div>
    @endforeach
    @endforeach

@endsection

    

