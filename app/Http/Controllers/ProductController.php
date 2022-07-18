<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function index(){
        $data = product::all();
        return view('product' , ['products'=>$data]);
    }
    function detail($id){
        $data = product::find($id);
        return view('detail', ['product'=>$data]);
    }
}