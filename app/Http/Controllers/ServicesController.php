<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;
use App\Models\ServicesCategories;
use App\Models\ServiceImage;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use DB;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $services=Services::where('branch_id',Auth::user()->branch_id)->with('images:id,image_url,service_id')->get();

            return view('admin.Services.services',compact('services'));
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
        $categories=ServicesCategories::where('branch_id',Auth::user()->branch_id)->get(['id','name']);
        
        return view('admin.Services.create-services',compact('categories'));
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
            'for_which_gender' => 'required',
            'price' => 'required',
            'service_time' => 'required',
            'service_description' => 'required'
        ]);
        
        DB::beginTransaction();
        try{
           $input = $request->all();         
            $input['branch_id']=\Auth::user()->branch_id;
            $inserted_service = Services::create($input);


            $service_images=array();
            if($files=$request->file('images')){
                foreach($files as $file){
                    $file_name=time().$file->getClientOriginalName();
                    $file->move('uploads/service',$file_name);
                    $service_images[]=array('image_url'=>$file_name,'service_id'=>$inserted_service->id,'branch_id'=>$input['branch_id']);
                }
            }

           
            ServiceImage::insert($service_images);

            DB::commit();
            return redirect()->back()
                ->with('success', 'Service created successfully.');

        }catch(\Exception $e){
            DB::rollback();
            return Redirect::back()->with('error',$e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function show(Services $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function edit(Services $service)
    {
        $categories=ServicesCategories::where('branch_id',Auth::user()->branch_id)->get(['id','name']);
        
        return view('admin.Services.edit-services',compact('service','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Services $service)
    {
        $request->validate([
            'for_which_gender' => 'required',
            'price' => 'required',
            'service_time' => 'required',
            'service_description' => 'required'
        ]);
        
        DB::beginTransaction();
        try{
           $files=$request->file('images');
           $input = $request->all(); 
           unset($input['_token']);        
           unset($input['_method']);        
           unset($input['images']);        
            $input['branch_id']=\Auth::user()->branch_id;
            $updated_service = Services::where('id',$service->id)->update($input);


            $service_images=array();
            if($files){
                foreach($files as $file){
                    $file_name=time().$file->getClientOriginalName();
                    $file->move('uploads/service',$file_name);
                    $service_images[]=array('image_url'=>$file_name,'service_id'=>$service->id,'branch_id'=>$input['branch_id']);
                }
            }

           
            ServiceImage::insert($service_images);

            DB::commit();
            return redirect()->back()
                ->with('success', 'Service Updated successfully.');

        }catch(\Exception $e){
            DB::rollback();
            return Redirect::back()->with('error',$e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function destroy(Services $service)
    {

       DB::beginTransaction();
        try{
            $service_image = ServiceImage::where('service_id',$service->id)->get();
            DB::table('service_images')->where('service_id',$service->id)->delete();
            foreach($service_image as $image){
                unlink(public_path().'/uploads/service/'.$image['image_url']);
                //when uploaded to domain then use below code.
                //unlink($_SERVER['DOCUMENT_ROOT'].'/uploads/service/'.$service_image->image_url);
                
            }
            $service->delete();
            DB::commit();
            return redirect()->back()
                ->with('success', 'Service deleted successfully.');
        }catch(\Exception $e){
            DB::rollback();
            return Redirect::back()->with('error',$e->getMessage());
        }
        
    }



    public function getCategoryData(Request $request){
        $category_id=$request->category_id;
        $subcategories = ServicesSubCategories::where('category_id',$category_id)->get();
        
        $view=view('admin.Services.get_subcategory_data',compact('subcategories'));
            return $view->render();
    }

    public function getSubCategoryData(Request $request){
        $sub_category_id=$request->sub_category_id;
        $presubcategories = ServicesPreSubCategories::where('subcategory_id',$sub_category_id)->get();
        
        $view=view('admin.Services.get_presubcategory_data',compact('presubcategories'));
            return $view->render();
    }

    public function getDeleteSelectedImages(Request $request){
        
            try{
                $service_image = ServiceImage::where('id',$request->image_id)->first();
                DB::table('service_images')->where('id',$request->image_id)->delete();         
                unlink(public_path().'/uploads/service/'.$service_image->image_url);
                return 'success';
           
            }catch(Exception $e){
                return $e->getMessage();
            }
                
    }
 
}
