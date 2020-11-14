<?php

namespace App\Http\Controllers;

use App\Models\ServicesPreSubCategories;
use App\Models\ServicesSubCategories;
use App\Models\ServicesCategories;
use Illuminate\Http\Request;
use Redirect;
use Auth;
use DB;

class ServicesPreSubCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return $presubcategories;
        // $presubcategories=DB::table("service_pre_sub_categories")->join("service_sub_categories","service_pre_sub_categories.subcategory_id",'=','service_sub_categories.id')->join("service_categories","service_sub_categories.category_id",'=','service_categories.id')->select('service_pre_sub_categories.*','service_sub_categories.name as subcategory_name','service_categories.name as category_name')->get();
        try{
            $presubcategories=ServicesPreSubCategories::where('branch_id',Auth::user()->branch_id)->get();
            return view('admin.Services.services-presubcategories',compact('presubcategories'));
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
            
            $subcategories=ServicesSubCategories::where('branch_id',Auth::user()->branch_id)->get(['id','name']);
            return view('admin.Services.create-services-presubcategories',compact('subcategories'));

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
            'subcategory_id' => 'required',
            'name' => 'required'
        ]);
        try{

            $input=$request->all();
            $input['branch_id']=\Auth::user()->id;
            ServicesPreSubCategories::create($input);
            
            return redirect()->back()
                ->with('success', 'Post Sub Category Created Successfully.');

        }catch(\Exception $e){
            return Redirect::back()->with('error',$e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServicesPreSubCategories  $servicesPreSubCategories
     * @return \Illuminate\Http\Response
     */
    public function show(ServicesPreSubCategories $servicesPreSubCategories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServicesPreSubCategories  $servicesPreSubCategories
     * @return \Illuminate\Http\Response
     */
    public function edit(ServicesPreSubCategories $servicesPreSubCategories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServicesPreSubCategories  $servicesPreSubCategories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServicesPreSubCategories $servicesPreSubCategories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServicesPreSubCategories  $servicesPreSubCategories
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServicesPreSubCategories $servicesPreSubCategories)
    {
        //
    }


    public function editPreSubCategory($id){
        try{
            $presubcategory=ServicesPreSubCategories::find($id);
            $subcategories=ServicesSubCategories::where('branch_id',Auth::user()->branch_id)->get(['id','name']);
            return view('admin.Services.edit-services-presubcategories', compact('presubcategory','subcategories'));
            
        }catch(\Exception $e){
            return Redirect::back()->with('error',$e->getMessage());
        }
        
    }

    public function updatePreSubCategory(Request $request,$id){

        try{
            $input = $request->all();
            unset($input['_token']);
            $update=ServicesPreSubCategories::where('id',$id)->update($input);
            return Redirect::back()->with('success','Post Sub Category Updated Successfully!');
    
        }catch(\Exception $e){
            return Redirect::back()->with('error',$e->getMessage());
        }
    }

    public function destroyPreSubCategory(Request $request , $id){
        try{
            ServicesPreSubCategories::where('id', $id)->delete();
            return Redirect::back()->with('success','Post Sub Category Deleted Successfully!');
    
        }catch(\Exception $e){
            return Redirect::back()->with('error',$e->getMessage());
        }
    }

}
