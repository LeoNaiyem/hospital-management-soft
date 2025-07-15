<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    protected $fillable = ['patient_id', 'ref_doctor_id', 'under_doctor_id', 'bed_id', 'admission_date', 'created_at', 'department_id', 'advance', 'problem', 'remark'];

    public $timestamps = false; // Disable timestamps

}