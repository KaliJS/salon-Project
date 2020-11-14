<?php

namespace App\Http\Controllers;

use App\Models\StaffSkills;
use Illuminate\Http\Request;
use App\Models\Branch;
use Redirect;
use Auth;

class StaffSkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = StaffSkills::orderBy('name')->get();
        return view('admin.Staff Management.staff-skills',compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Staff Management.create-staff-skills');
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
        StaffSkills::create($input);
        
        return redirect()->route('staff-skills.index')
            ->with('success', 'Skill created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StaffSkills  $staffSkills
     * @return \Illuminate\Http\Response
     */
    public function show(StaffSkills $staffSkills)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StaffSkills  $staffSkills
     * @return \Illuminate\Http\Response
     */
    public function edit(StaffSkills $staffSkills)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StaffSkills  $staffSkills
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StaffSkills $staffSkills)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StaffSkills  $staffSkills
     * @return \Illuminate\Http\Response
     */
    public function destroy(StaffSkills $staffSkills)
    {
        //
    }

    public function editSkill($id){
        try{
            $skill = StaffSkills::find($id);
            return view('admin.Staff Management.edit-staff-skills', compact('skill'));
            
        }catch(\Exception $e){
            return Redirect::back()->with('error',$e->getMessage());
        }
        
    }

    public function updateSkill(Request $request,$id){

        try{
            $input = $request->all();
            unset($input['_token']);
            $update = StaffSkills::where('id',$id)->update($input);
            return Redirect::back()->with('success','Staff Updated Successfully!');
    
        }catch(\Exception $e){
            return Redirect::back()->with('error',$e->getMessage());
        }
    }

    public function destroySkill(Request $request , $id){
        try{
            StaffSkills::where('id', $id)->delete();
            return Redirect::back()->with('success','Staff Deleted Successfully!');
    
        }catch(\Exception $e){
            return Redirect::back()->with('error',$e->getMessage());
        }
    }


}
