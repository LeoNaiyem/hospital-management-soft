<?php

namespace App\Http\Controllers;

use App\Models\MedicineType;
use Illuminate\Http\Request;


class MedicineTypeController extends Controller
{
    public function index()
    {
        $medicine_types = MedicineType::orderBy('id', 'DESC')->paginate(10);
        return view('pages.medicine_types.index', compact('medicine_types'));
    }

    public function create()
    {

        return view('pages.medicine_types.create', [
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
        return redirect()->route('medicine_types.index')->with('success', 'Successfully created!');
    }

    public function show(MedicineType $medicineType)
    {
        return view('pages.medicine_types.view', compact('medicineType'));
    }

    public function edit(MedicineType $medicineType)
    {

        return view('pages.medicine_types.edit', [
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
        return redirect()->route('medicine_types.index')->with('success', 'Successfully updated!');
    }

    public function destroy(MedicineType $medicineType)
    {
        $medicineType->delete();
        return redirect()->route('medicine_types.index')->with('success', 'Successfully deleted!');
    }
}