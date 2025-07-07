<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = ['name', 'mobile', 'dob', 'mob_ext', 'gender', 'profession'];

    public $timestamps = false; // Disable timestamps

    public function getAgeAttribute()
    {
        return Carbon::parse($this->dob)->age;
    }
}