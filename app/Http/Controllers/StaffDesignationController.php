<?php

namespace App\Http\Controllers;

use App\Models\StaffDesignation;
use Illuminate\Http\Request;
use App\Models\Branch;
use Redirect;
use Auth;

class StaffDesignationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $designations = StaffDesignation::orderBy('name')->get();
        return view('admin.Staff Management.staff-designation',compact('designations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Staff Management.create-staff-designation');
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
            'name' => 'required'
        ]);

        $input=$request->all();
        $input['branch_id']=\Auth::user()->id;
        StaffDesignation::create($input);
        
        return redirect()->route('staff-designation.index')
            ->with('success', 'Designation created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StaffDesignation  $staffDesignation
     * @return \Illuminate\Http\Response
     */
    public function show(StaffDesignation $staffDesignation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StaffDesignation  $staffDesignation
     * @return \Illuminate\Http\Response
     */
    public function edit(StaffDesignation $staffDesignation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StaffDesignation  $staffDesignation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StaffDesignation $staffDesignation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StaffDesignation  $staffDesignation
     * @return \Illuminate\Http\Response
     */
    public function destroy(StaffDesignation $staffDesignation)
    {
        //
    }

    public function editDesignation($id){
        try{
            $designation=StaffDesignation::find($id);
            return view('admin.Staff Management.edit-staff-designation', compact('designation'));
            
        }catch(\Exception $e){
            return Redirect::back()->with('error',$e->getMessage());
        }
        
    }

    public function updateDesignation(Request $request,$id){

        try{
            $input = $request->all();
            unset($input['_token']);
            $update=StaffDesignation::where('id',$id)->update($input);
            return Redirect::back()->with('success','Designation Updated Successfully!');
    
        }catch(\Exception $e){
            return Redirect::back()->with('error',$e->getMessage());
        }
    }

    public function destroyDesignation(Request $request , $id){
        \DB::beginTransaction();
        try{
            StaffDesignation::where('id', $id)->delete();
            \DB::table('staff_users')->where('designation_id',$id)->delete();
            \DB::commit();
            return Redirect::back()->with('success','Designation Deleted Successfully!');
    
        }catch(\Exception $e){
            \DB::rollback();
            return Redirect::back()->with('error',$e->getMessage());
        }
    }

}
