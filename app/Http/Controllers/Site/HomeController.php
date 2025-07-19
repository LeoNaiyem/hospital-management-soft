<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
   public function home()
   {
      $doctors = DB::table('doctors as d')
         ->join('designations as des', 'd.designation_id', '=', 'des.id')
         ->select('d.id', 'd.name', 'd.photo', 'des.name as designation_name')
         ->get();
      $departments = Department::select('id', 'name')->get();
      return view('site.pages.home', compact('doctors', 'departments'));
   }
}
