@csrf
@if ($mode === 'edit')
    @method('PUT')
@endif

<div class="mb-2">
    <label>Patient</label>
    <select name="patient_id" class="form-select">
        <option value="">--- Select Patient ---</option>
        @foreach ($patients as $option)
            <option value="{{ $option->id }}" {{ old('patient_id', $moneyReceipt->patient_id ?? '') == $option->id ? 'selected' : '' }}>{{ $option->name ?? $option->id }}</option>
        @endforeach
    </select>
</div>
<div class="mb-2">
    <label>Remark</label>
    <input type="text" name="remark" value="{{ old('remark', $moneyReceipt->remark ?? '') }}" class="form-control">
</div>
<div class="mb-2">
    <label>Receipt_total</label>
    <input type="text" name="receipt_total" value="{{ old('receipt_total', $moneyReceipt->receipt_total ?? '') }}" class="form-control">
</div>
<div class="mb-2">
    <label>Discount</label>
    <input type="text" name="discount" value="{{ old('discount', $moneyReceipt->discount ?? '') }}" class="form-control">
</div>
<div class="mb-2">
    <label>Vat</label>
    <input type="text" name="vat" value="{{ old('vat', $moneyReceipt->vat ?? '') }}" class="form-control">
</div>
<button class="btn btn-info">{{ $mode === 'edit' ? 'Update' : 'Create' }}</button>