<?php

namespace App\Http\Controllers;

use App\Models\InventoryRetailProducts;
use App\Models\Products;
use Illuminate\Http\Request;
use Redirect;
use Auth;

class InventoryRetailProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            // $retailProducts = InventoryRetailProducts::where('branch_id',Auth::user()->branch_id)->orderBy('id')->with('product',function($q){
            //     $q->with('category:id,name','brand:id,name','genric:id,name');
            // })->get();
            $retailProducts=InventoryRetailProducts::where('branch_id',Auth::user()->branch_id)->orderBy('id')->get();
            return view('admin.Inventory.retail-products',compact('retailProducts'));
            
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
            
            $products = Products::where('branch_id',Auth::user()->branch_id)->orderBy('id')->get(['id','description']);
            return view('admin.Inventory.create-retail-products',compact('products'));

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
                
                'product_id' => 'required',
                'mrp_price' => 'required',
                'slp_price' => 'required',
                'in_stock' => 'required'
            ]);

            $input=$request->all();
            $input['branch_id']=\Auth::user()->id;
            InventoryRetailProducts::create($input);
            
            return redirect()->route('retail-products.index')
                ->with('success', 'Retail Product created successfully.');

        }catch(\Exception $e){
            return Redirect::back()->with('error',$e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InventoryRetailProducts  $inventoryRetailProducts
     * @return \Illuminate\Http\Response
     */
    public function show(InventoryRetailProducts $inventoryRetailProducts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InventoryRetailProducts  $inventoryRetailProducts
     * @return \Illuminate\Http\Response
     */
    public function edit(InventoryRetailProducts $inventoryRetailProducts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InventoryRetailProducts  $inventoryRetailProducts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InventoryRetailProducts $inventoryRetailProducts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InventoryRetailProducts  $inventoryRetailProducts
     * @return \Illuminate\Http\Response
     */
    public function destroy(InventoryRetailProducts $inventoryRetailProducts)
    {
        //
    }

    public function editRetailProduct($id){
        
        try{           
            $products = Products::where('branch_id',Auth::user()->branch_id)->orderBy('id')->get(['id','description']);
            $retailProduct=InventoryRetailProducts::find($id);
            return view('admin.Inventory.edit-retail-products',compact('products','retailProduct'));
    
        }catch(\Exception $e){
            return Redirect::back()->with('error',$e->getMessage());
        }
    }

    public function updateRetailProduct(Request $request,$id){

        try{
            $request->validate([
                'product_id' => 'required',
                'mrp_price' => 'required',
                'slp_price' => 'required',
                'in_stock' => 'required'
            ]);
            $input = $request->all();
            unset($input['_token']);
            $update=InventoryRetailProducts::where('id',$id)->update($input);
            return Redirect::back()->with('success','Retail Product Updated Successfully!');
    
        }catch(\Exception $e){
            return Redirect::back()->with('error',$e->getMessage());
        }
    }

    public function destroyRetailProduct(Request $request , $id){
        try{
            InventoryRetailProducts::where('id', $id)->delete();
            return Redirect::back()->with('success','Retail Product Deleted Successfully!');
    
        }catch(\Exception $e){
            return Redirect::back()->with('error',$e->getMessage());
        }
    }

}
