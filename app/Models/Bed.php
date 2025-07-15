<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bed extends Model
{
    protected $fillable = ['name'];

    public $timestamps = false; // Disable timestamps

}