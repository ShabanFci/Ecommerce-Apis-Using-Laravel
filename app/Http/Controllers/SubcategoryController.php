<?php

namespace App\Http\Controllers;

use App\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    /* Return all subcategories with the category each subcategory belongs  */
    public function index()
    {
        return response()->json(Subcategory::With('category')->get(),200);
    }

    /* Used to add a new subcategory*/
    public function store(Request $request)
    {
        $subCategory = Subcategory::create([
            'name' => $request->name ,
            'category_id' => $request->category_id ,     
            ]);

        return response()->json([
            'data'   => $subCategory,
            'message' => $subCategory ? 'Subcategory Created!' : 'Error Creating Subcategory'
            ]);
    }

    /* Return a specific subcategory */
    public function show(Subcategory $subCategory)
    {
        return response()->json($subCategory,200); 
    }

    /* Used to update a specific subcategory */
    public function update(Request $request, Subcategory $subCategory)
    {
        $status = $subCategory->update(
            $request->only(['name' , 'category_id'])
            );

        return response()->json([
            'status' => $status,
            'message' => $status ? 'Subcategory Updated!' : 'Error Updating Subcategory'
            ]);
    }

    /* Delete a specific subCategory */
    public function destroy(Subcategory $subCategory)
    {
        $status = $subCategory->delete();

        return response()->json([
            'status' => $status,
            'message' => $status ? 'Subcategory Deleted!' : 'Error Deleting Subcategory'
         ]);

    }
}
