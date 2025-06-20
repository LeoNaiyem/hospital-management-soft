<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\Request;
use App\Models\HmsMedicineCategory;
use App\Models\HmsMedicineType;


class MedicineController extends Controller
{
    public function index()
    {
        $medicines = Medicine::orderBy('id','DESC')->paginate(10);
        return view('pages.medicines.index', compact('medicines'));
    }

    public function create()
    {
        $hmsMedicineCategories = \App\Models\HmsMedicineCategory::all();
        $hmsMedicineTypes = \App\Models\HmsMedicineType::all();

        return view('pages.medicines.create', [
            'mode' => 'create',
            'medicine' => new Medicine(),
            'hmsMedicineCategories' => $hmsMedicineCategories,
            'hmsMedicineTypes' => $hmsMedicineTypes,

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
        $hmsMedicineCategories = \App\Models\HmsMedicineCategory::all();
        $hmsMedicineTypes = \App\Models\HmsMedicineType::all();

        return view('pages.medicines.edit', [
            'mode' => 'edit',
            'medicine' => $medicine,
            'hmsMedicineCategories' => $hmsMedicineCategories,
            'hmsMedicineTypes' => $hmsMedicineTypes,

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