<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LabTest;
use App\LabResult;
use App\Patient;
use App\Prescription;
class PharmacistController extends Controller
{
    public function viewPrescription(){

        $getPrescription = Prescription::with('patient','labtest')->get();
        $getPrescription = json_decode(json_encode($getPrescription));
        //dd($getPrescription);
        return view('admin/pharmacists/view-prescription')->with(compact('getPrescription'));
    }
}
