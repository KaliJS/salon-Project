<?php

namespace App\Http\Controllers;

use App\Models\ServicesCategories;
use Illuminate\Http\Request;
use App\Models\Branch;
use Redirect;
use Auth;

class ServicesCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        try{

            $categories = ServicesCategories::orderBy('name')->get();
            return view('admin.Services.services-categories',compact('categories'));

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

            return view('admin.Services.create-services-categories');

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
            'name' => 'required'
        ]);

        try{

            $input=$request->all();
            $input['branch_id']=\Auth::user()->id;
            ServicesCategories::create($input);
            
            return redirect()->route('services-categories.index')
                ->with('success', 'Category created Successfully.');

        }catch(\Exception $e){
            return Redirect::back()->with('error',$e->getMessage());
        } 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServicesCategories  $servicesCategories
     * @return \Illuminate\Http\Response
     */
    public function show(ServicesCategories $servicesCategories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServicesCategories  $servicesCategories
     * @return \Illuminate\Http\Response
     */
    public function edit(ServicesCategories $servicesCategories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServicesCategories  $servicesCategories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServicesCategories $servicesCategories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServicesCategories  $servicesCategories
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServicesCategories $servicesCategories)
    {
        //
    }

    public function editCategory($id){
        try{
            $category=ServicesCategories::find($id);
            return view('admin.Services.edit-services-categories', compact('category'));
            
        }catch(\Exception $e){
            return Redirect::back()->with('error',$e->getMessage());
        }
        
    }

    public function updateCategory(Request $request,$id){

        try{
            $input = $request->all();
            unset($input['_token']);
            $update=ServicesCategories::where('id',$id)->update($input);
            return Redirect::back()->with('success','Category Updated Successfully!');
    
        }catch(\Exception $e){
            return Redirect::back()->with('error',$e->getMessage());
        }
    }

    public function destroyCategory(Request $request , $id){
        try{
            ServicesCategories::where('id', $id)->delete();
            DB::table('service_sub_categories')->where('category_id',$id)->delete();
            return Redirect::back()->with('success','Category Deleted Successfully!');
    
        }catch(\Exception $e){
            return Redirect::back()->with('error',$e->getMessage());
        }
    }

}
