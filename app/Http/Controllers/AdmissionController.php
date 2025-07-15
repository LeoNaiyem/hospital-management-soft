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

    public function store(Request $request)
    {
        $data = $request->all();
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('uploads', 'public');
        }
        Admission::create($data);
        return redirect()->route('admissions.index')->with('success', 'Successfully created!');
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