<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\Cart;
// use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;



class ProductController extends Controller
{
    public function index(){
        $data = product::all();
        return view('product', ['products'=> $data]);
  
    }
    public function detail($id){
        $data = product::find($id);
        return view('detail',['product'=>$data]);
    }
    public function search(Request $request){
      //  return $request->input();
      $data = product::where('name', 'like', '%'.$request->input('query').'%')->get();
      //return $data;
      return view('search', ['products'=>$data]);
    }
    public function addToCart(Request $request){
        //check if user is logged in
        if($request->session()->has('user')){
            $cart = new Cart();
            $cart->user_id=$request->session()->get('user')['id'];
            $cart->product_id = $request->product_id;
            $cart->save();
            return redirect('/');
        }
        else{
            //redirect if user is not logged in
            return redirect('/login');
        }
    }
    //add products to cart
    static function cartItem(){
        $userId = Session::get('user')['id'];
        return Cart::where('user_id', $userId)->count();
    }
    //logout functionality
    public function logout(){
        Session::forget('user');
        return redirect('/login');
    }
}
