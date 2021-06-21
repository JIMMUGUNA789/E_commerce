<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $data = product::all();
        return view('product', ['products'=> $data]);
  
    }
}
