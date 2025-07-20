<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Medicine;
use App\Models\Prescription;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Consultant;


class PrescriptionController extends Controller
{
    public function index(Request $request)
    {
        $query = Prescription::with(['patient', 'consultant']);

        if ($request->filled('search')) {
            $query->whereHas('patient', function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->search . '%');
            });
        }

        if ($request->filled('consultant_id')) {
            $query->where('consultant_id', $request->consultant_id);
        }

        $prescriptions = $query->orderBy('id', 'DESC')->paginate(10)->onEachSide(1);
        $prescriptions->append($request->all());

        $consultants = Doctor::select('id', 'name')->get();

        return view('pages.prescriptions.index', compact('prescriptions', 'consultants'));
    }

    public function create()
    {
        $patients = Patient::all();
        $consultants = Consultant::all();
        $doctor = Doctor::all();
        $medicines = Medicine::all();
        $services = Service::all();

        return view('pages.prescriptions.create', [
            'mode' => 'create',
            'prescription' => new Prescription(),
            'doctors' => $doctor,
            'patients' => $patients,
            'consultants' => $consultants,
            'medicines' => $medicines,
            'services' => $services,

        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('uploads', 'public');
        }
        Prescription::create($data);
        return redirect()->route('prescriptions.index')->with('success', 'Successfully created!');
    }

    public function show(Prescription $prescription)
    {
        $doctor = Doctor::find($prescription->consultant_id);
        $patient = Patient::find($prescription->patient_id);
        return view('pages.prescriptions.view', compact('prescription', 'doctor', 'patient'));
    }

    public function edit(Prescription $prescription)
    {
        $patients = \App\Models\Patient::all();
        $consultants = \App\Models\Consultant::all();

        return view('pages.prescriptions.edit', [
            'mode' => 'edit',
            'prescription' => $prescription,
            'patients' => $patients,
            'consultants' => $consultants,

        ]);
    }

    public function update(Request $request, Prescription $prescription)
    {
        $data = $request->all();
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('uploads', 'public');
        }
        $prescription->update($data);
        return redirect()->route('prescriptions.index')->with('success', 'Successfully updated!');
    }

    public function destroy(Prescription $prescription)
    {
        $prescription->delete();
        return redirect()->route('prescriptions.index')->with('success', 'Successfully deleted!');
    }
}
