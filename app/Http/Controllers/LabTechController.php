<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LabTest;
use App\LabResult;
use App\Patient;
class LabTechController extends Controller
{
    public function viewLabTests(){
        $getLabTests = LabTest::with('patient')->get();
        $getLabTests = json_decode(json_encode($getLabTests));

        return view('admin/labtechs/view-labtests')->with(compact('getLabTests'));
    }

    public function addLabResults(Request $request,$id = null){
    	if ($request->isMethod('post')) {
            $data = $request->all();
            // echo "<pre>";print_r($data); die;
            $labresults = new LabResult;
            $labresults->patients_id = $data['patient_id'];
            $labresults->lab_tests_id = $data['labtest_id'];
            $labresults->description = $data['description'];
            //Upload Image
            if ($request->hasFile('image')) {
                  $request->validate([
                            'image' => 'file|image|max:10000',
                        ]);
                    $storeImage = $request->image->store('labresults', 'public');
                    $labresults->image = $storeImage;
            }
            //dd($labresults);
            $labresults->save();

            return redirect('/admin/labtechs/view-results')->with('flash_message_success','Lab Tests Send SUccessfully');
        }
        $patientInfo = LabTest::with('patient')->where(['id'=>$id])->first();
        //dd($patientInfo);
        return view('admin/labtechs/add-labresults')->with(compact('patientInfo'));
    }

    public function viewLabResults(){

        $getLabResults = LabResult::with('patient','labtest')->get();
        $getLabResults = json_decode(json_encode($getLabResults));
        //dd($getLabResults);
        return view('admin/labtechs/view-labresults')->with(compact('getLabResults'));
    }
}
