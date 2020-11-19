<?php

namespace App\Http\Controllers;

use App\Models\ProductsGenric;
use Illuminate\Http\Request;
use App\Models\Branch;
use Redirect;
use Auth;

class ProductsGenricController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $genrics = ProductsGenric::orderBy('name')->get();
        return view('admin.Products.products-genrics',compact('genrics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Products.create-products-genrics');
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
        ProductsGenric::create($input);
        
        return redirect()->route('products-genrics.index')
            ->with('success', 'Genric created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductsGenric  $productsGenric
     * @return \Illuminate\Http\Response
     */
    public function show(ProductsGenric $productsGenric)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductsGenric  $productsGenric
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductsGenric $productsGenric)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductsGenric  $productsGenric
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductsGenric $productsGenric)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductsGenric  $productsGenric
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductsGenric $productsGenric)
    {
        //
    }

    public function editGenric($id){
        try{
            $genric = ProductsGenric::find($id);
            return view('admin.Products.edit-products-genrics', compact('genric'));
            
        }catch(\Exception $e){
            return Redirect::back()->with('error',$e->getMessage());
        }
        
    }

    public function updateGenric(Request $request,$id){

        try{
            $input = $request->all();
            unset($input['_token']);
            $update = ProductsGenric::where('id',$id)->update($input);
            return Redirect::back()->with('success','Genric Updated Successfully!');
    
        }catch(\Exception $e){
            return Redirect::back()->with('error',$e->getMessage());
        }
    }

    public function destroyGenric(Request $request , $id){
        try{
            ProductsGenric::where('id', $id)->delete();
            DB::table('products')->where('genric_name_id',$id)->delete();
            return Redirect::back()->with('success','Genric Deleted Successfully!');
    
        }catch(\Exception $e){
            return Redirect::back()->with('error',$e->getMessage());
        }
    }

}
