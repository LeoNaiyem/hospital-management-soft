<?php

namespace App\Http\Controllers\Api\Site;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function findPatient(Request $request){
        $request->validate([
            'mobile'=>'required|string',
        ]);
        $patient=Patient::where('mobile',$request->mobile)->first();
        if(!$patient){
            return response()->json(['found'=>false]);
        }
        return response()->json([
            'found'=>true,
            'patient'=>$patient

        ]);
    }
}
