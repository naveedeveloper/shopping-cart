<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logout extends Controller
{
    //
 
   function logout(Request $req){
       $req->session()->pull('id',null,'name',null,'password',null);
       return view("client.home");
   }


}
