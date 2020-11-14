<?php

namespace App\Http\Controllers;

use App\Models\ServicesSubCategories;
use App\Models\ServicesCategories;
use Illuminate\Http\Request;
use Redirect;
use Auth;

class ServicesSubCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
       
       try{

            $subcategories = ServicesSubCategories::where('branch_id',Auth::user()->branch_id)->get();
            return view('admin.Services.services-subcategories',compact('subcategories'));

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

            $categories=ServicesCategories::where('branch_id',Auth::user()->branch_id)->get(['id','name']);
            return view('admin.Services.create-services-subcategories',compact('categories'));

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
            'category_id' => 'required',
            'name' => 'required'
        ]);
        try{

            $input=$request->all();
            $input['branch_id']=\Auth::user()->id;
            ServicesSubCategories::create($input);
            
            return redirect()->back()
                ->with('success', 'Sub Category created successfully.');

        }catch(\Exception $e){
            return Redirect::back()->with('error',$e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServicesSubCategories  $servicesSubCategories
     * @return \Illuminate\Http\Response
     */
    public function show(ServicesSubCategories $servicesSubCategories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServicesSubCategories  $servicesSubCategories
     * @return \Illuminate\Http\Response
     */
    public function edit(ServicesSubCategories $servicesSubCategories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServicesSubCategories  $servicesSubCategories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServicesSubCategories $servicesSubCategories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServicesSubCategories  $servicesSubCategories
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServicesSubCategories $servicesSubCategories)
    {
        //
    }


    public function editSubCategory($id){
        try{
            $subcategory=ServicesSubCategories::find($id);
            $categories=ServicesCategories::where('branch_id',Auth::user()->branch_id)->get(['id','name']);
            return view('admin.Services.edit-services-subcategories', compact('subcategory','categories'));
            
        }catch(\Exception $e){
            return Redirect::back()->with('error',$e->getMessage());
        }
        
    }

    public function updateSubCategory(Request $request,$id){

        try{
            $input = $request->all();
            unset($input['_token']);
            $update=ServicesSubCategories::where('id',$id)->update($input);
            return Redirect::back()->with('success','Sub Category Updated Successfully!');
    
        }catch(\Exception $e){
            return Redirect::back()->with('error',$e->getMessage());
        }
    }

    public function destroySubCategory(Request $request , $id){
        try{
            ServicesSubCategories::where('id', $id)->delete();
            return Redirect::back()->with('success','Sub Category Deleted Successfully!');
    
        }catch(\Exception $e){
            return Redirect::back()->with('error',$e->getMessage());
        }
    }
}
