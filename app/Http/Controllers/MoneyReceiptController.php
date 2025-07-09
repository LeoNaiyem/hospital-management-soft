<?php

namespace App\Http\Controllers;

use App\Models\MoneyReceipt;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\Patient;


class MoneyReceiptController extends Controller
{
    public function index()
    {
        $money_receipts = MoneyReceipt::orderBy('id','DESC')->paginate(10);
        return view('pages.money_receipts.index', compact('money_receipts'));
    }

    public function create()
    {
        $patients =Patient::all();
        $services=Service::all();
        $mr=MoneyReceipt::all();
        $maxId=$mr->max('id');        
        $newMrId="MR-". str_pad($maxId+1,5,'0',STR_PAD_LEFT);

        return view('pages.money_receipts.create',compact('patients','newMrId','services'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('uploads', 'public');
        }
        MoneyReceipt::create($data);
        return redirect()->route('money_receipts.index')->with('success', 'Successfully created!');
    }

    public function show(MoneyReceipt $moneyReceipt)
    {
        return view('pages.money_receipts.view', compact('moneyReceipt'));
    }

    public function edit(MoneyReceipt $moneyReceipt)
    {
        $patients = \App\Models\Patient::all();

        return view('pages.money_receipts.edit', [
            'mode' => 'edit',
            'moneyReceipt' => $moneyReceipt,
            'patients' => $patients,

        ]);
    }

    public function update(Request $request, MoneyReceipt $moneyReceipt)
    {
        $data = $request->all();
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('uploads', 'public');
        }
        $moneyReceipt->update($data);
        return redirect()->route('money_receipts.index')->with('success', 'Successfully updated!');
    }

    public function destroy(MoneyReceipt $moneyReceipt)
    {
        $moneyReceipt->delete();
        return redirect()->route('money_receipts.index')->with('success', 'Successfully deleted!');
    }
}