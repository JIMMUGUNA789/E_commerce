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
}
