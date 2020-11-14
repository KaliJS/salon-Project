<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use App\Models\Branch;
use App\Models\ProductsBrands;
use App\Models\ProductCategory;
use App\Models\ProductsGenric;
use Redirect;
use Auth;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {    
        try{
            $products = Products::where('branch_id',Auth::user()->branch_id)->orderBy('id')->with('brand:id,name')->with('category:id,name')->with('genric:id,name')->get();
            return view('admin.Products.products',compact('products'));
            
        }catch(\Exception $e){
            return Redirect::back()->with('error',$e->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try{
            $brands = ProductsBrands::where('branch_id',Auth::user()->branch_id)->orderBy('name')->get(['id','name']);
            $categories = ProductCategory::where('branch_id',Auth::user()->branch_id)->orderBy('name')->get(['id','name']);
            $genrics = ProductsGenric::where('branch_id',Auth::user()->branch_id)->orderBy('name')->get(['id','name']);
            return view('admin.Products.create-products',compact('brands','categories','genrics'));

        }catch(\Exception $e){
            return Redirect::back()->with('error',$e->getMessage());
        }
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $request->validate([
                'idh_no' => 'required',
                'hsn' => 'required',
                'brand_id' => 'required',
                'category_id' => 'required',
                'genric_name_id' => 'required',
                'description' => 'required'
            ]);

            $input=$request->all();
            $input['branch_id']=\Auth::user()->id;
            Products::create($input);
            
            return redirect()->route('products.index')
                ->with('success', 'Product created successfully.');

        }catch(\Exception $e){
            return Redirect::back()->with('error',$e->getMessage());
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $products)
    {
        //
    }

    public function editProduct($id){
        
        try{
            //$products=Products::with('brand:id,name','category:id,name','genric:id,name')->find($id);
            $brands = ProductsBrands::where('branch_id',Auth::user()->branch_id)->orderBy('name')->get(['id','name']);
            $categories = ProductCategory::where('branch_id',Auth::user()->branch_id)->orderBy('name')->get(['id','name']);
            $genrics = ProductsGenric::where('branch_id',Auth::user()->branch_id)->orderBy('name')->get(['id','name']);
            $product=Products::find($id);
            return view('admin.Products.edit-products', compact('product','categories','genrics','brands'));
    
        }catch(\Exception $e){
            return Redirect::back()->with('error',$e->getMessage());
        }
    }

    public function updateProduct(Request $request,$id){

        try{
            $request->validate([
                'idh_no' => 'required',
                'hsn' => 'required',
                'brand_id' => 'required',
                'category_id' => 'required',
                'genric_name_id' => 'required',
                'description' => 'required'
            ]);
            $input = $request->all();
            unset($input['_token']);
            $update=Products::where('id',$id)->update($input);
            return Redirect::back()->with('success','Product Updated Successfully!');
    
        }catch(\Exception $e){
            return Redirect::back()->with('error',$e->getMessage());
        }
    }

    public function destroyProduct(Request $request , $id){
        try{
            Products::where('id', $id)->delete();
            return Redirect::back()->with('success','Product Deleted Successfully!');
    
        }catch(\Exception $e){
            return Redirect::back()->with('error',$e->getMessage());
        }
    }
}
