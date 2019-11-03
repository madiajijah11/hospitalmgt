<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LabResult extends Model
{
    protected $fillable = [
    	'patients_id','lab_tests_id','description', 'image',
    ];

    public function patient(){
    	return $this->belongsTo('App\Patient', 'patients_id');
    }
    public function labtest(){
    	return $this->belongsTo('App\LabTest', 'lab_tests_id');
    }
}
