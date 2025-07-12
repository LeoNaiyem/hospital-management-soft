<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\MoneyReceipt;
use App\Models\MoneyReceiptDetail;
use Illuminate\Http\Request;

class MoneyReceiptController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mr = new MoneyReceipt();
        $mr->patient_id = $request->patient_id;
        $mr->remark = $request->remark;
        $mr->receipt_total = $request->receipt_total;
        $mr->vat = $request->vat;
        $mr->discount = $request->discount;
        $mr->save();

        $items = $request->items;
        foreach ($items as $item) {
            $details = new MoneyReceiptDetail();
            $details->money_receipt_id=$mr->id;
            $details->service_id = $item['service_id'];
            $details->price = $item['price'];
            $details->qty = $item['quantity'];
            $details->vat = $item['vat'];
            $details->discount = $item['discount'];
            $details->save();
        }
        return response()->json($mr,200);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
