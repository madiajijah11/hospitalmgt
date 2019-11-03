<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    protected $fillable = [
    	'patients_id','lab_tests_id','lab_results_id','prescription',
    ];

    public function patient(){
    	return $this->hasMany('App\Patient', 'id');
    }

    public function labtest(){
    	return $this->hasMany('App\LabTest', 'id');
    }
}
