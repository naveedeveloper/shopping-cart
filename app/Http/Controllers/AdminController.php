<?php

namespace App\Http\Controllers;

use GuzzleHttp\RetryMiddleware;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {
        return view('Admin.dashboard');
    }
   
  
  public function products()
  {
      return view ("Admin.product");
  }
  public function addproduct()
  {
      return  view("Admin.addproduct");
  }
  public function orders()
  {
        return view("Admin.orders");
  }
  public function addslider()
  {
      return view ("Admin.addslider");
  }
  public function slider()
  {
      return view("Admin.sliders");
  }
}
