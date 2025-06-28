<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\Request;
use App\Models\MedicineCategory;
use App\Models\MedicineType;


class MedicineController extends Controller
{
    public function index()
    {
        $medicines = Medicine::orderBy('id','DESC')->paginate(10);
        return view('pages.medicines.index', compact('medicines'));
    }

    public function create()
    {
        $medicineCategories = \App\Models\MedicineCategory::all();
        $medicineTypes = \App\Models\MedicineType::all();

        return view('pages.medicines.create', [
            'mode' => 'create',
            'medicine' => new Medicine(),
            'medicineCategories' => $medicineCategories,
            'medicineTypes' => $medicineTypes,

        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('uploads', 'public');
        }
        Medicine::create($data);
        return redirect()->route('medicines.index')->with('success', 'Successfully created!');
    }

    public function show(Medicine $medicine)
    {
        return view('pages.medicines.view', compact('medicine'));
    }

    public function edit(Medicine $medicine)
    {
        $medicineCategories = \App\Models\MedicineCategory::all();
        $medicineTypes = \App\Models\MedicineType::all();

        return view('pages.medicines.edit', [
            'mode' => 'edit',
            'medicine' => $medicine,
            'medicineCategories' => $medicineCategories,
            'medicineTypes' => $medicineTypes,

        ]);
    }

    public function update(Request $request, Medicine $medicine)
    {
        $data = $request->all();
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('uploads', 'public');
        }
        $medicine->update($data);
        return redirect()->route('medicines.index')->with('success', 'Successfully updated!');
    }

    public function destroy(Medicine $medicine)
    {
        $medicine->delete();
        return redirect()->route('medicines.index')->with('success', 'Successfully deleted!');
    }
}