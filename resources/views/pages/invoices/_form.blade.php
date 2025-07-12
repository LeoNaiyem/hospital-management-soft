@csrf
@if ($mode === 'edit')
    @method('PUT')
@endif

<div class="mb-2">
    <label>Patient</label>
    <select name="patient_id" class="form-select">
        <option value="">--- Select Patient ---</option>
        @foreach ($patients as $option)
            <option value="{{ $option->id }}" {{ old('patient_id', $invoice->patient_id ?? '') == $option->id ? 'selected' : '' }}>{{ $option->name ?? $option->id }}</option>
        @endforeach
    </select>
</div>
<div class="mb-2">
    <label>Remark</label>
    <input type="text" name="remark" value="{{ old('remark', $invoice->remark ?? '') }}" class="form-control">
</div>
<div class="mb-2">
    <label>Invoice_total</label>
    <input type="text" name="invoice_total" value="{{ old('invoice_total', $invoice->invoice_total ?? '') }}" class="form-control">
</div>
<div class="mb-2">
    <label>Paid_total</label>
    <input type="text" name="paid_total" value="{{ old('paid_total', $invoice->paid_total ?? '') }}" class="form-control">
</div>
<div class="mb-2">
    <label>Discount</label>
    <input type="text" name="discount" value="{{ old('discount', $invoice->discount ?? '') }}" class="form-control">
</div>
<div class="mb-2">
    <label>Vat</label>
    <input type="text" name="vat" value="{{ old('vat', $invoice->vat ?? '') }}" class="form-control">
</div>
<div class="mb-2">
    <label>Payment_term</label>
    <input type="text" name="payment_term" value="{{ old('payment_term', $invoice->payment_term ?? '') }}" class="form-control">
</div>
<div class="mb-2">
    <label>Previous_due</label>
    <input type="text" name="previous_due" value="{{ old('previous_due', $invoice->previous_due ?? '') }}" class="form-control">
</div>
<button class="btn btn-info">{{ $mode === 'edit' ? 'Update' : 'Create' }}</button>