@csrf
@if ($mode === 'edit')
    @method('PUT')
@endif

<div class="mb-2">
    <label>Bed Number</label>
    <input type="text" name="bed_number" value="{{ old('bed_number', $bed->bed_number ?? '') }}" class="form-control">
</div>
<div class="mb-2">
    <label>Ward</label>
    <select name="ward_id" class="form-select">
        <option value="">--- Select Ward ---</option>
        @foreach ($wards as $option)
            <option value="{{ $option->id }}" {{ old('ward_id', $bed->ward_id ?? '') == $option->id ? 'selected' : '' }}>
                {{ $option->name ?? $option->id }}
            </option>
        @endforeach
    </select>
</div>
<div class="mb-2">
    @php
$selectedBedType = old('bed_type', $bed->bed_type ?? '');
$selectedStatus = old('status', $bed->status ?? '');
    @endphp
    <label>Bed Type</label>
    <select name="bed_type" class="form-select">
        <option value="General" {{ $selectedBedType == "General" ? 'selected' : '' }}>General</option>
        <option value="Semi-Cabin" {{ $selectedBedType == "Semi-Cabin" ? 'selected' : '' }}>Semi-Cabin</option>
        <option value="Cabin" {{ $selectedBedType == "Cabin" ? 'selected' : '' }}>Cabin</option>
        <option value="ICU" {{ $selectedBedType == "ICU" ? 'selected' : '' }}>ICU</option>
        <option value="CCU" {{ $selectedBedType == "CCU" ? 'selected' : '' }}>CCU</option>
    </select>
</div>
<div class="mb-2">
    <label>Status</label>
    <select name="status" class="form-select">
        <option value="Available" {{ $selectedStatus == "Available" ? 'selected' : '' }}>Available</option>
        <option value="Reserved" {{ $selectedStatus == "Reserved" ? 'selected' : '' }}>Reserved</option>
        <option value="Occupied" {{ $selectedStatus == "Occupied" ? 'selected' : '' }}>Occupied</option>
        <option value="Maintenance" {{ $selectedStatus == "Maintenance" ? 'selected' : '' }}>Maintenance</option>
    </select>
</div>
<button class="btn btn-info">{{ $mode === 'edit' ? 'Update' : 'Create' }}</button>