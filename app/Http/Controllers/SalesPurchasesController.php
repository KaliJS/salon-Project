<?php

namespace App\Http\Controllers;

use App\Models\SalesPurchases;
use App\Models\Branch;
use App\Models\Products;
use Illuminate\Http\Request;
use Redirect;
use Auth;
use DB;

class SalesPurchasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $purchases = SalesPurchases::where('branch_id',Auth::user()->branch_id)->orderBy('id')->get();
            return view('admin.Sales.purchases',compact('purchases'));

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
            
            return view('admin.Sales.create-purchases',compact('products'));

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
        $request->validate([
            'seller_name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'cgst' => 'required',
            'sgst' => 'required'
        ]);

        DB::beginTransaction();
        try{

            $products=$request->products;
            $input=$request->all();
            unset($input['pruducts']);
            $input['branch_id']=Auth::user()->id;
            $inserted_purchase=SalesPurchases::create($input);
            $data=[];
            foreach($products as $product){
                $data[]=array('branch_id'=>$input['branch_id'],'product_id'=>$product,'purchase_id'=>$inserted_purchase->id,'created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s"),'deleted_at'=>null);
            }
            $inserted_purchase=DB::table('purchases_products')->insert($data);

            DB::commit();

            return redirect()->back()
                ->with('success', 'Purchase created successfully.');

        }catch(\Exception $e){
            DB::rollback();
            return Redirect::back()->with('error',$e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SalesPurchases  $salesPurchases
     * @return \Illuminate\Http\Response
     */
    public function show(SalesPurchases $sales_purchase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SalesPurchases  $salesPurchases
     * @return \Illuminate\Http\Response
     */
    public function edit(SalesPurchases $sales_purchase)
    {
        try{

            $products = Products::where('branch_id',Auth::user()->branch_id)->orderBy('id')->get(['id','description']);
           
            $selected_products=DB::table('purchases_products')->where('purchase_id',$sales_purchase->id)->pluck('product_id')->toArray();
            return view('admin.Sales.edit-purchases',compact('sales_purchase','products','selected_products'));

        }catch(Exception $e){
            return Redirect::back()->with('error',$e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SalesPurchases  $salesPurchases
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SalesPurchases $sales_purchase)
    {
        $request->validate([
            'seller_name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'cgst' => 'required',
            'sgst' => 'required'
        ]);

        DB::beginTransaction();
        try{

            $products=$request->products;
            $input=$request->all();
            unset($input['products']);
            unset($input['_method']);
            unset($input['_token']);
            $branch_id=Auth::user()->branch_id;
            $updated_purchase=SalesPurchases::where('id',$sales_purchase->id)->update($input);
            $deleted_products=DB::table('purchases_products')->where('purchase_id',$sales_purchase->id)->delete();
            foreach($products as $product){
                $data[]=array('branch_id'=>$branch_id,'product_id'=>$product,'purchase_id'=>$sales_purchase->id,'created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s"),'deleted_at'=>null);
            }
            $inserted_product=DB::table('purchases_products')->insert($data);

            DB::commit();

            return redirect()->back()
                ->with('success', 'Purchase updated successfully.');

        }catch(\Exception $e){
            DB::rollback();
            return Redirect::back()->with('error',$e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SalesPurchases  $salesPurchases
     * @return \Illuminate\Http\Response
     */
    public function destroy(SalesPurchases $sales_purchase)
    {
        
        DB::beginTransaction();
        try{
            DB::table('purchases_products')->where('purchase_id',$sales_purchase->id)->delete();
            $sales_purchase->delete();
            DB::commit();
            return redirect()->back()
                ->with('success', 'Purchase deleted successfully.');
        }catch(\Exception $e){
            DB::rollback();
            return Redirect::back()->with('error',$e->getMessage());
        }
    }
}
