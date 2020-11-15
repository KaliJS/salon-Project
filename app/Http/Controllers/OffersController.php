<?php
namespace App\Http\Controllers;

use App\Models\Offers;
use App\Models\Services;
use App\Models\Branch;
use Illuminate\Http\Request;
use Redirect;
use Auth;
use DB;

class OffersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $offers = Offers::where('branch_id',Auth::user()->branch_id)->with('services',function($q){
                $q->select('service_description');
            })->orderBy('id')->get();

            return view('admin.Offers.offers-list',compact('offers'));

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
            $services = Services::where('branch_id',Auth::user()->branch_id)->orderBy('service_description')->get(['id','service_description']);
            return view('admin.offers.create-offers',compact('services'));

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
            'name' => 'required',
            'description' => 'required',
            'discount_percentage' => 'required'
        ]);

        DB::beginTransaction();
        try{

            $services=$request->services;
            $input=$request->all();
            unset($input['services']);
            $input['branch_id']=Auth::user()->id;
            $inserted_offer=Offers::create($input);
            $data=[];
            foreach($services as $service){
                $data[]=array('branch_id'=>$input['branch_id'],'service_id'=>$service,'offer_id'=>$inserted_offer->id,'created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s"),'deleted_at'=>null);
            }
            $inserted_service=DB::table('offers_services')->insert($data);

            DB::commit();

            return redirect()->back()
                ->with('success', 'Offers created successfully.');

        }catch(\Exception $e){
            DB::rollback();
            return Redirect::back()->with('error',$e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Offers  $offers
     * @return \Illuminate\Http\Response
     */
    public function show(Offers $offers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Offers  $offers
     * @return \Illuminate\Http\Response
     */
    public function edit(Offers $offer)
    {
        try{

            $services = Services::where('branch_id',Auth::user()->branch_id)->orderBy('service_description')->get(['id','service_description']);
            $selected_services=DB::table('offers_services')->where('offer_id',$offer->id)->pluck('service_id')->toArray();
            return view('admin.Offers.edit-offers',compact('offer','services','selected_services'));

        }catch(Exception $e){
            return Redirect::back()->with('error',$e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Offers  $offers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Offers $offer)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'discount_percentage' => 'required'
        ]);

        DB::beginTransaction();
        try{

            $services=$request->services;
            $input=$request->all();
            unset($input['services']);
            unset($input['_method']);
            unset($input['_token']);
            $branch_id=Auth::user()->branch_id;
            $updated_offers=offers::where('id',$offer->id)->update($input);
            $deleted_services=DB::table('offers_services')->where('offer_id',$offer->id)->delete();
            foreach($services as $service){
                $data[]=array('branch_id'=>$branch_id,'service_id'=>$service,'offer_id'=>$offer->id,'created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s"),'deleted_at'=>null);
            }
            $inserted_service=DB::table('offers_services')->insert($data);

            DB::commit();

            return redirect()->back()
                ->with('success', 'offer updated successfully.');

        }catch(\Exception $e){
            DB::rollback();
            return Redirect::back()->with('error',$e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Offers  $offers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offers $offer)
    {
        DB::beginTransaction();
        try{
            DB::table('offers_services')->where('offer_id',$offer->id)->delete();
            $offer->delete();
            DB::commit();
            return redirect()->back()
                ->with('success', 'offers deleted successfully.');
        }catch(\Exception $e){
            DB::rollback();
            return Redirect::back()->with('error',$e->getMessage());
        }
    }
}
