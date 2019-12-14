<?php

namespace App\Http\Controllers;

use App\Category;
use App\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Input;

class CategoryController extends Controller
{
   /* Return all categories */
   public function index()
   {
        $categories = Category::orderBy('id','DESC')->paginate(5);
        return view('admin.categories.index' , compact('categories'));
   }

   public function create()
   {
        return view('admin.categories.create');
   }

   /* used to add new category */
   public function store(Request $request)
   {
        $category = Category::create([
            'name' => $request->name      
        ]);

         response()->json([
            'data'   => $category,
            'message' => $category ? 'Category Created!' : 'Error Creating Category'
        ]);

        
        $categories = Category::orderBy('id','DESC')->paginate(5);
        return view('admin.categories.index' , compact('categories'));
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit' ,compact('category'));
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

         response()->json([
            'status' => $status,
            'message' => $status ? 'Category Updated!' : 'Error Updating Category'
        ]);

        $categories = Category::orderBy('id','DESC')->paginate(5);
        return view('admin.categories.index' , compact('categories'));
    }

    /* used to delete a specific category */
    public function destroy(Category $category)
    {
        $status = $category->delete();

         response()->json([
            'status' => $status,
            'message' => $status ? 'Category Deleted!' : 'Error Deleting Category'
        ]);

        $categories = Category::orderBy('id','DESC')->paginate(5);
        return view('admin.categories.index' , compact('categories'));
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
    public function categorySubcategories(Request $request)
    {
        $category_id = $request->get('category_id');
    $subcategories = Category::find($category_id)->subCategories;

    return Response::json($subcategories);

    }


}
