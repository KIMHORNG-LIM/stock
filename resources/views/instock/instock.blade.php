@extends('instock.masterInstock')
@section('title',"instock")
<!DOCTYPE html>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<style>
  th td{
    width:100%;
  }
</style>
</head>
<body>

@section('content')

<table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Product<span>name</span></th>
                <th scope="col">Price</th>
                <th scope="col" >Sell Price</th>
                <th scope="col">Amount</th>
                <th scope="col">Origin</th>
                <th scope="col">Date</th>
                <th scope="col">Note</th>
              </tr>
            </thead>
            <tbody>
              
                  @foreach($destocks as $k=>$v)
                <tr>
                <td>{{$v->id}}</td>
                <td>
                  <div class="media">
                    <div class="d-flex">
                       <image class='img-thumbnail' src="/images/{{$v->path}} ">
                    </div>
                    <div class="media-body">
                      {{$v->name}}
                    </div>
                  </div>
                </td>
                <td>
                  <h5>{{$v->price}}&#36;</h5>
                </td>
                <td>
                  <h5>{{$v->sellprice}}&#36;</h5>
                </td>
                <td>
                  <div class="product_count">
                    
                    <input class="input-number" type="text"  min="0" value={{$v->amount}} >
                    
                  </div>
                </td>
                <td>
                  <h5>{{$v->origin}}</h5>
                </td>
                <td>
                  <h5>{{$v->date}}</h5>
                </td>
                <td>
                  <h5>{{$v->note}}</h5>
                </td>
              </tr>
              @endforeach
 
@endsection
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


 <!-- jquery plugins here-->
  <!-- jquery -->
  <script src="/js/jquery-1.12.1.min.js"></script>
  <!-- popper js -->
  <script src="/js/popper.min.js"></script>
  <!-- bootstrap js -->
  <script src="/js/bootstrap.min.js"></script>
  <!-- easing js -->
  <script src="/js/jquery.magnific-popup.js"></script>
  <!-- swiper js -->
  <script src="/js/swiper.min.js"></script>
  <!-- swiper js -->
  <script src="/js/masonry.pkgd.js"></script>
  <!-- particles js -->
  <script src="/js/owl.carousel.min.js"></script>
  <script src="/js/jquery.nice-select.min.js"></script>
  <!-- slick js -->
  <script src="/js/slick.min.js"></script>
  <script src="/js/jquery.counterup.min.js"></script>
  <script src="/js/waypoints.min.js"></script>
  <script src="/js/contact.js"></script>
  <script src="/js/jquery.ajaxchimp.min.js"></script>
  <script src="/js/jquery.form.js"></script>
  <script src="/js/jquery.validate.min.js"></script>
  <script src="/js/mail-script.js"></script>
  <script src="/js/stellar.js"></script>
  <script src="/js/price_rangs.js"></script>
  <!-- custom js -->
  <script src="/js/custom.js"></script>
</body>
</html>