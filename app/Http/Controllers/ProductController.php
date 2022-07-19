<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Cart;
use Session;

class ProductController extends Controller
{
    //Product function

    function index(){
        $data = product::all();
        return view('product' , ['products'=>$data]);
    }

    // products detail function

    function detail($id){
        $data = product::find($id);
        return view('detail', ['product'=>$data]);
    }

    // search function

     function search(Request $req){
        $data = Product::where('name', 'like','%'.$req->input('query').'%')
        ->get();
        return view('search',['products'=>$data]);
    }

    //Add to cart function

    function addToCart(Request $req){
        if ($req->session()->has('user')) {
            $cart= new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/');
        }
        else{
            return redirect('/login');
        }
    }

    //cart function
    static function cartItem(){
    $userId=Session::get('user')['id'];
    return Cart::where('user_id',$userId)->count();
}
}