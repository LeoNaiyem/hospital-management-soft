<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // check if patient exists
        $patient = Patient::where('mobile', $request->mobile)->first();

        try {
            // not found? crate patient
            if (!$patient) {
                $patient = Patient::create([
                    'name' => $request->name,
                    'mobile' => $request->mobile,
                    'mob_ext' => $request->mob_ext,
                    'dob' => $request->dob,
                    'gender' => $request->gender,
                    'profession' => $request->profession,

                ]);

            }

            //create appointment
            $appointment = Appointment::create([
                'patient_id' => $patient->id,
                'doctor_id' => $request->doctor_id,
                'appointment_at' => $request->appointment_at,
                'cc' => $request->cc,
            ]);

            return redirect()->route('home')->with([
                'message' => 'Appointment Created Successfully!',
                'alert-type' => 'success',
                'created appointment'=>$appointment,
            ]);
        } catch (\Exception $e) {
            // Log the error (optional)
            Log::error('Appointment creation failed: ' . $e->getMessage());

            return redirect()->back()->withInput()->with([
                'message' => 'Something went wrong while creating the appointment.',
                'alert-type' => 'danger'
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
