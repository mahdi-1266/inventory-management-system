<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Supplier;
use App\Models\Brand;
use App\Models\WareHouse;

class ProductController extends Controller
{
  // Getting the data from db
  public function AllCategory(){
    $category = ProductCategory::latest()->get();
    return view('admin.backend.category.all_category', compact('category'));
  }


  // Inserting the data into db
  public function StoreCategory(Request $request){

    $validation = $request->validate([
      'category_name' => 'required|string|max:50'
    ]);

    ProductCategory::create([
      'category_name' => $validation['category_name'],
      'category_slug' => strtolower(str_replace(' ', '-', $validation['category_name']))
    ]);

    $notification = array(
      'message' => 'Product Category Added Successfully',
      'alert-type' => 'success'
    );
    return redirect()->back()->with($notification);
  }


  public function EditCategory($id){
    $category = ProductCategory::find($id);
    return response()->json($category);
  }

  
  // updating the category 
  public function UpdateCategory(Request $request){

    $category_id = $request->cat_id;

    $validation = $request->validate([
      'category_name' => 'required|string|max:50'
    ]);

    ProductCategory::find($category_id)->update([
      'category_name' => $validation['category_name'],
      'category_slug' => strtolower(str_replace(' ', '-', $validation['category_name']))
    ]);

    $notification = array(
      'message' => 'Product Category Updated Successfully',
      'alert-type' => 'success'
    );
    return redirect()->back()->with($notification);
  }


  // deleting the category
  public function DeleteCategory($id){
    ProductCategory::find($id)->delete();

    $notification = array(
      'message' => 'Product Category Deleted Successfully',
      'alert-type' => 'success'
    );
    return redirect()->back()->with($notification);
  }




  /* ------ All Products Controller Functions ------ */
  public function AllProduct(){
    $allData = Product::orderBy('id', 'desc')->get();
    return view('admin.backend.product.product_list', compact('allData'));
  }


  public function AddProduct(){

    // In add_product.blade.php, we gathered some data from other tables/models as below
    $categories = ProductCategory::all();
    $brands = Brand::all();
    $suppliers = Supplier::all();
    $warehouses = WareHouse::all();

    return view('admin.backend.product.add_product', compact('categories', 'brands', 'suppliers', 'warehouses'));
  }
}
