<?php

namespace App\Http\Controllers;

use App\Models\Bed;
use Illuminate\Http\Request;


class BedController extends Controller
{
    public function index(Request $request)
    {
        $query = Bed::query();
        if ($request->filled('search')) {
            $query->where('bed_number',  'like', '%' . $request->search . '%');
        }
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $beds = $query->orderBy('id', 'DESC')->paginate(10)->onEachSide(1);
        $beds->append($request->all());

        return view('pages.beds.index', compact('beds'));
    }

    public function create()
    {
        $wards = \App\Models\Ward::all();

        return view('pages.beds.create', [
            'mode' => 'create',
            'bed' => new Bed(),
            'wards' => $wards,

        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('uploads', 'public');
        }
        Bed::create($data);
        return redirect()->route('beds.index')->with('success', 'Successfully created!');
    }

    public function show(Bed $bed)
    {
        return view('pages.beds.view', compact('bed'));
    }

    public function edit(Bed $bed)
    {
        $wards = \App\Models\Ward::all();

        return view('pages.beds.edit', [
            'mode' => 'edit',
            'bed' => $bed,
            'wards' => $wards,

        ]);
    }

    public function update(Request $request, Bed $bed)
    {
        $data = $request->all();
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('uploads', 'public');
        }
        $bed->update($data);
        return redirect()->route('beds.index')->with('success', 'Successfully updated!');
    }

    public function destroy(Bed $bed)
    {
        $bed->delete();
        return redirect()->route('beds.index')->with('success', 'Successfully deleted!');
    }
}
