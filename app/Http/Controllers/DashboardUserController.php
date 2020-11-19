<?php

namespace App\Http\Controllers;

use App\Models\DashboardUser;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Auth;
use Hash;
use DB;

class DashboardUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $users = DashboardUser::where('branch_id',Auth::user()->branch_id)->get();
            return view('admin.Dashboard User.user-list',compact('users'));
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
        $staffs=Staff::where('branch_id',Auth::user()->branch_id)->get(['id','name']);
        return view('admin.Dashboard User.user-list-create',compact('staffs'));
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
            'staff_id' => 'required',
            'email' => 'required|unique:dashboard_users',
            'permissions' => 'required',
            'password' => 'required'
        ]);

        DB::beginTransaction();
        try{
            $input = $request->all();
            $permissions = $request->permissions;
            unset($input['permissions']);
            $input['password']=Hash::make($request->password);   
            $input['branch_id']=Auth::user()->branch_id;
            $inserted_user=DashboardUser::create($input);


            foreach($permissions as $permission){
                $data[]=array('branch_id'=>$input['branch_id'],'permission'=>$permission,'user_id'=>$inserted_user->id,'created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s"),'deleted_at'=>null);
            }
            $inserted_permission=DB::table('dashboard_permissions')->insert($data);



            DB::commit();
            return redirect()->back()
                ->with('success', 'User created successfully.');

        }catch(\Exception $e){
            DB::rollback();
            return Redirect::back()->with('error',$e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DashboardUser  $dashboardUser
     * @return \Illuminate\Http\Response
     */
    public function show(DashboardUser $dashboard_user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DashboardUser  $dashboardUser
     * @return \Illuminate\Http\Response
     */
    public function edit(DashboardUser $dashboard_user)
    {
        $staffs=Staff::where('branch_id',Auth::user()->branch_id)->get(['id','name']);

        $selected_permissions=DB::table('dashboard_permissions')->where('user_id',$dashboard_user->id)->pluck('permission')->toArray();

        return view('admin.Dashboard User.user-list-edit',compact('dashboard_user','staffs','selected_permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DashboardUser  $dashboardUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DashboardUser $dashboard_user)
    {
        
        $request->validate([
            'staff_id' => 'required',
            'permissions' => 'required',
            'password' => 'required',
            'email' => 'required'
        ]);
        DB::beginTransaction();
        try{

            $permissions=$request->permissions;
            $input=$request->all();
            $input['password']=Hash::make($request->password);
            unset($input['permissions']);
            unset($input['_method']);
            unset($input['_token']);
            $input['branch_id']=Auth::user()->branch_id;

            DashboardUser::where('id',$dashboard_user->id)->update($input);
            $deleted_permissions=DB::table('dashboard_permissions')->where('user_id',$dashboard_user->id)->delete();

            foreach($permissions as $permission){
                $data[]=array('branch_id'=>$input['branch_id'],'permission'=>$permission,'user_id'=>$dashboard_user->id,'created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s"),'deleted_at'=>null);
            }
            $inserted_permission=DB::table('dashboard_permissions')->insert($data);


            DB::commit();

            return redirect()->back()
                ->with('success', 'User updated successfully.');

        }catch(\Exception $e){
            DB::rollback();
            return Redirect::back()->with('error',$e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DashboardUser  $dashboardUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(DashboardUser $dashboard_user)
    {
        
        DB::beginTransaction();
        try{
            DB::table('dashboard_permissions')->where('user_id',$dashboard_user->id)->delete();
            $dashboard_user->delete();
            DB::commit();
            return redirect()->back()
                ->with('success', 'User deleted successfully.');
        }catch(\Exception $e){
            DB::rollback();
            return Redirect::back()->with('error',$e->getMessage());
        }

    }

    public function getStaffData(Request $request)
    {

        $staff = Staff::where('id',$request->staff_id)->first();
        $view = view('admin.Dashboard User.get_staff_data',compact('staff'));
        return $view->render();
    }
}
