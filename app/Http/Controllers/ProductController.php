<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\User;
// use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


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
    function cartList(){
        $userId = Session::get('user')['id'];
        $products = DB::table('cart')
        ->join('products', 'cart.product_id', '=', 'products.id')
        ->where('cart.user_id', $userId)
        ->select('products.*', 'cart.id as cart_id')
        ->get();
        return view('cartlist', ['products'=>$products]);
    }
    //remove from cart
    //  function removeCart(Request $request){
    //      $id = $request->itemtodelete;
    //    Cart::destroy($id);
    //    return "deleted";
       // return $id;}
       function removeCart($id){
           Cart::destroy($id);
           return redirect('/cartlist');
       
       
    }
    public function orderNow(){
        $userId = Session::get('user')['id'];
       $total = $products = DB::table('cart')
        ->join('products', 'cart.product_id', '=', 'products.id')
        ->where('cart.user_id', $userId)
        ->sum('products.price');
        
        return view('ordernow', ['total'=>$total]);

    }
    public function orderPlace(Request $request){
       // return $request->input();
       $userId = Session::get('user')['id'];
       $allCart = Cart::where('user_id', $userId)->get();
       //save data to order table
       foreach($allCart as $cart){
           $order = new Order;
           $order->product_id = $cart['product_id'];
           $order->user_id = $cart['user_id'];
           $order->status = "pending";
           $order->payment_method = $request->payment;
           $order->payment_status = "pending";
           $order->address = $request->address;
           $order->save();

           //remove data from cart
           Cart::where('user_id', $userId)->delete();

       }
       return redirect('/');
    }
    public function myOrders(){
        $userId = Session::get('user')['id'];
        $orders = DB::table('orders')
        ->join('products', 'orders.product_id', '=' ,'products.id')
        ->where('orders.user_id',$userId)
        ->get();
        return view('myorders', ['orders'=>$orders]);

    }
    public function registerForm(){
        return view('register');
    }
    public function register(Request $request){
       // dd($request->input());
      $isExists = User::where('email', $request->email)
                            ->exists();
    if(!$isExists){
        return "user already exist";
    }
    else{
        return redirect('/register')->with('message', 'Email in use');
    }
    //    $newUser = new User();
    //    $newUser->name = $request->name;
    //    $newUser->email = $request->email;
    //    $newUser->password = Hash::make($request->password);
    //    $newUser->save();
       // return view('/login');

    }
}
