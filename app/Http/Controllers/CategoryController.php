<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

use App\Category;

class CategoryController extends Controller
{
    public function allCategory()
    {
        $categoryObj    = new Category();
        $categories     = $categoryObj->get();
        // return view('backend.category.categories', compact('categories'));
        return view('backend.category.categories', compact('categories'));
        // return $categories;
    }

    public function postCategory(Request $request)
    {
        $categoryObj    = new Category();

        $validator = Validator::make($request->all(), [
            'slug' => 'required|unique:categories|max:255',
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        else{
            $categoryObj->name      = $request->name;
            $categoryObj->slug      = $request->slug;

            $categoryObj->save();

            return redirect()->back()->with('message', 'Category Created Successfully!');
        }
    }

    public function updateCategory(Request $request)
    {

        $categoryObj    = new Category();
        $category       = $categoryObj->find($request->catID);

        $validator = Validator::make($request->all(), [
            'slug' => 'required|unique:categories,slug,'.$category->id,
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        else{
            $category->name      = $request->name;
            $category->slug      = $request->slug;

            $category->save();

            return redirect()->back()->with('message', 'Category Updated Successfully!');
        }
        
    }

    public function deleteCategory($id)
    {
        $categoryObj    = new Category();
        $category       = $categoryObj->find($id);

        $category->delete(); 

        return redirect()->back()->with('message', 'Category Deleted Successfully!');
    }
    

    public function getCategoryInfo(Request $request) // Ajax Call for Edit Purpose
    {
        $id             = Input::get('id');

        $dataObj      = new Category();
        $data         = $dataObj->find($id);

        return response()->json($data);
    }
}
