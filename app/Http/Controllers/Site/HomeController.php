<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function home(){
    $doctors=Doctor::select('id','name','department_id')->orderBy('name')->get();
    return view('site.pages.home',compact('doctors'));
   }
}
