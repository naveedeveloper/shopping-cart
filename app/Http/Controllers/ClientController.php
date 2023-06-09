<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\users;

class ClientController extends Controller
{
    public function home ()
    {
    return view('client/home');
   }
   public function shop()
   {
       return view('client.shop');
   }
   public function Cart(Request $req)
   {
       if(session('id')!=NULL)
       {
        return view('client.cart');
       }
       else
       {
           return view('client.login',['msg' => '0']);
       }
   }
   public function CheckOut()
   {
    
        return view('client.checkout');
   }
   public function login(Request $req)
   {
       if(session('name')==$req->username &&session('name')!=NULL)
       {
               return view('client.home');
       }
       else
       {
        
           if($req->username!=NULL)
           {
        $user_id = DB::table('users')->where('name',$req->username)->where('password',$req->pass)->value('id');
        if($user_id!=NULL)
        {
            $req->session()->put('id',$user_id,'name',$req->username,'password',$req->pass);
            return view('client.home');
    
        }
        else {
            return view('client.login',['msg'=> '3']);
        }
        }
        else {
            return view('client.login',['msg'=> '0']);
        }
       }
   }
   public function signup()
   {
       
       return view('client.signup');
   }

}
