<?php

namespace App\Http\Controllers;

use App\Models\Consultant;
use Illuminate\Http\Request;
use App\Models\Department;


class ConsultantController extends Controller
{
    public function index(Request $request)
    {
        $query = Consultant::with(['department']);
        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }
        if($request->filled('department_id')){
           $query->where('department_id',$request->department_id);
        }

        $consultants = $query->orderBy('id', 'DESC')->paginate(10)->onEachSide(1);
        $consultants->append($request->all());

        $departments=Department::select('id','name')->get();
        return view('pages.consultants.index', compact('consultants','departments'));
    }

    public function create()
    {
        $departments = \App\Models\Department::all();

        return view('pages.consultants.create', [
            'mode' => 'create',
            'consultant' => new Consultant(),
            'departments' => $departments,

        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('uploads', 'public');
        }
        Consultant::create($data);
        return redirect()->route('consultants.index')->with('success', 'Successfully created!');
    }

    public function show(Consultant $consultant)
    {
        return view('pages.consultants.view', compact('consultant'));
    }

    public function edit(Consultant $consultant)
    {
        $departments = \App\Models\Department::all();

        return view('pages.consultants.edit', [
            'mode' => 'edit',
            'consultant' => $consultant,
            'departments' => $departments,

        ]);
    }

    public function update(Request $request, Consultant $consultant)
    {
        $data = $request->all();
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('uploads', 'public');
        }
        $consultant->update($data);
        return redirect()->route('consultants.index')->with('success', 'Successfully updated!');
    }

    public function destroy(Consultant $consultant)
    {
        $consultant->delete();
        return redirect()->route('consultants.index')->with('success', 'Successfully deleted!');
    }
}
