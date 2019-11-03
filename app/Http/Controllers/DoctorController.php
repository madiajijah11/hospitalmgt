<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LabTest;
use App\LabResult;
use App\Patient;
use Illuminate\Support\Facades\Input;

class DoctorController extends Controller
{

    public function viewPatient(){
        $patients = Patient::get();
        $patients = json_decode(json_encode($patients));

        return view('admin/doctors/view_patients')->with(compact('patients'));
    }

    public function labTests(Request $request, $id = null){
        if ($request->isMethod('post')) {
            $data = $request->all();
            // echo "<pre>";print_r($data); die;
            $labtest = new LabTest;
            $labtest->patients_id = $data['patient_id'];
            $labtest->symptoms = $data['symptoms'];
            $labtest->description = $data['description'];
            $labtest->clinical_notes = $data['clinical_notes'];
            //dd($labtest);
            $labtest->save();

            return redirect('/admin/doctors/view-labtests')->with('flash_message_success','Lab Tests Send SUccessfully');
        }
        $patientInfo = Patient::where(['id'=>$id])->first();
        return view('admin/doctors/labtests')->with(compact('patientInfo'));
    }

    public function viewLabTests(){
        $getLabTests = LabTest::with('patient')->get();
        $getLabTests = json_decode(json_encode($getLabTests));

        return view('admin/doctors/view-labtests')->with(compact('getLabTests'));
    }

    public function viewLabResults(){

        $getLabResults = LabResult::with('patient','labtest')->get();
        $getLabResults = json_decode(json_encode($getLabResults));
        //dd($getLabResults);
        return view('admin/doctors/view-labresults')->with(compact('getLabResults'));
    }
}
