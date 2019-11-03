<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;

class PatientController extends Controller
{
    public function addPatient(Request $request){
    	if ($request->isMethod('post')) {
    		$data = $request->all();
    		//dd($data);

    		$newpatient = new Patient;
    		$newpatient->patient_name = $data['patient_name'];
    		$newpatient->email = $data['email'];
    		$newpatient->age = $data['age'];
    		$newpatient->number = $data['number'];
    		$newpatient->blood_group = $data['blood_group'];
    		$newpatient->pressure = $data['pressure'];
    		$newpatient->weight = $data['weight'];
    		$newpatient->allergies = $data['allergies'];
    		$newpatient->illness = $data['illness'];
    		//dd($newpatient);
    		$newpatient->save();

    		return redirect('/admin/patient/view_patient')->with('flash_message_success', 'Patient Information Added Successfully');
    	}
    	return view('admin/nurses/add-patient');
    }

    public function viewPatient(){
    	$patients = Patient::get();
    	$patients = json_decode(json_encode($patients));

    	return view('admin/nurses/view-patient')->with(compact('patients'));
    }

    public function editPatient(Request $request,$id = null){
    	if ($request->isMethod('post')) {
    		$data = $request->all();
    		//dd($data);

        Patient::where(['id'=>$id])->update(['patient_name'=>$data['patient_name'],'email'=>$data['email'],'age'=>$data['age'],'number'=>$data['number'],'blood_group'=>$data['blood_group'],'pressure'=>$data['pressure'],'weight'=>$data['weight'],'allergies'=>$data['allergies'],'illness'=>$data['illness']]);

        return redirect('/admin/patient/view_patient')->with('flash_message_success','Patient Details updated Successfully!');
    	
    	}
    	$getPatientDetails = Patient::where(['id'=>$id])->first();
    	return view('admin/nurses/edit-patient')->with(compact('getPatientDetails'));
    }
}
