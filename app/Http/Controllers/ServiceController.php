<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\MedicineCategory;


class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('id','DESC')->paginate(10);
        return view('pages.services.index', compact('services'));
    }

    public function create()
    {
        $medicineCategories = \App\Models\MedicineCategory::all();

        return view('pages.services.create', [
            'mode' => 'create',
            'service' => new Service(),
            'medicineCategories' => $medicineCategories,

        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('uploads', 'public');
        }
        Service::create($data);
        return redirect()->route('services.index')->with('success', 'Successfully created!');
    }

    public function show(Service $service)
    {
        return view('pages.services.view', compact('service'));
    }

    public function edit(Service $service)
    {
        $medicineCategories = \App\Models\MedicineCategory::all();

        return view('pages.services.edit', [
            'mode' => 'edit',
            'service' => $service,
            'medicineCategories' => $medicineCategories,

        ]);
    }

    public function update(Request $request, Service $service)
    {
        $data = $request->all();
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('uploads', 'public');
        }
        $service->update($data);
        return redirect()->route('services.index')->with('success', 'Successfully updated!');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('services.index')->with('success', 'Successfully deleted!');
    }
}