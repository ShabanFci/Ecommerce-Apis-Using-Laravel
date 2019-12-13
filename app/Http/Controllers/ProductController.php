<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /* Return all products with category and subcategory each product belongs to */
    public function index()
    {
        return response()->json(Product::With(['category' , 'subCategory'])->get(),200);
    }

    /* used to add a new product */
    public function store(Request $request)
    {
        $product = Product::create([
            'name' => $request->name ,
            'image' => $request->image ,
            'category_id' => $request->category_id ,
            'subCategory_id' => $request->subCategory_id ,
                
            ]);

        return response()->json([
            'data'   => $product,
            'message' => $product ? 'Product Created!' : 'Error Creating Product'
            ]);
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

    /* Update a specific product */ 
    public function update(Request $request, Product $product)
    {
        $status = $product->update(
            $request->only(['name' ,'image' ,'category_id' ,'subCategory_id'])
            );

        return response()->json([
            'status' => $status,
            'message' => $status ? 'Product Updated!' : 'Error Updating Product'
            ]);
    }

    /* Used to destroy a specific product */
    public function destroy(Product $product)
    {
        $status = $product->delete();

        return response()->json([
            'status' => $status,
            'message' => $status ? 'Product Deleted!' : 'Error Deleting Product'
            ]);
    }


}
