<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use Session;
use Illuminate\Support\Facades\DB;

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
    //cart list function

    function cartlist(){
    $userId=Session::get('user')['id'];
    $products= DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id', $userId)
        ->select('products.*','cart.id as cart_id')
        ->get();

        return view('cartlist',['products'=>$products]);
    }

    //product remove from cart function
    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }

    // order function
    function orderNow (){
    $userId=Session::get('user')['id'];
    $total= $products= DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id', $userId)
        ->sum('products.price');

        return view('ordernow',['total'=>$total]);
    }
    //order place function

    function orderPlace(Request $req)
    {
    $userId=Session::get('user')['id'];
    $allcart = Cart::where('user_id',$userId)->get();
    foreach($allcart as $cart)
    {
        $order = new Order;
        $order->product_id=$cart['product_id'];
        $order->user_id=$cart['user_id'];
        $order->status="pending";
        $order->payment_method=$req->payment;
        $order->payment_status="pending";
        $order->address=$req->address;
        $order->city=$req->city;
        $order->state=$req->state;
        $order->zip=$req->zip;
        $order->save();

        Cart::where('user_id',$userId)->delete();
    }
    $req->input();
    return redirect('/');
    }
    // my order function
    function myOrders()
    {
        $userId=Session::get('user')['id'];
        $orders= DB::table('orders')
         ->join('products','orders.product_id','=','products.id')
         ->where('orders.user_id',$userId)
         ->get();

         return view('myorders',['orders'=>$orders]);
    }
}