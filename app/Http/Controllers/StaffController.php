<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Models\Services;
use App\Models\Branch;
use App\Models\StaffDesignation;
use App\Models\StaffSkills;
use Illuminate\Http\Request;
use Redirect;
use Auth;
use DB;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $staff = Staff::where('branch_id',Auth::user()->branch_id)->with('skills',function($q){
                $q->select('service_description');
            })->orderBy('id')->get();
            return view('admin.Staff Management.staff-list',compact('staff'));

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
            $skills = Services::where('branch_id',Auth::user()->branch_id)->orderBy('name')->get(['id','name']);
            $designations = StaffDesignation::where('branch_id',Auth::user()->branch_id)->orderBy('name')->get(['id','name']);

            return view('admin.Staff Management.create-staff',compact('skills','designations'));

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
            'email' => 'required',
            'name' => 'required|unique:staff_users',
            'address' => 'required',
            'designation_id' => 'required',
            'employee_id' => 'required',
            'phone' => 'required',
            'doj' => 'required'
        ]);

        DB::beginTransaction();
        try{

            $skills=$request->skills;
            $input=$request->all();
            unset($input['skills']);
            $input['branch_id']=Auth::user()->branch_id;
            $inserted_staff=Staff::create($input);
            $data=[];
            foreach($skills as $skill){
                $data[]=array('branch_id'=>$input['branch_id'],'skill_id'=>$skill,'staff_id'=>$inserted_staff->id,'created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s"),'deleted_at'=>null);
            }
            $inserted_skill=DB::table('staffs_skills')->insert($data);

            DB::commit();

            return redirect()->back()
                ->with('success', 'Staff created successfully.');

        }catch(\Exception $e){
            DB::rollback();
            return Redirect::back()->with('error',$e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(Staff $staff)
    {
        
        try{

            $skills = Services::where('branch_id',Auth::user()->branch_id)->orderBy('id')->get(['id','service_description']);
            $designations = StaffDesignation::where('branch_id',Auth::user()->branch_id)->orderBy('name')->get(['id','name']);
            $selected_skills=DB::table('staffs_skills')->where('staff_id',$staff->id)->pluck('skill_id')->toArray();
            return view('admin.Staff Management.edit-staff',compact('staff','skills','designations','selected_skills'));

        }catch(Exception $e){
            return Redirect::back()->with('error',$e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staff $staff)
    {
        //return $staff;
        $request->validate([
            'email' => 'required',
            'name' => 'required',
            'address' => 'required',
            'designation_id' => 'required',
            'employee_id' => 'required',
            'phone' => 'required',
            'doj' => 'required'
        ]);

        DB::beginTransaction();
        try{

            $skills=$request->skills;
            $input=$request->all();
            unset($input['skills']);
            unset($input['_method']);
            unset($input['_token']);
            $branch_id=Auth::user()->branch_id;
            $updated_staff=Staff::where('id',$staff->id)->update($input);
            $deleted_skills=DB::table('staffs_skills')->where('staff_id',$staff->id)->delete();
            foreach($skills as $skill){
                $data[]=array('branch_id'=>$branch_id,'skill_id'=>$skill,'staff_id'=>$staff->id,'created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s"),'deleted_at'=>null);
            }
            $inserted_skill=DB::table('staffs_skills')->insert($data);

            DB::commit();

            return redirect()->back()
                ->with('success', 'Staff updated successfully.');

        }catch(\Exception $e){
            DB::rollback();
            return Redirect::back()->with('error',$e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
        DB::beginTransaction();
        try{
            DB::table('staffs_skills')->where('staff_id',$staff->id)->delete();
            $staff->delete();
            DB::commit();
            return redirect()->back()
                ->with('success', 'Staff deleted successfully.');
        }catch(\Exception $e){
            DB::rollback();
            return Redirect::back()->with('error',$e->getMessage());
        }
    }
}
