<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Doctor;


class AppointmentController extends Controller
{
    public function index(Request $request)
    {
        $query=Appointment::with('patient','doctor');

        if($request->filled('search')){
            $query->whereHas('patient',function($q)use($request){
                $q->where('name','like','%'.$request->search.'%');
            });
        }

        if($request->filled('doctor_id')){
            $query->where('doctor_id',$request->doctor_id);
        }

        $appointments = $query->orderBy('id','DESC')->paginate(10)->onEachSide(1);
        $appointments->append($request->all());
        
        $doctors=Doctor::select('id','name')->get();
        return view('pages.appointments.index', compact('appointments','doctors'));
    }

    public function create()
    {
        $patients = Patient::all();
        $doctors = Doctor::all();

        return view('pages.appointments.create', [
            'mode' => 'create',
            'appointment' => new Appointment(),
            'patients' => $patients,
            'doctors' => $doctors,

        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('uploads', 'public');
        }
        Appointment::create($data);
        return redirect()->route('appointments.index')->with('success', 'Successfully created!');
    }

    public function show(Appointment $appointment)
    {
        return view('pages.appointments.view', compact('appointment'));
    }

    public function edit(Appointment $appointment)
    {
        $patients = Patient::all();
        $doctors = Doctor::all();

        return view('pages.appointments.edit', [
            'mode' => 'edit',
            'appointment' => $appointment,
            'patients' => $patients,
            'doctors' => $doctors,

        ]);
    }

    public function update(Request $request, Appointment $appointment)
    {
        $data = $request->all();
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('uploads', 'public');
        }
        $appointment->update($data);
        return redirect()->route('appointments.index')->with('success', 'Successfully updated!');
    }

    public function destroy(Appointment $appointment)
    {
        $appointment->delete();
        return redirect()->route('appointments.index')->with('success', 'Successfully deleted!');
    }
}