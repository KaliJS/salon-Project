<?php

namespace App\Http\Controllers;

use App\Models\InventorySalonUses;
use App\Models\Products;
use Illuminate\Http\Request;
use Redirect;
use Auth;

class InventorySalonUsesController extends Controller
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
            $salonUses=InventorySalonUses::where('branch_id',Auth::user()->branch_id)->orderBy('id')->get();
            return view('admin.Inventory.salon-uses',compact('salonUses'));
            
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
            return view('admin.Inventory.create-salon-uses',compact('products'));

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
                'in_stock' => 'required'
            ]);

            $input=$request->all();
            $input['branch_id']=\Auth::user()->id;
            InventorySalonUses::create($input);
            
            return redirect()->route('salon-uses.index')
                ->with('success', 'Salon Uses Product created successfully.');

        }catch(\Exception $e){
            return Redirect::back()->with('error',$e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InventorySalonUses  $inventorySalonUses
     * @return \Illuminate\Http\Response
     */
    public function show(InventorySalonUses $inventorySalonUses)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InventorySalonUses  $inventorySalonUses
     * @return \Illuminate\Http\Response
     */
    public function edit(InventorySalonUses $inventorySalonUses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InventorySalonUses  $inventorySalonUses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InventorySalonUses $inventorySalonUses)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InventorySalonUses  $inventorySalonUses
     * @return \Illuminate\Http\Response
     */
    public function destroy(InventorySalonUses $inventorySalonUses)
    {
        //
    }

    public function editSalonUse($id){
        
        try{           
            $products = Products::where('branch_id',Auth::user()->branch_id)->orderBy('id')->get(['id','description']);
            $salonUse=InventorySalonUses::find($id);
            return view('admin.Inventory.edit-salon-uses',compact('products','salonUse'));
    
        }catch(\Exception $e){
            return Redirect::back()->with('error',$e->getMessage());
        }
    }

    public function updateSalonUse(Request $request,$id){

        try{
            $request->validate([
                'product_id' => 'required',
                'in_stock' => 'required'
            ]);
            $input = $request->all();
            unset($input['_token']);
            $update=InventorySalonUses::where('id',$id)->update($input);
            return Redirect::back()->with('success','Salon Uses Product Updated Successfully!');
    
        }catch(\Exception $e){
            return Redirect::back()->with('error',$e->getMessage());
        }
    }

    public function destroySalonUse(Request $request , $id){
        try{
            InventorySalonUses::where('id', $id)->delete();
            return Redirect::back()->with('success','Salon Uses Product Deleted Successfully!');
    
        }catch(\Exception $e){
            return Redirect::back()->with('error',$e->getMessage());
        }
    }
}
