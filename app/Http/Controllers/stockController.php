<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Stock;
use App\Order;
class stockController extends Controller
{
    function addStock(){
        return view('stock.stockForm');
    }
    function postStock(Request $request){
        $product= new Stock;
        $product->stock_amount=$request->amount;
        $product->price=$request->price;
        $product->sellprice=$request->sellprice;
        $product->name=$request->input('name');
        $product->origin=$request->input('origin');
        $product->stock_date=$request->input('date');
        $product->note=$request->input('note');
        if($request->file('image')){
            $file=$request->file('image');
            $fname=$file->getClientOriginalName();
            $file->move('images',$fname);
            $product->path= $fname;
        }
        $product->save();
      
        if ( ! $product->save())
        {
            return redirect('/addStock')->with('message','Error! Stock is not added'); 
        }
//User got saved show OK message
            return redirect('/addStock')->with('message','Stock is added!');  
        }
        function stock(){
            $stocks = DB::table('stocks')->get();
            return view('stock.stock',['stocks'=>$stocks]);
            // return('test.productModal');
        }
        function makeupCategory(Request $request){
            $product= new Stock;
            $product->sellprice=$request->sellprice;
            $product->name=$request->input('name');
            $stocks = DB::table('stocks')->get();
            return view('category.category',['stocks'=>$stocks]);
         }

   
    function sell(){
        $stocks = DB::table('stocks')->get();
        return view('category.productModal',['stocks'=>$stocks]);
    }
    function sale(Request $request){
        $product= new Order;
        $product->stock_id=$request->product_id;
        $product->order_amount=$request->amount;
        $product->price=$request->sellprice;
        $product->name=$request->input('name');
        $product->order_date=$request->input('date');
        $product->save();
        if ( ! $product->save())
        {
            return redirect('/order')->with('message','Error! data is not added!');  
        }
//User got saved show OK message
            return redirect('/order')->with('message','Success! data is added');  
        }
        function order(){
            $orders = DB::table('stocks')
            ->join('orders', 'stocks.id', '=', 'orders.stock_id')
            ->select('orders.id','orders.stock_id','orders.order_amount', 'orders.order_date','stocks.sellprice','stocks.price','stocks.name','stocks.path')
            ->get();   
            $maxamounts = DB::table('orders')->select('name','price')->where('orders.id', '=', 'orders.stock_id')->max('order_amount');
            return view('order.order',compact('orders','maxamounts'));   
        }
        function instock(){
            $instocks = DB::table('stocks')
            ->join('orders', 'stocks.id', '=', 'orders.stock_id')
            ->select( 'stocks.stock_amount', 'stocks.name','orders.id','orders.order_amount','orders.stock_id')
            ->get();
            return view('instock.instock',compact('instocks'));
        }
         function getMax() {
            $order_amount=DB::table('orders')->select('*')->get();
            
            $minamount = DB::table('orders')->where('stocks.id', '=', 'orders.stock_id')->min('order_amount');
                  
            $maxamount =  DB::table('orders')->where('stocks.id', '=', 'orders.stock_id')->max('order_amount');
            
             return view ('category.category',compact('minamount','maxamount'),['order_amount'=>$order_amount]);
            
            }

}
