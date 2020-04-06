<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Destock;
use App\Soldproduct;
class destockController extends Controller
{
    function addStock(){
        return view('final.stockForm');
    }
    function postStock(Request $request){
        $product= new Destock;
        $product->amount=$request->amount;
        $product->price=$request->price;
        $product->sellprice=$request->sellprice;
        $product->name=$request->input('name');
        $product->origin=$request->input('origin');
        $product->date=$request->input('date');
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
            App::abort(500, 'Error');
        }
//User got saved show OK message
            return redirect('/destock')->with('message','Stock is added!');  
        }
        function instock(){
            $destocks = DB::table('destocks')->get();
            return view('instock.instock',['destocks'=>$destocks]);
            // return('test.productModal');
        }
        function makeupCategory(Request $request){
            $product= new Destock;
            $product->sellprice=$request->sellprice;
            $product->name=$request->input('name');
            $destocks = DB::table('destocks')->get();
            return view('category.category',['destocks'=>$destocks]);
         }

   
    function sell(){
        $destocks = DB::table('destocks')->get();
        return view('test.productModal',['destocks'=>$destocks]);
    }
    function sale(Request $request){
        $product= new Soldproduct;
        $product->amount=$request->amount;
        $product->price=$request->sellprice;
        $product->name=$request->input('name');
        $product->date=$request->input('date');
        $product->save();
        if ( ! $product->save())
        {
            return redirect('/makeupCategory')->with('message','Unable to proceed!');  
        }
//User got saved show OK message
            return redirect('/makeupCategory')->with('message','Your product have added to sold table');  
        }
        function soldProduct(){
            $soldproducts = DB::table('soldproducts')->get();
            //$price = DB::table('destocks')->where('name', )->value('price');
            return view('soldProduct.soldProduct',['soldproducts'=>$soldproducts]);
            
        }
    }
    

