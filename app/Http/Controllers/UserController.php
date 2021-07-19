<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PhpParser\Builder\Use_;

class UserController extends Controller
{
    public function login(Request $request){
        //dd($request);
        //return User::where(['email'=>$request->email])->first();
        $user = User::where(['email'=>$request->email])->first();
        //validate 
        if(!$user || !Hash::check($request->password, $user->password)){
            return "Check Login Credetials";
        }
        else{
            //create session
            $request->session()->put('user', $user);
            //return $user;
            return redirect('/');
        }
    }
    public function registerForm(){
        return view('register');
    }
    public function register(Request $request){
       // dd($request->input());
      $isExists = User::where('email', $request->email)
                            ->exists();
    if(!$isExists){
        $password = Hash::make($request->password);
        if(!Hash::check($request->confirmpassword, $password)){
            return view('/register');

        }
        else{
            $newUser = new User();
            $newUser->name = $request->name;
            $newUser->email = $request->email;
            $newUser->password = Hash::make($request->password);
           $newUser->save();
             return view('/login');
    
        }
         
        
    }
    else{
        //return "user already exist";
        return redirect('/register');
    }
   

    }
}
