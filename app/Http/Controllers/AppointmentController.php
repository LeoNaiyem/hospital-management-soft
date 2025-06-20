<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Doctor;


class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::orderBy('id','DESC')->paginate(10);
        return view('pages.appointments.index', compact('appointments'));
    }

    public function create()
    {
        $patients = \App\Models\Patient::all();
        $doctors = \App\Models\Doctor::all();

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
        $patients = \App\Models\Patient::all();
        $doctors = \App\Models\Doctor::all();

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