<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Models\Product;

class submitcontroller extends Controller
{
    public function product( request $req){
       // print_r($req->all());
       // echo "<pre>";
       $req->validate(
        [
            'category' => 'required',
            'product' => 'required',
            'price' => 'required|numeric']
        );
       $product= new Product;
       $product->category=$req->category;
       $product->product=$req->product;
       $product->price=$req->price;
       $product->save();

       
       //return redirect()->back();
       return redirect('/');
    }


    public function view_products(){

        $products = Product::all();

        return view('allproducts',compact('products') );
    }

    public function delete($id){
        $data=product::find($id);
        $data->delete();
        return redirect('/view_products');
    }

    public function search(request $req){
      $search = $req->search;
      $products = product::where('category','Like','%'.$search.'%')
      ->orWhere('product','Like','%'.$search.'%')->orWhere('price','Like','%'.$search.'%')
      ->get();
      return view ('allproducts',compact('products'));

    }

    public function update($id){
        $data = product::find($id);
        return view ( 'update_page',compact('data')); 
    }

    public function updates(request $req,$id){
         $data = product::find($id);
         $data->category = $req->category;
         $data->product = $req->product;
         $data->price = $req->price;
         
         $data->save();
         return redirect('/view_products');
    }
}
