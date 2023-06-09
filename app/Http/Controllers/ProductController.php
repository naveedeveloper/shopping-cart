<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function products()
    {
        $product=Product::All();

        return view ("Admin.product")->with('products',$product);

    }
    public function addproduct()
    {
        $cataegories=category::All()->pluck('Category_name','Category_name');
        return  view("Admin.addproduct")->with('categories',$cataegories);
    }
    public function saveproduct(Request $request)
    {
        $this->validate($request,['Product_name'=>'required',
                                'Product_price'=>'required',
                                'Product_category'=>'required',
                                'Product_image'=>'image|nullable|max:1999']);


                                if($request->hasFile('Product_image')){
                                    $FileNameWithExt=$request->file('Product_image')->getClientOriginalName();
                                    $FilenName=pathinfo($FileNameWithExt,PATHINFO_FILENAME);
                                    $extension=$request->file('Product_image')->getClientOriginalExtension();
                                    $filenametostore=  $FilenName.'-'.time().'.'.$extension;


                                    $path=$request->file('Product_image')->storeAs('public/product_images',$filenametostore);

                                }
                                else
                                {
                                    $filenametostore='noimage.jpg';
                                }
                                $product=new Product();
                                $product->Product_name = $request->input('Product_name');
                                $product->Product_price = $request->input('Product_price');
                                $product->Product_category = $request->input('Product_category');
                                $product->Product_image = $filenametostore;
                                $product->save();


                                return back()->with('status','The Product has benn sucessfully Submitied !! ');
    }
    Public function updateproduct(Request $request)
{
    $this->validate($request,['Product_name'=>'required',
    'Product_price'=>'required',
    'Product_category'=>'required',
    'Product_image'=>'image|nullable|max:1999']);

    $product=Product::find($request->input('id'));
    $product->Product_name = $request->input('Product_name');
    $product->Product_price = $request->input('Product_price');
    $product->Product_category = $request->input('Product_category');
    
    
    if($request->hasFile('Product_image')){
        $FileNameWithExt=$request->file('Product_image')->getClientOriginalName();
        $FilenName=pathinfo($FileNameWithExt,PATHINFO_FILENAME);
        $extension=$request->file('Product_image')->getClientOriginalExtension();
        $filenametostore=  $FilenName.'-'.time().'.'.$extension;


        $path=$request->file('Product_image')->storeAs('public/product_images',$filenametostore);

        if($product->product_image !='noimage.jpg')
        {
            Storage::delete('public/product_images/'.$product->Product_image);
        }
             $product->product_image=$filenametostore;
       
    }


    
    
    $product->update();


    return redirect('/products')->with('status','The Product has benn sucessfully Updated !! ');

}
public function edit_product($id)
{
$product=Product::find($id);
$cataegories=category::All()->pluck('Category_name','Category_name');
return  view("Admin.editproduct")->with('categories',$cataegories)->with('product',$product);
}
}
