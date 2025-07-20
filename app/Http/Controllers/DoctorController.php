<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Models\Designation;
use App\Models\Department;


class DoctorController extends Controller
{
    public function index(Request $request)
    {
        $query = Doctor::with(['department', 'designation']);

        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        if ($request->filled('department_id')) {
            $query->where('department_id', $request->department_id);
        }

        $doctors = $query->orderBy('id', 'DESC')->paginate(10)->onEachSide(1);        
        $doctors->append($request->all());
        
        $departments = Department::select('id', 'name')->get();
        return view('pages.doctors.index', compact('doctors', 'departments'));
    }

    public function create()
    {
        $designations = Designation::all();
        $departments = Department::all();

        return view('pages.doctors.create', [
            'mode' => 'create',
            'doctor' => new Doctor(),
            'designations' => $designations,
            'departments' => $departments,

        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('uploads', 'public');
        }
        Doctor::create($data);
        return redirect()->route('doctors.index')->with('success', 'Successfully created!');
    }

    public function show(Doctor $doctor)
    {
        return view('pages.doctors.view', compact('doctor'));
    }

    public function edit(Doctor $doctor)
    {
        $designations = Designation::all();
        $departments = Department::all();

        return view('pages.doctors.edit', [
            'mode' => 'edit',
            'doctor' => $doctor,
            'designations' => $designations,
            'departments' => $departments,

        ]);
    }

    public function update(Request $request, Doctor $doctor)
    {
        $data = $request->all();
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('uploads', 'public');
        }
        $doctor->update($data);
        return redirect()->route('doctors.index')->with('success', 'Successfully updated!');
    }

    public function destroy(Doctor $doctor)
    {
        $doctor->delete();
        return redirect()->route('doctors.index')->with('success', 'Successfully deleted!');
    }
}
