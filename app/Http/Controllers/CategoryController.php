<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category ;

use function GuzzleHttp\Promise\all;

class CategoryController extends Controller
{
    public function categories()
  {
      $categories=category::All();
      return view ("Admin.categories")->with('categories',$categories);
  }
  public function addcategory()
  {
      return view ("Admin.addcategory");
}
public function savecategory(Request $request)
{
 $this -> validate($request,['category_name' => ' required|unique:categories']);
 $category=new category();
 $category->category_name=$request->input('category_name');
 $category->save();
 return back()->with('status','The Category Name has been Sucessfully Saved!!');
}
public function edit_category(Request $request,$id)
{
      $category=category::find($id);
      return view ("admin.edit_category")->with('category',$category);
}
public function update_category(Request $request)
{
    $this -> validate($request,['category_name' => ' required']);
    $category=category::find($request->input('id'));
    $category->category_name=$request->input('category_name');
    $category->update();
    return redirect('/categories')->with('status','THE CATEGORY NAME HAS SUCESSFULLY UPDATED !!');
   
}
public function delete_category($id)
{
$category=category::find($id);
$category->delete();
return back()->with('status','The Category has been Delete Sucessfully !!');

}
}