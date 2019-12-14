<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Subcategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /* Return all products with category and subcategory each product belongs to */
    public function index()
    {
        $products = Product::With(['category' , 'subCategory'])->orderBy('id','DESC')->paginate(5);
        return view('admin.products.index' ,compact('products'));
    }

    public function create()
    {
        $categories = Category::orderBy('id','DESC')->get();
        $subCategories = Subcategory::orderBy('id','DESC')->get();
        return view('admin.products.create', compact(['categories' , 'subCategories']));
    }

    /* used to add a new product */
    public function store(Request $request)
    {
        $product = new Product();
    if($request->hasFile('image'))
    {
      $file             = $request->file('image');
      $destination_path = public_path()."\\productImages";
      $file_name        = $file->getClientOriginalName();
      $extension        = $file->getClientOriginalExtension();
      $actual_path      = $file_name;
      $file->move($destination_path,$file_name);
      $product->image   = $actual_path;
    }

      $product->name         = $request->get('name');
      $product->category_id       = $request->get('category_id');
      $product->subCategory_id   = $request->get('subCategory_id');
   
      $product->save();

     response()->json([
            'data'   => $product,
            'message' => $product ? 'Product Created!' : 'Error Creating Product'
            ]);
     $products = Product::With(['category' , 'subCategory'])->orderBy('id','DESC')->paginate(5);
     return view('admin.products.index' ,compact('products'));
    }

    /* called when uploading a product image */ 
    public function uploadFile(Request $request)
    {
        if($request->hasFile('image')){
            $name = time()."_".$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('productImages'), $name);
        }
        return response()->json(asset("productImages/$name"),201);
    }

    /* Return a specific product */
    public function show(Product $product)
    {
        return response()->json($product,200); 
    }

    public function edit(Product $product)
    {
        $categories = Category::orderBy('id','DESC')->get();
        return view('admin.products.edit' , compact(['categories' , 'product']));
    }

    /* Update a specific product */ 
    public function update(Request $request, $id)
    {
      $product = Product::find($id);
      // This is like $request->all except it doesn't set the image
      // You "fill" the new data so that it doesn't call save yet.
      $product->fill($request->except('image'));

      if($request->hasFile('image'))
      {
        $file             = $request->file('image');
        $destination_path = public_path()."\\productImages";
        $file_name        = $file->getClientOriginalName();
        $extension        = $file->getClientOriginalExtension();
        $actual_path      = $file_name;
        $file->move($destination_path,$file_name);
        $product->image   = $actual_path;
      }

      $product->name           = $request->get('name');
      $product->category_id    = $request->get('category_id');
      $product->subCategory_id = $request->get('subCategory_id');
      $product->save();

    $products = Product::With(['category' , 'subCategory'])->orderBy('id','DESC')->paginate(5);
     return view('admin.products.index' ,compact('products'));
    }

    /* Used to destroy a specific product */
    public function destroy(Product $product)
    {
        $status = $product->delete();

        response()->json([
            'status' => $status,
            'message' => $status ? 'Product Deleted!' : 'Error Deleting Product'
            ]);

        $products = Product::With(['category' , 'subCategory'])->orderBy('id','DESC')->paginate(5);
        return view('admin.products.index' ,compact('products'));
    }


}
