<?php

namespace App\Http\Controllers;

use App\Models\Appointments;
use Illuminate\Http\Request;
use App\Models\Customers;
use App\Models\Services;
use App\Models\Products;
use Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\Staff;
use App\Models\Offers;
use Carbon\Carbon;
use DB;
use App\Models\AppointmentService;

class AppointmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $appointments=Appointments::where('branch_id',Auth::user()->branch_id)
        ->with('appointments_details')
        ->select("*",DB::raw("(CASE when status='0' then 'Booked' when status='1' then 'Completed' when status='2' then 'Cancelled' when status='3' then 'Re-Scheduled' else 'Not Found' END) as status_name"))->get();
        return view('admin.Appointments.appointments',compact('appointments'));
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
        $staff=Staff::where('branch_id',Auth::user()->branch_id)->where('status','1')->get(['id','name']);
        return view('admin.Appointments.appointments-create',compact('services','customers','staff'));
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
            'customer_id' => 'required',
            'date' => 'required',
        ]);
        DB::beginTransaction();
        try{

            $services=$request->services;
            $input=['customer_id'=>$request->customer_id,'date'=>$request->date];
            unset($input['services']);
            $input['branch_id']=Auth::user()->branch_id;
            $appointment=Appointments::create($input);

            $data=[];
            foreach($services as $service){
                $service_data=Services::select('service_time')->find($service);
                $service_time_booked=Carbon::parse($request->date.$request['time'.$service]);
                $service_time_end=$service_time_booked->copy()->addMinutes($service_data->service_time);
                $staff_id=$request['stylist_name'.$service];
                $data[]=array('branch_id'=>$input['branch_id']
                        ,'appointment_id'=>$appointment->id,'service_id'=>$service
                        ,'time'=>$request['time'.$service],'staff_id'=>$staff_id
                        ,'service_start_time'=>$service_time_booked->format("Y-m-d H:i:s"),
                        'service_end_time'=>$service_time_end->format("Y-m-d H:i:s")
                    );
            }

            $insert_services=DB::table('appointments_services')->insert($data);

            DB::commit();
            return redirect()->back()
                ->with('success', 'Appointment created successfully.');

        }catch(\Exception $e){
            DB::rollback();
            return Redirect::back()->with('error',$e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appointments  $appointments
     * @return \Illuminate\Http\Response
     */
    public function show(Appointments $appointments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appointments  $appointments
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointments $appointment)
    {
        $services=Services::where('branch_id',Auth::user()->branch_id)->get(['id','service_description']);
        $selected_services=DB::table('appointments_services')->where('appointment_id',$appointment->id)->pluck('service_id')->toArray();
        $customers=Customers::where('branch_id',Auth::user()->branch_id)->get(['id','name']);
        //$services_list=Services::whereIn('id',$selected_services)->select('id','service_description')->get();

        $staff=Staff::where('branch_id',Auth::user()->branch_id)->get(['id','name']);
        return view('admin.Appointments.appointments-edit',compact('appointment','selected_services','services','customers','staff'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Appointments  $appointments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointments $appointment)
    {
        $request->validate([
            'customer_id' => 'required',
            'date' => 'required',
        ]);
        DB::beginTransaction();
        try{

            $services=$request->services;
            $input=['customer_id'=>$request->customer_id,'date'=>$request->date];
            unset($input['services']);
            $input['branch_id']=Auth::user()->branch_id;
            $input['status']='3';

            $insertedAppointment=Appointments::where('id',$appointment->id)->update($input);
            
            $data=[];
            foreach($services as $service){
                $service_data=Services::select('service_time')->find($service);
                $service_time_booked=Carbon::parse($request->date.$request['time'.$service]);
                $service_time_end=$service_time_booked->copy()->addMinutes($service_data->service_time);
                $staff_id=$request['stylist_name'.$service];
                // $appointments=\DB::table('appointments_services')->where('staff_id',$staff_id)->whereBetween('service_time_booked',[$service_time_booked,$service_time_end])->count();
                
                // if($appointments>0){
                //     return Redirect::back()->with('error',"Slot already booked for the selected stylist");
                // }

                $data[]=array('branch_id'=>$input['branch_id']
                        ,'appointment_id'=>$appointment->id,'service_id'=>$service
                        ,'time'=>$request['time'.$service],'staff_id'=>$staff_id
                        ,'service_start_time'=>$service_time_booked->format("Y-m-d H:i:s"),
                        'service_end_time'=>$service_time_end->format("Y-m-d H:i:s")
                    );
            }
            $deleted_services=DB::table('appointments_services')->where('appointment_id',$appointment->id)->delete();
            $insert_services=DB::table('appointments_services')->insert($data);

            DB::commit();
            return redirect()->back()
                ->with('success', 'Appointment updated successfully.');

        }catch(\Exception $e){
            DB::rollback();
            return Redirect::back()->with('error',$e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appointments  $appointments
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointments $appointment)
    {
        DB::beginTransaction();
        try{
            
            DB::table('appointments_services')->where('appointment_id',$appointment->id)->delete();
            
            $appointment->delete();
            DB::commit();
            return redirect()->back()
                ->with('success', 'appointment deleted successfully.');
        }catch(\Exception $e){
            DB::rollback();
            return Redirect::back()->with('error',$e->getMessage());
        }
    }

    public function cancelAppointment(Request $request){
        $cancel_id=$request->id;

        Appointments::where('id', $cancel_id)->update(array('status' => '2'));
        
        return 'success';
    }

    public function completeAppointment(Request $request){
        $cancel_id=$request->id;



        $services=Services::where('branch_id',Auth::user()->branch_id)->get(['id','service_description']);
        
        $customer_id =DB::table('appointments')->where('id',$cancel_id)->pluck('customer_id')->toArray();
        $customers=Customers::where('id',$customer_id)->first();

        $appointment=Appointments::where('id',$cancel_id)->first();

        $offers=Offers::where('branch_id',Auth::user()->branch_id)->get(['id','name']);
        $products=Products::where('branch_id',Auth::user()->branch_id)->get(['id','description']);
        //$selected_products=DB::table('invoices_products')->where('invoice_id',$sales_invoice->id)->pluck('product_id')->toArray();
        $selected_services=DB::table('appointments_services')->where('appointment_id',$cancel_id)->pluck('service_id')->toArray();
        return view('admin.Appointments.appointments-complete',compact('selected_services','appointment','services','customers','offers', 'products'));






        // Appointments::where('id', $cancel_id)->update(array('status' => '1'));
        
        // return 'success';
    }

    public function getCustomerData(Request $request){
        $customer_id=$request->customer_id;
        $customer=Customers::where('id',$customer_id)->select('gender','phone','note')->first();
        $customer->gender=$customer->gender=="M"?"Male":"Female";
        return $customer;
    }
    

    public function getServiceData(Request $request){
        $service_ids=$request->service_ids;
        if(isset($service_ids)){
            $services=Services::whereIn('id',$service_ids)->select('id','service_description')->get();
            $view=view('admin.Appointments.get_service_data',compact('services'));
            return $view->render();
        }
        return "";
    }

    public function getStylistData(Request $request){
        $result="";
        $timeArray=array();
        AppointmentService::with('service:id,service_time')->whereDate('service_start_time',$request->date)->get()->map(function($appointment) use(&$timeArray){
            $start_time=Carbon::parse($appointment->time)->format("g:i A");
            $end_time=Carbon::parse($appointment->time)->addMinutes($appointment->service->service_time)->format("g:i A");
            $timeArray[]="$start_time - $end_time";
        });
        foreach($timeArray as $time){
            $result.=<<<DELIMETER
            <button class="btn btn-danger" type="button">{$time}</button>
DELIMETER;
        }
        if(count($timeArray)==0){
            return '';
        }
        $final_result="<span style='font-weight:bold'>Booked time slots :</span>".$result;
        return $final_result;
    }

    public function checkAppointmentBooked(Request $request){
        
        $day = Carbon::parse($request->date)->format('l'); 
        $day=strtolower(substr($day, 0,3));
        $time = $request->time;
        $date_time = Carbon::parse($request->date." ".$time)->format("Y-m-d H:i:s");
        $service = Services::find($request->service_id);
        $service_time = $service->service_time;


        $staff_ids=DB::table('staffs_skills')->join('staff_users','staff_users.id', '=', 'staffs_skills.staff_id')
        ->where([
            
            ['skill_id',$request->service_id],
            ['days','LIKE',"%$day%"],
            ['shift_start_time','<=',$time],
            ['shift_end_time','>=',$time]
        ])
        ->pluck('staffs_skills.staff_id')->unique();

       $check_appointments=AppointmentService::whereIn('staff_id',$staff_ids)->where('service_start_time','<=',$date_time)->where('service_end_time','>=',$date_time)->pluck('staff_id');
        
        $final_staff = array_diff($staff_ids->toArray(),$check_appointments->toArray());
        $staff_ids_final = DB::table('staffs_skills')->where('skill_id',$request->service_id)->pluck('staff_id');
        $returning_staff=DB::table("staff_users")->whereIn('id',$staff_ids_final)->where('status','1')->get(['id','name']);
        $result='<option selected disabled>Select</option>';

        foreach($returning_staff as $s){

            if(in_array($s->id,$final_staff)){
                $result.=<<<DELIMETER
            <option value="{$s->id}">{$s->name}</option>
DELIMETER;
            }else{
                $result.=<<<DELIMETER
            <option value="{$s->id}" disabled>{$s->name} (Booked for this date and time)</option>
DELIMETER;
            }
        
        }
        return $result;
    }





}