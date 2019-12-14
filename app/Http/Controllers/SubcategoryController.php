<?php

namespace App\Http\Controllers;

use App\Subcategory;
use App\Category;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    /* Return all subcategories with the category each subcategory belongs  */
    public function index()
    {
        $subCategories = Subcategory::With('category')->orderBy('id','DESC')->paginate(5);
        return view('admin.subCategories.index' , compact('subCategories'));
        
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.subCategories.create' , compact('categories'));
    }

    /* Used to add a new subcategory*/
    public function store(Request $request)
    {
        $subCategory = Subcategory::create([
            'name' => $request->name ,
            'category_id' => $request->category_id ,     
            ]);

        response()->json([
            'data'   => $subCategory,
            'message' => $subCategory ? 'Subcategory Created!' : 'Error Creating Subcategory'
            ]);

        $subCategories = Subcategory::With('category')->orderBy('id','DESC')->paginate(5);
        return view('admin.subCategories.index' , compact('subCategories'));
    }

    /* Return a specific subcategory */
    public function show(Subcategory $subCategory)
    {
        return response()->json($subCategory,200); 
    }

    public function edit(Subcategory $subCategory)
    {
        $categories = Category::all();
        return view('admin.subCategories.edit' , compact(['subCategory' , 'categories']));
    }

    /* Used to update a specific subcategory */
    public function update(Request $request, Subcategory $subCategory)
    {
        $status = $subCategory->update(
            $request->only(['name' , 'category_id'])
            );

        response()->json([
            'status' => $status,
            'message' => $status ? 'Subcategory Updated!' : 'Error Updating Subcategory'
            ]);

        $subCategories = Subcategory::With('category')->orderBy('id','DESC')->paginate(5);
        return view('admin.subCategories.index' , compact('subCategories'));
    }

    /* Delete a specific subCategory */
    public function destroy(Subcategory $subCategory)
    {
        $status = $subCategory->delete();

        response()->json([
            'status' => $status,
            'message' => $status ? 'Subcategory Deleted!' : 'Error Deleting Subcategory'
         ]);

        $subCategories = Subcategory::With('category')->orderBy('id','DESC')->paginate(5);
        return view('admin.subCategories.index' , compact('subCategories'));

    }
}
