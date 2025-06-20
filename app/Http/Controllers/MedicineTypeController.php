<?php

namespace App\Http\Controllers;

use App\Models\MedicineType;
use Illuminate\Http\Request;


class MedicineTypeController extends Controller
{
    public function index()
    {
        $medicineTypes = MedicineType::orderBy('id','DESC')->paginate(10);
        return view('pages.medicineTypes.index', compact('medicineTypes'));
    }

    public function create()
    {

        return view('pages.medicineTypes.create', [
            'mode' => 'create',
            'medicineType' => new MedicineType(),

        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('uploads', 'public');
        }
        MedicineType::create($data);
        return redirect()->route('medicineTypes.index')->with('success', 'Successfully created!');
    }

    public function show(MedicineType $medicineType)
    {
        return view('pages.medicineTypes.view', compact('medicineType'));
    }

    public function edit(MedicineType $medicineType)
    {

        return view('pages.medicineTypes.edit', [
            'mode' => 'edit',
            'medicineType' => $medicineType,

        ]);
    }

    public function update(Request $request, MedicineType $medicineType)
    {
        $data = $request->all();
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('uploads', 'public');
        }
        $medicineType->update($data);
        return redirect()->route('medicineTypes.index')->with('success', 'Successfully updated!');
    }

    public function destroy(MedicineType $medicineType)
    {
        $medicineType->delete();
        return redirect()->route('medicineTypes.index')->with('success', 'Successfully deleted!');
    }
}