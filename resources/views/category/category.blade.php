@extends('category.categoryMaster')

@section('title','Product Category')
@section('content')
    @foreach($stocks as $k=>$v)
    @csrf
                    <div class="col-lg-4 col-sm-6"> 
                                @include('category.productModal')
                                 @csrf
                        <div class="single_product_item">
                                <image src="/images/{{$v->path}} ">
                        <div class="single_product_text">
                                    <h4>{{$v->name}}</h4>
                                    <h3>{{$v->sellprice}} &#36;</h3>
                                   <button type="button" onclick="document.getElementById('id{{$v->id}}').style.display='block'" class="btn btn-primary btn-sm">SALE</button>
                                   
                        </div>
                        </div>  
                    </div>      
                    <script>
                                    // Get the modal
                                    var modal = document.getElementById('id{{$v->id}}');

                                    // When the user clicks anywhere outside of the modal, close it
                                    window.onclick = function(event) {
                                        if (event.target == modal) {
                                            modal.style.display = "none";
                                        }
                                    }
                    </script>                                      
    @endforeach


@endsection