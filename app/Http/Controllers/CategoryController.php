<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   /* Return all categories */
   public function index()
   {
        return response()->json(Category::all(),200);
   }

   /* used to add new category */
   public function store(Request $request)
   {
        $category = Category::create([
            'name' => $request->name      
        ]);

        return response()->json([
            'data'   => $category,
            'message' => $category ? 'Category Created!' : 'Error Creating Category'
        ]);
    }

    /* used to get a specific category */
    public function show(Category $category)
    {
        return response()->json($category,200); 
    }

    /* used to update a specific category */
    public function update(Request $request, Category $category)
    {
        $status = $category->update(
            $request->only(['name'])
        );

        return response()->json([
            'status' => $status,
            'message' => $status ? 'Category Updated!' : 'Error Updating Category'
        ]);
    }

    /* used to delete a specific category */
    public function destroy(Category $category)
    {
        $status = $category->delete();

        return response()->json([
            'status' => $status,
            'message' => $status ? 'Category Deleted!' : 'Error Deleting Category'
        ]);
    }

    /* Return all products belongs to a specific category */
    public function categoryProducts(Category $category)
    {
        $categoryProducts = $category->products()->With(['category','subCategory'])->get();
        return response()->json([
            'data'   => $categoryProducts,
            'message' => 'products of this category'
        ]);

    }

    /* Return all subCategories of a specific category */
    public function categorySubcategories(Category $category)
    {
        $categorySubcategories = $category->subCategories()->get();
        return response()->json([
            'data'   => $categorySubcategories,
            'message' => 'subCategories of this category'
        ]);

    }


}
