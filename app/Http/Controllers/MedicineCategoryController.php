<?php

namespace App\Http\Controllers;

use App\Models\MedicineCategory;
use Illuminate\Http\Request;


class MedicineCategoryController extends Controller
{
    public function index()
    {
        $medicine_categories = MedicineCategory::orderBy('id', 'DESC')->paginate(10);
        return view('pages.medicine_categories.index', compact('medicine_categories'));
    }

    public function create()
    {

        return view('pages.medicine_categories.create', [
            'mode' => 'create',
            'medicineCategory' => new MedicineCategory(),

        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('uploads', 'public');
        }
        MedicineCategory::create($data);
        return redirect()->route('medicine_categories.index')->with('success', 'Successfully created!');
    }

    public function show(MedicineCategory $medicineCategory)
    {
        return view('pages.medicine_categories.view', compact('medicineCategory'));
    }

    public function edit(MedicineCategory $medicineCategory)
    {

        return view('pages.medicine_categories.edit', [
            'mode' => 'edit',
            'medicineCategory' => $medicineCategory,

        ]);
    }

    public function update(Request $request, MedicineCategory $medicineCategory)
    {
        $data = $request->all();
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('uploads', 'public');
        }
        $medicineCategory->update($data);
        return redirect()->route('medicine_categories.index')->with('success', 'Successfully updated!');
    }

    public function destroy(MedicineCategory $medicineCategory)
    {
        $medicineCategory->delete();
        return redirect()->route('medicine_categories.index')->with('success', 'Successfully deleted!');
    }
}