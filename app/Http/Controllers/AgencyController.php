<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Image;
use App\Agency;
class AgencyController extends Controller
{
    public function addAgency(Request $request){
    	if ($request->isMethod('post')) {
    		$data = $request->all();
    		//echo "<pre>";print_r($data);die;
    		$agencies = new Agency;

    		$agencies->agency_name = $data['agency_name'];
    		$agencies->email = $data['email'];
    		$agencies->number = $data['number'];
    		//upload image
    		if ($request->hasFile('image')) {
                $image_tmp = Input::file('image');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111,99999).'.'.$extension;
                    $large_image_path = 'images/backend_images/products/large/'.$filename;
                    $medium_image_path = 'images/backend_images/products/medium/'.$filename;
                    $small_image_path = 'images/backend_images/products/small/'.$filename;
                    // Resize Images
                    Image::make($image_tmp)->save($large_image_path);
                    Image::make($image_tmp)->resize(650,480)->save($medium_image_path);
                    Image::make($image_tmp)->resize(300,300)->save($small_image_path);
                    // Store image name in agency table
                    $agencies->image = $filename;
                }
            }
            //echo "<pre>";print_r($agencies);die;
            $agencies->save();
            return redirect('/admin/agency/view_agencies')->with('flash_message_success','Agency Added Successfully');
    	}
    	return view('admin/agency.addagency');
    }

    public function editAgency(Request $request, $id=null){
    	if ($request->isMethod('post')) {
            $data = $request->all();
            // echo "<pre>";print_r($data);die;
             //Upload Image
            if($request->hasFile('image')){
            	$image_tmp = Input::file('image');
                if ($image_tmp->isValid()) {
                    // Upload Images after Resize
                    $extension = $image_tmp->getClientOriginalExtension();
	                $fileName = rand(111,99999).'.'.$extension;
                    $large_image_path = 'images/backend_images/product/large'.'/'.$fileName;
                    $medium_image_path = 'images/backend_images/product/medium'.'/'.$fileName;  
                    $small_image_path = 'images/backend_images/product/small'.'/'.$fileName;  

	                Image::make($image_tmp)->save($large_image_path);
 					Image::make($image_tmp)->resize(600, 600)->save($medium_image_path);
     				Image::make($image_tmp)->resize(300, 300)->save($small_image_path);

                }
            }else if(!empty($data['current_image'])){
            	$fileName = $data['current_image'];
            }else{
            	$fileName = '';
            }
            Agency::where(['id'=>$id])->update(['agency_name'=>$data['agency_name'],'email'=>$data['email'],'number'=>$data['number'],'image'=>$fileName]);

            return redirect('/admin/agency/view_agencies')->with('flash_message_success','Agency Details updated Successfully!');
        }
        $agencyDetails = Agency::where(['id'=>$id])->first();
        return view('admin/agency.edit_agency')->with(compact('agencyDetails','levels'));
    }

    public function deleteAgency($id=null){
    	
    	Agency::where(['id'=>$id])->delete();
        return redirect()->back()->with('flash_message_success','Agency has been Deleted Successfully!');
    }
    public function viewAgencies(){

    	$agencies = Agency::get();
    	$agencies = json_decode(json_encode($agencies));

    	return view('admin/agency.view_agencies')->with(compact('agencies'));
    }
}
