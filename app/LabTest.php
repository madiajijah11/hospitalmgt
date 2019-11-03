<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LabTest extends Model
{
    protected $fillable = [
    	'patients_id','symptoms','description', 'clinical_notes',
    ];

    public function patient(){
    	return $this->belongsTo('App\Patient', 'patients_id');
    }
    public function labresult(){
    	return $this->hasMany('App\LabResult', 'lab_tests_id');
    }
}
