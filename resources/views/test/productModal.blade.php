                           
                            <div id="id{{$v->id}}" class="modal">
                            
                                <form class="modal-content animate"  method="post" enctype="multipart/form-data">
                                @csrf
                                        <div class="imgcontainer">
                                            <span onclick="document.getElementById('id{{$v->id}}').style.display='none'" class="close" title="Close Modal">&times;</span>
                                            <img src="/css/logo1.jpg" alt="logo" class="avatar">
                                        </div>
                                    <div class="container">
                                        <div>
                                            <label for="name"><b>Product name</b></label><br>
                                            <input type="text" name="name"  placeholder="full name" value="{{$v->name}}">
                                        </div>
                                        <div>
                                            <label for="amount"><b>Amount</b></label><br>
                                            <input type="number" name="amount"  placeholder="amount" required>
                                        </div>
                                        <div>
                                            <label for="price"><b>Price</b></label><br>
                                            <input type="float" name="sellprice"  placeholder="expense" required>
                                        </div>
                                        <div>
                                            <label for="date"><b>Sell date</b></label><br>
                                            <input type="date" name="date"  placeholder="mm.dd.yyyy">
                                        </div>
                                        <button type="submit" class="btn btn-danger" style="float:right;">SELL</button>  
                                    </div>
                                </form>
                            </div> 
