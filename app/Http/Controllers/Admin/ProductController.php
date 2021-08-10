<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $product = Product::all();
        return view('admin.product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.product.create');
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
        $this->validate($request, [
            'productName'=>'required',
            'slug'=>'required',
            'image'=>'required',
            'description'=>'required',
        ]);
        $product = new product();

        $product->product_name = $request->productName;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . $image->getClientOriginalName();
            $destinationPath = public_path('/uploads/products');
            $image->move($destinationPath, $image_name);
            $product->image = $image_name;
        }

        $product->slug = $request->slug;
        $product->description = $request->description;
        $product->save();

        return redirect(route('products.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);

        return view('admin.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        $this->validate($request, [
            'productName'=>'required',
            'slug'=>'required',
            'image'=>'required',
            'description'=>'required',
        ]);

        $product->product_name = $request->productName;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . $image->getClientOriginalName();
            $destinationPath = public_path('/uploads/products');
            $image->move($destinationPath, $image_name);
            $product->image = $image_name;
        }

        $product->slug = $request->slug;
        $product->description = $request->description;
        $product->save();

        return redirect(route('products.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * Using custom function 'delete' instead of destroy.
     * Cuz that piece of shit is being a cunt!
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $product=Product::find($id);
        $product->delete();
        return redirect(route('products.index'));
    }

    public function destroy($id)
    {
        //
    }
}
