<?php

namespace App\Http\Controllers;

use App\Models\QuickPayment;
use App\Models\OfferService;
use App\Models\Products;
use Illuminate\Http\Request;
use App\Models\Services;
use Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\Staff;
use App\Models\Offers;
use Carbon\Carbon;
use DB;

class QuickPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoices = QuickPayment::where('branch_id',Auth::user()->branch_id)->with('services:service_description','offers:name','products:description')->get();
        return view('admin.Sales.quick-payment',compact('invoices')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services=Services::where('branch_id',Auth::user()->branch_id)->get(['id','service_description']);
        $products=Products::where('branch_id',Auth::user()->branch_id)->get(['id','description']);
        return view('admin.Sales.create-quick-payment',compact('services','products'));
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
            'name' => 'required',
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
            $inserted_invoice=QuickPayment::create($input);
            $data_service=[];
            foreach($services as $service){
                $data_service[]=array('branch_id'=>$input['branch_id'],'quick_payment_id'=>$inserted_invoice->id,'service_id'=>$service,'created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s"),'deleted_at'=>null);
            }
            $inserted_service=DB::table('quick_payments_services')->insert($data_service);

            $data_product=[];
            foreach($products as $product){
                $data_product[]=array('product_id'=>$product,'quick_payment_id'=>$inserted_invoice->id,'branch_id'=>$input['branch_id'],'created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s"),'deleted_at'=>null);
            }
            $inserted_product=DB::table('quick_payments_products')->insert($data_product);

            $data_offer=[];
            foreach($offers as $offer){
                $data_offer[]=array('quick_payment_id'=>$inserted_invoice->id,'offer_id'=>$offer,'branch_id'=>$input['branch_id'],'created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s"),'deleted_at'=>null);
            }
            $inserted_offer=DB::table('quick_payments_offers')->insert($data_offer);

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
     * @param  \App\Models\QuickPayment  $quickPayment
     * @return \Illuminate\Http\Response
     */
    public function show(QuickPayment $quick_payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\QuickPayment  $quickPayment
     * @return \Illuminate\Http\Response
     */
    public function edit(QuickPayment $quick_payment)
    {
        $services=Services::where('branch_id',Auth::user()->branch_id)->get(['id','service_description']);

        $offers=Offers::where('branch_id',Auth::user()->branch_id)->get(['id','name']);
        $products=Products::where('branch_id',Auth::user()->branch_id)->get(['id','description']);
        $selected_products=DB::table('quick_payments_products')->where('quick_payment_id',$quick_payment->id)->pluck('product_id')->toArray();
        $selected_services=DB::table('quick_payments_services')->where('quick_payment_id',$quick_payment->id)->pluck('service_id')->toArray();
        return view('admin.Sales.edit-quick-payment',compact('selected_products','selected_services','quick_payment','services','products','offers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\QuickPayment  $quickPayment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, QuickPayment $quick_payment)
    {
        $request->validate([
            'quantity' => 'required',
            'name' => 'required',
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
            $inserted_invoice=QuickPayment::where('id',$quick_payment->id)->update($input);

            
            $deleted_services=DB::table('quick_payments_services')->where('quick_payment_id',$quick_payment->id)->delete();

            $data_service=[];
            foreach($services as $service){
                $data_service[]=array('branch_id'=>$input['branch_id'],'quick_payment_id'=>$quick_payment->id,'service_id'=>$service,'created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s"),'deleted_at'=>null);
            }
            $inserted_service=DB::table('quick_payments_services')->insert($data_service);

            $deleted_products=DB::table('quick_payments_products')->where('quick_payment_id',$quick_payment->id)->delete();

            $data_product=[];
            foreach($products as $product){
                $data_product[]=array('product_id'=>$product,'quick_payment_id'=>$quick_payment->id,'branch_id'=>$input['branch_id'],'created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s"),'deleted_at'=>null);
            }
            $inserted_product=DB::table('quick_payments_products')->insert($data_product);

            $deleted_offers=DB::table('quick_payments_offers')->where('quick_payment_id',$quick_payment->id)->delete();

            $data_offer=[];
            foreach($offers as $offer){
                $data_offer[]=array('quick_payment_id'=>$quick_payment->id,'offer_id'=>$offer,'branch_id'=>$input['branch_id'],'created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s"),'deleted_at'=>null);
            }
            $inserted_offer=DB::table('quick_payments_offers')->insert($data_offer);
            

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
     * @param  \App\Models\QuickPayment  $quickPayment
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuickPayment $quick_payment)
    {
        DB::beginTransaction();
        try{
            DB::table('quick_payments_offers')->where('quick_payment_id',$quick_payment->id)->delete();
            DB::table('quick_payments_services')->where('quick_payment_id',$quick_payment->id)->delete();
            DB::table('quick_payments_products')->where('quick_payment_id',$quick_payment->id)->delete();
            $quick_payment->delete();
            DB::commit();
            return redirect()->back()
                ->with('success', 'Invoice deleted successfully.');
        }catch(\Exception $e){
            DB::rollback();
            return Redirect::back()->with('error',$e->getMessage());
        }
    }

     public function getAmountData(Request $request){
        $amount=0;
        $final_amount=0;
        $selected_offer = [];
        
        foreach($request->service_ids as $service_id){

            $select_offer = OfferService::with('offer','service')->where('service_id',$service_id)->first();
            
            $service = Services::find($service_id);
            $amount+=$service->price;
            if($select_offer){
                    $selected_offer[] = $select_offer;
                $final_amount+=$service->price-($select_offer->offer->discount_percentage*$select_offer->service->price/100);
            }else{
                $final_amount += $service->price;
            }
           
        }
        

        $final_amount = $final_amount*$request->me;
        $amount = $amount*$request->me;

        $view=view('admin.Sales.get_total_amount',compact('selected_offer','final_amount','amount'));
            return $view->render();
         
    }

    public function generateQuickPdf(Request $request , $id)
    {

        $data = QuickPayment::where('id',$id)->with('services')->first();
         
        $view =  view('admin.Sales.generateQuickPdf',compact('data'));

        return $view->render();
    }
}
