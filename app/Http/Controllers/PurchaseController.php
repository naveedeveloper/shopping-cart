<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchaseController extends Controller
{

   
  function purchase($id)
  {
  
    return redirect('cart')->with('pid',$id) ;
  
    

  }
}
