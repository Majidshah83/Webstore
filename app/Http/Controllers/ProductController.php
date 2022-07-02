<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $all_categories = category::all();

        $all_products = Product::paginate(4);


        return view('backend.product.index',compact('all_products', 'all_categories'));
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
        $products = new Product;
        $products->product_name = $request->name;
        $products->category_id = $request->id_categories;
        $products->description = $request->description;
        $products->writer = $request->writer;
        $products->product_price = $request->price;
        if ($request->hasFile('product_image')) {
            $file = $request->file('product_image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;

            $file->move('public/uploads/products_image/', $filename);
            $products->product_image = $filename;
        }
        $products->save();
        return redirect('product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $all_categories = category::all();
        $data = Product::find($id);
        return view('backend.product.edit', compact('all_categories', 'data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $products =  Product::find($request->id);
        $products->product_name = $request->product_name;
        $products->writer = $request->writer;
        $products->category_id = $request->id_categories;
        $products->description = $request->description;
        $products->product_price = $request->product_price;
        if ($request->hasFile('product_image')) {
            $destination = 'public/uploads/products_image/' . $products->product_image;
            if (File::exists($destination)) {

                File::delete($destination);
            }
            $file = $request->file('product_image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('public/uploads/products_image/', $filename);
            $products->product_image = $filename;
        }
        $products->update();
        return redirect('product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data= product::find($id);
        $data->delete();
        return redirect('product');
    }

    public function getproduct($id)
    {
        $products= product::where('category_id',$id)->get();
        return view('frontend.shop',compact('products'));
    }

   


}