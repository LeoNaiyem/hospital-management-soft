<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    protected $fillable = ['name', 'hms_medicine_category_id', 'hms_medicine_type_id', 'generic_name', 'description'];

    public $timestamps = false; // Disable timestamps

}