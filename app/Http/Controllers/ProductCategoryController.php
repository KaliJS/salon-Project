<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;
use App\Models\Branch;
use Redirect;
use Auth;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = ProductCategory::orderBy('name')->get();
        return view('admin.Products.products-categories',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Products.create-products-categories');
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
        ProductCategory::create($input);
        
        return redirect()->route('products-categories.index')
            ->with('success', 'Category created Successfully.');
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

    public function editCategory($id){
        try{
            $category=ProductCategory::find($id);
            return view('admin.Products.edit-products-categories', compact('category'));
            
        }catch(\Exception $e){
            return Redirect::back()->with('error',$e->getMessage());
        }
        
    }

    public function updateCategory(Request $request,$id){

        try{
            $input = $request->all();
            unset($input['_token']);
            $update=ProductCategory::where('id',$id)->update($input);
            return Redirect::back()->with('success','Category Updated Successfully!');
    
        }catch(\Exception $e){
            return Redirect::back()->with('error',$e->getMessage());
        }
    }

    public function destroyCategory(Request $request , $id){
        \DB::beginTransaction();
        try{
            ProductCategory::where('id', $id)->delete();
            DB::table('products')->where('category_id',$id)->delete();
            \DB::commit();
            return Redirect::back()->with('success','Category Deleted Successfully!');
    
        }catch(\Exception $e){
            \DB::rollback();
            return Redirect::back()->with('error',$e->getMessage());
        }
    }


}
