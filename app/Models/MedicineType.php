<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MedicineType extends Model
{
    protected $fillable = ['name'];

    public $timestamps = false; // Disable timestamps

}