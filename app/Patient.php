<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
    	'patient_name','email','age','number','blood_group','pressure','weight','allergies','illness',
    ];
}
