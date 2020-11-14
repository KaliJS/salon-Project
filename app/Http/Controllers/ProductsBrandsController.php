<?php

namespace App\Http\Controllers;

use App\Models\ProductsBrands;
use Illuminate\Http\Request;
use App\Models\Branch;
use Redirect;
use Auth;

class ProductsBrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = ProductsBrands::orderBy('name')->get();
        return view('admin.Products.products-brands',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Products.create-products-brands');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $input=$request->all();
        $input['branch_id']=\Auth::user()->id;
        ProductsBrands::create($input);
        
        return redirect()->route('products-brands.index')
            ->with('success', 'Brand created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductsBrands  $productsBrands
     * @return \Illuminate\Http\Response
     */
    public function show(ProductsBrands $productsBrands)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductsBrands  $productsBrands
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductsBrands $productsBrands)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductsBrands  $productsBrands
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductsBrands $productsBrands)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductsBrands  $productsBrands
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductsBrands $productsBrands)
    {
        //
    }

    public function editBrand($id){
        try{
            $brand=ProductsBrands::find($id);
            return view('admin.Products.edit-products-brands', compact('brand'));
            
        }catch(\Exception $e){
            return Redirect::back()->with('error',$e->getMessage());
        }
        
    }

    public function updateBrand(Request $request,$id){

        try{
            $input = $request->all();
            unset($input['_token']);
            $update=ProductsBrands::where('id',$id)->update($input);
            return Redirect::back()->with('success','Brand Updated Successfully!');
    
        }catch(\Exception $e){
            return Redirect::back()->with('error',$e->getMessage());
        }
    }

    public function destroyBrand(Request $request , $id){
        try{
            ProductsBrands::where('id', $id)->delete();
            return Redirect::back()->with('success','Brand Deleted Successfully!');
    
        }catch(\Exception $e){
            return Redirect::back()->with('error',$e->getMessage());
        }
    }


}
