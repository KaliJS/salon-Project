<?php

namespace App\Http\Controllers;

use App\Models\Appointments;
use Illuminate\Http\Request;
use App\Models\Customers;
use App\Models\Services;
use Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\Staff;
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
        $appointments=Appointments::where('branch_id',Auth::user()->branch_id)->get();
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
        $staff=Staff::where('branch_id',Auth::user()->branch_id)->get(['id','name']);
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
                $appointments=\DB::table('appointments_services')->where('staff_id',$staff_id)->whereBetween('service_time_booked',[$service_time_booked,$service_time_end])->count();
                
                if($appointments>0){
                    return Redirect::back()->with('error',"Slot already booked for the selected stylist");
                }
                $data[]=array('branch_id'=>$input['branch_id']
                        ,'appointment_id'=>$appointment->id,'service_id'=>$service
                        ,'time'=>$request['time'.$service],'staff_id'=>$staff_id
                        ,'service_time_booked'=>$service_time_booked->format("Y-m-d H:i:s"));
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
    public function edit(Appointments $appointments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Appointments  $appointments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointments $appointments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appointments  $appointments
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointments $appointments)
    {
        //
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
            $staff=Staff::where('branch_id',Auth::user()->branch_id)->get(['id','name']);
            $view=view('admin.Appointments.get_service_data',compact('services','staff'));
            return $view->render();
        }
        return "";
    }

    public function getStylistData(Request $request){
        $result="";
        $timeArray=array();
        AppointmentService::with('service:id,service_time')->whereDate('service_time_booked',$request->date)->get()->map(function($appointment) use(&$timeArray){
            $start_time=Carbon::parse($appointment->time)->format("g:i A");
            $end_time=Carbon::parse($appointment->time)->addMinutes($appointment->service->service_time)->format("g:i A");
            $timeArray[]="$start_time - $end_time";
        });
        foreach($timeArray as $time){
            $result.=<<<DELIMETER
            <button class="btn btn-danger">{$time}</button>
DELIMETER;
        }
        if(count($timeArray)==0){
            return '';
        }
        $final_result="<span style='font-weight:bold'>Booked time slots :</span>".$result;
        return $final_result;
    }
}
