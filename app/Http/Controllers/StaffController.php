<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Models\Branch;
use App\Models\StaffDesignation;
use App\Models\StaffSkills;
use Illuminate\Http\Request;
use Redirect;
use Auth;

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
            $staff = Staff::where('branch_id',Auth::user()->branch_id)->orderBy('id')->with('skills')->get();
            return $staff;
            // return view('admin.Products.products',compact('products'));
            
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
            $skills = StaffSkills::where('branch_id',Auth::user()->branch_id)->orderBy('name')->get(['id','name']);
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

        \DB::beginTransaction();
        try{

            $skills=$request->skills;
            $input=$request->all();
            unset($input['skills']);
            $input['branch_id']=\Auth::user()->id;
            $inserted_staff=Staff::create($input);
            foreach($skills as $skill){
                $data=array('branch_id'=>$input['branch_id'],'skill_id'=>$skill,'staff_id'=>$inserted_staff->id,'created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s"),'deleted_at'=>null);
                $inserted_skill=\DB::table('staffs_skills')->insert($data);
            }

            \DB::commit();

            return redirect()->back()
                ->with('success', 'Staff created successfully.');

        }catch(\Exception $e){
            \DB::rollback();
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
        //
    }
}
