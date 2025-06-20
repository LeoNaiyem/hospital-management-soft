<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consultant extends Model
{
    protected $fillable = ['name', 'hms_department_id', 'designation'];

    public $timestamps = false; // Disable timestamps

}