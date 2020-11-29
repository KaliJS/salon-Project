<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use App\Models\Appointments;
use App\Models\Branch;
use Illuminate\Http\Request;
use Redirect;
use Auth;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $users = Customers::orderBy('name')->get();
            //return \Auth::user()->branch_id;
            return view('admin.Users.user-list', compact('users'));
    
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
            $branches = Branch::orderBy('name')->get();
            return view('admin.Users.user-list-create',compact('branches'));

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
        try{
            $request->validate([
                'name' => 'required',
                'address' => 'required',
                'phone' => 'required',
                'dob' => 'required',
                'gender' => 'required',
                'note' => 'required',
                'age' => 'required',
                'gst_no' => 'required',
                'anniversary' => 'required'
            ]);

            $input=$request->all();
            $input['branch_id']=\Auth::user()->id;
            Customers::create($input);
            
            return redirect()->route('users.index')
                ->with('success', 'User created successfully.');

        }catch(\Exception $e){
            return Redirect::back()->with('error',$e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function show(Customers $customers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function edit(Customers $customers)
    {

       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customers $customers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customers $customers)
    {
    
    }

    public function editCustomer($id){
        $customers=Customers::find($id);
        return view('admin.Users.user-list-edit', compact('customers'));
    }

    public function updateCustomer(Request $request,$id){

        try{
            $input = $request->all();
            unset($input['_token']);
            $update=Customers::where('id',$id)->update($input);
            return Redirect::back()->with('success','Cutomer Updated Successfully!');
    
        }catch(\Exception $e){
            return Redirect::back()->with('error',$e->getMessage());
        }
    }

    public function destroyCustomer(Request $request , $id){
        \DB::beginTransaction();
        try{
            Customers::where('id', $id)->delete();
            Appointments::where('customer_id',$id)->delete();
            \DB::commit();
            return Redirect::back()->with('success','Cutomer Deleted Successfully!');
    
        }catch(\Exception $e){
            \DB::rollback();
            return Redirect::back()->with('error',$e->getMessage());
        }
    }
    
}
