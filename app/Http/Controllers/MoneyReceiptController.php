<?php

namespace App\Http\Controllers;

use App\Models\MoneyReceipt;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\Patient;
use Illuminate\Support\Facades\DB;


class MoneyReceiptController extends Controller
{
    public function index(Request $request)
    {
        $query=MoneyReceipt::with(['patient']);
        if($request->filled('search')){
            $query->whereHas('patient',function($q)use($request){
                $q->where('name','like','%'.$request->search.'%');
            });
        }
        if($request->filled('date')){
            $query->where('created_at',$request->date);
        }

        $money_receipts = $query->orderBy('id', 'DESC')->paginate(10)->onEachSide(1);
        $money_receipts->append($request->all());
        return view('pages.money_receipts.index', compact('money_receipts'));
    }

    public function create()
    {
        $patients = Patient::all();
        $services = Service::all();
        $mr = MoneyReceipt::all();
        $maxId = $mr->max('id');
        $newMrId = "MR-" . str_pad($maxId + 1, 5, '0', STR_PAD_LEFT);

        return view('pages.money_receipts.create', compact('patients', 'newMrId', 'services'));
    }

    public function store(Request $request)
    {
        // $data = $request->all();
        // if ($request->hasFile('photo')) {
        //     $data['photo'] = $request->file('photo')->store('uploads', 'public');
        // }
        // MoneyReceipt::create($data);
        // return redirect()->route('money_receipts.index')->with('success', 'Successfully created!');
    }

    public function show(MoneyReceipt $moneyReceipt)
    {
        $mrId = $moneyReceipt->id;
        $customMrId = 'MR-' . str_pad($mrId, 5, '0', STR_PAD_LEFT);
        $patient = Patient::find($moneyReceipt->patient_id);
        $details = DB::table('services as s')
            ->join('money_receipt_details as d', 'd.service_id', '=', 's.id')
            ->where('d.money_receipt_id', $moneyReceipt->id)
            ->select('d.service_id', 'd.price', 'd.qty', 'd.vat', 'd.discount', 's.name as serviceName')
            ->get();

        //calculations
        $subtotal = 0;
        foreach ($details as $d) {
            $d->lineTotal = $d->qty * $d->price + $d->vat - $d->discount;
            $subtotal += $d->lineTotal;
        }
        $tax = $subtotal * 0.05;

        return view('pages.money_receipts.view', compact('moneyReceipt', 'patient', 'details', 'customMrId', 'tax', 'subtotal'));
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
