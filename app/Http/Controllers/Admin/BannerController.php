<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner = Banner::all();
        return view('admin.banner.index', compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'bannerName' => 'required',
            'image' => 'required',
        ]);

        $banner = new banner();

        $banner->banner_name = $request->bannerName;
        if($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() .$image->getClientOriginalName();
            $destinationPath = public_path('/uploads/banners');
            $image->move($destinationPath, $image_name);
            $banner->image = $image_name;
        }

        $banner->save();

        return redirect(route('banners.index'));
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
        $banner = Banner::find($id);
        return view('admin.banner.edit', compact('banner'));
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
        $banner = Banner::find($id);

        $this->validate($request, [
            'bannerName' => 'required',
            'image' => 'required',
        ]);

        $banner->banner_name = $request->bannerName;
        if($request->hasFile('image')) {
            $image = $request->hasFile('image');
            $image_name = time() . $image->getClientOriginalName();
            $destinationPath = public_path('/uploads/banners');
            $image->move($destinationPath, $image_name);
            $banner->image = $image_name;
        }

        $banner->save();

        return redirect(route('banners.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $product=Banner::find($id);
        $product->delete();
        return redirect(route('banners.index'));
    }

    public function destroy($id)
    {
        //
    }
}
