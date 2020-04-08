@extends('stock.masterForm')
@section('title',"AddStock")

<body> 
@section('content')
<div id="content">
<form method="POST" enctype="multipart/form-data">
@csrf
<div class="container">
    @if(session('message'))
    <div class="alert alert-success">{{session('message')}}</div>
    @endif
  	<input type="hidden" name="size" value="200000">
      <h3 style="text-align:center;">New Stock</h3>
    <div class="form-row">
    <!-- <div class="form-group col-md-6">
        <label for="name">Id</label>
        <input type="number" name="id" class="form-control" placeholder="id">
    </div> -->
    <div class="form-group col-md-6">
        <label for="image">Image</label>
        <input type="file" name="image" class="form-control" placeholder="image">
    </div>
        
    <div class="form-group col-md-6">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" placeholder="full name">
    </div>
    <div class="form-group col-md-6">
        <label for="amount">Product Amount</label>
        <input type="number" name="amount" class="form-control" placeholder="amount" >
    </div>
    <div class="form-group col-md-6">
        <label for="origin">Origin</label>
        <input type="text" name="origin" class="form-control" placeholder="origin">
    </div>
    <div class="form-group col-md-6">
        <label for="price">Price</label>
        <input type="float" name="price" class="form-control" placeholder="expense">
    </div>
    <div class="form-group col-md-6">
        <label for="sell">Sell Price</label>
        <input type="float" name="sellprice" class="form-control" placeholder="selling price">
    </div>
    
    <div class="form-group col-md-6">
        <label for="date">Instock date</label>
        <input type="date" name="date" class="form-control" placeholder="mm.dd.yyyy">
    </div>
    <div class="form-group">
        <label for="importantInfo">Important Note</label>
        <textarea name="note" rows="3" cols="170" class="form-control" placeholder="Make neccessary note for your product"></textarea>
    </div>
   
    <button type="submit" name="upload" class="btn btn-primary">upload</button>
   
    <!-- <a href="fetchImage.php"> -->
  </form>
</div>
@endsection
  

  