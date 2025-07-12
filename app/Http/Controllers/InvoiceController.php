<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Service;

class InvoiceController extends Controller
{
    public function index()
    {
        $invoices = Invoice::orderBy('id','DESC')->paginate(10);
        return view('pages.invoices.index', compact('invoices'));
    }

    public function create()
    {
        $lastInvoiceId = Invoice::max('id') ?? 0;
        $newInvoiceNo = 'INV-' . str_pad($lastInvoiceId + 1, 5, '0', STR_PAD_LEFT);

        $invoices = Invoice::all();
        $patients = Patient::all();
        $services = Service::all();

        return view('pages.invoices.create', compact('invoices', 'newInvoiceNo', 'patients', 'services'));
    }

    public function store(Request $request)
    {
        // $data = $request->all();
        // if ($request->hasFile('photo')) {
        //     $data['photo'] = $request->file('photo')->store('uploads', 'public');
        // }
        // Invoice::create($data);
        // return redirect()->route('invoices.index')->with('success', 'Successfully created!');
    }

    public function show(Invoice $invoice)
    {
        $pId = $invoice->patient_id;
        $patient = Patient::find($pId);
        return view('pages.invoices.view', compact('patient', 'invoice'));
    }

    public function edit(Invoice $invoice)
    {
        $patients = \App\Models\Patient::all();

        return view('pages.invoices.edit', [
            'mode' => 'edit',
            'invoice' => $invoice,
            'patients' => $patients,

        ]);
    }

    public function update(Request $request, Invoice $invoice)
    {
        $data = $request->all();
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('uploads', 'public');
        }
        $invoice->update($data);
        return redirect()->route('invoices.index')->with('success', 'Successfully updated!');
    }

    public function destroy(Invoice $invoice)
    {
        $invoice->delete();
        return redirect()->route('invoices.index')->with('success', 'Successfully deleted!');
    }
}