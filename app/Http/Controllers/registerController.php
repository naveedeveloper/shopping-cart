<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;

class registerController extends Controller
{
    //
  function form_submitted(Request $req)
    {
             
                $user=new users;
                $user->name=$req->username;
                $user->password=$req->pass;
                $user->save();
                
                return   view('client.login',['msg' => 2]);
    }
}
