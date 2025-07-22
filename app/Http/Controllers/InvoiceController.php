<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\InvoiceDetail;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Service;

class InvoiceController extends Controller
{

    public function bill()
    {
        $patients = Patient::with('latestInvoice')->get();  // Fetch patients + their invoices
        $services = Service::select('id', 'name', 'price')->get();  // For dropdowns, etc.

        return view('pages.bills.bill', compact('patients', 'services'));
    }

    public function createBill(Request $request){
        $details=new InvoiceDetail();
        $details->invoice_id=$request->invoice_id;
        $details->service_id=$request->service_id;
        $details->unit=$request->unit;
        $details->price=$request->price;
        $details->discount=$request->discount;
        $details->vat=$request->vat;
        $details->save();

        return redirect()->back()->with('message', 'Successfully Added!');
    }

    public function index(Request $request)
    {
        $query = Invoice::with(['patient']);

        if ($request->filled('search')) {
            $query->whereHas('patient', function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->search . '%');
            });
        }

        // if($request->filled('date')){
        //     $query->where('created_at',$request->date);
        // }

        $invoices = $query->orderBy('id', 'DESC')->paginate(10)->onEachSide(1);
        $invoices->append($request->all());

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
