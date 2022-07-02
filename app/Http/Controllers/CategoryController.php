<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = category::paginate(4);

        return view('backend.category.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
        $Category_data = category::where('name', $request->input('category_name'))->first();
        if ($Category_data === null) {
            $data = new category;
            $data->name = $request->category_name;

            if ($request->hasFile('category_image')) {
                $file = $request->file('category_image');
                $extenstion = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extenstion;
    
                $file->move('public/uploads/products_image/', $filename);
                $data->category_image = $filename;
            }
            
            $data->save();

            return response()->json([
                "success" => "Category Added Successfully"
            ]);
        } else {

            return response()->json([
                "warning" => "Category already Added"
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
     $data=category::find($id);
     return view('backend.category.edit',compact('data'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = category::find($request->id);
        $data->name = $request->category_name;

        if ($request->hasFile('category_image')) {
            $file = $request->file('category_image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;

            $file->move('public/uploads/products_image/', $filename);
            $data->category_image = $filename;
        }
        
        $data->update();
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data= category::find($id);
        $data->delete();
        return redirect()->route('categories.index');
    }

    public function getcategory()
    {
      $categories= category::all();
      return view('frontend.index',compact('categories'));
    }
}
