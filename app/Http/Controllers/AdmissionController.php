<?php

namespace App\Http\Controllers;

use App\Models\Admission;
use Illuminate\Http\Request;
use App\Models\Patient;;
use App\Models\Bed;
use App\Models\Department;
use App\Models\Doctor;
use Illuminate\Support\Facades\DB;

class AdmissionController extends Controller
{
    public function index()
    {
        $admissions = Admission::orderBy('id','DESC')->paginate(10);
        return view('pages.admissions.index', compact('admissions'));
    }

    public function create()
    {
        $patients = Patient::all();
        $doctors = Doctor::all();
        $availableBeds=DB::table('beds')
                        ->where('status','Available')
                        ->select('id','bed_number')
                        ->get();
        $beds = Bed::all();
        $departments = Department::all();

        return view('pages.admissions.create', [
            'mode' => 'create',
            'admission' => new Admission(),
            'patients' => $patients,
            'doctors' => $doctors,
            'beds' => $availableBeds,
            'departments' => $departments,

        ]);
    }

    //get available beds based on bed_types and status
    public function getAvailableBeds($type){
        $beds=Bed::where('bed_type',$type)
                ->where('status','Available')
                ->select('id','bed_number')
                ->get();
        return response()->json($beds);
    }

    public function store(Request $request)
    {
        //if advance is empty default value will be 0
        $request->merge([
            'advance'=>$request->input('advance',0),
        ]);

        //validate the form inputs
        $data = $request->validate([
            'patient_id'=>'required|integer|exists:patients,id',
            'ref_doctor_id'=>'required|integer|exists:doctors,id',
            'under_doctor_id'=>'required|integer|exists:doctors,id',
            'admission_date'=>'required|date',
            'bed_id'=>'required|integer|exists:beds,id',
            'department_id'=>'required|integer|exists:departments,id',
            'advance'=>'required|numeric',
            'remark'=>'nullable|string',
            'problem'=>'nullable|string'
        ]);

        //start operating block conflict bed selections
        DB::beginTransaction();
        try{

            //check available beds
            $bed=Bed::where('id',$data['bed_id'])
                    ->where('status','Available')
                    ->lockForUpdate()
                    ->first();
            if(!$bed){
                return redirect()->back()->withErrors(['bed_id' => 'Selected bed is no longer available.']);
            }

            //create admission
            Admission::create($data);

            //update bed status
            $bed->status='Occupied';
            $bed->save();

            //done everything successfully
            DB::commit();

            return redirect()->route('admissions.index')->with('success', 'Successfully created!');
        }catch(\Exception $e){
            DB::rollBack();
            return back()->withErrors(['error'=>'Failed to create Admission!'])->withInput();
        }

    }

    public function show(Admission $admission)
    {
        return view('pages.admissions.view', compact('admission'));
    }

    public function edit(Admission $admission)
    {
        $patients =Patient::all();
        $doctors =Doctor::all();
        $beds =Bed::all();
        $departments =Department::all();

        return view('pages.admissions.edit', [
            'mode' => 'edit',
            'admission' => $admission,
            'patients' => $patients,
            'doctors' => $doctors,
            'beds' => $beds,
            'departments' => $departments,

        ]);
    }

    public function update(Request $request, Admission $admission)
    {
        $data = $request->all();
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('uploads', 'public');
        }
        $admission->update($data);
        return redirect()->route('admissions.index')->with('success', 'Successfully updated!');
    }

    public function destroy(Admission $admission)
    {
        $admission->delete();
        return redirect()->route('admissions.index')->with('success', 'Successfully deleted!');
    }
}