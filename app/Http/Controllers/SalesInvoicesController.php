<?php

namespace App\Http\Controllers;

use App\Models\SalesInvoices;
use App\Models\OfferService;
use App\Models\Products;
use Illuminate\Http\Request;
use App\Models\Customers;
use App\Models\Services;
use Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\Staff;
use App\Models\Offers;
use Carbon\Carbon;
use DB;


class SalesInvoicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoices = SalesInvoices::where('branch_id',Auth::user()->branch_id)->with('services:service_description','offers:name','products:description')->get();
        return view('admin.Sales.invoices',compact('invoices')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services=Services::where('branch_id',Auth::user()->branch_id)->get(['id','service_description']);
        $customers=Customers::where('branch_id',Auth::user()->branch_id)->get(['id','name']);
        $products=Products::where('branch_id',Auth::user()->branch_id)->get(['id','description']);
        return view('admin.Sales.invoices-create',compact('services','customers','products'));
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
            'quantity' => 'required',
            'customer_id' => 'required',
            'payment_type' => 'required',
            'total_amount' => 'required',
            'final_amount' => 'required'
        ]);

        DB::beginTransaction();
        try{

            $services=$request->services;
            $products=$request->products;
            $offers=$request->offers;
            $input=$request->all();
            unset($input['services']);
            unset($input['products']);
            unset($input['offers']);
            $input['branch_id']=Auth::user()->branch_id;
            $inserted_invoice=SalesInvoices::create($input);
            $data_service=[];
            foreach($services as $service){
                $data_service[]=array('branch_id'=>$input['branch_id'],'invoice_id'=>$inserted_invoice->id,'service_id'=>$service,'created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s"),'deleted_at'=>null);
            }
            $inserted_service=DB::table('invoices_services')->insert($data_service);

            $data_product=[];
            foreach($products as $product){
                $data_product[]=array('product_id'=>$product,'invoice_id'=>$inserted_invoice->id,'branch_id'=>$input['branch_id'],'created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s"),'deleted_at'=>null);
            }
            $inserted_product=DB::table('invoices_products')->insert($data_product);

            $data_offer=[];
            foreach($offers as $offer){
                $data_offer[]=array('invoice_id'=>$inserted_invoice->id,'offer_id'=>$offer,'branch_id'=>$input['branch_id'],'created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s"),'deleted_at'=>null);
            }
            $inserted_offer=DB::table('invoices_offers')->insert($data_offer);

            DB::commit();

            return redirect()->back()
                ->with('success', 'Invoice created successfully.');

        }catch(\Exception $e){
            DB::rollback();
            return Redirect::back()->with('error',$e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SalesInvoices  $salesInvoices
     * @return \Illuminate\Http\Response
     */
    public function show(SalesInvoices $sales_invoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SalesInvoices  $salesInvoices
     * @return \Illuminate\Http\Response
     */
    public function edit(SalesInvoices $sales_invoice)
    {
        $services=Services::where('branch_id',Auth::user()->branch_id)->get(['id','service_description']);

        $customers=Customers::where('branch_id',Auth::user()->branch_id)->get(['id','name']);
        $offers=Offers::where('branch_id',Auth::user()->branch_id)->get(['id','name']);
        $products=Products::where('branch_id',Auth::user()->branch_id)->get(['id','description']);
        $selected_products=DB::table('invoices_products')->where('invoice_id',$sales_invoice->id)->pluck('product_id')->toArray();
        $selected_services=DB::table('invoices_services')->where('invoice_id',$sales_invoice->id)->pluck('service_id')->toArray();
        return view('admin.Sales.invoices-edit',compact('selected_products','selected_services','sales_invoice','services','customers','products','offers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SalesInvoices  $salesInvoices
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SalesInvoices $sales_invoice)
    {
        $request->validate([
            'quantity' => 'required',
            'customer_id' => 'required',
            'payment_type' => 'required',
            'total_amount' => 'required',
            'final_amount' => 'required'
        ]);

        DB::beginTransaction();
        try{

            $services=$request->services;
            $products=$request->products;
            $offers=$request->offers;
            $input=$request->all();
            unset($input['_method']);
            unset($input['_token']);
            unset($input['services']);
            unset($input['products']);
            unset($input['offers']);
            $input['branch_id']=Auth::user()->branch_id;
            $inserted_invoice=SalesInvoices::where('id',$sales_invoice->id)->update($input);

            
            $deleted_services=DB::table('invoices_services')->where('invoice_id',$sales_invoice->id)->delete();

            $data_service=[];
            foreach($services as $service){
                $data_service[]=array('branch_id'=>$input['branch_id'],'invoice_id'=>$sales_invoice->id,'service_id'=>$service,'created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s"),'deleted_at'=>null);
            }
            $inserted_service=DB::table('invoices_services')->insert($data_service);

            $deleted_products=DB::table('invoices_products')->where('invoice_id',$sales_invoice->id)->delete();

            $data_product=[];
            foreach($products as $product){
                $data_product[]=array('product_id'=>$product,'invoice_id'=>$sales_invoice->id,'branch_id'=>$input['branch_id'],'created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s"),'deleted_at'=>null);
            }
            $inserted_product=DB::table('invoices_products')->insert($data_product);

            $deleted_offers=DB::table('invoices_offers')->where('invoice_id',$sales_invoice->id)->delete();

            $data_offer=[];
            foreach($offers as $offer){
                $data_offer[]=array('invoice_id'=>$sales_invoice->id,'offer_id'=>$offer,'branch_id'=>$input['branch_id'],'created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s"),'deleted_at'=>null);
            }
            $inserted_offer=DB::table('invoices_offers')->insert($data_offer);

            DB::commit();

            return redirect()->back()
                ->with('success', 'Invoice updated successfully.');

        }catch(\Exception $e){
            DB::rollback();
            return Redirect::back()->with('error',$e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SalesInvoices  $salesInvoices
     * @return \Illuminate\Http\Response
     */
    public function destroy(SalesInvoices $sales_invoice)
    {
        DB::beginTransaction();
        try{
            DB::table('invoices_offers')->where('invoice_id',$sales_invoice->id)->delete();
            DB::table('invoices_services')->where('invoice_id',$sales_invoice->id)->delete();
            DB::table('invoices_products')->where('invoice_id',$sales_invoice->id)->delete();
            $sales_invoice->delete();
            DB::commit();
            return redirect()->back()
                ->with('success', 'Invoice deleted successfully.');
        }catch(\Exception $e){
            DB::rollback();
            return Redirect::back()->with('error',$e->getMessage());
        }
    }

    public function getCustomerData(Request $request){
        $customer_id=$request->customer_id;
        $customer=Customers::where('id',$customer_id)->select('address','gender','phone','gst_no')->first();
        $customer->gender=$customer->gender=="M"?"Male":"Female";
        return $customer;
    }

    public function getAmountData(Request $request){
        $amount=0;
        $final_amount=0;
        $selected_offer = [];
        
        foreach($request->service_ids as $service_id){

            $selected_offer[] = OfferService::with('offer','service')->where('service_id',$service_id)->first();
            $select_offer = OfferService::with('offer','service')->where('service_id',$service_id)->first();
            //return $select_offer->service->price;
            $amount+=$select_offer->service->price;
            $final_amount+=$select_offer->service->price-$select_offer->offer->discount_percentage*$select_offer->service->price/100;
        }
        $final_amount = $final_amount*$request->me;
        $amount = $amount*$request->me;


        $view=view('admin.Sales.get_total_amount',compact('selected_offer','final_amount','amount'));
            return $view->render();
         
    }
}
